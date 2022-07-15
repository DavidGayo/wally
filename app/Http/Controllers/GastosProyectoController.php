<?php

namespace App\Http\Controllers;

use App\Models\CatEstatu;
use App\Models\CatProducto;
use Flasher\Prime\FlasherInterface;
use App\Models\GastosProyecto;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class GastosProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos = GastosProyecto::all();
        
        return view('gastos.index',['gastos' => $gastos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = CatProducto::all()->sortBy('nombre_producto');
        $proyectos = Proyecto::all()->sortBy('nombre_proyecto');

        return view('gastos.create', ['productos' => $productos, 'proyectos' => $proyectos ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FlasherInterface $flasher)
    {
        $gasto = new GastosProyecto;
        $gasto->producto_id = $request->input('producto');
        $gasto->proyecto_id = $request->input('proyecto');
        $gasto->precio_unitario = $request->input('precio_unitario');
        $gasto->cantidad = $request->input('cantidad');
        $gasto->total = $request->input('precio_unitario') * $request->input('cantidad');
        $gasto->usuario_creo_id = auth()->user()->id;
        $gasto->save();


        $proyecto = Proyecto::find($request->input('proyecto'));
        $proyecto->gasto = $proyecto->gasto + $gasto->total;
        $proyecto->update();
        

        $flasher->addSuccess('El gasto a sido registrado correctamente!!');

        return redirect()->route('gasto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GastosProyecto  $gastosProyecto
     * @return \Illuminate\Http\Response
     */
    public function show(GastosProyecto $gastosProyecto, $id)
    {
        $gasto = $gastosProyecto::find($id);

        return view('gastos.show', ['gasto' => $gasto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GastosProyecto  $gastosProyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(GastosProyecto $gastosProyecto, $id)
    {
        $productos = CatProducto::all()->sortBy('nombre_producto');
        $proyectos = Proyecto::all()->sortBy('nombre_proyecto');
        $gasto = $gastosProyecto::find($id);
        
        return view('gastos.edit',['productos' => $productos, 'proyectos' => $proyectos, 'gasto' => $gasto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GastosProyecto  $gastosProyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GastosProyecto $gastosProyecto, FlasherInterface $flasher, $id)
    {
        $gasto = $gastosProyecto::find($id);
        $gastoAnterior = $gasto->total;
        $gasto->producto_id = $request->input('producto');
        $gasto->proyecto_id = $request->input('proyecto');
        $gasto->precio_unitario = $request->input('precio_unitario');
        $gasto->cantidad = $request->input('cantidad');
        $gasto->total = $request->input('precio_unitario') * $request->input('cantidad');
        $gasto->usuario_creo_id = auth()->user()->id;
        $gasto->update(); 
        
        
        $proyecto = Proyecto::find($request->input('proyecto'));
        $totalAnterior = $proyecto->gasto -  $gastoAnterior;
        $proyecto->gasto = $totalAnterior + $gasto->total;
        $proyecto->update();
    
        $flasher->addInfo('El gasto a sido actualizado correctamente!!');

        return redirect()->route('gasto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GastosProyecto  $gastosProyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(GastosProyecto $gastosProyecto, $id)
    {
        $gasto = $gastosProyecto::find($id);
        $gasto->destroy();

        return redirect()->route('gastos.index')->with([
            'mensaje_danger' => 'El gasto a sido eliminado correctamente!!'
        ]);
    }
}
