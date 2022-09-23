<?php

namespace App\Http\Controllers;

use App\Models\CompanyOrder;
use App\Http\Requests\StoreCompanyOrderRequest;
use App\Http\Requests\UpdateCompanyOrderRequest;

class CompanyOrderController extends Controller
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
     * @param  \App\Http\Requests\StoreCompanyOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyOrder  $companyOrder
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyOrder $companyOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyOrder  $companyOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyOrder $companyOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyOrderRequest  $request
     * @param  \App\Models\CompanyOrder  $companyOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyOrderRequest $request, CompanyOrder $companyOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyOrder  $companyOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyOrder $companyOrder)
    {
        //
    }
}
