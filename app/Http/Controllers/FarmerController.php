<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Http\Requests\StoreFarmerRequest;
use App\Http\Requests\UpdateFarmerRequest;

class FarmerController extends Controller
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
     * @param  \App\Http\Requests\StoreFarmerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFarmerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function show(Farmer $farmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmer $farmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFarmerRequest  $request
     * @param  \App\Models\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFarmerRequest $request, Farmer $farmer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmer $farmer)
    {
        //
    }
}
