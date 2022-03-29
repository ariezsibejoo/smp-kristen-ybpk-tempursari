<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardEditProfilController extends Controller
{
    public function edit(Request $request)
    {
        return view('dashboard.editProfil.edit', [
            'user' => $request->user()
        ]);
    }

    public function update(Request $request, User $user)
    {
        // return $request;
        $rules = [
            'name' => 'required|max:100',
            'password' => 'required|min:5|max:100',
            'is_admin' => ''
        ];

        if ($request->username != auth()->user()->username) {
            $rules['username'] = 'required|min:3|max:100|unique:users';
        }
        if ($request->email != auth()->user()->email) {
            $rules['email'] = 'required|email|unique:users';
        }

        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', auth()->user()->id)
            ->update($validatedData);

        return redirect('/dashboard')->with('success', 'Data ' . auth()->user()->name . ' berhasil diubah');
    }
}
