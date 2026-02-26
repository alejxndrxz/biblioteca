
      <!-- Footer -->
      <footer class="bg-white border-t border-slate-200">
        <div class="px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2">
          <p class="text-sm text-slate-500">© 2026 Sistema de Administración de Biblioteca. Todos los derechos reservados.</p>
          <nav class="flex gap-4 text-sm">
            <a href="#" class="text-slate-500 hover:text-slate-700">Política de privacidad</a>
            <a href="#" class="text-slate-500 hover:text-slate-700">Términos de uso</a>
            <a href="#" class="text-slate-500 hover:text-slate-700">Soporte</a>
          </nav>
        </div>
      </footer>

    </div>
  </div>

  <!-- JS Vanilla: Drawer móvil -->
  <script>
    const openBtn = document.getElementById('openDrawer');
    const closeBtn = document.getElementById('closeDrawer');
    const drawer = document.getElementById('drawer');
    const overlay = document.getElementById('overlay');

    function openDrawer() {
      overlay.classList.remove('hidden');
      drawer.classList.remove('-translate-x-full');
      document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
      overlay.classList.add('hidden');
      drawer.classList.add('-translate-x-full');
      document.body.style.overflow = '';
    }

    openBtn?.addEventListener('click', openDrawer);
    closeBtn?.addEventListener('click', closeDrawer);
    overlay?.addEventListener('click', closeDrawer);

    // Cerrar con tecla ESC
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !overlay.classList.contains('hidden')) closeDrawer();
    });

    // Si cambias a desktop, asegura el estado correcto
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 1024) closeDrawer();
    });
  </script>
</body>
</html>