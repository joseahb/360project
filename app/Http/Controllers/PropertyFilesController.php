<?php

namespace App\Http\Controllers;

use App\Models\PropertyFiles;
use App\Http\Requests\StorePropertyFilesRequest;
use App\Http\Requests\UpdatePropertyFilesRequest;

class PropertyFilesController extends Controller
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
     * @param  \App\Http\Requests\StorePropertyFilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyFilesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyFiles  $propertyFiles
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyFiles $propertyFiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyFiles  $propertyFiles
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyFiles $propertyFiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyFilesRequest  $request
     * @param  \App\Models\PropertyFiles  $propertyFiles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyFilesRequest $request, PropertyFiles $propertyFiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyFiles  $propertyFiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyFiles $propertyFiles)
    {
        //
    }
}
