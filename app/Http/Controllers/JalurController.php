<?php

namespace App\Http\Controllers;

use App\Models\Jalur;
use Illuminate\Http\Request;

class JalurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Jalur::all();
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
        $data = new Jalur();
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Jalur $jalur)
    {
        return Jalur::find($jalur);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jalur $jalur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jalur $jalur)
    {
        $data = Jalur::find($jalur);
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jalur $jalur)
    {
        $data = Jalur::find($jalur);
        $data->delete();
    }
}
