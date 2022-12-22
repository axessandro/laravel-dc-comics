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
        {{-- <h1 class="text-center p-4">Comics Shop</h1>
        <div class="d-flex justify-content-start w-50 m-auto">
            <div class="btn btn-secondary text"><a href="{{ route('home') }}">Home</a></div>
            <div class="btn btn-secondary text"><a href="{{ route('comics.index') }}">View List</a></div>
        </div> --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">

                <a class="navbar-brand" href="#">
                    <h2>E-Comics.com</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">HOME</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comics.index') }}">ARTICLE LIST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comics.create') }}">CREATE NEW ARTICLE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>
