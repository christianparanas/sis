<?php

namespace Database\Seeders;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name' => 'Holland, Tom',
            'program_id' => 1,
        ]);

        Student::create([
            'name' => 'Garfield, Andrew',
            'program_id' => 6,
        ]);

        Student::create([
            'name' => 'Maguire, Tobby',
            'program_id' => 8,
        ]);
    }
}
