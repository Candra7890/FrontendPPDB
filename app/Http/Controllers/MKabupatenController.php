<?php

namespace App\Http\Controllers;

use App\Models\M_kabupaten;
use App\Models\M_provinsi;
use Illuminate\Http\Request;

class MKabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kabupatens = M_kabupaten::with('M_provinsi')->get();
        $provinsis = M_provinsi::all();
        return view('crud.kabupaten', compact('kabupatens', 'provinsis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kabupaten_nama' => 'required',
            'provinsi_id' => 'required'
        ]);

        $kabupaten = new M_kabupaten;
        $kabupaten->kabupaten_nama = $request->input('kabupaten_nama');
        $kabupaten->provinsi_id = $request->input('provinsi_id');
        $kabupaten->save();

        return redirect()->route('kabupaten.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, M_kabupaten $kabupaten)
    {
        $request->validate([
            'kabupaten_nama' => 'required',
            'provinsi_id' => 'required'
        ]);

        $edit = M_kabupaten::findOrFail($kabupaten->kabupaten_id);
        $edit->kabupaten_nama = $request->input('kabupaten_nama');
        $edit->provinsi_id = $request->input('provinsi_id');
        $edit->save();

        return redirect()->route('kabupaten.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(M_kabupaten $kabupaten)
    {
        $id = $kabupaten->kabupaten_id;
        M_kabupaten::destroy($id);

        return redirect()->route('kabupaten.index');
    }
}
