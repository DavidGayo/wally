<?php

namespace App\Http\Controllers;

use App\Models\CatEstatu;
use App\Models\EmpleadosProyecto;
use App\Models\GastosProyecto;
use App\Models\Proyecto;
use App\Traits\TotalTrait;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    use TotalTrait;
    
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
    public function store(Request $request, FlasherInterface $flasher)
    {
        $proyecto = new Proyecto;
        $proyecto->nombre_proyecto = $request->input('nombre_proyecto');
        $proyecto->descripcion_proyecto = $request->input('descripcion_proyecto');
        $proyecto->presupuesto = $request->input('presupuesto');
        $fecha_aux = explode("/", $request->input('fecha_inicio'));
        $fecha_inicio = $fecha_aux[2]."-".$fecha_aux[1]."-".$fecha_aux[0];
        $fecha_aux = explode("/", $request->input('fecha_fin'));
        $fecha_fin = $fecha_aux[2]."-".$fecha_aux[1]."-".$fecha_aux[0];
        $proyecto->fecha_inicio = $fecha_inicio;
        $proyecto->fecha_fin = $fecha_fin;
        $proyecto->estatus_id = $request->input('estatus');
        $proyecto->usuario_creo_id = auth()->user()->id;
        $proyecto->save();

        $flasher->addSuccess('El proyecto a sido creado correctamente!!');

        return redirect()->route('proyecto.index');
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
        $gastos = GastosProyecto::gastos($id);
        $empPros = EmpleadosProyecto::empleados($id);

        $totalGasto = $this->total($gastos);
        $totalEmpleado = $this->total($empPros);


        return view('proyecto.show', ['proyecto' => $proyecto, 'gastos' => $gastos, 'empPros' => $empPros, 'totalGasto' => $totalGasto, 'totalEmpleado' => $totalEmpleado]);
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
    public function update(Request $request, proyecto $proyectos, FlasherInterface $flasher, $id)
    {
        $proyecto = $proyectos::find($id);
        $proyecto->nombre_proyecto = $request->input('nombre_proyecto');
        $proyecto->descripcion_proyecto = $request->input('descripcion_proyecto');
        $proyecto->presupuesto = $request->input('presupuesto');
        $fecha_aux = explode("/", $request->input('fecha_inicio'));
        $fecha_inicio = $fecha_aux[2]."-".$fecha_aux[1]."-".$fecha_aux[0];
        $fecha_aux = explode("/", $request->input('fecha_fin'));
        $fecha_fin = $fecha_aux[2]."-".$fecha_aux[1]."-".$fecha_aux[0];
        $proyecto->fecha_inicio = $fecha_inicio;
        $proyecto->fecha_fin = $fecha_fin;
        $proyecto->estatus_id = $request->input('estatus');
        $proyecto->usuario_creo_id = auth()->user()->id;
        $proyecto->update();

        $flasher->addInfo('El proyecto a sido actualizado correctamente!!');

        return redirect()->route('proyecto.index');
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
