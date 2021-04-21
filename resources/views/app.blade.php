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
                © Copyright {{ date('Y') }}
                @if(!Route::is('app_about_us'))
                ·<a href="{{ route('app_about_us') }}">
                    About Us
                </a>
                @endif
            </p>
        </footer>
    </body>
</html>
