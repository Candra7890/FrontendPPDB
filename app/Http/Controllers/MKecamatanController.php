<?php

namespace App\Http\Controllers;

use App\Models\M_Kecamatan;
use App\Models\M_Kabupaten;
use Illuminate\Http\Request;

class MKecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kecamatans = M_Kecamatan::with('M_Kabupaten')->get();
        $kabupatens = M_Kabupaten::all();
        return view('crud.kecamatan', compact('kecamatans', 'kabupatens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kecamatan_nama' => 'required',
            'kabupaten_id' => 'required'
        ]);

        $kecamatan = new M_Kecamatan;
        $kecamatan->kecamatan_nama = $request->input('kecamatan_nama');
        $kecamatan->kabupaten_id = $request->input('kabupaten_id');
        $kecamatan->save();

        return redirect()->route('kecamatan.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, M_Kecamatan $kecamatan)
    {
        $request->validate([
            'kecamatan_nama' => 'required',
            'kabupaten_id' => 'required'
        ]);

        $edit = M_Kecamatan::findOrFail($kecamatan->kecamatan_id);
        $edit->kecamatan_nama = $request->input('kecamatan_nama');
        $edit->kabupaten_id = $request->input('kabupaten_id');
        $edit->save();

        return redirect()->route('kecamatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(M_Kecamatan $kecamatan)
    {
        $id = $kecamatan->kecamatan_id;
        M_Kecamatan::destroy($id);

        return redirect()->route('kecamatan.index');
    }
}
