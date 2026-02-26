@extends ('layout.auth')

@section ('content')
<main class="flex-grow min-h-screen flex items-center justify-center px-4 py-12">
  <section class="w-full max-w-6xl">

      <!-- Encabezado (opcional, estilo Biblioteca) -->
      <div class="text-center mb-8">
        <div class="inline-flex items-center gap-3">
          <div class="h-12 w-12 rounded-2xl bg-amber-700 text-white flex items-center justify-center shadow-lg">
            <!-- book icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6v15m0 0c-2.5-2-5.5-2-8-1V5c2.5-1 5.5-1 8 1m0 14c2.5-2 5.5-2 8-1V5c-2.5-1-5.5-1-8 1" />
            </svg>
          </div>
          <div class="text-left">
            <p class="text-xs font-semibold tracking-wide text-amber-800 uppercase">Biblioteca</p>
            <p class="text-xl font-serif font-bold text-gray-900 leading-tight">Central</p>
          </div>
        </div>
        <p class="mt-3 text-sm text-gray-600">Accede o crea una cuenta para comenzar.</p>
      </div>

      <!-- Contenedor 2 columnas -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- ====================== LOGIN (IZQUIERDA) ====================== -->
        <div class="relative overflow-hidden rounded-3xl bg-white/80 backdrop-blur border border-white/60 shadow-2xl">
          <!-- Glow -->
          <div class="absolute -top-24 -right-24 h-56 w-56 rounded-full bg-amber-300/40 blur-3xl"></div>
          <div class="absolute -bottom-24 -left-24 h-56 w-56 rounded-full bg-yellow-300/30 blur-3xl"></div>

          <div class="relative px-7 sm:px-9 pt-9 pb-8">
            <div class="flex items-center justify-between">
              <h2 class="text-2xl font-serif font-bold text-gray-900">Iniciar sesión</h2>
              <span class="text-xs font-semibold text-amber-800 bg-amber-100/70 px-3 py-1 rounded-full">LOGIN</span>
            </div>
            <p class="mt-2 text-sm text-gray-600">Ingresa con tu correo y contraseña.</p>

            <form id="loginForm" action="{{ route('login') }}" method="POST">
              @csrf
              <!-- Email -->
              <div class="space-y-2">
                <label for="login_email" class="block text-sm font-medium text-gray-700">Correo</label>
                <div class="relative">
                  <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                    <!-- mail icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18V8H3v8z" />
                    </svg>
                  </span>
                  <input id="login_email" name="email" type="email" required autocomplete="email"
                    placeholder="tu@correo.com"
                    class="w-full rounded-2xl border border-stone-200 bg-white px-11 py-3.5 text-gray-900 shadow-sm
                           placeholder:text-gray-400
                           focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-amber-600" />
                </div>
              </div>

              <!-- Password -->
              <div class="space-y-2">
                <label for="login_password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <div class="relative">
                  <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                    <!-- lock icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 11c1.657 0 3 1.343 3 3v3H9v-3c0-1.657 1.343-3 3-3z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 11V8a5 5 0 0110 0v3" />
                    </svg>
                  </span>
                  <input id="login_password" name="password" type="password" required autocomplete="current-password"
                    placeholder="••••••••"
                    class="w-full rounded-2xl border border-stone-200 bg-white px-11 py-3.5 text-gray-900 shadow-sm
                           placeholder:text-gray-400
                           focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-amber-600" />
                </div>
              </div>

              <!-- Row -->
              <div class="flex items-center justify-between text-sm">
                <label class="inline-flex items-center gap-2 text-gray-600">
                  <input type="checkbox" class="h-4 w-4 rounded border-stone-300 text-amber-700 focus:ring-amber-600">
                  Recordarme
                </label>
                <a href="#" class="font-medium text-amber-800 hover:text-amber-900 underline underline-offset-4">
                  ¿Olvidaste tu contraseña?
                </a>
              </div>

              <!-- Button -->
              <button type="submit"
                class="group w-full rounded-2xl bg-amber-700 px-4 py-3.5 text-white font-semibold shadow-lg
                       hover:bg-amber-800 transition focus:outline-none focus:ring-2 focus:ring-amber-600 focus:ring-offset-2">
                Entrar <span class="inline-block translate-x-0 group-hover:translate-x-1 transition">→</span>
              </button>

              <!-- ✅ AGREGADO: texto legal sin cambiar diseño -->
              <p class="text-center text-xs text-gray-500">
                Al iniciar sesión aceptas nuestros
                <a href="#" class="text-amber-800 font-medium hover:text-amber-900 underline underline-offset-4">
                  Términos y Condiciones
                </a>.
              </p>

              <div class="pt-5 border-t border-stone-200 text-center text-xs text-gray-500">
                Consejo: usa tu correo institucional si aplica.
              </div>
            </form>
          </div>
        </div>

        <!-- ====================== REGISTER (DERECHA) ====================== -->
        <div class="relative overflow-hidden rounded-3xl bg-white/80 backdrop-blur border border-white/60 shadow-2xl">
          <!-- Glow -->
          <div class="absolute -top-24 -left-24 h-56 w-56 rounded-full bg-amber-300/35 blur-3xl"></div>
          <div class="absolute -bottom-24 -right-24 h-56 w-56 rounded-full bg-yellow-300/25 blur-3xl"></div>

          <div class="relative px-7 sm:px-9 pt-9 pb-8">
            <div class="flex items-center justify-between">
              <h2 class="text-2xl font-serif font-bold text-gray-900">Crear cuenta</h2>
              <span class="text-xs font-semibold text-amber-800 bg-amber-100/70 px-3 py-1 rounded-full">REGISTRO</span>
            </div>
            <p class="mt-2 text-sm text-gray-600">Completa tus datos para registrarte.</p>

    <form id="registerForm"  action="{{ route('register') }}" method="POST">
        @csrf
              <!-- Nombre -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-2">
                  <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                  <input
                   id="name" 
                   name="name" 
                   type="text" required autocomplete="given-name"
                    placeholder="Daniel"
                    class="w-full rounded-2xl border border-stone-200 bg-white px-4 py-3.5 text-gray-900 shadow-sm
                           placeholder:text-gray-400
                           focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-amber-600" />
                </div>

              <!-- Email -->
              <div class="space-y-2">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo</label>
                <input 
                id="email" 
            
                name="email" 
                type="email" required autocomplete="email"
                  placeholder="tu@correo.com"
                  class="w-full rounded-2xl border border-stone-200 bg-white px-4 py-3.5 text-gray-900 shadow-sm
                         placeholder:text-gray-400
                         focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-amber-600" />
              </div>

              <!-- Password -->
              <div class="space-y-2">
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input 
                id="password" 
                name="password" 
                type="password" required autocomplete="new-password"
                  placeholder="••••••••"
                  class="w-full rounded-2xl border border-stone-200 bg-white px-4 py-3.5 text-gray-900 shadow-sm
                         placeholder:text-gray-400
                         focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-amber-600" />
              </div>

              <!-- Repeat Password -->
              <div class="space-y-2">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Repetir contraseña</label>
                <input id= "password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                  placeholder="••••••••"
                  class="w-full rounded-2xl border border-stone-200 bg-white px-4 py-3.5 text-gray-900 shadow-sm
                         placeholder:text-gray-400
                         focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-amber-600" />
              </div>

              <!-- ✅ AGREGADO: aceptar términos (obligatorio) -->
              <div class="flex items-start gap-3 text-sm text-gray-600">
                <input type="checkbox" required class="mt-1 h-4 w-4 rounded border-stone-300 text-amber-700 focus:ring-amber-600">
                <p>
                  Acepto los
                  <a href="#" class="font-medium text-amber-800 hover:text-amber-900 underline underline-offset-4">Términos y Condiciones</a>
                  y la
                  <a href="#" class="font-medium text-amber-800 hover:text-amber-900 underline underline-offset-4">Política de Privacidad</a>.
                </p>
              </div>

              <!-- Button -->
              <button type="submit"
                class="group w-full rounded-2xl bg-amber-700 px-4 py-3.5 text-white font-semibold shadow-lg
                       hover:bg-amber-800 transition focus:outline-none focus:ring-2 focus:ring-amber-600 focus:ring-offset-2">
                Crear cuenta <span class="inline-block translate-x-0 group-hover:translate-x-1 transition">→</span>
              </button>

              <div class="pt-5 border-t border-stone-200 text-center text-xs text-gray-500">
                Al registrarte aceptas las políticas de la biblioteca.
              </div>
            </form>
          </div>
        </div>

      </div>

    </section>
  </main>
@endsection
