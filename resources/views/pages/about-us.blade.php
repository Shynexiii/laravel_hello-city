@extends('layouts.app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')
<img src="{{ asset('/images/about-us.jpg') }}" alt="About Us Image" class="my-12 rounded shadow-md h-32">
<h2 class="mb-5 text-gray-700">
    Built with <span class="text-pink-500">♥</span> by Shynexiii.
</h2>
<a href="{{ route('app_home') }}" class="text-indigo-600 hoever:text-indigo-800 underline">
    Return to Home page
</a>
@endsection
