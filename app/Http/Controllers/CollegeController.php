<?php

namespace App\Http\Controllers;
use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index() {
        $colleges = College::with('programs')->get()->toArray();

        return view('pages.colleges', ['colleges' => $colleges]);
    }
}
