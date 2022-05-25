<?php

namespace App\Http\Controllers;

use App\Models\cat_estatu;
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
        return "hola";
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
     * @param  \App\Models\cat_estatu  $cat_estatu
     * @return \Illuminate\Http\Response
     */
    public function show(cat_estatu $cat_estatu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cat_estatu  $cat_estatu
     * @return \Illuminate\Http\Response
     */
    public function edit(cat_estatu $cat_estatu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cat_estatu  $cat_estatu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cat_estatu $cat_estatu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cat_estatu  $cat_estatu
     * @return \Illuminate\Http\Response
     */
    public function destroy(cat_estatu $cat_estatu)
    {
        //
    }


    /**
     * Display saludo.
     *
     * @return \Illuminate\Http\Response
     */
    public function saludo(){

    }
}
