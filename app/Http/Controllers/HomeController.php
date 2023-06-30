<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Course $course)
    {
        $courses = Course::get()->all();
        return view('welcome', compact('courses'));
    }
    function view(Course $courses)
    {
        $courses = Course::get()->all();
        return view('view_course', compact('courses'));
    }


}
