<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('pages.home');
})->name('app_home');


Route::get('about-us', function(){
    return view('pages.about-us');
})->name('app_about_us');
