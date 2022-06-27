<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        return view('staff', [
            'title' => 'Data Guru dan Staff',
            'staff' => Staff::latest()->get()
        ]);
    }
}
