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
                            Editar
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
                        Gasto
                    </h3>
                </div>
            </div>

            <form class="kt-form kt-form--label-right" method="POST" action="{{ route('gasto.update', ['gasto' => $gasto->id ] ) }}">
                @method('PUT')
                @csrf
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label for="proyecto" class="col-2 col-form-label">Proyecto</label>
                        <div class="col-10">
                            <select class="form-control kt-selectpicker" id="proyecto" name="proyecto">
                                @foreach ($proyectos as $proyecto)
                                    <option value="{{ $proyecto->id }}" @if( $gasto->proyecto->id == $proyecto->id) selected @endif>{{ $proyecto->nombre_proyecto }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="producto" class="col-2 col-form-label">Producto</label>
                        <div class="col-10">
                            <select class="form-control kt-selectpicker" id="producto" name="producto">
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->id }}" @if( $gasto->producto->id == $producto->id) selected @endif>{{ $producto->nombre_producto }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="precio_unitario" class="col-2 col-form-label">Precio unitario</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="precio_unitario" name="precio_unitario" value="{{ $gasto->precio_unitario }}" step=".01">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cantidad" class="col-2 col-form-label">Cantidad</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="cantidad" name="cantidad" value="{{ $gasto->cantidad }}" step=".01">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total" class="col-2 col-form-label">Total</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="total" name="total" value="{{ $gasto->total }}" step=".01">
                        </div>
                    </div>   
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-10">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                                <a href="{{ route('gasto.index') }}" role="button" class="btn btn-secondary">Cancelar</a>
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
                    total.value = (precio.value * cantidad.value).toFixed(2);
                }
            }
        </script>
    @stop