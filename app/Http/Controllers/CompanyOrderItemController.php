<?php

namespace App\Http\Controllers;

use App\Models\CompanyOrderItem;
use App\Http\Requests\StoreCompanyOrderItemRequest;
use App\Http\Requests\UpdateCompanyOrderItemRequest;

class CompanyOrderItemController extends Controller
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
     * @param  \App\Http\Requests\StoreCompanyOrderItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyOrderItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyOrderItem  $companyOrderItem
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyOrderItem $companyOrderItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyOrderItem  $companyOrderItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyOrderItem $companyOrderItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyOrderItemRequest  $request
     * @param  \App\Models\CompanyOrderItem  $companyOrderItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyOrderItemRequest $request, CompanyOrderItem $companyOrderItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyOrderItem  $companyOrderItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyOrderItem $companyOrderItem)
    {
        //
    }
}
