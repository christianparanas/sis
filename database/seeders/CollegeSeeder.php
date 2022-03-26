<?php

namespace Database\Seeders;
use App\Models\College;
use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        College::create([
            'acronym' => 'CAS',
            'name' => 'College of Arts and Sciences',
        ]);

        College::create([
            'acronym' => 'COFED',
            'name' => 'College of Education',
        ]);

        College::create([
            'acronym' => 'CME',
            'name' => 'College of Management and Entrepreneurship',
        ]);
    }
}

