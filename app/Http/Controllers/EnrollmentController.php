<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    public function userenrollmenthistory()
    {
        $enrollment_history = Enrollment::where('user_id', Auth::user()->id)->latest()->get();

        return view('user.enrollmenthistory', \compact('enrollment_history'));
    }
}
