<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body class="bg-dark text-light">
    <header>
        <h1 class="text-center p-4">Comics Shop</h1>
        <button class="btn btn-danger text mb-4"><a href="{{ route('comics.index') }}">View List</a></button>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>
