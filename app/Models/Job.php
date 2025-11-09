<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Software Developer',
                'salary' => '80,000'
            ],
            [
                'id' => 2,
                'title' => 'College Professor',
                'salary' => '50,000'
            ],
            [
                'id' => 3,
                'title' => 'Director',
                'salary' => '60,000'
            ]
        ];
    }
    
    public static function find($id): array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
