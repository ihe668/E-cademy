<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Coursecontent;
use Illuminate\Http\Request;

class CoursecontentController extends Controller
{
    public function addcoursecontentview(){
        $course = Course::get()->all();
        return view('admin.addcoursecontent', compact('course'));
    }

    public function addcoursecontent(Request $request){

        $coursecontent = new Coursecontent();
        $coursecontent->name = $request->name;
        $coursecontent->course_id = $request->course_id;
        $coursecontent->summary = $request->summary;
        $coursecontent->content = $request->content;
        $coursecontent->link = $request->link;
        $coursecontent->save();
        Alert::success('Success', 'Course content Added Successfully');

        return back();
    }
}
