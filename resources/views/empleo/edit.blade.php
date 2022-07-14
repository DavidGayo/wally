
@extends('layouts.layout')

    @section('header')
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Empleo                            
                    </h3>

                    <span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="{{ route('empleo.index') }}" class="kt-subheader__breadcrumbs-link">
                            Empleos                        
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
                        Empleo
                    </h3>
                </div>
            </div>

            <form class="kt-form kt-form--label-right" method="POST" action="{{ route('empleo.update', ['empleo' => $empleo->id ] ) }}">
                @method('PUT')
                @csrf
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label for="nombre_empleo" class="col-2 col-form-label">Nombre</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="nombre_empleo" name="nombre_empleo" value="{{ $empleo->nombre_empleo}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion_empleo" class="col-2 col-form-label">Descripción</label>
                        <div class="col-10">
                            <textarea class="form-control" id="descripcion_empleo" rows="3" name="descripcion_empleo">{{ $empleo->descripcion_empleo }}</textarea>
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
                                <a href="{{ route('empleo.index') }}" role="button" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    @stop

