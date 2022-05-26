<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Component;

class ComponentController extends Controller
{
    public function index() {
        return view('profile.guru', [
            "title" => "Components",
            "teachers" => Component::all()
        ]);
    }
}
