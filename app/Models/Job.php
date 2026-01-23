<?php

namespace App\Models;

use Illuminate\Support\Arr;

// during the video, concepts like MVC-pattern and
// namespaces were discussed
class Job
{
    public static function all(): array
    {
        return [
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
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        // Laravel Built-in Helper function,
        // custom status codes converted automatically
        if (! $job){
            abort(404);
        }

        return $job;
    }
}
