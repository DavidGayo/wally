@extends('layouts.layout')

    @section('header')
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Gastos-Proyecto                            
                    </h3>

                    <span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="{{ route('gasto.index') }}" class="kt-subheader__breadcrumbs-link">
                            Gastos-Proyecto                        
                        </a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <span class="kt-subheader__breadcrumbs-link">
                            Crear
                        </span>
                    </div>
                </div>        
            </div>
        </div>
        <!-- end:: Subheader -->
    @stop

    @section('content')
        
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Producto
                    </h3>
                </div>
            </div>

            <form class="kt-form kt-form--label-right" method="POST" action="{{ route('gasto.store') }}">
                @csrf
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label for="proyecto" class="col-2 col-form-label">Proyecto</label>
                        <div class="col-10">
                            <select class="form-control" id="proyecto" name="proyecto">
                                @foreach ($proyectos as $proyecto)
                                    <option value="{{ $proyecto->id }}">{{ $proyecto->nombre_proyecto }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="producto" class="col-2 col-form-label">Producto</label>
                        <div class="col-10">
                            <select class="form-control" id="producto" name="producto">
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->nombre_producto }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="precio_unitario" class="col-2 col-form-label">Precio unitario</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="precio_unitario" name="precio_unitario" step=".01">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cantidad" class="col-2 col-form-label">Cantidad</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="cantidad" name="cantidad" step=".01">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total" class="col-2 col-form-label">Total</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="total" name="total" step=".01">
                        </div>
                    </div>   
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-10">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <button type="reset" class="btn btn-secondary">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @stop

    @section('js')
        <script type="text/javascript">
            let precio = document.querySelector("#precio_unitario");
            let cantidad = document.querySelector("#cantidad");
            let total = document.querySelector("#total");
            precio.addEventListener("change", resultado);
            cantidad.addEventListener("change", resultado);
            
            function resultado(){
                if(precio.value != '' &&  cantidad.value != ''){
                    if(precio.value > 0 &&  cantidad.value > 0 ){
                        total.value = (precio.value * cantidad.value).toFixed(2);
                     }
                }
            }
        </script>
    @stop