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
                            Ver
                        </span>
                    </div>
                </div>        
            </div>
        </div>
        <!-- end:: Subheader -->
    @stop

	@section('content')
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
			<div class="row">
				<div class="col-xl-6 offset-xl-2">
                	<div class="kt-portlet kt-portlet--height-fluid">
                    	<div class="kt-portlet__head kt-portlet__head--noborder">
                        	<div class="kt-portlet__head-label">
                            	<h3 class="kt-portlet__head-title">
                            	</h3>
                        	</div>
                        	<div class="kt-portlet__head-toolbar">
                        	</div>
                    	</div>
                    	<div class="kt-portlet__body">
                        	<div class="kt-widget kt-widget--user-profile-2">
                            	<div class="kt-widget__head">
                                	<div class="kt-widget__info">
                                    	<p class="kt-widget__username">
                                        	{{ $producto->nombre_producto }}:                                            
                                    	</p>
                                	</div>
                            	</div>

                            	<div class="kt-widget__body">
                                	<div class="kt-widget__section">
                                    	{{ $producto->descripcion_producto }}
                                	</div>                                        

                                	<div class="kt-widget__item">
                                    	<div class="kt-widget__contact">
                                        	<span class="kt-widget__label">Usuario creo</span>
                                        	<span class="kt-widget__data">{{ $producto->usuario->name }}</span>
                                    	</div>
                                	</div>
                            	</div>
                            	<div class="kt-widget__footer">
                                	<a role="button" class="btn btn-label-primary btn-lg btn-upper" href="{{ route('producto.edit', ['producto' => $producto->id]) }}">Editar</a>
                            	</div>
                        	</div>         
                    	</div>
                	</div>
            	</div>
			</div>
		</div>
	@stop
