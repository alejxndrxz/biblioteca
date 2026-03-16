


<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8"> 
    <h1 class="text-2xl font-bold text-slate-800">Eliminar el usuario: <?php echo e($usuario->name); ?>?</h1>
<p class="mb-6">Estas seguro que deseas eliminar este usuario? Esta acción no se puede deshacer.</p>

<table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-700">ID</th>
                <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-700">Nombre</th>
                <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-700">Email</th>
                <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-700">Tipo de Usuario</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap border-b"><?php echo e($usuario->id); ?></td>
                <td class="px-6 py-4 whitespace-nowrap border-b"><?php echo e($usuario->name); ?></td>
                <td class="px-6 py-4 whitespace-nowrap border-b"><?php echo e($usuario->email); ?></td>
                <td class="px-6 py-4 whitespace-nowrap border-b"><?php echo e($usuario->user_type); ?></td>
            </tr>
        </tbody>
</table>

<form action="<?php echo e(route('usuarios.destroy', $usuario->id)); ?>" method="POST" class="mt-4 flex gap-2">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>

    <button
        type="submit"
        class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">    
        Eliminar
    </button>

    <a href="<?php echo e(route('usuarios.index')); ?>"
       class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
        Cancelar
    </a>
</form>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danie\Herd\biblioteca\resources\views/usuarios/delete_confirm.blade.php ENDPATH**/ ?>