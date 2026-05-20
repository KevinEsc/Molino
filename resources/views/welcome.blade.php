<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Molino del Sur - Harinas Premium y Molienda Tradicional</title>
    <meta name="description" content="Molino del Sur ofrece harinas premium de trigo seleccionado con molienda tradicional en el sur de Chile. Calidad y pureza para panaderías y distribuidoras.">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cream dark:bg-forest-dark text-forest-dark dark:text-cream/90 antialiased font-sans transition-colors duration-300">

    <!-- ====================================================
         NAVBAR
         ==================================================== -->
    <nav id="main-nav" class="fixed top-0 left-0 w-full z-50 py-5 bg-transparent transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <!-- Logo -->
            <a href="#inicio" class="flex items-center gap-2 group">
                <div class="w-10 h-10 rounded-full bg-forest dark:bg-cream flex items-center justify-center shadow-md transform group-hover:scale-105 transition-all duration-300">
                    <svg class="w-6 h-6 text-cream dark:text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m12.728 12.728l.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"></path>
                    </svg>
                </div>
                <span class="font-display font-extrabold text-xl lg:text-2xl tracking-wide text-forest dark:text-cream transition-colors duration-300">
                    Molino <span class="text-wheat">del Sur</span>
                </span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#inicio" class="text-sm font-semibold hover:text-wheat dark:hover:text-wheat transition-all">Inicio</a>
                <a href="#productos" class="text-sm font-semibold hover:text-wheat dark:hover:text-wheat transition-all">Productos</a>
                <a href="#ventas" class="text-sm font-semibold hover:text-wheat dark:hover:text-wheat transition-all">Ventas & Pedidos</a>
                <a href="#historia" class="text-sm font-semibold hover:text-wheat dark:hover:text-wheat transition-all">Nuestra Historia</a>
                <a href="#contacto" class="text-sm font-semibold hover:text-wheat dark:hover:text-wheat transition-all">Contacto</a>
            </div>

            <!-- Header Actions -->
            <div class="flex items-center gap-4">
                <!-- Theme Toggle -->
                <button id="theme-toggle" class="p-2.5 rounded-full border border-forest/10 dark:border-white/10 text-forest dark:text-cream hover:bg-forest/5 dark:hover:bg-white/5 transition-all shadow-sm" aria-label="Toggle Theme">
                    <span id="theme-icon" class="text-lg">🌙</span>
                </button>

                <!-- Cotizar Button -->
                <a href="#ventas" class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 rounded-full bg-forest dark:bg-wheat hover:bg-forest-light dark:hover:bg-wheat-light text-cream font-semibold text-sm transition-all transform hover:-translate-y-0.5 shadow-md">
                    Cotizar Ahora
                </a>

                <!-- Mobile Menu Btn -->
                <button id="menu-toggle" class="md:hidden p-2 text-forest dark:text-cream" aria-label="Menu Toggle">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu list -->
        <div id="mobile-menu" class="hidden md:hidden flex-col bg-cream/95 dark:bg-forest-dark/95 border-b border-forest/10 dark:border-white/10 py-4 px-6 gap-4 shadow-lg">
            <a href="#inicio" class="text-base font-bold hover:text-wheat">Inicio</a>
            <a href="#productos" class="text-base font-bold hover:text-wheat">Productos</a>
            <a href="#ventas" class="text-base font-bold hover:text-wheat">Ventas & Pedidos</a>
            <a href="#historia" class="text-base font-bold hover:text-wheat">Nuestra Historia</a>
            <a href="#contacto" class="text-base font-bold hover:text-wheat">Contacto</a>
            <a href="#ventas" class="inline-flex justify-center w-full py-3 bg-forest text-cream font-bold rounded-lg text-center mt-2 shadow">Cotizar Ahora</a>
        </div>
    </nav>


    <!-- ====================================================
         HERO SECTION
         ==================================================== -->
    <section id="inicio" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-24 pb-12 bg-cover bg-center" style="background-image: linear-gradient(rgba(13, 59, 46, 0.65), rgba(7, 34, 27, 0.85)), url('/images/hero-wheat-field.png');">
        <!-- Floating details -->
        <div class="absolute inset-0 z-0 opacity-15 dark:opacity-10 pointer-events-none">
            <div class="absolute top-1/4 left-1/10 w-96 h-96 bg-wheat rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/3 right-1/10 w-80 h-80 bg-forest rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-reveal">
            <!-- Pretitle -->
            <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-wheat/20 text-wheat font-semibold text-xs lg:text-sm uppercase tracking-wider mb-6 border border-wheat/30 animate-pulse">
                🌾 Tradición del Sur de Chile
            </span>

            <!-- Main Heading -->
            <h1 class="font-display font-black text-4xl sm:text-6xl lg:text-7xl text-cream leading-tight mb-6">
                Calidad Mágica que Llega<br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-wheat to-wheat-light">a tu Mesa</span>
            </h1>

            <!-- Subtitle -->
            <p class="max-w-2xl mx-auto text-lg sm:text-xl text-cream/80 leading-relaxed mb-10">
                Más de 40 años elaborando harinas puras a partir de trigos seleccionados del sur del país. Nutrición, consistencia y fuerza para las panaderías de nuestra patria.
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#productos" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 rounded-full bg-wheat hover:bg-wheat-light text-cream font-bold text-base transition-all transform hover:-translate-y-1 shadow-lg">
                    Ver Catálogo
                </a>
                <a href="#ventas" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 rounded-full bg-cream/15 border-2 border-cream/30 hover:bg-cream hover:text-forest text-cream font-bold text-base transition-all transform hover:-translate-y-1 backdrop-blur-sm">
                    Cotizar Pedido
                </a>
            </div>

            <!-- Highlights Row -->
            <div class="mt-20 grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-4xl mx-auto border-t border-cream/20 pt-10">
                <div class="flex flex-col items-center">
                    <span class="font-display font-bold text-3xl text-wheat">40+ Años</span>
                    <span class="text-sm text-cream/70 mt-1">Liderando la Molienda</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="font-display font-bold text-3xl text-wheat">100% Organico</span>
                    <span class="text-sm text-cream/70 mt-1">Trigo Nacional Seleccionado</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="font-display font-bold text-3xl text-wheat">Despacho</span>
                    <span class="text-sm text-cream/70 mt-1">Directo a tu Negocio</span>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================
         PRODUCT CATALOG SECTION
         ==================================================== -->
    <section id="productos" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <span class="text-wheat dark:text-wheat-light font-bold text-sm uppercase tracking-wider">Catálogo Premium</span>
            <h2 class="font-display font-bold text-3xl sm:text-5xl text-forest dark:text-cream mt-2 mb-4">Nuestras Variedades de Harina</h2>
            <div class="w-24 h-1 bg-wheat mx-auto rounded-full"></div>
            <p class="max-w-xl mx-auto text-forest/70 dark:text-cream/70 mt-4">
                Elaboradas sin aditivos químicos, optimizadas mecánicamente para dar la máxima consistencia a tus panes y reposterías.
            </p>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Product Card 1 -->
            <div class="flex flex-col bg-white dark:bg-forest/20 rounded-2xl overflow-hidden border border-forest/5 dark:border-white/5 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 scroll-reveal">
                <div class="relative overflow-hidden aspect-video bg-cream">
                    <img src="/images/saco-harina-flor.png" alt="Harina Súper Flor 25kg" class="w-full h-full object-cover object-center transform hover:scale-105 transition-all duration-500">
                    <span class="absolute top-4 right-4 bg-forest text-cream text-xs font-bold px-3 py-1 rounded-full shadow-md">Premium</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h3 class="font-display font-bold text-xl text-forest dark:text-cream mb-2">Harina Súper Flor 25kg</h3>
                    <p class="text-sm text-forest/70 dark:text-cream/70 mb-4 flex-1">
                        Nuestra harina insignia. Extra pura, de molienda fina y alto gluten. Perfecta para panes crujientes, masas de pizza, repostería fina y hojaldres.
                    </p>
                    <div class="border-t border-forest/10 dark:border-white/10 pt-4 flex items-center justify-between mt-auto">
                        <div>
                            <span class="text-xs text-forest/50 dark:text-cream/50 block">Precio Referencial</span>
                            <span class="text-lg font-extrabold text-forest dark:text-wheat-light">$16.500</span>
                        </div>
                        <button type="button" data-product-id="harina_flor" class="btn-add-product inline-flex items-center gap-1 bg-forest hover:bg-forest-light dark:bg-wheat dark:hover:bg-wheat-light text-cream text-xs font-bold px-4 py-2.5 rounded-full shadow-sm hover:shadow transition-all">
                            ➕ Añadir a Cotización
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="flex flex-col bg-white dark:bg-forest/20 rounded-2xl overflow-hidden border border-forest/5 dark:border-white/5 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 scroll-reveal delay-100">
                <div class="relative overflow-hidden aspect-video bg-cream">
                    <img src="/images/saco-harina-integral.png" alt="Harina Trigo Integral 25kg" class="w-full h-full object-cover object-center transform hover:scale-105 transition-all duration-500">
                    <span class="absolute top-4 right-4 bg-wheat text-cream text-xs font-bold px-3 py-1 rounded-full shadow-md">100% Integral</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h3 class="font-display font-bold text-xl text-forest dark:text-cream mb-2">Harina Trigo Integral 25kg</h3>
                    <p class="text-sm text-forest/70 dark:text-cream/70 mb-4 flex-1">
                        Molienda directa de grano entero. Conserva el germen y el afrecho natural. Rica en fibra, de color cálido y aroma rústico inigualable.
                    </p>
                    <div class="border-t border-forest/10 dark:border-white/10 pt-4 flex items-center justify-between mt-auto">
                        <div>
                            <span class="text-xs text-forest/50 dark:text-cream/50 block">Precio Referencial</span>
                            <span class="text-lg font-extrabold text-forest dark:text-wheat-light">$17.800</span>
                        </div>
                        <button type="button" data-product-id="harina_integral" class="btn-add-product inline-flex items-center gap-1 bg-forest hover:bg-forest-light dark:bg-wheat dark:hover:bg-wheat-light text-cream text-xs font-bold px-4 py-2.5 rounded-full shadow-sm hover:shadow transition-all">
                            ➕ Añadir a Cotización
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="flex flex-col bg-white dark:bg-forest/20 rounded-2xl overflow-hidden border border-forest/5 dark:border-white/5 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 scroll-reveal delay-200">
                <div class="relative overflow-hidden aspect-video bg-cream">
                    <img src="/images/saco-harinilla.png" alt="Harinilla Tradicional 25kg" class="w-full h-full object-cover object-center transform hover:scale-105 transition-all duration-500">
                    <span class="absolute top-4 right-4 bg-stone-500 text-cream text-xs font-bold px-3 py-1 rounded-full shadow-md">Byproduct</span>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h3 class="font-display font-bold text-xl text-forest dark:text-cream mb-2">Harinilla Tradicional 25kg</h3>
                    <p class="text-sm text-forest/70 dark:text-cream/70 mb-4 flex-1">
                        Subproducto fino resultante de la molienda del trigo seleccionado. Rico en proteínas y minerales. Muy apetecido para nutrición animal y moliendas secundarias.
                    </p>
                    <div class="border-t border-forest/10 dark:border-white/10 pt-4 flex items-center justify-between mt-auto">
                        <div>
                            <span class="text-xs text-forest/50 dark:text-cream/50 block">Precio Referencial</span>
                            <span class="text-lg font-extrabold text-forest dark:text-wheat-light">$12.500</span>
                        </div>
                        <button type="button" data-product-id="harinilla" class="btn-add-product inline-flex items-center gap-1 bg-forest hover:bg-forest-light dark:bg-wheat dark:hover:bg-wheat-light text-cream text-xs font-bold px-4 py-2.5 rounded-full shadow-sm hover:shadow transition-all">
                            ➕ Añadir a Cotización
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================
         SALES & COTIZADOR SECTION (THE INTERFAS CLARA PARA VENTAS)
         ==================================================== -->
    <section id="ventas" class="py-24 bg-forest/5 dark:bg-forest-dark/40 border-y border-forest/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-reveal">
                <span class="text-wheat dark:text-wheat-light font-bold text-sm uppercase tracking-wider">Interfaz de Ventas Interactiva</span>
                <h2 class="font-display font-bold text-3xl sm:text-5xl text-forest dark:text-cream mt-2 mb-4">Calculadora de Ventas y Pedido WhatsApp</h2>
                <div class="w-24 h-1 bg-wheat mx-auto rounded-full"></div>
                <p class="max-w-xl mx-auto text-forest/70 dark:text-cream/70 mt-4 text-sm sm:text-base">
                    Agrega los sacos que necesites de nuestro catálogo. El sistema calculará automáticamente el peso total, subtotales y aplicará un **5% de descuento directo** si llevas 10 sacos o más.
                </p>
            </div>

            <!-- Calculator Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- Left panel: Instruction & dynamic items list -->
                <div class="lg:col-span-7 bg-white dark:bg-forest/15 rounded-2xl p-6 sm:p-8 border border-forest/5 dark:border-white/5 shadow-md scroll-reveal">
                    <h3 class="font-display font-bold text-xl text-forest dark:text-cream border-b border-forest/10 dark:border-white/10 pb-4 mb-4 flex items-center justify-between">
                        <span>📋 Tu Detalle de Cotización</span>
                        <span class="text-xs font-normal text-wheat bg-wheat/10 px-3 py-1 rounded-full border border-wheat/20">Descuento aplicado en >10 sacos</span>
                    </h3>

                    <!-- Cart Empty State -->
                    <div id="cart-empty" class="py-12 text-center">
                        <div class="w-16 h-16 rounded-full bg-forest/5 dark:bg-white/5 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-forest/40 dark:text-cream/40" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-forest dark:text-cream mb-1">El cotizador está vacío</h4>
                        <p class="text-sm text-forest/60 dark:text-cream/60 max-w-xs mx-auto mb-6">Añade productos desde el catálogo superior haciendo clic en "Añadir a Cotización".</p>
                        <a href="#productos" class="inline-flex justify-center px-6 py-2.5 bg-forest hover:bg-forest-light text-cream font-bold text-xs rounded-full shadow transition-all">Ver Catálogo</a>
                    </div>

                    <!-- Cart items wrapper -->
                    <div id="cart-items" class="divide-y divide-forest/5 dark:divide-white/5">
                        <!-- Loaded dynamically via JavaScript -->
                    </div>
                </div>

                <!-- Right panel: Totals Summary -->
                <div class="lg:col-span-5 bg-white dark:bg-forest/15 rounded-2xl p-6 sm:p-8 border border-forest/5 dark:border-white/5 shadow-md scroll-reveal delay-100">
                    <h3 class="font-display font-bold text-xl text-forest dark:text-cream border-b border-forest/10 dark:border-white/10 pb-4 mb-6">
                        💰 Resumen del Pedido
                    </h3>

                    <!-- Summary calculation rows -->
                    <div id="cart-summary" class="space-y-4" style="display: none;">
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-forest/70 dark:text-cream/70">Subtotal de Sacos:</span>
                            <span id="cart-subtotal" class="font-bold text-forest dark:text-cream">$0</span>
                        </div>
                        <div class="flex justify-between items-center text-sm text-amber-600 dark:text-wheat-light">
                            <span>Descuento por Volumen:</span>
                            <span id="cart-discount" class="font-bold">$0</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-forest/70 dark:text-cream/70">Peso Total Acumulado:</span>
                            <span id="cart-weight" class="font-bold text-forest dark:text-cream">0 kg (0 sacos)</span>
                        </div>
                        
                        <div class="border-t border-forest/10 dark:border-white/10 pt-4 flex justify-between items-end">
                            <div>
                                <span class="text-xs text-forest/50 dark:text-cream/50 block font-semibold uppercase">Total Estimado</span>
                                <span id="cart-total" class="font-display font-black text-2xl sm:text-3xl text-forest dark:text-wheat-light">$0</span>
                            </div>
                            <span class="text-[10px] text-right text-forest/40 dark:text-cream/40 max-w-[150px] leading-tight">Precios sujetos a cotización final de flete de despacho.</span>
                        </div>

                        <!-- WhatsApp Action CTA Button -->
                        <div class="pt-6">
                            <a id="btn-whatsapp" href="#" target="_blank" class="w-full inline-flex items-center justify-center gap-2.5 px-6 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-cream font-extrabold text-base transition-all transform hover:-translate-y-0.5 shadow-lg">
                                <svg class="w-6 h-6 text-cream" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.73-1.464L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.86-4.37 9.864-9.799.002-2.63-1.023-5.101-2.885-6.965C16.59 2.016 14.12 1.01 11.5 1.011c-5.442 0-9.867 4.371-9.871 9.8-.001 1.738.461 3.428 1.34 4.92l-.993 3.629 3.738-.97c1.472.8 3.01 1.218 4.673 1.22zm11.366-7.854c-.3-.15-1.772-.875-2.046-.975-.276-.1-.476-.15-.676.15-.2.3-.776.975-.95 1.175-.175.2-.35.225-.65.075-.3-.15-1.265-.467-2.41-1.485-.89-.794-1.49-1.775-1.665-2.075-.175-.3-.019-.463.13-.612.135-.133.3-.35.45-.525.15-.175.2-.3.3-.5.1-.2.05-.375-.025-.525-.075-.15-.676-1.625-.925-2.225-.244-.589-.491-.51-.676-.51-.175-.01-.375-.01-.575-.01-.2 0-.525.075-.8 1.05-.275.975-1.05 3.1-1.15 3.3-.1.2-.2.425-.025.6.175.175.7 2.425 2.1 3.525.925.725 1.7 1.075 2.375 1.275.675.2 1.275.175 1.75.1.525-.075 1.772-.725 2.022-1.425.25-.7.25-1.3 1.75-1.425-.025-.125-.175-.25-.475-.4z"></path>
                                </svg>
                                Enviar Pedido a WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================
         HISTORY & PROCESS SECTION
         ==================================================== -->
    <section id="historia" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text content left -->
            <div class="scroll-reveal">
                <span class="text-wheat dark:text-wheat-light font-bold text-sm uppercase tracking-wider">Tradición y Progreso</span>
                <h2 class="font-display font-bold text-3xl sm:text-5xl text-forest dark:text-cream mt-2 mb-6">El Secreto de la Harina Sureña</h2>
                <div class="w-16 h-1 bg-wheat mb-6 rounded-full"></div>
                <p class="text-base text-forest/75 dark:text-cream/80 leading-relaxed mb-6">
                    Fundado en las lluviosas tierras de La Unión, **Molino del Sur** nació con un compromiso inquebrantable: honrar el esfuerzo de los agricultores locales y entregar una harina de pureza excepcional.
                </p>
                <p class="text-base text-forest/75 dark:text-cream/80 leading-relaxed mb-8">
                    Combinamos piedras de molienda tradicionales con sistemas modernos de cernido neumático, logrando conservar las propiedades nutritivas del trigo intactas, con una fuerza y elasticidad de gluten inigualables.
                </p>

                <!-- Process timeline grid -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <div class="flex gap-4 items-start bg-white dark:bg-forest/10 p-4 rounded-xl border border-forest/5 dark:border-white/5">
                        <span class="text-2xl">🌱</span>
                        <div>
                            <h4 class="font-bold text-forest dark:text-cream text-sm">Siembra</h4>
                            <p class="text-xs text-forest/60 dark:text-cream/60 mt-1">Trigos chilenos de secano.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start bg-white dark:bg-forest/10 p-4 rounded-xl border border-forest/5 dark:border-white/5">
                        <span class="text-2xl">⚙️</span>
                        <div>
                            <h4 class="font-bold text-forest dark:text-cream text-sm">Molienda</h4>
                            <p class="text-xs text-forest/60 dark:text-cream/60 mt-1">Fina y controlada por IA.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start bg-white dark:bg-forest/10 p-4 rounded-xl border border-forest/5 dark:border-white/5">
                        <span class="text-2xl">🚚</span>
                        <div>
                            <h4 class="font-bold text-forest dark:text-cream text-sm">Entrega</h4>
                            <p class="text-xs text-forest/60 dark:text-cream/60 mt-1">Directo en saco ventilado.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visual elements right (floating bags illustration) -->
            <div class="relative flex items-center justify-center lg:justify-end scroll-reveal delay-200">
                <!-- Decorative Circle -->
                <div class="absolute w-72 sm:w-96 h-72 sm:h-96 rounded-full bg-forest/5 dark:bg-white/5 -z-10 animate-pulse"></div>
                <!-- Main Bag standing out -->
                <div class="w-64 sm:w-80 shadow-2xl rounded-2xl overflow-hidden border-4 border-white dark:border-forest transform rotate-3 hover:rotate-0 hover:scale-105 transition-all duration-500 animate-float">
                    <img src="/images/saco-harina-flor.png" alt="Saco de Harina Molino del Sur" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================
         TESTIMONIALS SECTION
         ==================================================== -->
    <section class="py-24 bg-forest dark:bg-forest-dark/70 text-cream overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-reveal">
                <span class="text-wheat font-bold text-sm uppercase tracking-wider">Clientes Satisfechos</span>
                <h2 class="font-display font-bold text-3xl sm:text-5xl mt-2 mb-4">Lo que Dicen de Nosotros</h2>
                <div class="w-24 h-1 bg-wheat mx-auto rounded-full"></div>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-forest-light dark:bg-forest/20 p-8 rounded-2xl border border-white/10 shadow-md relative scroll-reveal">
                    <span class="absolute top-6 right-8 text-6xl text-wheat/20 font-serif">“</span>
                    <p class="text-sm sm:text-base leading-relaxed text-cream/90 mb-6 italic relative z-10">
                        "La consistencia de la Harina Súper Flor es fantástica. El volumen de nuestra marraqueta subió casi un 15% y la elasticidad facilita mucho el estirado diario. No la cambiamos por nada."
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-wheat flex items-center justify-center text-forest font-bold shadow-md">
                            PT
                        </div>
                        <div>
                            <h4 class="font-bold text-sm">Panadería "El Trigal"</h4>
                            <span class="text-xs text-cream/60">Valdivia, Chile</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-forest-light dark:bg-forest/20 p-8 rounded-2xl border border-white/10 shadow-md relative scroll-reveal delay-100">
                    <span class="absolute top-6 right-8 text-6xl text-wheat/20 font-serif">“</span>
                    <p class="text-sm sm:text-base leading-relaxed text-cream/90 mb-6 italic relative z-10">
                        "Preparamos repostería alemana e integral en Osorno. La Harina Trigo Integral de Molino del Sur le aporta un sabor tostado increíble y una miga aireada que fascina a nuestros clientes."
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-wheat flex items-center justify-center text-forest font-bold shadow-md">
                            AS
                        </div>
                        <div>
                            <h4 class="font-bold text-sm">Pastelería "Aromas del Sur"</h4>
                            <span class="text-xs text-cream/60">Osorno, Chile</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-forest-light dark:bg-forest/20 p-8 rounded-2xl border border-white/10 shadow-md relative scroll-reveal delay-200">
                    <span class="absolute top-6 right-8 text-6xl text-wheat/20 font-serif">“</span>
                    <p class="text-sm sm:text-base leading-relaxed text-cream/90 mb-6 italic relative z-10">
                        "Llevamos 5 años comprando directo por saco para nuestra fábrica de empanadas. La atención por WhatsApp es súper rápida y el cotizador de la web nos facilita programar el flete semanal."
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-wheat flex items-center justify-center text-forest font-bold shadow-md">
                            RE
                        </div>
                        <div>
                            <h4 class="font-bold text-sm">Fábrica "Rincón Exquisito"</h4>
                            <span class="text-xs text-cream/60">La Unión, Chile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================================
         CONTACT & MAP SECTION
         ==================================================== -->
    <section id="contacto" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <span class="text-wheat dark:text-wheat-light font-bold text-sm uppercase tracking-wider">Hablemos Hoy</span>
            <h2 class="font-display font-bold text-3xl sm:text-5xl text-forest dark:text-cream mt-2 mb-4">Ponte en Contacto</h2>
            <div class="w-24 h-1 bg-wheat mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
            <!-- Info & map details left -->
            <div class="lg:col-span-5 bg-white dark:bg-forest/15 p-6 sm:p-8 rounded-2xl border border-forest/5 dark:border-white/5 shadow-md flex flex-col justify-between scroll-reveal">
                <div>
                    <h3 class="font-display font-bold text-xl text-forest dark:text-cream mb-6">Información Comercial</h3>
                    
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <span class="text-xl">📍</span>
                            <div>
                                <h4 class="font-bold text-forest dark:text-cream text-sm">Dirección de Planta:</h4>
                                <p class="text-xs text-forest/70 dark:text-cream/70 mt-1">Ruta U-72, KM 12, Los Álamos, Región de Los Ríos, Chile</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <span class="text-xl">📞</span>
                            <div>
                                <h4 class="font-bold text-forest dark:text-cream text-sm">Teléfono Ventas:</h4>
                                <p class="text-xs text-forest/70 dark:text-cream/70 mt-1">+56 63 2467310</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <span class="text-xl">✉️</span>
                            <div>
                                <h4 class="font-bold text-forest dark:text-cream text-sm">Email Corporativo:</h4>
                                <p class="text-xs text-forest/70 dark:text-cream/70 mt-1">ventas@molinodelsur.cl</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stylized Mock Map showing Chilean South -->
                <div class="mt-8 border border-forest/10 dark:border-white/10 rounded-xl overflow-hidden shadow-inner relative bg-forest/5 dark:bg-white/5 aspect-video flex items-center justify-center text-center p-4">
                    <div class="absolute inset-0 opacity-20 pointer-events-none bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1524661135-423995f22d0b?auto=format&fit=crop&w=600&q=80')"></div>
                    <div class="relative z-10">
                        <span class="text-3xl block mb-2">📍</span>
                        <h4 class="font-bold text-sm text-forest dark:text-cream">Planta de Producción La Unión</h4>
                        <p class="text-[10px] text-forest/60 dark:text-cream/60 mt-1">Ruta U-72, Región de Los Ríos</p>
                        <a href="https://maps.google.com" target="_blank" class="inline-block mt-3 px-4 py-1.5 bg-forest hover:bg-forest-light text-cream font-bold text-[10px] rounded-full transition-all">Ver en Google Maps</a>
                    </div>
                </div>
            </div>

            <!-- Interactive Form right -->
            <div class="lg:col-span-7 bg-white dark:bg-forest/15 p-6 sm:p-8 rounded-2xl border border-forest/5 dark:border-white/5 shadow-md flex flex-col scroll-reveal delay-100">
                <h3 class="font-display font-bold text-xl text-forest dark:text-cream border-b border-forest/10 dark:border-white/10 pb-4 mb-6">
                    📬 Formulario de Contacto
                </h3>

                <!-- Success notification block -->
                <div id="contact-success" class="hidden items-center gap-3 bg-emerald-600/10 border border-emerald-600/20 text-emerald-600 p-4 rounded-xl mb-6 animate-fade-in">
                    <span class="text-2xl">✓</span>
                    <div>
                        <h5 class="font-bold text-sm">Mensaje Enviado con Éxito</h5>
                        <p class="text-xs opacity-90 mt-0.5">Un ejecutivo comercial se pondrá en contacto contigo a la brevedad.</p>
                    </div>
                </div>

                <form id="contact-form" class="space-y-4 flex-1 flex flex-col justify-between">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-xs font-semibold uppercase text-forest/70 dark:text-cream/70 mb-1.5">Nombre Completo</label>
                            <input type="text" id="name" required class="w-full px-4 py-3 rounded-lg border border-forest/10 dark:border-white/10 bg-cream/35 dark:bg-forest-dark/20 text-forest dark:text-cream focus:border-wheat dark:focus:border-wheat focus:outline-none transition-all text-sm">
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-semibold uppercase text-forest/70 dark:text-cream/70 mb-1.5">Correo Electrónico</label>
                            <input type="email" id="email" required class="w-full px-4 py-3 rounded-lg border border-forest/10 dark:border-white/10 bg-cream/35 dark:bg-forest-dark/20 text-forest dark:text-cream focus:border-wheat dark:focus:border-wheat focus:outline-none transition-all text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="phone" class="block text-xs font-semibold uppercase text-forest/70 dark:text-cream/70 mb-1.5">Teléfono de Contacto</label>
                        <input type="tel" id="phone" placeholder="+56" class="w-full px-4 py-3 rounded-lg border border-forest/10 dark:border-white/10 bg-cream/35 dark:bg-forest-dark/20 text-forest dark:text-cream focus:border-wheat dark:focus:border-wheat focus:outline-none transition-all text-sm">
                    </div>

                    <div class="flex-1 min-h-[120px] flex flex-col">
                        <label for="message" class="block text-xs font-semibold uppercase text-forest/70 dark:text-cream/70 mb-1.5">Mensaje o Detalle</label>
                        <textarea id="message" required rows="4" placeholder="Escribe aquí tu consulta comercial, requerimientos o comunas de despacho..." class="w-full flex-1 px-4 py-3 rounded-lg border border-forest/10 dark:border-white/10 bg-cream/35 dark:bg-forest-dark/20 text-forest dark:text-cream focus:border-wheat dark:focus:border-wheat focus:outline-none transition-all text-sm resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 bg-forest hover:bg-forest-light dark:bg-wheat dark:hover:bg-wheat-light text-cream font-bold text-sm rounded-xl transition-all shadow-md mt-4">
                        Enviar Mensaje Corporativo
                    </button>
                </form>
            </div>
        </div>
    </section>


    <!-- ====================================================
         FOOTER
         ==================================================== -->
    <footer class="bg-forest dark:bg-forest-dark text-cream/70 border-t border-white/10 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-3 gap-8">
            <!-- Column 1: Brand -->
            <div>
                <span class="font-display font-extrabold text-xl tracking-wide text-cream">
                    Molino <span class="text-wheat">del Sur</span>
                </span>
                <p class="text-xs text-cream/60 mt-3 max-w-xs leading-relaxed">
                    Moliendo calidad, tradición y nutrición desde el corazón del sur de Chile. El aliado de tu panadería.
                </p>
            </div>
            
            <!-- Column 2: Quick links -->
            <div>
                <h4 class="font-bold text-sm text-cream mb-4">Enlaces Rápidos</h4>
                <div class="flex flex-col gap-2.5 text-xs">
                    <a href="#inicio" class="hover:text-wheat transition-all">Inicio</a>
                    <a href="#productos" class="hover:text-wheat transition-all">Catálogo de Productos</a>
                    <a href="#ventas" class="hover:text-wheat transition-all">Calculadora de Ventas</a>
                    <a href="#historia" class="hover:text-wheat transition-all">Nuestra Historia</a>
                    <a href="#contacto" class="hover:text-wheat transition-all">Contacto</a>
                </div>
            </div>

            <!-- Column 3: Hours & Socials -->
            <div>
                <h4 class="font-bold text-sm text-cream mb-4">Horarios de Atención</h4>
                <p class="text-xs text-cream/60 leading-relaxed">
                    Lunes a Jueves: 8:00 a 13:00 y 14:00 a 18:00<br>
                    Viernes: 8:00 a 13:00 y 14:00 a 17:00<br>
                    Sábados y Domingos: Cerrado
                </p>
                <div class="mt-4 flex gap-4 text-sm text-cream/60">
                    <span class="hover:text-wheat cursor-pointer">Facebook</span>
                    <span class="hover:text-wheat cursor-pointer">Instagram</span>
                    <span class="hover:text-wheat cursor-pointer">LinkedIn</span>
                </div>
            </div>
        </div>
        
        <!-- Bottom copyright -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-t border-white/5 mt-10 pt-6 text-center text-[10px] text-cream/40">
            &copy; 2026 Molino del Sur S.A. Todos los derechos reservados. Molienda tradicional premium.
        </div>
    </footer>

</body>
</html>
