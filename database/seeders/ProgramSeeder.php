<?php

namespace Database\Seeders;
use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            'college_id' => 1,
            'acronym' => 'BSIT',
            'name' => 'Bachelor of Science in Information Technology',
        ]);

        Program::create([
            'college_id' => 1,
            'acronym' => 'BSSW',
            'name' => 'Bachelor of Science in Social Work',
        ]);

        Program::create([
            'college_id' => 1,
            'acronym' => 'ABCOM',
            'name' => 'Bachelor of Arts and Communication',
        ]);

        Program::create([
            'college_id' => 1,
            'acronym' => 'AB POSCI',
            'name' => 'Bachelor of Arts in Political Science',
        ]);



        Program::create([
            'college_id' => 2,
            'acronym' => 'BEED',
            'name' => 'Bachelor of Science in Elementary Education',
        ]);

        Program::create([
            'college_id' => 2,
            'acronym' => 'BSED',
            'name' => 'Bachelor of Science in Secondary Education',
        ]);

        Program::create([
            'college_id' => 2,
            'acronym' => 'BSPED',
            'name' => 'Bachelor of Science in Special Education',
        ]);



        Program::create([
            'college_id' => 3,
            'acronym' => 'BSTM',
            'name' => 'Bachelor of Science in Tourism Management',
        ]);

        Program::create([
            'college_id' => 3,
            'acronym' => 'BSHM',
            'name' => 'Bachelor of Science in Hospitality Management',
        ]);

        Program::create([
            'college_id' => 3,
            'acronym' => 'BSEntrep',
            'name' => 'Bachelor of Science in Entrepreneurship',
        ]);

    }
}
