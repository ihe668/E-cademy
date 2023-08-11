<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Coursereview;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use Spatie\FlareClient\View;

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
        // $value = Coursereview::with('review')->get();
        $value = Coursereview::get();
        $cou = $course->id;
        $content = Course::with('contents')->find($course->id);
        $courses = Course::with('category')->find($course->id);




        return view('admin.course_details', compact('courses', 'content', 'value'));
    }

    public function usercoursedetailsview(Course $course)
    {

        $content = Course::with('contents')->find($course->id);
        $courses = Course::with('category')->find($course->id);
        return view('user.coursedetails', \compact('courses', 'content'));
    }
    function edit(Course $course)
    {
        return view('admin.editcourse', compact('course'));
    }

    function update(Request $request,Course $course)
    {
        $course->name = $request->name;
        $course->update();
        Alert::success('Success','Course Updated Successfully');
        return redirect()->route('admin.courses.view');
    }
    function delete($id)
    {
        $course = Course::find($id);
        $course->delete();
        Alert::success('Success','Course Deleted Successfully');
        return redirect()->route('app.course.view');
    }

    function home(Course $course, Category $category)
    {
        $id = $category->id;
        //getting a particular course from a category
        $courses = Course::where('category_id', '=', $id)->get()->all();
        return view('admin.appcourseview', compact('courses'));
    }
}
