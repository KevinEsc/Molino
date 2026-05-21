# ==========================================
# ETAPA 1: Compilación de Assets con Node.js
# ==========================================
FROM node:20-alpine AS assets-builder
WORKDIR /app

# Copiar archivos de dependencias y configuración de Vite
COPY package*.json ./
RUN npm ci || npm install

# Copiar recursos necesarios para la compilación
COPY vite.config.js ./
COPY resources/ ./resources/
COPY public/ ./public/

# Ejecutar el empaquetado de producción
RUN npm run build

# ==========================================
# ETAPA 2: Entorno de Producción PHP + Apache
# ==========================================
FROM php:8.4-apache-bookworm

# Puerto de escucha para Render (inyectado dinámicamente)
ENV PORT=10000
EXPOSE ${PORT}

# Instalar dependencias del sistema y extensiones de PHP requeridas para Laravel
RUN apt-get update && apt-get install -y --no-install-recommends \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libwebp-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install pdo_mysql zip bcmath gd opcache \
    && rm -rf /var/lib/apt/lists/*

# Instalar Composer v2 de forma segura desde su imagen oficial
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Habilitar el módulo de reescritura de Apache (mod_rewrite) para Laravel
RUN a2enmod rewrite

# Sobrescribir la configuración predeterminada del VirtualHost de Apache para Laravel
RUN echo '<VirtualHost *:${PORT}>\n\
    ServerAdmin webmaster@localhost\n\
    DocumentRoot /var/www/html/public\n\
\n\
    <Directory /var/www/html/public>\n\
        Options Indexes FollowSymLinks MultiViews\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
\n\
    ErrorLog ${APACHE_LOG_DIR}/error.log\n\
    CustomLog ${APACHE_LOG_DIR}/access.log combined\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Reconfigurar puertos globales de Apache
RUN echo "Listen \${PORT}" > /etc/apache2/ports.conf

# Establecer directorio de trabajo del servidor web
WORKDIR /var/www/html

# Copiar el código fuente del proyecto
COPY . .

# Copiar los assets finales compilados desde la etapa de Node.js
COPY --from=assets-builder /app/public/build ./public/build

# Instalar dependencias de producción de Composer, optimizando la carga automática de clases
RUN composer install --no-dev --optimize-autoloader

# Configurar permisos correctos de lectura y escritura para el servidor web de Apache (www-data)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Utilizar configuraciones de php.ini optimizadas para producción
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && sed -i 's/expose_php = On/expose_php = Off/g' "$PHP_INI_DIR/php.ini" \
    && sed -i 's/memory_limit = 128M/memory_limit = 512M/g' "$PHP_INI_DIR/php.ini"

# Copiar y preparar el script de punto de entrada (entrypoint)
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
