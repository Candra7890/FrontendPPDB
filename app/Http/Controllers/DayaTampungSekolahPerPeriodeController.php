<?php

namespace App\Http\Controllers;

use App\Models\Daya_tampung_sekolah_per_periode;
use Illuminate\Http\Request;

class DayaTampungSekolahPerPeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Daya_tampung_sekolah_per_periode::all();
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
        $data = new Daya_tampung_sekolah_per_periode();
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Daya_tampung_sekolah_per_periode $daya_tampung_sekolah_per_periode)
    {
        return Daya_tampung_sekolah_per_periode::find($daya_tampung_sekolah_per_periode);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daya_tampung_sekolah_per_periode $daya_tampung_sekolah_per_periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daya_tampung_sekolah_per_periode $daya_tampung_sekolah_per_periode)
    {
        $data = Daya_tampung_sekolah_per_periode::find($daya_tampung_sekolah_per_periode);
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daya_tampung_sekolah_per_periode $daya_tampung_sekolah_per_periode)
    {
        $data = Daya_tampung_sekolah_per_periode::find($daya_tampung_sekolah_per_periode);
        $data->delete();
    }
}
