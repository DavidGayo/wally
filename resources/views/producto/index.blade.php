@extends('layouts.layout')

	@section('content')

		<div class="kt-portlet kt-portlet--mobile">
			<div class="kt-portlet__head kt-portlet__head--lg">
				<div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon">
						<i class="kt-font-brand fa fa-list"></i>
					</span>
					<h3 class="kt-portlet__head-title">
						Producto
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
		            <div class="kt-portlet__head-wrapper">
						<div class="kt-portlet__head-actions">
							&nbsp;
							<a href="{{ route('producto.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
								<i class="la la-plus"></i>
								Nuevo producto
							</a>
						</div>	
					</div>		
				</div>
			</div>

			<div class="kt-portlet__body">
				<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
					<thead>					
						<tr>
						  	<th>Producto</th>
						  	<th>Descripción</th>
						  	<th>Acciones</th>
						 </tr>
					</thead>
					<tbody>
						@foreach ($productos as $producto)					
							<tr>
						  		<td>{{ $producto->nombre_producto }}</td>
						  		<td>{{ $producto->descripcion_producto }}</td>
						  		<td><a role="button" class="btn btn-brand btn-elevate btn-icon" href="{{ route('producto.edit', ['producto' => $producto->id]) }}"><i class="la la-edit"></i></a>&nbsp;<a role="button" class="btn btn-warning btn-elevate btn-icon" href="{{ route('producto.show', ['producto' => $producto->id]) }}"><i class="la la-eye"></i></a></td>
						@endforeach
					</tbody>
				</table>
			</div>
		</div> 

		
	@stop
