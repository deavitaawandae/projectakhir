<?php $attributes = $attributes->exceptProps(['disabled' => false]); ?>
<?php foreach (array_filter((['disabled' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<input <?php echo e($disabled ? 'disabled' : ''); ?> <?php echo $attributes->merge(['class' => 'mx-auto pl-4 py-2 my-2 w-full rounded-md border focus:border-teal-400 focus:outline-none transition ease-out duration-300 font-nunito font-semibold']); ?>>
<?php /**PATH C:\masakanku\resources\views/vendor/jetstream/components/input.blade.php ENDPATH**/ ?>