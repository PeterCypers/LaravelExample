<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    // passing a list of variables as 2nd argument
    // variables as key-value pairs
    return view('home');
});

Route::get('/jobs', function () {
    // return ['foo' => 'bar'];
        return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50.000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10.000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40.000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    // dump(id)
    //dd($id); //dump & die

    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50.000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10.000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40.000'
        ]
    ];

    // Arr::first($jobs, function ($job) use($id) {
    //     return $job['id'] == $id;
    // });

    // better:
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    //dd($job) check what data this is

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
