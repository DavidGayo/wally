 @extends('layouts.layout')

    
    @section('header')
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Proyectos                            
                    </h3>

                    <span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="{{ route('proyecto.index') }}" class="kt-subheader__breadcrumbs-link">
                            Proyectos                        
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
                        Proyecto
                    </h3>
                </div>
            </div>

            <form class="kt-form kt-form--label-right" method="POST" action="{{ route('proyecto.update', ['proyecto' => $proyecto->id ] ) }}">
 				@method('PUT')
                @csrf
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label for="nombre_proyecto" class="col-2 col-form-label">Nombre</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="nombre_proyecto" name="nombre_proyecto" value="{{ $proyecto->nombre_proyecto}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion_proyecto" class="col-2 col-form-label">Descripción</label>
                        <div class="col-10">
                            <textarea class="form-control" id="descripcion_proyecto" rows="3" name="descripcion_proyecto">{{ $proyecto->descripcion_proyecto}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
						<label for="fecha_inicio" class="col-2 col-form-label">Fecha inicio</label>
						<div class="col-10">
							<input class="form-control" type="text" name="fecha_inicio" value="{{ date('d/m/Y', strtotime($proyecto->fecha_inicio))  }}" id="kt_datepicker_1">
						</div>
					</div>
					<div class="form-group row">
						<label for="fecha_fin" class="col-2 col-form-label">Fecha fin</label>
						<div class="col-10">
							<input class="form-control" type="text" name="fecha_fin" value="{{ date('d/m/Y', strtotime($proyecto->fecha_fin)) }}" id="kt_datepicker_2">
						</div>
					</div>
                    <div class="form-group row">
						<label for="estatus" class="col-2 col-form-label">Estatus</label>
						<div class="col-10">
							<select class="form-control" id="estatus" name="estatus">
								<option value="{{ $proyecto->estatus->id }}">{{ $proyecto->estatus->nombre_estatus}}</option>
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
                                <a href="{{ route('proyecto.index') }}" role="button"  class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    @stop

     @section('js')
        <script>
            var arrows;
            if (KTUtil.isRTL()) {
                arrows = {
                    leftArrow: '<i class="la la-angle-right"></i>',
                    rightArrow: '<i class="la la-angle-left"></i>'
                }
            } else {
                arrows = {
                    leftArrow: '<i class="la la-angle-left"></i>',
                    rightArrow: '<i class="la la-angle-right"></i>'
                }
            }
            $('#kt_datepicker_1 , #kt_datepicker_2').datepicker({
            rtl: KTUtil.isRTL(),
            todayHighlight: true,
            orientation: "bottom left",
            templates: arrows,
            format: 'dd/mm/yyyy'
        });
        </script>
    @stop