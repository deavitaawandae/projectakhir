<div>
    <div class="relative px-4 py-3 my-4 sm:px-8 md:px-16">
        <div class="bg-white px-2 py-2 font-nunito font-semibold rounded-md shadow-md">
            <div class="flex justify-center font-lora font-semibold text-2xl text-teal-600 py-2">
                Tambah Resep
            </div>
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="lg:grid lg:grid-cols-2">
                    <div class="pl-2 pr-3">
                        <div>
                            <label for="picture">Gambar</label>
                            <input wire:model.defer="picture" type="file" class="block">
                            <?php if($picture): ?>
                                <div class="block">
                                    Preview
                                    <img src="<?php echo e($picture->temporaryUrl()); ?>">
                                </div>
                            <?php endif; ?>
                            <?php $__errorArgs = ['picture'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="pl-3 pr-2">
                        <div class="py-1">
                            <label for="title" class="block">Nama</label>
                            <input wire:model.defer="form.title" type="text" id="title" name="title" class="bg-gray-100 px-2 py-2 font-nunito font-semibold rounded-md border w-full focus:border-teal-400">
                            <?php $__errorArgs = ['form.title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="py-1">
                            <label for="category" class="block">Kategori</label>
                            <select wire:model.defer="form.category" id="category" name="category" class="bg-gray-100 px-2 py-2 outline-none font-nunito font-semibold rounded-md border w-full focus:border-teal-400">
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($c); ?>"><?php echo e($c); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['form.category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="py-1">
                            <label for="duration" class="block">Durasi (Menit)</label>
                            <input wire:model.defer="form.duration" type="number" min="1" id="duration" name="duration" class="bg-gray-100 px-2 py-2 outline-none font-nunito font-semibold rounded-md border w-full focus:border-teal-400">
                            <?php $__errorArgs = ['form.duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="py-1">
                            <label for="ingredient">Bahan - Bahan</label>
                            <textarea wire:model.defer="form.ingredient" class="w-full border border-gray-300 focus:border-teal-400 px-2 py-2 outline-none rounded-md" rows="5"></textarea>
                            <?php $__errorArgs = ['form.ingredient'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="py-1">
                            <label for="detail">Langkah</label>
                            <textarea wire:model.defer="form.detail" class="w-full border border-gray-300 focus:border-teal-400 px-2 py-2 outline-none rounded-md" rows="5"></textarea>
                            <?php $__errorArgs = ['form.detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="text-center py-2">
                    <button type="submit" class="bg-teal-400 font-nunito font-semibold text-white px-4 py-1 rounded-md transition transform hover:scale-110 hover:bg-teal-500 duration-300">Buat Resep</button>
                </div>
            </form>
        </div>
    </div>
</div><?php /**PATH E:\masakanku\resources\views/livewire/store-recipe.blade.php ENDPATH**/ ?>