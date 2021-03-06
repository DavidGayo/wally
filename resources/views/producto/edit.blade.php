@extends('layouts.layout')

    @section('header')
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Productos
                    </h3>

                    <span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="{{ route('producto.index') }}" class="kt-subheader__breadcrumbs-link">
                            Productos                        
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
                        Producto
                    </h3>
                </div>
            </div>

            <form class="kt-form kt-form--label-right" method="POST" action="{{ route('producto.update', ['producto' => $producto->id ] ) }}">
 				@method('PUT')
                @csrf
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label for="nombre_producto" class="col-2 col-form-label">Nombre</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="nombre_producto" name="nombre_producto" value="{{ $producto->nombre_producto }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion_producto" class="col-2 col-form-label">Descripci??n</label>
                        <div class="col-10">
                            <textarea class="form-control" id="descripcion_producto" rows="3" name="descripcion_producto">{{ $producto->descripcion_producto }}</textarea>
                        </div>
                    </div>           
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-10">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <a href="{{ route('producto.index') }}" role="button"  class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    @stop
