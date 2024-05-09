<?php

namespace App\Http\Controllers;

use App\Models\Jalur_berkas;
use Illuminate\Http\Request;

class JalurBerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Jalur_berkas::all();
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
        $data = new Jalur_berkas();
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Jalur_berkas $jalur_berkas)
    {
        return Jalur_berkas::find($jalur_berkas);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jalur_berkas $jalur_berkas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jalur_berkas $jalur_berkas)
    {
        $data = Jalur_berkas::find($jalur_berkas);
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jalur_berkas $jalur_berkas)
    {
        $data = Jalur_berkas::find($jalur_berkas);
        $data->delete();
    }
}
