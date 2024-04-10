<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class TimetableController extends Controller
{
    public function index(): View
    {
        return view('student.timetable');
    }
}
