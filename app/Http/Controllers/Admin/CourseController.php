<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course()
    {
        return view('admin.create_course');
    }

    public function store(Request $request)
    {

        $request->validate([
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image'
        ]);
        $slug = \Str::random(7).uniqid().Auth::user()->id;

        $course = Course::create([
            'category_id' => $request->category_id,
            'slug' => $slug,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        $file = $request->image;
        $ext = $file->getClientOriginalExtension();
        $filename = \Str::slug($request->name) . time() . '.' . $ext;
        $file->storePubliclyAs('public/images', $filename);

        $course->image = $filename;
        $course->save();
        return back();
    }
}
