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
                        Empleado
                    </h3>
                </div>
            </div>

            <form class="kt-form kt-form--label-right" action="{{ route('empleado.update', ['empleado' => $empleado->id ] ) }}">
 				@method('PUT')
				@csrf
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label for="nombre_empleado" class="col-2 col-form-label">Nombre</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="nombre_empleado" name="nombre_empleado" value="{{ $empleado->nombre_empleado}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direccion_empleado" class="col-2 col-form-label">Dirección</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="direccion_empleado" name="direccion_empleado" value="{{ $empleado->direccion_empleado }}">
                        </div>
                    </div>
                    <div class="form-group row">
						<label for="estatus" class="col-2 col-form-label">Estatus</label>
						<div class="col-10">
							<select class="form-control" id="estatus" name="estatus">
								<option value="{{ $empleado->estatus->id }}">{{ $empleado->estatus->nombre_estatus }}</option>
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
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <button type="reset" class="btn btn-secondary">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    @stop
