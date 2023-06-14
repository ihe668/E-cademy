<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function profile(){
        $id = Auth::user()->id;
        $profile = User::find($id);

        return view('user.profile', \compact('profile'));
    }

   
}
