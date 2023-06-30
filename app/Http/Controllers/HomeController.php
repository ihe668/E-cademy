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

    function search(Request $request)
    {
        $searchTerm = $request->input('q');
        $courses = Course::where('name', 'like', '%' . $searchTerm . '%')
            ->orwhere('description', 'like', '%' . $searchTerm . '%')
            ->orwhere('discounted_price', 'like', '%' . $searchTerm . '%')
            ->orwhere('price', 'like', '%' . $searchTerm . '%')
            ->latest()
            ->paginate(4);
        return view('view_course', compact('courses'));
    }
}
