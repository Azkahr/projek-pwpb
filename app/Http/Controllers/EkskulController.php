<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;

class EkskulController extends Controller
{
    public function index() {
        return view('profile.ekskul', [
            "title" => "Ekstrakurikuler",
            "ekskuls" => Ekstrakurikuler::all(),
        ]);
    }
}
