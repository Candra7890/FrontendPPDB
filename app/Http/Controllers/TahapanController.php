<?php

namespace App\Http\Controllers;

use App\Models\Tahapan;
use Illuminate\Http\Request;

class TahapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tahapan::all();
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
        $data = new Tahapan();
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Tahapan $tahapan)
    {
        return Tahapan::find($tahapan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tahapan $tahapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tahapan $tahapan)
    {
        $data = Tahapan::find($tahapan);
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tahapan $tahapan)
    {
        $data = Tahapan::find($tahapan);
        $data->delete();
    }
}
