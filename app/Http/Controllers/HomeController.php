<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        $courses = Course::all();
        $enrollment_history = Enrollment::all();
        if (Auth::id()) {
            $role = Auth::user()->code;
            if ($role == '007') {
                return view('user.dashboard');
            } elseif ($role == '008') {
                return view('admin.dashboard', compact('courses','enrollment_history'));
            }
        }
        // if (Auth::id()) {

        // } else {
        //     # code...
        // }
    }
    public function index(Course $course)
    {
        $courses = Course::get()->all();

        $category = Category::with('courses')->get()->all();
        return view('welcome', compact('courses', 'category'));
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
        // $id = Auth::user()->id;
        // $profile = User::find($id);
        return view('contact_us');
    }

    function home(Course $course, Category $category)
    {
        $id = $category->id;
        //getting a particular course from a category
        $courses = Course::where('category_id', '=', $id)->get()->all();
        return view('homecourse', compact('courses'));
    }

    function about()
     {
        return view('about_us');
    }

    function policy()
     {
        return view('privacypolicy');
    }
}
