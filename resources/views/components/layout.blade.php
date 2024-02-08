<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }} - {{ config('app.name') }}</title>
        @vite(['resources/sass/app.scss'])
    </head>
    <body>
        <header class="shadow">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="/" class="d-block fw-bold" id="bb-header-logo">Beggars Bliss</a>
                    </div>
                    <div class="col">
                        <nav id="bb-main-menu">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="/events" class="nav-link">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contact" class="nav-link">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto">
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
        <main class="py-3">
            {{ $slot }}
            <section class="container">
                
            </section>
        </main>
        <footer class="py-1">
            <div class="container my-4">
                <h3 class="text-center">Listen</h3>
                <div class="row justify-content-center mt-3">
                    @foreach(config('music.platforms') as $platform)
                        <div class="col-6 @if($loop->even) text-start @else text-end @endif col-sm-auto text-sm-center mb-3">
                            <a href="{{ $platform['url'] }}" target="_blank" title="Listen to us on {{ $platform['label'] }}">
                                <i class="{{ $platform['icon'] }} fa-5x"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container my-4">
                <h3 class="text-center">Follow us</h3>
                <div class="row justify-content-center mt-3">
                    @foreach(config('social.accounts') as $account)
                        <div class="col-auto text-center mb-3">
                            <a href="{{ $account['url'] }}" target="_blank" title="Follow us on {{ $account['label'] }}">
                                <i class="{{ $account['icon'] }} fa-5x"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-10 col-md-6">
                        <x-logo/>
                    </div>
                </div>
            </div>
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