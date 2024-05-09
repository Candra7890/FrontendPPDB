<?php

namespace App\Http\Controllers;

use App\Models\List_syarat;
use Illuminate\Http\Request;

class ListSyaratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return List_syarat::all();
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
        $data = new List_syarat();
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(List_syarat $list_syarat)
    {
        return List_syarat::find($list_syarat);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(List_syarat $list_syarat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, List_syarat $list_syarat)
    {
        $data = List_syarat::find($list_syarat);
        $data->fill($request->all())->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(List_syarat $list_syarat)
    {
        $data = List_syarat::find($list_syarat);
        $data->delete();
    }
}
