<?php

namespace App\Http\Controllers;

use App\Models\CatEmpleado;
use App\Models\CatEstatu;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;

class CatEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = catEmpleado::all();

        return view('empleado.index',['empleados' => $empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estatus = CatEstatu::all();
        return view('empleado.create', ['estatus' => $estatus]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FlasherInterface $flasher)
    {
        $empleado =  new CatEmpleado;
        $empleado->nombre_empleado = $request->input('nombre_empleado');
        $empleado->direccion_empleado = $request->input('direccion_empleado');
        $empleado->estatus_id = $request->input('estatus');
        $empleado->usuario_creo_id = auth()->user()->id;
        $empleado->save();

        $flasher->addSuccess('El empleado a sido registrado correctamente!!');

        return redirect()->route('empleado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catEmpleado  $catEmpleado
     * @return \Illuminate\Http\Response
     */
    public function show(CatEmpleado $catEmpleado, $id)
    {
        $empleado = $catEmpleado::find($id);

        return view('empleado.show',['empleado' => $empleado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatEmpleado  $catEmpleado
     * @return \Illuminate\Http\Response
     */
    public function edit(CatEmpleado $catEmpleado, $id)
    {
        $empleado = $catEmpleado::find($id);
        $estatus = CatEstatu::all();

        return view('empleado.edit', ['empleado' => $empleado, 'estatus' => $estatus ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatEmpleado  $catEmpleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatEmpleado $catEmpleado, FlasherInterface $flasher, $id)
    {
        $empleado = $catEmpleado::find($id);
        $empleado->nombre_empleado = $request->input('nombre_empleado');
        $empleado->direccion_empleado = $request->input('direccion_empleado');
        $empleado->estatus_id = $request->input('estatus');
        $empleado->usuario_creo_id = auth()->user()->id;
        $empleado->update();

        $flasher->addInfo('El empleado a sido actualizado correctamente!!');

        return redirect()->route('empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatEmpleado  $catEmpleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatEmpleado $catEmpleado, $id)
    {
        $empleado = $catEmpleado::find($id);
        $empleado->destroy();

        return redirect()->route('empleado.index')->with([
            'mensaje_danger' => 'El empleado a sido eliminado correctamente!!'
        ]);
    }
}
