<?php

namespace App\Http\Controllers;

use App\Models\Murids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.siswa.index', [
            'siswas' => Murids::latest()->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nis' => 'required|unique:murids',
            'jenkel' => 'required',
            'kelas' => 'required',
            'tanggal_lahir' => 'required'
        ]);
        Murids::create($validatedData);

        return redirect('/dashboard/siswa')->with('success', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Murids  $murids
     * @return \Illuminate\Http\Response
     */
    public function show(Murids $siswa)
    {
        // return $siswa;
        return view('dashboard.siswa.show', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Murids  $murids
     * @return \Illuminate\Http\Response
     */
    public function edit(Murids $siswa)
    {
        return view('dashboard.siswa.edit', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Murids  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Murids $siswa)
    {
        $rules = [
            'nama' => 'required|max:255',
            'kelas' => 'required',
            'jenkel' => 'required',
            'tanggal_lahir' => 'required'
        ];

        if ($request->nis != $siswa->nis) {
            $rules['nis'] = 'required|unique:murids';
        }

        $validatedData = $request->validate($rules);

        Murids::where('id', $siswa->id)
            ->update($validatedData);

        return redirect('/dashboard/siswa')->with('success', 'Data telah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Murids  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Murids $siswa)
    {
        Murids::destroy($siswa->id);
        return redirect('/dashboard/siswa')->with('success', 'Data telah berhasil dihapus');
    }

    // public function search(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $output = "";
    //         $siswas = DB::table('murids')->where('nama', 'LIKE', '%' . $request->search . "%")->get();
    //         if ($siswas) {
    //             foreach ($siswas as $key => $siswa) {
    //                 $output .= '<tr>' .
    //                     '<td>' . $siswa->id . '</td>' .
    //                     '<td>' . $siswa->nama . '</td>' .
    //                     '<td>' . $siswa->nis . '</td>' .
    //                     '<td>' . $siswa->kelas . '</td>' .
    //                     '<td>' . $siswa->tanggal_lahir . '</td>' .
    //                     '</tr>';
    //             }
    //             return Response($output);
    //         }
    //     }
    // }
}
