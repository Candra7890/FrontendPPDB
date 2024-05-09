<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Sekolah::all();
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
        $data = new Sekolah();
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Sekolah $sekolah)
    {
        return Sekolah::find($sekolah);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sekolah $sekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        $data = Sekolah::find($sekolah);
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sekolah $sekolah)
    {
        $data = Sekolah::find($sekolah);
        $data->delete();
    }
}
