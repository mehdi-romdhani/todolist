<?php $__env->startSection('title','Login'); ?>
<?php $__env->startSection('content'); ?>
    

<div class="flex h-screen bg-indigo-700">
    <div class="w-full max-w-xs m-auto bg-indigo-100 rounded p-5">
        <div>
            <img class="w-20 mx-auto mb-5" src="https://img.icons8.com/fluent/344/year-of-tiger.png" />
        </div>
        <div>
            <form action="#">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>
                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'Login']); ?>Login <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginale51c2d211c4768f2dda5978ca59860d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale51c2d211c4768f2dda5978ca59860d7 = $attributes; } ?>
<?php $component = App\View\Components\Forms\InputText::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\InputText::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'login','name' => 'login','placeholder' => 'Enter your Login','value' => ''.e(old('login')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale51c2d211c4768f2dda5978ca59860d7)): ?>
<?php $attributes = $__attributesOriginale51c2d211c4768f2dda5978ca59860d7; ?>
<?php unset($__attributesOriginale51c2d211c4768f2dda5978ca59860d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale51c2d211c4768f2dda5978ca59860d7)): ?>
<?php $component = $__componentOriginale51c2d211c4768f2dda5978ca59860d7; ?>
<?php unset($__componentOriginale51c2d211c4768f2dda5978ca59860d7); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'password']); ?>Password <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal486358fb1e7dc0f6b31ba39b6cfeadf9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal486358fb1e7dc0f6b31ba39b6cfeadf9 = $attributes; } ?>
<?php $component = App\View\Components\Forms\InputPassword::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input-password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\InputPassword::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'password','name' => 'password','placeholder' => 'Enter your password','value' => ''.e(old('password')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal486358fb1e7dc0f6b31ba39b6cfeadf9)): ?>
<?php $attributes = $__attributesOriginal486358fb1e7dc0f6b31ba39b6cfeadf9; ?>
<?php unset($__attributesOriginal486358fb1e7dc0f6b31ba39b6cfeadf9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal486358fb1e7dc0f6b31ba39b6cfeadf9)): ?>
<?php $component = $__componentOriginal486358fb1e7dc0f6b31ba39b6cfeadf9; ?>
<?php unset($__componentOriginal486358fb1e7dc0f6b31ba39b6cfeadf9); ?>
<?php endif; ?>
                <button class="bg-blue-500 text-white p-2 rounded-lg" type="submit">Log In</button>
            </form>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/meyze/Desktop/Laravel_projects/todolist/resources/views/login/login.blade.php ENDPATH**/ ?>