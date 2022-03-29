<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Staff;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil', [
            'title' => 'Profil',
            'staff' => Staff::latest()->get(),
            'posts' => Post::latest()->get()
        ]);
    }
}
