<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    // passing a list of variables as 2nd argument
    return view('home', [
        'greeting' => 'Hello', // $greeting
        'name' => 'Larry Robot'
    ]);
});

Route::get('/about', function () {
    // return ['foo' => 'bar'];
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
