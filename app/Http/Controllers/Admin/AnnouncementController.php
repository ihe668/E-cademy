<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcements;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AnnouncementController extends Controller
{
    public function announcementsview(Announcements $announcements)
    {
        $an = $announcements->get()->all();
        return view('admin.announcement', \compact('an'));
    }

    public function addannouncementview()
    {
        return view('admin.addannouncement');
    }

    public function addannouncement(Request $request)
    {
        $announcement =  new Announcements();
        $announcement->title = $request->title;
        $announcement->content = $request->content;
        $announcement->save();
        Alert::success('Success', 'Announcement Posted Successfully');
        return \back();
    }
}
