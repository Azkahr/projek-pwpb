<?php

namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index() {
        return view('profile.sejarah', [
            "title" => "Sejarah",
            'components' => [
                'misi' => Component::where('page', 'profil')->where('name', 'misi')->first(['value']),
                'visi' => Component::where('page', 'profil')->where('name', 'visi')->first(['value']),
                'tentang' => Component::where('page', 'profil')->where('name', 'tentang')->first(['value']),
                'sejarah' => Component::where('page', 'profil')->where('name', 'sejarah')->first(['value']),
            ]
        ]);
    }
}
