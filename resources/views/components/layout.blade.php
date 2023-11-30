<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        @vite(['resources/sass/app.scss'])
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <a href="/">Beggars Bliss</a>
                    </div>
                </div>
            </div>
        </header>
        <main class="py-3">{{ $slot }}</main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <address>&copy Beggars Bliss {{ $year }}</address>
                    </div>
                </div>
            </div>
        </footer>
        @vite(['resources/js/app.js'])
    </body>
</html>