<?php

namespace App\Http\Controllers;

use App\Models\BranchDetail;
use App\Http\Requests\StoreBranchDetailRequest;
use App\Http\Requests\UpdateBranchDetailRequest;

class BranchDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreBranchDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBranchDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BranchDetail  $branchDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BranchDetail $branchDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BranchDetail  $branchDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(BranchDetail $branchDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBranchDetailRequest  $request
     * @param  \App\Models\BranchDetail  $branchDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBranchDetailRequest $request, BranchDetail $branchDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BranchDetail  $branchDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(BranchDetail $branchDetail)
    {
        //
    }
}
