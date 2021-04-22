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
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        </link>
    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main class="flex flex-col justify-center items-center">
            @yield('content')
        </main>

        <footer class="text-gray-400">
            <p>
                © Copyright {{ date('Y') }}
                @if(!Route::is('app_about_us'))
                ·
                <a href="{{ route('app_about_us') }}" class="text-indigo-500 hover:text-indigo-700 underline">
                    About Us
                </a>
                @endif
            </p>
        </footer>
    </body>
</html>
