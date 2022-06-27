<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class DashboardGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.galeri.index', [
            'galeries' => Galery::latest()->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galeri.create');
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
            'nama' => 'max:100|required',
            'image' => 'image|file|max:1024',
            'deskripsi' => 'required'
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('galery-images');
        }

        Galery::create($validatedData);

        return redirect('/dashboard/galeri')->with('success', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\galery  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(galery $galeri)
    {
        return view('dashboard.galeri.show', [
            'galery' => $galeri
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\galery  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(galery $galeri)
    {
        return view('dashboard.galeri.edit', [
            'galery' => $galeri
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\galery  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galery $galeri)
    {
        $validatedData = $request->validate([
            'nama' => 'max:100|required',
            'image' => 'image|file|max:1024',
            'deskripsi' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('galery-images');
        }

        Galery::where('id', $galeri->id)
            ->update($validatedData);

        return redirect('/dashboard/galeri')->with('success', 'Data telah berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\galery  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(galery $galeri)
    {
        Galery::destroy($galeri->id);
        return redirect('/dashboard/galeri')->with('success', 'Data telah berhasil dihapus');
    }
}
