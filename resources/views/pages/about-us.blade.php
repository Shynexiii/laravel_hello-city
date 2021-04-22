@extends('app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')
<img src="{{ asset('/images/about-us.jpg') }}" alt="About Us Image" width="250" height="200" >
<p>
    Built with ♥ by Shynexiii.
</p>
<a href="{{ route('app_home') }}">
    Return to Home page
</a>
@endsection
