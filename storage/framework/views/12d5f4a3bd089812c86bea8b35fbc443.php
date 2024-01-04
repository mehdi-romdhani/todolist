<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    </head>

<body class="bg-indigo-700">
    <header>
    
    
    </header>
     <main>
         <?php echo $__env->yieldContent('content'); ?>
     </main>
    
    
    
</body>
</html>
<?php /**PATH /home/meyze/Desktop/Laravel_projects/todolist/resources/views/layouts/app.blade.php ENDPATH**/ ?>