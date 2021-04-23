@extends('layouts.app')

@section('content')
<img src="{{ asset('/images/Niger-flag.png') }}" alt="Niger Flag" class="mt-12 rounded shadow-md h-32">
<h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-800">
    Hello from Niamey
</h1>
<p class="text-lg text-gray-800">
    it's currently {{ date('G:i')}}
</p>
@endsection
