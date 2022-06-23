<?php

namespace App\Http\Controllers;

use App\Models\CatEstatu;
use Illuminate\Http\Request;

class CatEstatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estatus = CatEstatu::all();
        return $estatus;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatEstatu  $catEstatu
     * @return \Illuminate\Http\Response
     */
    public function show(CatEstatu $catEstatu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatEstatu  $catEstatu
     * @return \Illuminate\Http\Response
     */
    public function edit(CatEstatu $catEstatu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatEstatu  $catEstatu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatEstatu $catEstatu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatEstatu  $catEstatu
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatEstatu $catEstatu)
    {
        //
    }

}
