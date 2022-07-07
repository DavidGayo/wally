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
        
        return view('estatus.index',['estatus' => $estatus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estatus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estatus = new CatEstatu;
        $estatus->nombre_estatus = $request->input('nombre_estatus');
        $estatus->save();

        return redirect()->route('cat_estatus.index')->with([
            'mensaje_success' => 'El estatus a sido creado correctamente!!'
        ]);
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
    public function edit(CatEstatu $catEstatu, $id)
    {
        $estatus = $catEstatu::find($id);
        
        return view('estatus.edit', ['estatus' => $estatus]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatEstatu  $catEstatu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatEstatu $catEstatu, $id)
    {
        $estatus = $catEstatu::find($id);
        $estatus->nombre_estatus = $request->input('nombre_estatus');
        $estatus->update();

        return redirect()->route('cat_estatus.index')->with([
            'mensaje_info' => 'El estatus a sido actualizado correctamente!!'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatEstatu  $catEstatu
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatEstatu $catEstatu, $id)
    {
        $estatus = $catEstatu::find($id);
        $estatus->destroy();

        return redirect()->route('cat_estatus.index')->with([
            'mensaje_danger' => 'El estatus a sido eliminado correctamente!!'
        ]);
    }

}
