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
                                        	{{ $empleado->nombre_empleado }}                                            
                                    	</p>
                                	</div>
                            	</div>

                            	<div class="kt-widget__body">
                                	<div class="kt-widget__section">
                                    	<b>Dirección:</b> {{ $empleado->direccion_empleado }}
                                	</div>                                        

                                	<div class="kt-widget__item">
                                    	<div class="kt-widget__contact">
                                        	<span class="kt-widget__label">Usuario creo</span>
                                        	<span class="kt-widget__data">{{ $empleado->usuario->name }}</span>
                                    	</div>
                                	</div>
                            	</div>
                            	<div class="kt-widget__footer">
                                	<a role="button" class="btn btn-label-primary btn-lg btn-upper" href="{{ route('empleado.edit', ['empleado' => $empleado->id]) }}">Editar</a>
                            	</div>
                        	</div>         
                    	</div>
                	</div>
            	</div>
			</div>
		</div>

         <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
           <div class="row">
                <div class="col-xl-12">
                   <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Pago total ${{ $total }}
                                </h3>
                            </div>
                        </div>
                    </div>
               </div>
           
                @foreach( $proyectos as $proyecto) 
                    <div class="col-xl-3">
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
                                                {{ $proyecto->nombre_proyecto }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="kt-widget__body">
                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Precio Horas</span>
                                                <span class="kt-widget__data">{{ $proyecto->precio_hora }}</span>
                                            </div>
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Horas</span>
                                                <span class="kt-widget__data">{{ $proyecto->horas }}</span>
                                            </div>
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Dias</span>
                                                <span class="kt-widget__data">{{ $proyecto->dias }}</span>
                                            </div>
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Total</span>
                                                <span class="kt-widget__data">{{ $proyecto->total }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget__footer">
                                        <a role="button" class="btn btn-label-primary btn-lg btn-upper" href="{{ route('empleado-proyecto.edit', ['empleado_proyecto' => $proyecto->id]) }}">Editar</a>
                                    </div>
                                </div>         
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
	@stop
