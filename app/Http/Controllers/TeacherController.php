<?php

namespace App\Http\Controllers;

use App\Teacher;

class TeacherController extends Controller
{
    public function teachers()
    {
        $teachers = Teacher::all();
        return view('about.teachers')->with(compact('teachers'));
    }

    public function teacher(Teacher $teacher)
    {
        return view('about.teacher')->with(compact('teacher'));
    }
}
