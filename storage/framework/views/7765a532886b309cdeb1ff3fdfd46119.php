<?php if($paginator->hasPages()): ?>
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center gap-1">
        
        <?php if($paginator->onFirstPage()): ?>
            <span class="px-4 py-2 rounded-full bg-slate-100 text-slate-400 text-sm cursor-not-allowed">
                Anterior
            </span>
        <?php else: ?>
            <a href="<?php echo e($paginator->previousPageUrl()); ?>" 
               class="px-4 py-2 rounded-full bg-white border border-slate-200 text-slate-700 text-sm hover:bg-slate-50 transition">
                Anterior
            </a>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <span class="px-3 py-2 text-slate-400"><?php echo e($element); ?></span>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <span class="w-10 h-10 rounded-full bg-blue-600 text-white text-sm font-semibold flex items-center justify-center">
                            <?php echo e($page); ?>

                        </span>
                    <?php else: ?>
                        <a href="<?php echo e($url); ?>" 
                           class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-700 text-sm hover:bg-slate-50 transition flex items-center justify-center">
                            <?php echo e($page); ?>

                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <a href="<?php echo e($paginator->nextPageUrl()); ?>" 
               class="px-4 py-2 rounded-full bg-white border border-slate-200 text-slate-700 text-sm hover:bg-slate-50 transition">
                Siguiente
            </a>
        <?php else: ?>
            <span class="px-4 py-2 rounded-full bg-slate-100 text-slate-400 text-sm cursor-not-allowed">
                Siguiente
            </span>
        <?php endif; ?>
    </nav>
<?php endif; ?><?php /**PATH C:\Users\danie\Herd\biblioteca\resources\views/vendor/pagination/custom.blade.php ENDPATH**/ ?>