<?php

namespace App\Http\Controllers;

use App\Models\PropertyAddresses;
use App\Http\Requests\StorePropertyAddressesRequest;
use App\Http\Requests\UpdatePropertyAddressesRequest;

class PropertyAddressesController extends Controller
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
     * @param  \App\Http\Requests\StorePropertyAddressesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyAddressesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyAddresses  $propertyAddresses
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyAddresses $propertyAddresses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyAddresses  $propertyAddresses
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyAddresses $propertyAddresses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyAddressesRequest  $request
     * @param  \App\Models\PropertyAddresses  $propertyAddresses
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyAddressesRequest $request, PropertyAddresses $propertyAddresses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyAddresses  $propertyAddresses
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyAddresses $propertyAddresses)
    {
        //
    }
}
