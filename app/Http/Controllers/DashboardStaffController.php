<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class DashboardStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.staff.index', [
            'staff' => Staff::latest()->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nip' => 'nullable|unique:staff|integer',
            'tanggal_lahir' => 'required',
            'jabatan' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('staff-image');
        }

        Staff::create($validatedData);

        return redirect('/dashboard/staff')->with('success', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        // return $staff;
        return view('dashboard.staff.show', [
            'staff' => $staff
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('dashboard.staff.edit', [
            'staff' => $staff
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $rules = [
            'nama' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'jabatan' => 'required'
        ];

        if ($request->nip != $staff->nip) {
            $rules['nip'] = 'nullable|unique:staff|integer';
        }

        $validatedData = $request->validate($rules);

        Staff::where('id', $staff->id)
            ->update($validatedData);

        return redirect('/dashboard/staff')->with('success', 'Data telah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        Staff::destroy($staff->id);
        return redirect('/dashboard/staff')->with('success', 'Data telah berhasil dihapus');
    }
}
