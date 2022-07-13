@extends('layouts.layout')

    @section('header')
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Empleados-Proyecto                            
                    </h3>

                    <span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="{{ route('empleado-proyecto.index') }}" class="kt-subheader__breadcrumbs-link">
                            Empleado-Proyecto                        
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
                        Empleado-Proyecto
                    </h3>
                </div>
            </div>

            <form class="kt-form kt-form--label-right" method="POST" action="{{ route('empleado-proyecto.update', ['empleado_proyecto' => $empPro->id ] ) }}">
                @method('PUT')
                @csrf
                <div class="kt-portlet__body">
                   <div class="form-group row">
                        <label for="empleado" class="col-2 col-form-label">Empleado</label>
                        <div class="col-10">
                            <select class="form-control kt-selectpicker" id="empleado" name="empleado">
                                @foreach ($empleados as $empleado)
                                    <option value="{{ $empleado->id }}" @if( $empPro->empleado->id == $empleado->id) selected @endif>{{ $empleado->nombre_empleado }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="proyecto" class="col-2 col-form-label">Proyecto</label>
                        <div class="col-10">
                            <select class="form-control kt-selectpicker" id="proyecto" name="proyecto">
                                @foreach ($proyectos as $proyecto)
                                    <option value="{{ $proyecto->id }}" @if( $empPro->proyecto->id == $proyecto->id) selected @endif>{{ $proyecto->nombre_proyecto }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="empleo" class="col-2 col-form-label">Empleo</label>
                        <div class="col-10">
                            <select class="form-control kt-selectpicker" id="empleo" name="empleo">
                                @foreach ($empleos as $empleo)
                                    <option value="{{ $empleo->id }}" @if( $empPro->empleo->id == $empleo->id) selected @endif>{{ $empleo->nombre_empleo }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="precio_hora" class="col-2 col-form-label">Precio hora</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="precio_hora" name="precio_hora" value="{{ $empPro->precio_hora}}" step=".01">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="horas" class="col-2 col-form-label">Horas</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="horas" name="horas" value="{{ $empPro->horas}}" step=".01">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dias" class="col-2 col-form-label">Días</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="dias" name="dias" value="{{ $empPro->dias}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total" class="col-2 col-form-label">Total</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="total" name="total" value="{{ $empPro->total}}" step=".01">
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
                                <a href="{{ route('empleado-proyecto.index') }}" role="button" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @stop

    @section('js')
        <script type="text/javascript">
            $('.kt-selectpicker').selectpicker();
            let precio = document.querySelector("#precio_hora");
            let hora = document.querySelector("#horas");
            let dias = document.querySelector("#dias");
            let total = document.querySelector("#total");
            precio.addEventListener("change", resultado);
            hora.addEventListener("change", resultado);
            dias.addEventListener("change", resultado);

            function resultado(){
                if(precio.value != '' &&  hora.value != ''  && dias.value != ''){
                    if(precio.value > 0 &&  hora.value > 0  && dias.value > 0){
                        total.value = (precio.value * hora.value * dias.value).toFixed(2);
                     }
                }
            }
        </script>
    @stop