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
