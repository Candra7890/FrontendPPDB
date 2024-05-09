<?php

namespace App\Http\Controllers;

use App\Models\Jenjang_sekolah;
use Illuminate\Http\Request;

class JenjangSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Jenjang_sekolah::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Jenjang_sekolah();
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenjang_sekolah $jenjang_sekolah)
    {
        return Jenjang_sekolah::find($jenjang_sekolah);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenjang_sekolah $jenjang_sekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jenjang_sekolah $jenjang_sekolah)
    {
        $data = Jenjang_sekolah::find($jenjang_sekolah);
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenjang_sekolah $jenjang_sekolah)
    {
        $data = Jenjang_sekolah::find($jenjang_sekolah);
        $data->delete();
    }
}
