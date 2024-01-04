<!doctype html>
<html lang="{{ config('app.locale')}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
        @vite('resources/css/app.css')
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
</body>
</html>
