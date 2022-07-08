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
                        Empleo
                    </h3>
                </div>
            </div>

            <form class="kt-form kt-form--label-right" method="POST" action="{{ route('proyecto.store') }}">
                @csrf
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label for="nombre_proyecto" class="col-2 col-form-label">Nombre</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="nombre_proyecto" name="nombre_proyecto" placeholder="Nombre proyecto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion_proyecto" class="col-2 col-form-label">Descripción</label>
                        <div class="col-10">
                            <textarea class="form-control" id="descripcion_proyecto" rows="3" name="descripcion_proyecto"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="costo" class="col-2 col-form-label">Costo</label>
                        <div class="col-10">
                            <input class="form-control" type="number" id="costo" name="costo">
                        </div>
                    </div>
                    <div class="form-group row">
						<label for="fecha_inicio" class="col-2 col-form-label">Fecha inicio</label>
						<div class="col-10">
							<input class="form-control" type="date" id="fecha_inicio">
						</div>
					</div>
					<div class="form-group row">
						<label for="fecha_fin" class="col-2 col-form-label">Fecha fin</label>
						<div class="col-10">
							<input class="form-control" type="date" id="fecha_fin">
						</div>
					</div>
                    <div class="form-group row">
						<label for="estatus" class="col-2 col-form-label">Estatus</label>
						<div class="col-10">
							<select class="form-control" id="estatus" name="estatus">
								@foreach ($estatus as $estatu)
						 			<option value="{{ $estatu->id }}">{{ $estatu->nombre_estatus }}</option>}
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
