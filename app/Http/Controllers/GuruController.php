<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index() {
        return view('profile.guru', [
            "title" => "Guru",
            "teachers" => Teacher::all()
        ]);
    }
}
