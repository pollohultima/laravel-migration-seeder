<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel @yield('title', 'Flights')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header class="bg-light fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand col-1" href="#">
                        <img class="img-fluid" src="{{ asset('pngwing.com.png') }}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/blog">Blog</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link">Shop</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link">About Us</a>
                            </li>

                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>


    </header>

    <main>
        @yield('content')
    </main>

    <footer class="fixed-bottom">
        <p class="text-center">&copy; Matteo Polonio - Booleaner</p>
    </footer>
</body>

</html>
