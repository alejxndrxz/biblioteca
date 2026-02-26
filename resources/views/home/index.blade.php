@extends('layout.admin')

      <!-- Content -->
      <main class="flex-1">
        <section class="px-4 sm:px-6 lg:px-8 py-6">
          <!-- Breadcrumb -->
          <div class="text-sm text-slate-500 mb-3">
            <a href="#inicio" class="hover:text-slate-700">Inicio</a>
            <span class="mx-2">/</span>
            <span class="text-slate-700 font-medium">Libros</span>
          </div>

          <!-- Title -->
          <header class="mb-6">
            <h1 class="text-2xl sm:text-3xl font-bold text-slate-900">Gestión de Libros</h1>
            <p class="text-slate-600 mt-1">Administra el catálogo de libros de la biblioteca.</p>
          </header>

          <!-- Stats -->
          <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-6">
            <!-- Card -->
            <article class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
              <div class="flex items-start justify-between gap-4">
                <div>
                  <p class="text-sm text-slate-500">Total de libros</p>
                  <p class="text-2xl font-bold mt-1">1,247</p>
                  <p class="text-xs text-emerald-600 mt-2">▲ 5.2% desde el mes pasado</p>
                </div>
                <div class="h-11 w-11 rounded-full bg-blue-600/10 text-blue-700 grid place-items-center">
                  📘
                </div>
              </div>
            </article>

            <article class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
              <div class="flex items-start justify-between gap-4">
                <div>
                  <p class="text-sm text-slate-500">Libros prestados</p>
                  <p class="text-2xl font-bold mt-1">189</p>
                  <p class="text-xs text-rose-600 mt-2">▼ 2.1% desde el mes pasado</p>
                </div>
                <div class="h-11 w-11 rounded-full bg-amber-500/10 text-amber-700 grid place-items-center">
                  🔁
                </div>
              </div>
            </article>

            <article class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
              <div class="flex items-start justify-between gap-4">
                <div>
                  <p class="text-sm text-slate-500">Usuarios activos</p>
                  <p class="text-2xl font-bold mt-1">543</p>
                  <p class="text-xs text-emerald-600 mt-2">▲ 12.7% desde el mes pasado</p>
                </div>
                <div class="h-11 w-11 rounded-full bg-emerald-500/10 text-emerald-700 grid place-items-center">
                  👥
                </div>
              </div>
            </article>

            <article class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5">
              <div class="flex items-start justify-between gap-4">
                <div>
                  <p class="text-sm text-slate-500">Devoluciones pendientes</p>
                  <p class="text-2xl font-bold mt-1">24</p>
                  <p class="text-xs text-rose-600 mt-2">▲ 3.4% desde ayer</p>
                </div>
                <div class="h-11 w-11 rounded-full bg-rose-500/10 text-rose-700 grid place-items-center">
                  ⏰
                </div>
              </div>
            </article>
          </div>

          <!-- Table -->
          <section class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
            <header class="p-4 sm:p-5 border-b border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
              <div>
                <h2 class="text-lg font-semibold text-slate-900">Lista de Libros</h2>
                <p class="text-sm text-slate-500">Consulta y administra los registros del catálogo.</p>
              </div>

              <div class="flex items-center gap-2">
                <div class="relative">
                  <input
                    type="search"
                    placeholder="Buscar..."
                    class="w-full sm:w-56 rounded-xl border border-slate-200 bg-slate-50 px-3 py-2 text-sm outline-none focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500"
                  />
                  <span class="absolute right-3 top-2.5 text-slate-400 text-sm">⌕</span>
                </div>

                <button
                  class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700 transition">
                  <span class="text-lg leading-none">+</span>
                  Agregar libro
                </button>
              </div>
            </header>

            <div class="overflow-x-auto">
              <table class="min-w-full text-sm">
                <thead class="bg-slate-50">
                  <tr class="text-left text-slate-500 uppercase text-[11px] tracking-wider">
                    <th class="px-4 sm:px-6 py-3">Título</th>
                    <th class="px-4 sm:px-6 py-3">Autor</th>
                    <th class="px-4 sm:px-6 py-3">ISBN</th>
                    <th class="px-4 sm:px-6 py-3">Categoría</th>
                    <th class="px-4 sm:px-6 py-3">Disponibilidad</th>
                    <th class="px-4 sm:px-6 py-3">Acciones</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                  <tr class="hover:bg-slate-50/80 transition">
                    <td class="px-4 sm:px-6 py-4 font-medium text-slate-900">Cien años de soledad</td>
                    <td class="px-4 sm:px-6 py-4">Gabriel García Márquez</td>
                    <td class="px-4 sm:px-6 py-4">978-0307474728</td>
                    <td class="px-4 sm:px-6 py-4">
                      <span class="inline-flex items-center rounded-full bg-blue-600/10 text-blue-700 px-3 py-1 text-xs font-semibold">
                        Literatura
                      </span>
                    </td>
                    <td class="px-4 sm:px-6 py-4">
                      <span class="inline-flex items-center rounded-full bg-emerald-600/10 text-emerald-700 px-3 py-1 text-xs font-semibold">
                        Disponible
                      </span>
                    </td>
                    <td class="px-4 sm:px-6 py-4">
                      <a href="#" class="text-blue-700 font-semibold hover:underline">Editar</a>
                      <a href="#" class="text-rose-600 font-semibold hover:underline ml-3">Eliminar</a>
                    </td>
                  </tr>

                  <tr class="hover:bg-slate-50/80 transition">
                    <td class="px-4 sm:px-6 py-4 font-medium text-slate-900">1984</td>
                    <td class="px-4 sm:px-6 py-4">George Orwell</td>
                    <td class="px-4 sm:px-6 py-4">978-0451524935</td>
                    <td class="px-4 sm:px-6 py-4">
                      <span class="inline-flex items-center rounded-full bg-purple-600/10 text-purple-700 px-3 py-1 text-xs font-semibold">
                        Ciencia Ficción
                      </span>
                    </td>
                    <td class="px-4 sm:px-6 py-4">
                      <span class="inline-flex items-center rounded-full bg-rose-600/10 text-rose-700 px-3 py-1 text-xs font-semibold">
                        Prestado
                      </span>
                    </td>
                    <td class="px-4 sm:px-6 py-4">
                      <a href="#" class="text-blue-700 font-semibold hover:underline">Editar</a>
                      <a href="#" class="text-rose-600 font-semibold hover:underline ml-3">Eliminar</a>
                    </td>
                  </tr>

                  <tr class="hover:bg-slate-50/80 transition">
                    <td class="px-4 sm:px-6 py-4 font-medium text-slate-900">Don Quijote de la Mancha</td>
                    <td class="px-4 sm:px-6 py-4">Miguel de Cervantes</td>
                    <td class="px-4 sm:px-6 py-4">978-8420732855</td>
                    <td class="px-4 sm:px-6 py-4">
                      <span class="inline-flex items-center rounded-full bg-blue-600/10 text-blue-700 px-3 py-1 text-xs font-semibold">
                        Literatura
                      </span>
                    </td>
                    <td class="px-4 sm:px-6 py-4">
                      <span class="inline-flex items-center rounded-full bg-emerald-600/10 text-emerald-700 px-3 py-1 text-xs font-semibold">
                        Disponible
                      </span>
                    </td>
                    <td class="px-4 sm:px-6 py-4">
                      <a href="#" class="text-blue-700 font-semibold hover:underline">Editar</a>
                      <a href="#" class="text-rose-600 font-semibold hover:underline ml-3">Eliminar</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Pagination -->
            <footer class="p-4 sm:px-6 border-t border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
              <p class="text-sm text-slate-500">Mostrando 1 a 3 de 1,247 resultados</p>

              <div class="flex items-center gap-2">
                <button class="px-3 py-2 rounded-xl border border-slate-200 text-sm hover:bg-slate-50 transition">Anterior</button>
                <button class="px-3 py-2 rounded-xl bg-blue-600 text-white text-sm font-semibold">1</button>
                <button class="px-3 py-2 rounded-xl border border-slate-200 text-sm hover:bg-slate-50 transition">2</button>
                <button class="px-3 py-2 rounded-xl border border-slate-200 text-sm hover:bg-slate-50 transition">3</button>
                <button class="px-3 py-2 rounded-xl border border-slate-200 text-sm hover:bg-slate-50 transition">Siguiente</button>
              </div>
            </footer>
          </section>
        </section>
      </main>