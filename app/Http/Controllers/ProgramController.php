<?php

namespace App\Http\Controllers;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index() {
        $programs = Program::with('courses')->get()->toArray();

        return view('pages.programs', ['programs' => $programs]);
    }
}
