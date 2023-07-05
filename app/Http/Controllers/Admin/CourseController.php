<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function course()
    {
        $categories =  Category::latest()->get();
        return view('admin.create_course', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required',
            // 'discounted_price' => 'required',
            // 'image' => 'required|image'
        ]);
        $slug = \Str::random(7) . uniqid() . Auth::user()->id;

        $course = Course::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'slug' => $slug,
            'description' => $request->description,
            'price' => $request->price,
            'discounted_price' => $request->discounted_price,
        ]);
        $file = $request->image;
        $ext = $file->getClientOriginalExtension();
        $filename = \Str::slug($request->name) . time() . '.' . $ext;
        $file->storePubliclyAs('public/Course-image', $filename);

        $course->image = $filename;
        $course->save();
        Alert::success('Success', 'Course Created Successfully');
        return back();
    }

    public function admincoursesview(Course $course)
    {
        $courses = $course->get()->all();

        return view('admin.courses', \compact('courses'));
    }

    public function usercoursesview(Course $course)
    {
        $courses = $course->get()->all();

        return view('user.course', \compact('courses'));
    }

        public function details(Course $course)
        {
            $cou = $course->id;
            $content = Course::with('contents')->find($course->id);
            $courses = Course::with('category')->find($course->id);
            return view('admin.course_details', compact('courses', 'content'));
        }

    public function usercoursedetailsview(Course $course)
    {

        $content = Course::with('contents')->find($course->id);
        $courses = Course::with('category')->find($course->id);
        return view('user.coursedetails', \compact('courses', 'content'));
    }
}
