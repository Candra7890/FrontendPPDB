<?php

namespace App\Http\Controllers;

use App\Models\Detil_periode;
use Illuminate\Http\Request;

class DetilPeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Detil_periode::all();
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
        $data = new Detil_periode();
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Detil_periode $detil_periode)
    {
        return Detil_periode::find($detil_periode);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detil_periode $detil_periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detil_periode $detil_periode)
    {
        $data = Detil_periode::find($detil_periode);
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detil_periode $detil_periode)
    {
        $data = Detil_periode::find($detil_periode);
        $data->delete();
    }
}
