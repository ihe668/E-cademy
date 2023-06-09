<?php

namespace App\Http\Controllers\CourseContent;

use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Coursecontent;
use Illuminate\Http\Request;

class CoursecontentController extends Controller
{
    public function addcoursecontentview(){
        return view('admin.addcoursecontent');
    }

    public function addcoursecontent(Request $request){

        $coursecontent = new Coursecontent();
        $coursecontent->name = $request->name;
        $coursecontent->course_id = '1';
        $coursecontent->summary = $request->summary;
        $coursecontent->content = $request->content;
        $coursecontent->link = $request->link;
        $coursecontent->save();
        Alert::success('Success', 'Course content Added Successfully');

        return back();
    }
}
