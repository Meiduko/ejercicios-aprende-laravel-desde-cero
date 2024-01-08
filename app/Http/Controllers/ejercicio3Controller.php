<?php

namespace App\Http\Controllers;

use App\Models\ejercicio3;
use Illuminate\Http\Request;

class ejercicio3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:64',
            'description' => 'required|max:512',
            'price' => 'required|numeric|min:0.01',
            'has_battery' => 'required',
            'battery_duration' => 'required_unless:has_battery,false,null|numeric|min:0',
            'colors' => 'required|array',
            'colors.0' => 'required',
            'dimensions' => 'required',
            'dimensions.width' => 'required|numeric|min:0',
            'dimensions.height' => 'required|numeric|min:0',
            'dimensions.length' => 'required|numeric|min:0',
            'accessories' => 'required',
            'accessories.*.name' => 'string',
            'accessories.*.price' => 'numeric|min:0.01'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ejercicio3  $ejercicio3
     * @return \Illuminate\Http\Response
     */
    public function show(ejercicio3 $ejercicio3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ejercicio3  $ejercicio3
     * @return \Illuminate\Http\Response
     */
    public function edit(ejercicio3 $ejercicio3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ejercicio3  $ejercicio3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ejercicio3 $ejercicio3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ejercicio3  $ejercicio3
     * @return \Illuminate\Http\Response
     */
    public function destroy(ejercicio3 $ejercicio3)
    {
        //
    }
}
