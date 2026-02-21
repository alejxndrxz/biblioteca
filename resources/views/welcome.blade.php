<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteca</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Styles / Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/js/app.js'])
        
<style>
        /* Transición suave para el menú hamburguesa */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, opacity 0.2s ease;
            opacity: 0;
        }
        .mobile-menu.open {
            max-height: 300px; /* valor generoso para el contenido */
            opacity: 1;
        }
        /* Ocultar menú desktop en mobile y viceversa se maneja con Tailwind */
    </style>

    </head>
    <body class="bg-stone-50 font-sans antialiased flex flex-col min-h-screen">

    <!-- ========== HEADER ========== -->
    <header class="bg-white shadow-md sticky top-0 z-30">
        <div class="container mx-auto px-5 lg:px-8">
            <div class="flex justify-between items-center py-4">
                
                <!-- Logo y nombre de la biblioteca -->
                <div class="flex items-center space-x-2">
                    <i class="fas fa-book-open text-3xl text-amber-700"></i>
                    <span class="text-2xl font-serif font-bold text-gray-800 tracking-tight">Biblioteca<br class="hidden xs:inline"><span class="text-amber-800"> Central</span></span>
                </div>

                <!-- Menú de navegación para desktop (visible desde md) -->
                <nav class="hidden md:flex space-x-8 text-lg font-medium">
                    <a href="#" class="text-amber-900 border-b-2 border-amber-600 pb-1 hover:text-amber-700 transition">Inicio</a>
                    <a href="#" class="text-gray-700 hover:text-amber-800 transition">Catálogo</a>
                    <a href="#" class="text-gray-700 hover:text-amber-800 transition">Servicios</a>
                    <a href="#" class="text-gray-700 hover:text-amber-800 transition">Contacto</a>
                    
                    @auth
                        <span class="text-gray-700 font-medium">Hola, {{ auth()->user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-600 text-white px-5 py-2 rounded-full hover:bg-red-700 transition flex items-center space-x-1">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Salir</span>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="bg-amber-600 text-white px-5 py-2 rounded-full hover:bg-amber-700 transition flex items-center space-x-1">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Login</span>
                        </a>
                    @endauth
                </nav>

                <!-- Botón menú hamburguesa (visible solo en mobile) -->
                <button id="menuToggle" class="md:hidden text-gray-700 focus:outline-none text-3xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Menú móvil desplegable (oculto por defecto) -->
            <div id="mobileMenu" class="mobile-menu md:hidden bg-white pb-5 px-2">
                <nav class="flex flex-col space-y-4 text-base font-medium border-t pt-5">
                    <a href="#" class="text-amber-900 bg-amber-50 py-2 px-3 rounded-md flex items-center"><i class="fas fa-home mr-3"></i> Inicio</a>
                    <a href="#" class="text-gray-700 hover:bg-gray-100 py-2 px-3 rounded-md flex items-center"><i class="fas fa-book mr-3"></i> Catálogo</a>
                    <a href="#" class="text-gray-700 hover:bg-gray-100 py-2 px-3 rounded-md flex items-center"><i class="fas fa-concierge-bell mr-3"></i> Servicios</a>
                    <a href="#" class="text-gray-700 hover:bg-gray-100 py-2 px-3 rounded-md flex items-center"><i class="fas fa-envelope mr-3"></i> Contacto</a>
                    
                    @auth
                        <div class="text-gray-700 py-2 px-3 font-medium">
                            <i class="fas fa-user mr-3"></i> Hola, {{ auth()->user()->name }}
                        </div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-red-600 text-white py-3 px-3 rounded-md flex items-center justify-center space-x-2 mt-2 w-full">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Cerrar sesión</span>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="bg-amber-600 text-white py-3 px-3 rounded-md flex items-center justify-center space-x-2 mt-2">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Iniciar sesión</span>
                        </a>
                    @endauth
                </nav>
            </div>
        </div>
    </header>

    <!-- Mensajes de éxito/error -->
    @if(session('success'))
        <div class="max-w-7xl mx-auto px-4 mt-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    @if($errors->any())
        <div class="max-w-7xl mx-auto px-4 mt-4">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                @foreach($errors->all() as $error)
                    <span class="block sm:inline">{{ $error }}</span>
                @endforeach
            </div>
        </div>
    @endif

    <!-- ========== HERO ========== -->
    <section class="relative bg-gradient-to-br from-amber-50 to-yellow-100 overflow-hidden">
        <!-- Imagen de fondo con superposición (imagen libre de copyright - pexels, pixabay style) -->
        <div class="absolute inset-0 opacity-20">
            <img src="https://images.pexels.com/photos/290595/pexels-photo-290595.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                 alt="Estantes de biblioteca" 
                 class="w-full h-full object-cover">
        </div>
        
        <div class="container mx-auto px-5 lg:px-8 py-16 md:py-24 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                
                <!-- Texto hero -->
                <div>
                    <span class="inline-block bg-amber-200 text-amber-900 text-sm font-semibold px-4 py-1 rounded-full mb-5">
                        <i class="fas fa-star mr-1"></i> Comunidad lectora
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-gray-800 leading-tight">
                        Descubre el <span class="text-amber-800">conocimiento</span> sin límites
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mt-6 max-w-lg">
                        Más de 50,000 títulos físicos y digitales. Espacios de estudio, eventos culturales y préstamo gratuito.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#" class="bg-amber-700 hover:bg-amber-800 text-white px-7 py-3 rounded-full text-lg font-medium shadow-md flex items-center gap-2 transition">
                            <i class="fas fa-search"></i> Explorar colección
                        </a>
                        <a href="#" class="bg-white text-amber-800 border-2 border-amber-700 px-7 py-3 rounded-full text-lg font-medium hover:bg-amber-50 flex items-center gap-2 transition">
                            <i class="fas fa-id-card"></i> Solicitar carnet
                        </a>
                    </div>
                    <!-- mini stats -->
                    <div class="flex items-center space-x-6 mt-10 text-gray-600">
                        <div><span class="font-bold text-2xl text-amber-800">+15k</span> <span class="text-sm">socios</span></div>
                        <div class="w-px h-8 bg-gray-300"></div>
                        <div><span class="font-bold text-2xl text-amber-800">200+</span> <span class="text-sm">eventos/año</span></div>
                        <div class="w-px h-8 bg-gray-300"></div>
                        <div><span class="font-bold text-2xl text-amber-800">24/7</span> <span class="text-sm">online</span></div>
                    </div>
                </div>
                
                <!-- Imagen hero ilustrativa (libre de derechos) -->
                <div class="hidden md:block">
                    <img src="https://images.pexels.com/photos/1370295/pexels-photo-1370295.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                         alt="Persona leyendo en biblioteca" 
                         class="rounded-2xl shadow-2xl object-cover h-[450px] w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de destacados / Novedades (para dar cuerpo y más imágenes libres) -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-5 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-800 mb-4 text-center">Colecciones destacadas</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Libros, revistas y recursos digitales seleccionados por nuestro equipo</p>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- tarjeta 1 -->
                <div class="bg-stone-50 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.pexels.com/photos/256450/pexels-photo-256450.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Libros antiguos" class="h-56 w-full object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-amber-700 mb-2">
                            <i class="fas fa-leaf"></i>
                            <span class="text-sm font-semibold">Fondo antiguo</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Joyas bibliográficas</h3>
                        <p class="text-gray-600">Ediciones facsimilares y primeras ediciones de los siglos XVIII y XIX.</p>
                        <a href="#" class="mt-4 inline-flex items-center text-amber-700 hover:text-amber-900 font-medium">
                            Ver colección <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <!-- tarjeta 2 -->
                <div class="bg-stone-50 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.pexels.com/photos/159751/book-cover-book-binding-bibliophile-literature-159751.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Pilas de libros" class="h-56 w-full object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-amber-700 mb-2">
                            <i class="fas fa-robot"></i>
                            <span class="text-sm font-semibold">Innovación</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ciencia y tecnología</h3>
                        <p class="text-gray-600">Lo último en inteligencia artificial, programación y divulgación científica.</p>
                        <a href="#" class="mt-4 inline-flex items-center text-amber-700 hover:text-amber-900 font-medium">
                            Explorar <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <!-- tarjeta 3 -->
                <div class="bg-stone-50 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.pexels.com/photos/694740/pexels-photo-694740.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Niños leyendo" class="h-56 w-full object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-amber-700 mb-2">
                            <i class="fas fa-child"></i>
                            <span class="text-sm font-semibold">Infantil</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Lecturas para jóvenes</h3>
                        <p class="text-gray-600">Cuentos, novelas gráficas y actividades para fomentar la lectura.</p>
                        <a href="#" class="mt-4 inline-flex items-center text-amber-700 hover:text-amber-900 font-medium">
                            Descubrir <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="bg-gray-900 text-gray-300 mt-auto">
        <div class="container mx-auto px-5 lg:px-8 py-12">
            <div class="grid md:grid-cols-4 gap-8">
                
                <!-- Columna 1: info biblioteca -->
                <div>
                    <div class="flex items-center space-x-2 text-white mb-4">
                        <i class="fas fa-book-open text-2xl text-amber-400"></i>
                        <span class="text-xl font-serif font-bold">Biblioteca Central</span>
                    </div>
                    <p class="text-sm leading-relaxed">
                        Plaza del Saber 123, Centro Histórico. <br>
                        contacto@bibliocentral.org <br>
                        +34 912 345 678
                    </p>
                    <div class="flex space-x-4 mt-5">
                        <a href="#" class="text-gray-400 hover:text-amber-400 text-2xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-amber-400 text-2xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-amber-400 text-2xl"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                
                <!-- Columna 2: explorar -->
                <div>
                    <h5 class="text-white text-lg font-semibold mb-4 border-b border-gray-700 pb-2">Explorar</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-amber-400 transition flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i>Inicio</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i>Novedades</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i>Autores</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i>Bibliotecas digitales</a></li>
                    </ul>
                </div>
                
                <!-- Columna 3: ayuda -->
                <div>
                    <h5 class="text-white text-lg font-semibold mb-4 border-b border-gray-700 pb-2">Ayuda</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-amber-400 transition flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i>Preguntas frecuentes</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i>Política de préstamo</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i>Tarifas</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i>Contacto</a></li>
                    </ul>
                </div>
                
                <!-- Columna 4: acceso/login rápido -->
                <div>
                    <h5 class="text-white text-lg font-semibold mb-4 border-b border-gray-700 pb-2">Acceso socios</h5>
                    <p class="text-sm mb-3">Inicia sesión para gestionar préstamos y reservas.</p>
                    <a href="#" class="bg-amber-600 hover:bg-amber-500 text-white px-5 py-2 rounded-full inline-flex items-center gap-2 transition">
                        <i class="fas fa-sign-in-alt"></i> Login / Registro
                    </a>
                    <div class="mt-6 text-xs text-gray-500">
                        <i class="fas fa-copyright mr-1"></i> 2025 Biblioteca Central. Imágenes: Pexels (licencia gratuita).
                    </div>
                </div>
            </div>
            
            <!-- Línea inferior copyright -->
            <div class="border-t border-gray-800 mt-10 pt-6 text-sm text-gray-500 flex flex-col md:flex-row justify-between">
                <span>&copy; 2025 Biblioteca Central. Todos los derechos reservados.</span>
                <span class="flex space-x-4 mt-2 md:mt-0">
                    <a href="#" class="hover:text-amber-400">Aviso legal</a>
                    <a href="#" class="hover:text-amber-400">Privacidad</a>
                    <a href="#" class="hover:text-amber-400">Cookies</a>
                </span>
            </div>
        </div>
    </footer>

    <!-- JavaScript Vanilla: menú hamburguesa -->
    <script>
        (function() {
            "use strict";

            const toggleButton = document.getElementById('menuToggle');
            const mobileMenu = document.getElementById('mobileMenu');

            if (toggleButton && mobileMenu) {
                toggleButton.addEventListener('click', function() {
                    // alternar clase 'open' que controla max-height y opacidad
                    mobileMenu.classList.toggle('open');
                    
                    // cambiar icono entre bars y times (opcional, mejora UX)
                    const icon = toggleButton.querySelector('i');
                    if (icon) {
                        if (mobileMenu.classList.contains('open')) {
                            icon.classList.remove('fa-bars');
                            icon.classList.add('fa-times');
                        } else {
                            icon.classList.remove('fa-times');
                            icon.classList.add('fa-bars');
                        }
                    }
                });

                // cerrar menú al hacer click en un enlace (opcional, mejora usabilidad mobile)
                const mobileLinks = mobileMenu.querySelectorAll('a');
                mobileLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        mobileMenu.classList.remove('open');
                        const icon = toggleButton.querySelector('i');
                        if (icon) {
                            icon.classList.remove('fa-times');
                            icon.classList.add('fa-bars');
                        }
                    });
                });

                // opcional: cerrar al redimensionar si se vuelve a desktop
                window.addEventListener('resize', function() {
                    if (window.innerWidth >= 768) { // md breakpoint en Tailwind (768px)
                        mobileMenu.classList.remove('open');
                        const icon = toggleButton.querySelector('i');
                        if (icon) {
                            icon.classList.remove('fa-times');
                            icon.classList.add('fa-bars');
                        }
                    }
                });
            }
        })();
    </script>

    <!-- Nota: todas las imágenes utilizadas son de Pexels (libres para uso comercial, sin atribución requerida pero atribución implícita como cortesía) -->
    <!-- Pexels Licencia: https://www.pexels.com/license/ -->
</body>
</html>
