<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <title>
                    @yield('title', config('app.name'))
                </title>
            </meta>
        </meta>
    </head>
    <body>
        @yield('content')
        <footer>
            <p>
                © Copyright {{ date('Y') }} ·
                <a href="/about-us">
                    About Us
                </a>
            </p>
        </footer>
    </body>
</html>
