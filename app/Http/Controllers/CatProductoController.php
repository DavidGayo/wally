<?php

namespace App\Http\Controllers;

use App\Models\CatProducto;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;

class CatProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $productos = CatProducto::all();

       return view('producto.index',['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FlasherInterface $flasher)
    {
        $producto = new CatProducto;
        $producto->nombre_producto = $request->input('nombre_producto');
        $producto->descripcion_producto = $request->input('descripcion_producto');
        $producto->usuario_creo_id = auth()->user()->id;
        $producto->save();

        $flasher->addSuccess('El producto a sido registrado correctamente!!');

        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatProducto  $catProducto
     * @return \Illuminate\Http\Response
     */
    public function show(CatProducto $catProducto, $id)
    {
        $producto = $catProducto::find($id);

        return view('producto.show', ['producto' => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatProducto  $catProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(CatProducto $catProducto, $id)
    {
        $producto = $catProducto::find($id);

        return view('producto.edit', ['producto' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatProducto  $catProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatProducto $catProducto, FlasherInterface $flasher, $id)
    {
        $producto = $catProducto::find($id);
        $producto->nombre_producto = $request->input('nombre_producto');
        $producto->descripcion_producto = $request->input('descripcion_producto');
        $producto->usuario_creo_id = auth()->user()->id;
        $producto->update();

        $flasher->addInfo('El producto a sido actualizado correctamente!!');

         return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatProducto  $catProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatProducto $catProducto, $id)
    {
        $producto = $catProducto::find($id);
        $producto->destroy();
        return redirect()->route('producto.index')->with([
            'mensaje_success' => 'El producto a sido eliminado correctamente!!'
        ]);
    }
}
