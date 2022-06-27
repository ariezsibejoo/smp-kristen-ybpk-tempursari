<?php

namespace App\Http\Controllers;

use App\Models\Murids;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswa', [
            'title' => 'Data Siswa',
            'siswas' => Murids::latest()->paginate(15)->withQueryString()
        ]);
    }
}
