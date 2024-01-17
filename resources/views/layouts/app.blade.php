<!doctype html>
<html lang="{{ config('app.locale')}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
        <link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
        <title>@yield('title')</title>
        @vite('resources/css/app.css')
        @vite(['resources/js/app.js'])
    </head>

<body class="bg-indigo-700">
    <header>
    {{-- @include('web.layout.header') --}}
    {{-- <h1>mon header layout</h1> --}}
    </header>
     <main>
         @yield('content')
     </main>
    {{-- <footer> --}}
    {{-- @include('web.layout.footer') --}}
    {{-- <h2>mon footer layout</h2>
    </footer> --}}

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/parsley.js') }}" type="text/javascript"></script>
    <script>
        $('#register-form').parsley();
        const formRegister = document.querySelector('#register-form');
        console.log(formRegister);

    </script>

</body>
</html>
