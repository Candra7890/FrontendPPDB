<?php

namespace App\Http\Controllers;

use App\Models\M_Desa;
use App\Models\M_Kecamatan;
use Illuminate\Http\Request;

class MDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desas = M_Desa::with('M_Kecamatan')->get();
        $kecamatans = M_Kecamatan::all();
        return view('crud.desa', compact('desas', 'kecamatans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'desa_nama' => 'required',
            'kecamatan_id' => 'required'
        ]);

        $desa = new M_Desa;
        $desa->desa_nama = $request->input('desa_nama');
        $desa->kecamatan_id = $request->input('kecamatan_id');
        $desa->save();

        return redirect()->route('desa.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, M_Desa $desa)
    {
        $request->validate([
            'desa_nama' => 'required',
            'kecamatan_id' => 'required'
        ]);

        $edit = M_Desa::findOrFail($desa->desa_id);
        $edit->desa_nama = $request->input('desa_nama');
        $edit->kecamatan_id = $request->input('kecamatan_id');
        $edit->save();

        return redirect()->route('desa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(M_Desa $desa)
    {
        $id = $desa->desa_id;
        M_Desa::destroy($id);

        return redirect()->route('desa.index');
    }
}
