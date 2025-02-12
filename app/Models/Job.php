<?php

namespace App\Models;

// use Illuminate\Support\Arr;


use Illuminate\Support\Arr;

class Job
{
    public $id;
    public $title;
    public $salary;

    public function __construct($id, $title, $salary)
    {
        $this->id = $id;
        $this->title = $title;
        $this->salary = $salary;
    }

    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developers',
                'salary' => '$1000'
            ],
            [
                'id' => 2,
                'title' => 'Python Developers',
                'salary' => '$2000'
            ],
            [
                'id' => 3,
                'title' => 'Java Developers',
                'salary' => '$3000'
            ]
        ];
    }


    public static function find(int $id): array
    {
        $jobs = self::all();
        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

        return $job;
        // return new Job($job['id'], $job['title'], $job['salary']);
    }
}
