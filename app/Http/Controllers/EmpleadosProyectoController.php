<?php

namespace App\Http\Controllers;

use App\Models\CatEmpleado;
use App\Models\CatEmpleo;
use App\Models\EmpleadosProyecto;
use Flasher\Prime\FlasherInterface;
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
        $empleados = CatEmpleado::all()->sortBy('nombre_empleado');
        $proyectos = Proyecto::all()->sortBy('nombre_proyecto');
        $empleos = CatEmpleo::all()->sortBy('nombre_empleo');

        return view('empro.create', ['empleados' => $empleados, 'proyectos' => $proyectos, 'empleos' => $empleos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FlasherInterface $flasher)
    {
        $empPro = new EmpleadosProyecto;
        $empPro->empleado_id = $request->input('empleado');
        $empPro->proyecto_id = $request->input('proyecto');
        $empPro->empleo_id = $request->input('empleo');
        $empPro->precio_hora = $request->input('precio_hora');
        $empPro->horas = $request->input('horas');
        $empPro->dias = $request->input('dias');
        if($request->input('precio_hora') > 0  && $request->input('horas') > 0 && $request->input('dias') > 0 ){
            $empPro->total = $request->input('precio_hora') * $request->input('horas') * $request->input('dias');
        }
        else{
            $empPro->total = 0;
        }
        $empPro->usuario_creo_id = auth()->user()->id;
        $empPro->save();

        if($empPro->total > 0){
            $proyecto = Proyecto::find($request->input('proyecto'));
            $proyecto->gasto = $proyecto->gasto + $empPro->total;
            $proyecto->update();
        }

        $flasher->addSuccess('El mpleado a sido registrado correctamente!!');

        return redirect()->route('empleado-proyecto.index');

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
        $empleados = CatEmpleado::all()->sortBy('nombre_empleado');
        $proyectos = Proyecto::all()->sortBy('nombre_proyecto');
        $empleos = CatEmpleo::all()->sortBy('nombre_empleo');
        $empPro = $empleadosProyecto::find($id);

        return view('empro.edit', ['empleados' => $empleados, 'proyectos' => $proyectos, 'empleos' => $empleos, 'empPro' => $empPro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmpleadosProyecto  $empleadosProyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpleadosProyecto $empleadosProyecto, FlasherInterface $flasher, $id)
    {
        $empPro = $empleadosProyecto::find($id);
        $gastoAnterior = $empPro->total;
        $empPro->empleado_id = $request->input('empleado');
        $empPro->proyecto_id = $request->input('proyecto');
        $empPro->empleo_id = $request->input('empleo');
        $empPro->precio_hora = $request->input('precio_hora');
        $empPro->horas = $request->input('horas');
        $empPro->dias = $request->input('dias');
        if($request->input('precio_hora') > 0  && $request->input('horas') > 0 && $request->input('dias') > 0 ){
            $empPro->total = $request->input('precio_hora') * $request->input('horas') * $request->input('dias');
        }
        else{
            $empPro->total = 0;
        }
        $empPro->usuario_creo_id = auth()->user()->id;
        $empPro->update();

        $proyecto = Proyecto::find($request->input('proyecto'));
        $totalAnterior = $proyecto->gasto -  $gastoAnterior;
        $proyecto->gasto = $totalAnterior + $empPro->total;
        $proyecto->update();

        $flasher->addInfo('El empleado a sido actualizado correctamente!!');

        return redirect()->route('empleado-proyecto.index');
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
