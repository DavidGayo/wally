 @extends('layouts.layout')

    @section('header')
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Empleados                            
                    </h3>

                    <span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="{{ route('empleado.index') }}" class="kt-subheader__breadcrumbs-link">
                            Empleados                        
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
                        Empleado
                    </h3>
                </div>
            </div>

            <form class="kt-form kt-form--label-right" method="POST" action="{{ route('empleado.store') }}">
                @csrf
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label for="nombre_empleado" class="col-2 col-form-label">Nombre</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="nombre_empleado" name="nombre_empleado" placeholder="Nombre empleado">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direccion_empleado" class="col-2 col-form-label">Direcci??n</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="direccion_empleado" name="direccion_empleado" placeholder="Direcci??n empleado">
                        </div>
                    </div>
                    <div class="form-group row">
						<label for="estatus" class="col-2 col-form-label">Estatus</label>
						<div class="col-10">
							<select class="form-control" id="estatus" name="estatus">
								@foreach ($estatus as $estatu)
						 			<option value="{{ $estatu->id }}">{{ $estatu->nombre_estatus }}</option>
						 		@endforeach
							</select>
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
