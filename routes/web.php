<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    // return view('welcome');
    // passing a list of variables as 2nd argument
    // variables as key-value pairs
    return view('home');
});

Route::get('/jobs', function () {
    // return ['foo' => 'bar'];
        return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    // note on code-improvement: see previous commits
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
