<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }} - {{ config('app.name') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        @vite(['resources/sass/app.scss'])
    </head>
    <body style="background-image: url('{{ asset('storage/beggarsbliss.jpg') }}');">
        <header id="header" class="shadow position-fixed w-100">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col">
                        <nav id="bb-main-menu">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="#about" class="nav-link h6 mb-0">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#music" class="nav-link h6 mb-0">Music</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#events" class="nav-link h6 mb-0">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#news" class="nav-link h6 mb-0">News</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#socials" class="nav-link h6 mb-0">Socials</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact" class="nav-link h6 mb-0">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <nav id="bb-header-socials-menu">
                            <ul class="nav">
                                @foreach(config('social.accounts') as $account)
                                    <li class="nav-item">
                                        <a href="{{ $account['url'] }}" target="_blank" class="nav-link">
                                            <i class="{{ $account['icon'] }}"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main id="main">
            {{ $slot }}
        </main>
        <footer class="py-1 bg-secondary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <address class="m-0">&copy Beggars Bliss {{ $year }}</address>
                    </div>
                </div>
            </div>
        </footer>
        <div id="bb-curtain" class="show">
            <i class="fa-solid fa-compact-disc fa-spin fa-3x"></i>
        </div>
        @vite(['resources/js/app.js'])
    </body>
</html>