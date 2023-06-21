<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function adminprofile()
    {
        $id = Auth::user()->id;
        $profile = User::find($id);

        return view('admin.profile', \compact('profile'));
    }

    public function updateprofile(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->skill = $request->skill;
        $user->bio = $request->bio;

        $user->save();
        Alert::success('Success', 'Profile Updated');
        return back();
    }
}
