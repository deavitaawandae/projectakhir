<?php $__env->startSection($slotOrSection); ?>
    <?php echo $manager->initialDehydrate()->toInitialResponse()->effects['html'];; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make($view, $params, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\masakanku\vendor\livewire\livewire\src/Macros/livewire-view-extends.blade.php ENDPATH**/ ?>