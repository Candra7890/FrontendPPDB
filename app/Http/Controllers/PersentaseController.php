<?php

namespace App\Http\Controllers;

use App\Models\Persentase;
use Illuminate\Http\Request;

class PersentaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Persentase::all();
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
        $data = new Persentase();
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Persentase $persentase)
    {
        return Persentase::find($persentase);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persentase $persentase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persentase $persentase)
    {
        $data = Persentase::find($persentase);
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persentase $persentase)
    {
        $data = Persentase::find($persentase);
        $data->delete();
    }
}
