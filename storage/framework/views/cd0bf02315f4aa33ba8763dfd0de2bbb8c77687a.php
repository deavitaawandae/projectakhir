<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Makananku</title>

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <!-- Specific Page -->
        <?php echo $__env->yieldPushContent('css'); ?>

        <?php echo \Livewire\Livewire::styles(); ?>


        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.2.1/dist/alpine.js" defer></script>
    </head>
    <body class="bg-gray-100 antialiased">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navbar')->html();
} elseif ($_instance->childHasBeenRendered('ZWt58F0')) {
    $componentId = $_instance->getRenderedChildComponentId('ZWt58F0');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZWt58F0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZWt58F0');
} else {
    $response = \Livewire\Livewire::mount('navbar');
    $html = $response->html();
    $_instance->logRenderedChild('ZWt58F0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php if(session()->has('message')): ?>
            <div class="bg-teal-500 text-center py-4 lg:px-4" >
                <div class="p-2 bg-teal-400 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                    <span class="flex rounded-full bg-teal-400 uppercase px-2 py-1 text-xs font-bold mr-3">SUKSES</span>
                    <span class="font-semibold mr-2 text-left flex-auto"><?php echo e(session('message')); ?></span>
                </div>
            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->yieldPushContent('modals'); ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('footer')->html();
} elseif ($_instance->childHasBeenRendered('zZiXU3F')) {
    $componentId = $_instance->getRenderedChildComponentId('zZiXU3F');
    $componentTag = $_instance->getRenderedChildComponentTagName('zZiXU3F');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zZiXU3F');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $html = $response->html();
    $_instance->logRenderedChild('zZiXU3F', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH E:\masakanku\resources\views/layouts/app.blade.php ENDPATH**/ ?>