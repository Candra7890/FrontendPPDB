<?php

namespace App\Http\Controllers;

use App\Models\M_Banjar;
use App\Models\M_Desa;
use Illuminate\Http\Request;

class MBanjarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banjars = M_Banjar::with('M_Desa')->get();
        $desas = M_Desa::all();
        return view('crud.banjar', compact('banjars', 'desas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'banjar_nama' => 'required',
            'desa_id' => 'required',
            'lintang' => 'required|max:90|min:-90',
            'bujur' => 'required|max:180|min:-180'
        ]);

        $banjar = new M_Banjar;
        $banjar->banjar_nama = $request->input('banjar_nama');
        $banjar->desa_id = $request->input('desa_id');
        $banjar->lintang = $request->input('lintang');
        $banjar->bujur = $request->input('bujur');
        $banjar->save();

        return redirect()->route('banjar.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, M_Banjar $banjar)
    {
        $request->validate([
            'banjar_nama' => 'required',
            'desa_id' => 'required',
            'lintang' => 'required|max:90|min:-90',
            'bujur' => 'required|max:180|min:-180'
        ]);

        $edit = M_Banjar::findOrFail($banjar->banjar_id);
        $edit->banjar_nama = $request->input('banjar_nama');
        $edit->desa_id = $request->input('desa_id');
        $edit->lintang = $request->input('lintang');
        $edit->bujur = $request->input('bujur');
        $edit->save();

        return redirect()->route('banjar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(M_Banjar $banjar)
    {
        $id = $banjar->banjar_id;
        M_Banjar::destroy($id);

        return redirect()->route('banjar.index');
    }
}
