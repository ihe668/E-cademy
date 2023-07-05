<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('user.dashboard');
    // }

    public function profile()
    {
        $id = Auth::user()->id;
        $profile = User::find($id);

        return view('user.profile', \compact('profile'));
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
