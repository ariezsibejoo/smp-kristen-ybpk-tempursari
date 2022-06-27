<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Post;
use App\Models\Staff;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda', [
            'title' => 'Beranda',
            'galeri' => Galery::latest()->limit(3)->get(),
            'staff' => Staff::latest()->limit(4)->get(),
            'posts' => Post::latest()->limit(2)->get()
        ]);
    }
}
