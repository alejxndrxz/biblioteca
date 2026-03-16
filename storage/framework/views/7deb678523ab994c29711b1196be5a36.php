

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-slate-800">Crear Préstamo</h1>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden p-6">
        <form action="<?php echo e(route('prestamos.buscar_usuario')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-4">
                <label for="usuario_id" class="block text-gray-700 font-bold mb-2">ID Usuario:</label>
                <input 
                    type="text" 
                    name="usuario_id" 
                    id="usuario_id" 
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                >
            </div>

            <div class="mb-4">
                <label for="usuario_nombre" class="block text-gray-700 font-bold mb-2">Nombre Usuario:</label>
                <input 
                    type="text" 
                    name="usuario_nombre" 
                    id="usuario_nombre" 
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                >
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Buscar</button>
                <a href="<?php echo e(route('prestamos.index')); ?>" class="ml-4 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancelar</a>
            </div>
        </form>

        <?php if(isset($usuario)): ?>
        <div class="bg-blue-100 border border-blue-400 rounded-lg p-4 mt-6 mb-6">
            <h2 class="text-xl font-bold mb-4 text-blue-800">Usuario Encontrado:</h2>
            <p><strong>ID:</strong> <?php echo e($usuario->id); ?></p>
            <p><strong>Nombre:</strong> <?php echo e($usuario->name); ?></p>
            <p><strong>Email:</strong> <?php echo e($usuario->email); ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danie\Herd\biblioteca\resources\views/prestamos/create.blade.php ENDPATH**/ ?>