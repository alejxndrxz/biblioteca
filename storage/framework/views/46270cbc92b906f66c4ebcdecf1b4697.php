

<?php $__env->startSection('content'); ?>


<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-slate-800">Seleccionar Usuario para Préstamo</h1>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden p-6">
    
    <div class="bg-blue-100 border border-blue-400 rounded-lg p-4 mt-6 mb-6">
            <h2 class="text-xl font-bold mb-4 text-blue-800">Usuario:</h2>
            <p><strong>ID:</strong> <?php echo e($usuario->id); ?></p>
            <p><strong>Nombre:</strong> <?php echo e($usuario->name); ?></p>
            <p><strong>Email:</strong> <?php echo e($usuario->email); ?></p>
     </div>

    <form action="" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label for="libro" class="block text-gray-700 font-bold mb-2">Libro:</label>
                <select name="libro_id" id="libro" class="w-full border border-gray-300 rounded px-3 py-2" required>
                    <option value="">Seleccionar Libro</option>
                    <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($libro->id); ?>"><?php echo e($libro->titulo); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            <input type="hidden" name="usuario_id" value="<?php echo e($usuario->id); ?>">
     
            <div class="mb-4">
                <button type="submit" value="Prestar" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"></button>
                <a href="<?php echo e(route('prestamos.index')); ?>" class="ml-4 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancelar</a>
            </div>
        </form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danie\Herd\biblioteca\resources\views/prestamos/select_libro.blade.php ENDPATH**/ ?>