{{ $proyecto->fecha_inicio }}

@extends('layouts.layout')

	@section('content')
		<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
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
                                        	{{ $proyecto->nombre_proyecto }}:                                            
                                    	</p>
                                	</div>
                            	</div>

                            	<div class="kt-widget__body">
                                	<div class="kt-widget__section">
                                    	{{ $proyecto->descripcion_proyecto }}
                                	</div>                                        

                                	<div class="kt-widget__item">
                                		<div class="kt-widget__contact">
                                        	<span class="kt-widget__label">Costo</span>
                                        	<spam class="kt-widget__data">{{ $proyecto->costo }}</span>
                                    	</div>
                                    	<div class="kt-widget__contact">
                                        	<span class="kt-widget__label">Fecha inicio</span>
                                        	<spam class="kt-widget__data">{{ $proyecto->fecha_inicio }}</span>
                                    	</div>
                                    	<div class="kt-widget__contact">
                                        	<span class="kt-widget__label">Fecha fin</span>
                                        	<spam class="kt-widget__data">{{ $proyecto->fecha_fin }}</span>
                                    	</div>
                                    	<div class="kt-widget__contact">
                                        	<span class="kt-widget__label">Usuario creo</span>
                                        	<spam class="kt-widget__data">{{ $proyecto->usuario->name }}</span>
                                    	</div>
                                	</div>
                            	</div>
                            	<div class="kt-widget__footer">
                                	<a role="button" class="btn btn-label-primary btn-lg btn-upper" href="{{ route('proyecto.edit', ['proyecto' => $proyecto->id]) }}">Editar</a>
                            	</div>
                        	</div>         
                    	</div>
                	</div>
            	</div>
			</div>
		</div>
	@stop
