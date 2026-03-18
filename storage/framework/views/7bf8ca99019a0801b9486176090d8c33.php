

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Agregar Nuevo Usuario</h1>

    <div class="bg-white shadow rounded-lg p-6">
        <form action="<?php echo e(route('usuarios.update', $usuario->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nombre del Usuario:</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    value="<?php echo e(old('name', $usuario->name)); ?>"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                    required
                >
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="<?php echo e(old('email', $usuario->email)); ?>"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                    required
                >
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4">
                <label for="user_type" class="block text-gray-700 font-bold mb-2">Tipo de usuario:</label>
                <select
                    name="user_type"
                    id="user_type"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                    required
                >
                    <option value="">Selecciona un tipo de usuario</option>
                    <option value="user" <?php echo e(old('user_type', $usuario->user_type) == 'user' ? 'selected' : ''); ?>>Usuario</option>
                    <option value="admin" <?php echo e(old('user_type', $usuario->user_type   ) == 'admin' ? 'selected' : ''); ?>>Administrador</option>
                </select>
                <?php $__errorArgs = ['user_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Guardar Usuario</button>
                <a href="<?php echo e(route('categorias.index')); ?>" class="ml-4 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancelar</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\danie\Herd\biblioteca\resources\views/usuarios/edit.blade.php ENDPATH**/ ?>