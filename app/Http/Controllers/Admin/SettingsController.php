<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settingsview(){
        $user = Auth::user();
        return view('admin.settings');
    }
}
