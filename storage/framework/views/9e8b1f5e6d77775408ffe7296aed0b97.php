<?php $__env->startSection('title','Index'); ?>
<?php $__env->startSection('content'); ?>
  <div class="flex h-screen">
    <div class="w-full max-w-xs m-auto bg-indigo-100 rounded p-5">
      <header>
        <img class="w-20 mx-auto mb-5" src="https://img.icons8.com/fluent/344/year-of-tiger.png" alt="Logo" />
        <h2 class="text-center text-2xl font-bold mb-4">Todo List</h2>
        <div class="mb-4">
          <p class="text-center text-gray-600">Déjà inscrit ?</p>
          <a href="<?php echo e(route('auth.login')); ?>" class="block text-center text-indigo-600 hover:underline">Connectez-vous</a>
        </div>
        <div>
          <p class="text-center text-gray-600">Inscription</p>
          <a href="<?php echo e(route('register')); ?>" class="block text-center text-indigo-600 hover:underline">Inscrivez-vous</a>
        </div>
      </header>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/meyze/Desktop/Laravel_projects/todolist/resources/views/about/index.blade.php ENDPATH**/ ?>