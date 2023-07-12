<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\Course;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AssignmentController extends Controller
{
    public function assignmentview()
    {
        return view('admin.assignments');
    }

    public function addassignmentview()
    {
        $course = Course::get()->all();
        return view('admin.addassignment', \compact('course'));
    }

    public function addassignment(Request $request)
    {
        $assignment = new Assignment();
        $assignment->name = $request->name;
        $assignment->course_id = $request->course_id;
        $assignment->total_marks = $request->total_marks;
        $assignment->save();
        Alert::success('Success', 'Assigment Added Successfully');
        return back();

    }

    public function userassignmentsview(){

        $assignment = Assignment::with('course')->get();
        // dd($assignment);
        return view('user.assignments', \compact('assignment'));
    }
}
