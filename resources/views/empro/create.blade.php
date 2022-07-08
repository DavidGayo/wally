@extends('layouts.layout')

    @section('header')
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Base Controls                            
                    </h3>

                    <span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Crud                        
                        </a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Forms & Controls                        
                        </a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Form Controls                        
                        </a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Base Inputs                        
                        </a>
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
                        Empleado-Proyecto
                    </h3>
                </div>
            </div>

            <form class="kt-form kt-form--label-right" method="POST" action="{{ route('empleado-proyecto.store') }}">
                @csrf
                <div class="kt-portlet__body">
                   <div class="form-group row">
                        <label for="empleado" class="col-2 col-form-label">Empleado</label>
                        <div class="col-10">
                            <select class="form-control" id="empleado" name="empleado">
                                @foreach ($empleados as $empleado)
                                    <option value="{{ $empleado->id }}">{{ $empleado->nombre_empleado }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
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
                        <label for="empleo" class="col-2 col-form-label">Empleo</label>
                        <div class="col-10">
                            <select class="form-control" id="empleo" name="empleo">
                                @foreach ($empleos as $empleo)
                                    <option value="{{ $empleo->id }}">{{ $empleo->nombre_empleo }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="precio_hora" class="col-2 col-form-label">Precio hora</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="precio_hora" name="precio_hora">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="horas" class="col-2 col-form-label">Horas</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="horas" name="horas">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dias" class="col-2 col-form-label">Días</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="dias" name="dias">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total" class="col-2 col-form-label">Total</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="total" name="total">
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
