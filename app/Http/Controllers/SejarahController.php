<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index() {
        return view('profile.sejarah', [
            "title" => "Sejarah"
        ]);
    }
}
