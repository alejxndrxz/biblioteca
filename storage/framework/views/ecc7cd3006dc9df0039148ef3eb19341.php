

<?php $__env->startSection('content'); ?>

<div class="container mx-auto px-4 py-8">      
<h1 class="text-2xl font-bold mb-6">Agregar Nueva Categor ía</h1>         
    <div class="bg-white shadow rounded-lg p-6">

    <form action="<?php echo e(route('categorias.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre de la Categoría:</label>
            <input type="text" name="nombre" id="nombre" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" required>
        </div>

        <div class="mb-4">
         <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Guardar Categoría</button>
        <a href="<?php echo e(route('categorias.index')); ?>" class="ml-4 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancelar</a>
        </div>
         </form>
    </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danie\Herd\biblioteca\resources\views/categorias/create.blade.php ENDPATH**/ ?>