<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Subject;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = ['Subject 1', 'Subject 2', 'Subject 3', 'Subject 4'];

        foreach ($subjects as $subject)
        {
            Subject::query()->firstOrCreate([
                'name'          => $subject,
                'name_slug'     => Str::slug($subject),
                'description'   => 'descriptionnnnnnnnn'
            ]);
        }
    }
}
