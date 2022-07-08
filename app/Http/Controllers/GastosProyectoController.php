<?php

namespace App\Http\Controllers;

use App\Models\CatEstatu;
use App\Models\CatProducto;
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
        $productos = CatProducto::all();
        $proyectos = Proyecto::all();
        $estatus = CatEstatu::all();

        return view('gastos.create', ['productos' => $productos, 'proyectos' => $proyectos, 'estatus' => $estatus ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gasto = new GastosProyecto;
        $gasto->producto_id = $request->input('producto');
        $gasto->proyecto_id = $request->input('proyecto');
        $gasto->precio_unitario = $request->input('precio_unitario');
        $gasto->cantidad = $request->input('cantidad');
        $gasto->total = $request->input('total');
        $gasto->usuario_creo_id = auth()->user()->id;
        $gasto->save();

        return redirect()->route('gasto.index')->with([
            'mensaje_success' => 'El gasto a sido creado correctamente!!'
        ]);
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
        $productos = CatProducto::all();
        $proyectos = Proyecto::all();
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
    public function update(Request $request, GastosProyecto $gastosProyecto, $id)
    {
        $gasto = $gastosProyecto::find($id);
        $gasto->producto_id = $request->input('producto_id');
        $gasto->proyecto_id = $request->input('proyecto_id');
        $gasto->precio_unitario = $request->input('precio_unitario');
        $gasto->cantidad = $request->input('cantidad');
        $gasto->total = $request->input('total');
        $gasto->usuario_creo_id = auth()->user()->id;
        $gasto->update();

        return redirect()->route('gastos.index')->with([
            'mensaje_info' => 'El gato a sido actualizado correctamente!!'
        ]);
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
