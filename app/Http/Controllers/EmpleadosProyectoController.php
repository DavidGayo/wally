<?php

namespace App\Http\Controllers;

use App\Models\CatEmpleado;
use App\Models\CatEmpleo;
use App\Models\EmpleadosProyecto;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class EmpleadosProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empPros = EmpleadosProyecto::all();
        

        return view('empro.index', ['empPros' => $empPros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = CatEmpleado::all();
        $proyectos = Proyecto::all();
        $empleos = CatEmpleo::all();

        return view('empro.create', ['empleados' => $empleados, 'proyectos' => $proyectos, 'empleos' => $empleos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empPro = new EmpleadosProyecto;
        $empPro->empleado_id = $request->input('empleado');
        $empPro->proyecto_id = $request->input('proyecto');
        $empPro->empleo_id = $request->input('empleo');
        $empPro->precio_hora = $request->input('precio_hora');
        $empPro->horas = $request->input('horas');
        $empPro->dias = $request->input('dias');
        $empPro->total = $request->input('total');
        $empPro->usuario_creo_id = auth()->user()->id;
        $empPro->save();

        return redirect()->route('empleado-proyecto.index')->with([
            'mensaje_info' => 'El empleado a sido actualizado correctamente!!'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmpleadosProyecto  $empleadosProyecto
     * @return \Illuminate\Http\Response
     */
    public function show(EmpleadosProyecto $empleadosProyecto, $id)
    {
        $empPro = EmpleadosProyecto::find($id);

        return view('empro.show', ['empPro' => $empPro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmpleadosProyecto  $empleadosProyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(EmpleadosProyecto $empleadosProyecto, $id)
    {
        $empleados = CatEmpleado::all();
        $proyectos = Proyecto::all();
        $empleos = CatEmpleo::all();
        $empPro = $empleadosProyectos::find($id);

        return view('empro.create', ['empleados' => $empleados, 'proyectos' => $proyectos, 'empleos' => $empleos, 'empPro' => $empPro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmpleadosProyecto  $empleadosProyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpleadosProyecto $empleadosProyecto)
    {
        $empPro = $empleadosProyectos::find($id);
        $empPro->empleado_id = $request->input('empleado');
        $empPro->proyecto_id = $request->input('proyecto');
        $empPro->empleo_id = $request->input('empleo');
        $empPro->precio_hora = $request->input('precio_hora');
        $empPro->horas = $request->input('horas');
        $empPro->dias = $request->input('dias');
        $empPro->total = $request->input('total');
        $empPro->usuario_creo_id = auth()->user()->id;
        $empPro->update();

        return redirect()->route('empleado-proyecto.index')->with([
            'mensaje_info' => 'El empleado a sido actualizado correctamente!!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmpleadosProyecto  $empleadosProyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpleadosProyecto $empleadosProyecto, $id)
    {
        $empPro = $empleadosProyectos::find($id);
        $empPro->destroy();

        return redirect()->route('empleado-proyecto.index')->with([
            'mensaje_danger' => 'El empleado a sido eliminado correctamente!!'
        ]);
    }
}
