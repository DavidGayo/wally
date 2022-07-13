<?php

namespace App\Http\Controllers;

use App\Models\CatEmpleo;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;

class CatEmpleoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleos = CatEmpleo::all();

        return view('empleo.index', ['empleos' => $empleos ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FlasherInterface $flasher)
    {
        $empleo = new CatEmpleo;
        $empleo->nombre_empleo = $request->input('nombre_empleo');
        $empleo->descripcion_empleo = $request->input('descripcion_empleo');
        $empleo->usuario_creo_id = auth()->user()->id;
        $empleo->save();

        $flasher->addSuccess('El empleo a sido registrado correctamente!!');

        return redirect()->route('empleo.index')->with([
            'mensaje_success' => 'El empleo a sido creado correctamente!!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatEmpleo  $catEmpleo
     * @return \Illuminate\Http\Response
     */
    public function show(CatEmpleo $catEmpleo, $id)
    {
        $empleo = $catEmpleo::find($id);

        return view('empleo.show', ['empleo' => $empleo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatEmpleo  $catEmpleo
     * @return \Illuminate\Http\Response
     */
    public function edit(CatEmpleo $catEmpleo, $id)
    {
        $empleo = $catEmpleo::find($id);

        return view('empleo.edit', ['empleo' => $empleo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatEmpleo  $catEmpleo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatEmpleo $catEmpleo, FlasherInterface $flasher, $id)
    {
        $empleo = CatEmpleo::find($id); 
        $empleo->nombre_empleo = $request->input('nombre_empleo');
        $empleo->descripcion_empleo = $request->input('descripcion_empleo');
        $empleo->usuario_creo_id =  auth()->user()->id;
        $empleo->update();

        $flasher->addInfo('El empleo a sido actualizado correctamente!!');

        return redirect()->route('empleo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatEmpleo  $catEmpleo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatEmpleo $catEmpleo, $id)
    {
        $empleo = CatEmpleo::find($id);
        $empleo->destroy();

        return redirect()->route('empleo.index')->with([
            'mensaje_danger' => 'El empleo a sido eliminado correctamente!!'
        ]);
    }
}
