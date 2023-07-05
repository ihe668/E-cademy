<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    function contact()
    {
        $id = Auth::user()->id;
        $profile = User::find($id);
        return view('contact_us', \compact('profile'));
    }
}
