<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/register.css')); ?>">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    </head>

<body class="bg-indigo-700">
    <header>
    
    
    </header>
     <main>
         <?php echo $__env->yieldContent('content'); ?>
     </main>
    
    
    

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(asset('assets/js/parsley.js')); ?>" type="text/javascript"></script>
    <script>
        $('#register-form').parsley();
        const formRegister = document.querySelector('#register-form');
        console.log(formRegister);

    </script>

</body>
</html>
<?php /**PATH /home/meyze/Desktop/Laravel_projects/todolist/resources/views/layouts/app.blade.php ENDPATH**/ ?>