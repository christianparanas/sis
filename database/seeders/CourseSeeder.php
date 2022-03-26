<?php

namespace Database\Seeders;
use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'program_id' => 1,
            'code' => 'IT_206',
            'name' => 'IT Fundamentals',
        ]);

        Course::create([
            'program_id' => 1,
            'code' => 'IT_146',
            'name' => 'Databse Management System',
        ]);

        Course::create([
            'program_id' => 1,
            'code' => 'IT_484',
            'name' => 'Web Development',
        ]);

        Course::create([
            'program_id' => 1,
            'code' => 'IT_187',
            'name' => 'Data Structures',
        ]);

        Course::create([
            'program_id' => 1,
            'code' => 'IT_385',
            'name' => 'System Analysis and Design',
        ]);



        Course::create([
            'program_id' => 6,
            'code' => 'BSED_160',
            'name' => 'Principles of Teaching',
        ]);

        Course::create([
            'program_id' => 6,
            'code' => 'BSED_490',
            'name' => 'Facilitating Learning',
        ]);

        Course::create([
            'program_id' => 6,
            'code' => 'BSED_457',
            'name' => 'Assessment of Student Learning',
        ]);

        Course::create([
            'program_id' => 6,
            'code' => 'BSED_130',
            'name' => 'Social Dimensions of Education',
        ]);



        Course::create([
            'program_id' => 8,
            'code' => 'BSTM_453',
            'name' => 'Total Quality Management',
        ]);

        Course::create([
            'program_id' => 8,
            'code' => 'BSTM_163',
            'name' => 'Food and Beverage Service Procedures',
        ]);

        Course::create([
            'program_id' => 8,
            'code' => 'BSTM_294',
            'name' => 'Tourism Planning and Development',
        ]);
    }
}
