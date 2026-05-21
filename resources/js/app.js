// Molino Bio Bio - Dynamic JavaScript
document.addEventListener('DOMContentLoaded', () => {
    // ----------------------------------------------------
    // 1. PRODUCT CATALOG DATA
    // ----------------------------------------------------
    const PRODUCTS = {
        'harina_flor': {
            name: 'Harina Súper Flor 25kg',
            price: 16500,
            weight: 25
        },
        'harina_integral': {
            name: 'Harina Trigo Integral 25kg',
            price: 17800,
            weight: 25
        },
        'harinilla': {
            name: 'Harinilla Tradicional 25kg',
            price: 12500,
            weight: 25
        }
    };

    // ----------------------------------------------------
    // 2. STATE MANAGEMENT (CART / CALCULATOR)
    // ----------------------------------------------------
    let cart = {};

    // Load cart from session if exists (optional, let's start fresh)
    const cartItemsContainer = document.getElementById('cart-items');
    const cartEmptyState = document.getElementById('cart-empty');
    const cartSummary = document.getElementById('cart-summary');
    const subtotalEl = document.getElementById('cart-subtotal');
    const discountEl = document.getElementById('cart-discount');
    const totalEl = document.getElementById('cart-total');
    const weightEl = document.getElementById('cart-weight');
    const whatsappBtn = document.getElementById('btn-whatsapp');

    function formatCLP(val) {
        return '$' + val.toLocaleString('es-CL');
    }

    function updateCartUI() {
        if (!cartItemsContainer) return;

        const cartKeys = Object.keys(cart).filter(key => cart[key] > 0);

        if (cartKeys.length === 0) {
            cartEmptyState.style.display = 'block';
            cartSummary.style.display = 'none';
            cartItemsContainer.innerHTML = '';
            return;
        }

        cartEmptyState.style.display = 'none';
        cartSummary.style.display = 'block';

        let html = '';
        let subtotal = 0;
        let totalWeight = 0;
        let totalSacks = 0;

        cartKeys.forEach(key => {
            const product = PRODUCTS[key];
            const qty = cart[key];
            const itemSubtotal = product.price * qty;
            subtotal += itemSubtotal;
            totalWeight += product.weight * qty;
            totalSacks += qty;

            html += `
                <div class="flex items-center justify-between py-3 border-b border-forest/10 dark:border-white/10 animate-fade-in">
                    <div class="flex-1 pr-4">
                        <h4 class="font-semibold text-forest dark:text-cream text-sm">${product.name}</h4>
                        <p class="text-xs text-forest/60 dark:text-cream/60">${formatCLP(product.price)} c/u</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button type="button" data-action="minus" data-id="${key}" class="w-7 h-7 rounded-full flex items-center justify-center border border-forest/20 dark:border-white/20 text-forest dark:text-cream hover:bg-forest/5 dark:hover:bg-white/5 transition-all text-sm font-bold">-</button>
                        <span class="w-8 text-center text-sm font-semibold text-forest dark:text-cream">${qty}</span>
                        <button type="button" data-action="plus" data-id="${key}" class="w-7 h-7 rounded-full flex items-center justify-center border border-forest/20 dark:border-white/20 text-forest dark:text-cream hover:bg-forest/5 dark:hover:bg-white/5 transition-all text-sm font-bold">+</button>
                    </div>
                    <div class="w-20 text-right font-semibold text-forest dark:text-cream text-sm">
                        ${formatCLP(itemSubtotal)}
                    </div>
                </div>
            `;
        });

        cartItemsContainer.innerHTML = html;

        // Apply bulk discount: 5% off if buying 10 or more sacks total
        const discountRate = totalSacks >= 10 ? 0.05 : 0;
        const discount = subtotal * discountRate;
        const total = subtotal - discount;

        subtotalEl.innerText = formatCLP(subtotal);
        discountEl.innerText = discount > 0 ? `-${formatCLP(discount)} (5% por volumen)` : '$0';
        totalEl.innerText = formatCLP(total);
        weightEl.innerText = `${totalWeight.toLocaleString('es-CL')} kg (${totalSacks} sacos)`;

        // Set up cart action listeners (plus and minus buttons)
        cartItemsContainer.querySelectorAll('button[data-action]').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const action = btn.getAttribute('data-action');
                const id = btn.getAttribute('data-id');
                if (action === 'plus') {
                    cart[id] = (cart[id] || 0) + 1;
                } else if (action === 'minus') {
                    if (cart[id] > 0) {
                        cart[id]--;
                    }
                }
                updateCartUI();
            });
        });

        // Dynamic WhatsApp message encoding
        if (whatsappBtn) {
            let message = `*Hola Molino Bio Bio!*\nMe gustaría solicitar una cotización por los siguientes productos:\n\n`;
            cartKeys.forEach(key => {
                const product = PRODUCTS[key];
                const qty = cart[key];
                message += `• *${product.name}*: ${qty} saco(s) - (${formatCLP(product.price * qty)})\n`;
            });
            message += `\n📦 *Peso Total:* ${totalWeight} kg (${totalSacks} sacos)\n`;
            if (discount > 0) {
                message += `💰 *Subtotal:* ${formatCLP(subtotal)}\n`;
                message += `🔥 *Descuento Volumen (5%):* -${formatCLP(discount)}\n`;
            }
            message += `⭐ *Total Estimado:* ${formatCLP(total)}\n\n`;
            message += `_Cotización generada desde el sitio web de Molino Bio Bio._`;

            const encodedMessage = encodeURIComponent(message);
            // Replace with standard business phone number (fictional placeholder, e.g., 56912345678)
            whatsappBtn.setAttribute('href', `https://api.whatsapp.com/send?phone=56912345678&text=${encodedMessage}`);
        }
    }

    // Add to cart from Catalog Buttons
    document.querySelectorAll('.btn-add-product').forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.getAttribute('data-product-id');
            if (PRODUCTS[id]) {
                cart[id] = (cart[id] || 0) + 1;
                updateCartUI();
                
                // Smooth scroll to calculator so user sees the addition
                const salesSection = document.getElementById('ventas');
                if (salesSection) {
                    salesSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });
    });

    // ----------------------------------------------------
    // 3. INTERSECTION OBSERVER FOR SCROLL REVEAL
    // ----------------------------------------------------
    const revealElements = document.querySelectorAll('.scroll-reveal');
    if (revealElements.length > 0) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal-active');
                    // Stop observing once animated
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));
    }

    // ----------------------------------------------------
    // 4. NAVBAR SHRINKS AND GLASSMORPHISM ON SCROLL
    // ----------------------------------------------------
    const navbar = document.getElementById('main-nav');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 30) {
                navbar.classList.add('py-3', 'shadow-md', 'glass-panel');
                navbar.classList.remove('py-5', 'bg-transparent');
            } else {
                navbar.classList.add('py-5', 'bg-transparent');
                navbar.classList.remove('py-3', 'shadow-md', 'glass-panel');
            }
        });
    }

    // ----------------------------------------------------
    // 5. DARK/LIGHT MODE SYSTEM
    // ----------------------------------------------------
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');

    if (themeToggleBtn) {
        // Check current localstorage or system preference
        const isDarkMode = localStorage.getItem('theme') === 'dark' || 
            (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches);
        
        if (isDarkMode) {
            document.documentElement.classList.add('dark');
            if (themeIcon) themeIcon.innerHTML = '☀️'; // Sun icon for light mode transition
        } else {
            document.documentElement.classList.remove('dark');
            if (themeIcon) themeIcon.innerHTML = '🌙'; // Moon icon for dark mode transition
        }

        themeToggleBtn.addEventListener('click', () => {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
                if (themeIcon) themeIcon.innerHTML = '🌙';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
                if (themeIcon) themeIcon.innerHTML = '☀️';
            }
        });
    }

    // ----------------------------------------------------
    // 6. MOBILE NAVBAR TOGGLE
    // ----------------------------------------------------
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
        });

        // Close menu when clicking link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
            });
        });
    }

    // ----------------------------------------------------
    // 7. CONTACT FORM SIMULATION
    // ----------------------------------------------------
    const contactForm = document.getElementById('contact-form');
    const contactSuccess = document.getElementById('contact-success');

    if (contactForm && contactSuccess) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Simulating successful submit animation
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <svg class="animate-spin h-5 w-5 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg> Procesando...
            `;

            setTimeout(() => {
                contactForm.reset();
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
                
                // Show success visual feedback
                contactSuccess.classList.remove('hidden');
                contactSuccess.classList.add('flex');
                
                setTimeout(() => {
                    contactSuccess.classList.remove('flex');
                    contactSuccess.classList.add('hidden');
                }, 5000);
            }, 1500);
        });
    }
});
