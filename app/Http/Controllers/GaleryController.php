<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        return view('galeri', [
            'title' => 'Galeri',
            'galeri' => Galery::latest()->get()
        ]);
    }
}
