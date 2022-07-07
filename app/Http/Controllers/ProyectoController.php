<?php

namespace App\Http\Controllers;

use App\Models\CatEstatu;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();

        return view('proyecto.index', ['proyectos' => $proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estatus = CatEstatu::all();

        return view('proyecto.create', ['estatus' => $estatus]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = new Proyecto;
        $proyecto->nombre_proyecto = $request->input('nombre_proyecto');
        $proyecto->descripcion_proyecto = $request->input('descripcion_proyecto');
        $proyecto->costo = $request->input('costo');
        $proyecto->fecha_inicio = $request->input('fecha_inicio');
        $proyecto->fecha_fin = $request->input('fecha_fin');
        $proyecto->estatus_id = $request->input('estatus');
        $proyecto->usuario_creo_id = auth()->user()->id;
        $proyecto->save();

        return redirect()->route('proyecto.index')->with([
            'mensaje_info' => 'El proyecto a sido creado correctamente!!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyectos, $id)
    {
        $proyecto = $proyectos::find($id);

        return view('proyecto.show', ['proyecto' => $proyecto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyectos, $id)
    {
         $estatus = CatEstatu::all();
         $proyecto = $proyectos::find($id);

        return view('proyecto.edit', ['estatus' => $estatus, 'proyecto' => $proyecto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proyecto $proyectos, $id)
    {
        $proyecto = $proyectos::find($id);
        $proyecto->nombre_proyecto = $request->input('nombre_proyecto');
        $proyecto->descripcion_proyecto = $request->input('descripcion_proyecto');
        $proyectos->costo = $request->input('costo');
        $proyecto->fecha_inicio = $request->input('fecha_inicio');
        $proyecto->fecha_fin = $request->input('fecha_fin');
        $proyecto->estatus_id = $request->input('estatus');
        $proyecto->usuario_creo_id = auth()->user()->id;
        $proyecto->update();

        return redirect()->route('proyecto.index')->with([
            'mensaje_info' => 'El proyecto a sido actualizado correctamente!!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyectos, $id)
    {
        $proyecto = $proyectos::find($id);
        $proyecto->destroy();

        return redirect()->route('proyecto.index')->with([
            'mensaje_danger' => 'El proyecto a sido eliminado correctamente!!'
        ]);
    }
}
