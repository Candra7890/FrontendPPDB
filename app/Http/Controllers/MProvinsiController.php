<?php

namespace App\Http\Controllers;

use App\Models\M_provinsi;
use Illuminate\Http\Request;

class MProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinsis = M_provinsi::all();
        return view ('crud.provinsi', compact('provinsis'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'provinsi_nama' => 'required'
        ]);

        $provinsi = new M_provinsi;
        $provinsi->provinsi_nama = $request->input('provinsi_nama');
        $provinsi->save();

        return redirect()->route('provinsi.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(M_provinsi $provinsi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, M_provinsi $provinsi)
    {
        $request->validate([
            'provinsi_nama' => 'required'
        ]);

        $edit = M_provinsi::findOrFail($provinsi->provinsi_id);
        $edit->provinsi_nama = $request->input('provinsi_nama');
        $edit->save();

        return redirect()->route('provinsi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(M_provinsi $provinsi)
    {
        $id = $provinsi->provinsi_id;
        M_provinsi::destroy($id);

        return redirect()->route('provinsi.index');
    }
}
