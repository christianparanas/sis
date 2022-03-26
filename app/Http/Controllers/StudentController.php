<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Program;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $studentload = Student::with('program', 'program.college', 'program.courses')->get()->toArray();
        $studentsArr = Student::with('program')->get()->toArray();
        $programsArr = Program::all()->toArray();

        return view('pages.students', ['students' => $studentload, 'studentsArr' => $studentsArr, 'programsArr' => $programsArr]); 
        // dd($programsArr);
    }

    public function store(Request $request) {
        $student = Student::create([
            'name' => $request->get('name'),
            'program_id' => $request->get('program')
        ]);

        return redirect('/');
    }

    public function edit($student_number) {
        $programsArr = Program::all()->toArray();
        $student = Student::where('student_number', $student_number)->first()->toArray();

        return view('pages.edit', ['student' => $student, 'programsArr' => $programsArr]);
    }

    public function update(Request $request) {
        $student = Student::where('student_number', $request->get('student_number'));

        $student->update([
            'name' => $request->get('name'),
            'program_id' => $request->get('program')
        ]);

        return redirect('/');
    }

    public function destroy($student_number) {
        $student = Student::where('student_number', $student_number)->delete();

        return redirect('/');
    }
}
