<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function settingsview(){
        $user = Auth::user();
        return view('admin.settings', \compact('user'));
    }
}
