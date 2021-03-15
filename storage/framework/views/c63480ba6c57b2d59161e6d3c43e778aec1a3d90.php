<?php $__env->startSection('content'); ?>
<div>
    <?php

    use App\Models\User;
    ?>
    <div class="relative px-4 py-3 my-4 sm:px-8 md:px-16">
        <div class="lg:grid lg:grid-cols-2 bg-white overflow-hidden rounded-md shadow-md">
            <?php $__currentLoopData = $recipe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="<?php echo e(asset('storage/'.$r->user_id.'-'.$r->title.'/'.$r->picture)); ?>" alt="" class="w-full object-cover h-80 lg:h-90">
            <div class="px-3 py-2 h-90 lg:px-5">
                <div class="relative mb-2">
                    <div class="flex justify-between items-baseline">
                        <span class="font-nunito">Kategori : <?php echo e($r->category); ?></span>
                        <div class="font-nunito font-semibold text-sm uppercase bg-gray-300 rounded-full px-2">
                            <svg class="inline-block mb-1 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <?php echo e($r->duration); ?> MENIT
                        </div>
                    </div>
                    <span class="font-lora text-teal-500 font-bold text-2xl"><?php echo e($r->title); ?></span>
                    <span class="block font-nunito font-semibold">Resep Oleh <?php echo e(User::where('id', '=', $r->user_id)->value('name')); ?></span>
                </div>
                <div x-data="{
                            openTab: 1,
                            activeClasses: 'border-l-2 border-t-2 border-r-2 rounded-t text-teal-500',
                            inactiveClasses: 'transition ease-out hover:text-teal-500 duration-300'
                        }">
                    <ul class="flex border-b">
                        <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="mr-2 font-lora font-semibold text-xl cursor-pointer">
                            <div :class="openTab === 1 ? activeClasses : inactiveClasses" class="inline-block bg-white px-2 py-2">Bahan - Bahan</div>
                        </li>
                        <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-2 font-lora font-semibold text-xl cursor-pointer">
                            <div :class="openTab === 2 ? activeClasses : inactiveClasses" class="inline-block bg-white px-2 py-2">Langkah</div>
                        </li>
                    </ul>
                    <div class="w-full pt-4">
                        <div x-show="openTab === 1">
                            <pre class="font-nunito overflow-auto h-56 lg:h-90 px-3"><?php echo e($r->ingredient); ?></pre>
                        </div>
                        <div x-show="openTab === 2">
                            <pre class="font-nunito overflow-auto h-56 lg:h-90 px-3"><?php echo e($r->detail); ?></pre>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\masakanku\resources\views/livewire/recipe.blade.php ENDPATH**/ ?>