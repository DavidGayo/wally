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
                    </div>
                </div>        
            </div>
        </div>
        <!-- end:: Subheader -->
    @stop

	@section('content')
		<div class="kt-portlet kt-portlet--mobile">
			<div class="kt-portlet__head kt-portlet__head--lg">
				<div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon">
						<i class="kt-font-brand fa fa-list"></i>
					</span>
					<h3 class="kt-portlet__head-title">
						Empleado
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
		            <div class="kt-portlet__head-wrapper">
						<div class="kt-portlet__head-actions">
							&nbsp;
							<a href="{{ route('empleado.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
								<i class="la la-plus"></i>
								Nuevo empleado
							</a>
						</div>	
					</div>		
				</div>
			</div>

			<div class="kt-portlet__body">
				<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
					<thead>					
						<tr>
						  	<th>Nombre</th>
						  	<th>Dirección</th>
						  	<th>Acciones</th>
						 </tr>
					</thead>
					<tbody>
						@foreach ($empleados as $empleado)					
							<tr>
						  		<td>{{ $empleado->nombre_empleado }}</td>
						  		<td>{{ $empleado->direccion_empleado }}</td>
						  		<td><a role="button" class="btn btn-brand btn-elevate btn-icon" href="{{ route('empleado.edit', ['empleado' => $empleado->id]) }}"><i class="la la-edit"></i></a>&nbsp;<a role="button" class="btn btn-warning btn-elevate btn-icon" href="{{ route('empleado.show', ['empleado' => $empleado->id]) }}"><i class="la la-eye"></i></a></td>
						@endforeach
					</tbody>
				</table>
			</div>
		</div> 

		
	@stop
