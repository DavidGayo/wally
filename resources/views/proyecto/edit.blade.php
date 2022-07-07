 <form method="POST" action="{{ route('proyecto.update', ['proyecto' => $proyecto->id ] ) }}">
 	@method('PUT')
	@csrf
 	<label class="" for="nombre_proyecto">Nombre</label>
 	<input type="text" name="nombre_proyecto" placeholder="Nombre proyecto" value="{{ $proyecto->nombre_proyecto}}">

 	<label class="" for="descripcion_proyecto">Descripción</label>
 	<textarea name="descripcion_proyecto"> {{ $proyecto->descripcion_proyecto }} </textarea>

 	<label class="" for="costo">Costo</label>
 	<input type="number" name="costo" value="{{ $proyecto->costo }}">

 	<label class="" for="fecha_inicio">Fecha inicio</label>
 	<input type="date" name="fecha_inicio" value="{{ $proyecto->fecha_inicio}}">

 	<label class="" for="fecha_fin">Fecha fin</label>
 	<input type="date" name="fecha_fin" value="{{ $proyecto->fecha_fin }}">

 	<select name="estatus" id="estatus">
 		<option value="{{ $proyecto->estatus->id }}">{{ $proyecto->estatus->nombre_estatus}}</option>}
 		option
 		@foreach ($estatus as $estatu)
 			<option value="{{ $estatu->id }}">{{ $estatu->nombre_estatus }}</option>}
 		@endforeach
 	</select>

 	<button class="btn btn-primary btn-sm" type="submit">Actualizar</button>
 </form>

