@extends('app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')
<p>
    Built with ♥ by Shynexiii.
</p>
<a href="{{ route('app_home') }}">
    Return to Home page
</a>
@endsection
