<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index() {
        return view('announcement.pengumuman', [
            "title" => "Pengumuman",
            "announcements" => Announcement::latest()->get(),
            "terkini" => Announcement::latest()->take(3)->get()
        ]);
    }

    public function show($id) {
        return view('announcement.detail', [
            "title" => "Pengumuman",
            "announcement" => Announcement::where('id', $id)->first()
        ]);
    }
}
