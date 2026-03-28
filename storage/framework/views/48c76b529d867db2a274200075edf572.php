

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-slate-800">Prestamos</h1>
        
        
        <a href="<?php echo e(route('prestamos.create')); ?>"  class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
            Crear Prestamo </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
     <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Libro</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Usuario</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Fecha</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Estatus</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Fecha de entrega</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Acciones</th>
                </tr>
            </thead>
            <tbody>
    <?php $__currentLoopData = $prestamos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prestamo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo e($prestamo->id); ?></td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo e($prestamo->libro->nombre); ?></td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo e($prestamo->usuario->name); ?></td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo e($prestamo->created_at->format('d/m/Y')); ?></td>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
            <?php if($prestamo->estado == 'pendiente'): ?>
                <span class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-200 rounded-full">Prestado</span>
            <?php else: ?>
                <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-200 rounded-full">Entregado</span>
            <?php endif; ?>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo e(($prestamo->fecha_entrega) ? \Carbon\Carbon::parse($prestamo->fecha_entrega)->format('d/m/Y H:i') : ''); ?></td>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
        <?php if($prestamo->estado == 'pendiente'): ?>
        <a href="<?php echo e(route('prestamos.entregar', $prestamo->id)); ?>" class="text-blue-600 hover:text-blue-900">Entregar</a>
    <?php endif; ?>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
    </div>
    <?php $__env->stopSection(); ?>




<?php echo $__env->make('layout.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danie\Herd\biblioteca\resources\views/prestamos/index.blade.php ENDPATH**/ ?>