 <?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.authentication-card','data' => []]); ?>
<?php $component->withName('jet-authentication-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('logo'); ?> 
            <svg class="h-16 fill-current text-teal-500" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <path d="M58.888 42.617a11.3 11.3 0 01-10.055 1.44 1 1 0 00-.915.127l-4.5 3.191 1.158 1.631 4.083-2.9a13.366 13.366 0 0011.345-1.833 14.191 14.191 0 001.671-1.322l-1.356-1.47a12.051 12.051 0 01-1.431 1.136z" />
                <path d="M48.818 27.693a9.093 9.093 0 00-4.141 8.672L32 44.491 19.321 36.37a9.052 9.052 0 00-4.145-8.67 9.561 9.561 0 00-6.52-1.626 7.4 7.4 0 00-6.378 9.454 9.554 9.554 0 003.951 5.432 9.05 9.05 0 009.6.593l9.841 6.987-9.365 6.005a3.919 3.919 0 00-1.142 5.507 3.926 3.926 0 005.525 1L32 53.03l11.312 8.028a3.93 3.93 0 104.388-6.514l-9.376-6 9.848-6.99a9.05 9.05 0 009.6-.591c4.11-2.774 5.452-8.008 2.989-11.668s-7.824-4.376-11.943-1.602zM19.53 59.425a1.974 1.974 0 01-2.712-.495 1.921 1.921 0 01.561-2.7l10.049-6.444 2.839 2.014zm27.94-1.963a1.93 1.93 0 01-3.006 1.965l-28.039-19.9a1 1 0 00-1.168.008 6.93 6.93 0 01-7.91-.233 7.562 7.562 0 01-3.136-4.29 5.4 5.4 0 014.7-6.959 7.563 7.563 0 015.152 1.3 6.93 6.93 0 013.174 7.247 1 1 0 00.43 1.087l28.954 18.542a1.912 1.912 0 01.849 1.233zM56.65 39.3a6.931 6.931 0 01-7.911.231 1 1 0 00-1.168-.008l-11.063 7.854-2.652-1.7 12.474-8a1 1 0 00.43-1.085 6.965 6.965 0 013.178-7.247c3.2-2.157 7.314-1.681 9.163 1.058s.748 6.74-2.451 8.897zM12.927 3.833L11.82 2.167a13 13 0 00-5.077 15.167l1.885-.668a11 11 0 014.3-12.833zM10.75 20.268A11.125 11.125 0 019.476 18.5l-1.731 1a13.115 13.115 0 001.505 2.09z" />
                <path d="M42.98 36.2l2.847-14.234A9 9 0 0045 4a8.888 8.888 0 00-5.568 1.935 8.986 8.986 0 00-14.864 0A8.888 8.888 0 0019 4a9 9 0 00-.827 17.962L21.02 36.2l1.96-.392L22.42 33h19.16l-.56 2.8zM38.153 31l.837-5.858-1.98-.284L36.133 31H33V20h-2v11h-3.133l-.877-6.142-1.98.284.837 5.858H22.02l-2.04-10.2A1 1 0 0019 20a7 7 0 010-14 6.931 6.931 0 015.083 2.2 1 1 0 001.626-.25 6.986 6.986 0 0112.582 0 1 1 0 001.626.25A6.931 6.931 0 0145 6a7 7 0 010 14 1 1 0 00-.98.8L41.98 31z" />
            </svg>
         <?php $__env->endSlot(); ?>

         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

        <?php if(session('status')): ?>
        <div class="mb-4 font-medium text-sm text-green-600">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('login')); ?>">

            <?php echo csrf_field(); ?>

            <div>
                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['value' => 'Email']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['value' => 'Email']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['class' => 'block mt-1 w-full','type' => 'email','name' => 'email','value' => old('email'),'required' => true,'autofocus' => true]]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'block mt-1 w-full','type' => 'email','name' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('email')),'required' => true,'autofocus' => true]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
            </div>
            <div class="mt-4">
                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['value' => 'Password']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['value' => 'Password']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['class' => 'block mt-1 w-full','type' => 'password','name' => 'password','required' => true,'autocomplete' => 'current-password']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'block mt-1 w-full','type' => 'password','name' => 'password','required' => true,'autocomplete' => 'current-password']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
            </div>
            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600"><?php echo e(__('Ingat Saya')); ?></span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                <button class="block text-white font-nunito font-semibold mx-auto py-2 my-1 w-full rounded-md border bg-teal-400 border-teal-400 hover:bg-teal-500 transition ease-in duration-300" type="submit">LOGIN</button>
            </div>

            <?php if(Route::has('password.request')): ?>
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="<?php echo e(route('password.request')); ?>">
                <?php echo e(__('Lupa Sandi?')); ?>

            </a>
            <?php endif; ?>


            <div class="flex items-center justify-center mt-2">
                <a href="<?php echo e(route('register')); ?>" class="font-semibold font-nunito hover:text-teal-400 transition ease-in duration-300">DAFTAR</a>
            </div>
        </form>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
 <?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> <?php /**PATH E:\masakanku\resources\views/auth/login.blade.php ENDPATH**/ ?>