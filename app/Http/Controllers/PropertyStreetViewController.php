<?php

namespace App\Http\Controllers;

use App\Models\PropertyStreetView;
use App\Http\Requests\StorePropertyStreetViewRequest;
use App\Http\Requests\UpdatePropertyStreetViewRequest;

class PropertyStreetViewController extends Controller
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
     * @param  \App\Http\Requests\StorePropertyStreetViewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyStreetViewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyStreetView  $propertyStreetView
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyStreetView $propertyStreetView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyStreetView  $propertyStreetView
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyStreetView $propertyStreetView)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyStreetViewRequest  $request
     * @param  \App\Models\PropertyStreetView  $propertyStreetView
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyStreetViewRequest $request, PropertyStreetView $propertyStreetView)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyStreetView  $propertyStreetView
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyStreetView $propertyStreetView)
    {
        //
    }
}
