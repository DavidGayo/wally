 <form method="POST" action="{{ route('empleado.update', ['empleado' => $empleado->id ] ) }}">
 	@method('PUT')
	@csrf
 	<label class="" for="nombre_empleado">Nombre</label>
 	<input type="text" name="nombre_empleado" placeholder="Nombre" value="{{ $empleado->nombre_empleado}}">

 	<label class="" for="direccion_empleado">Direccion</label>
 	<input type="text" name="direccion_empleado" placeholder="Direccion" value="{{ $empleado->direccion_empleado}}">

 	<select name="estatus" id="estatus">
 		<option value="{{ $empleado->estatus->id }}">{{ $empleado->estatus->nombre_estatus }}</option>
 		@foreach ($estatus as $estatu)
 			<option value="{{ $estatu->id }}">{{ $estatu->nombre_estatus }}</option>}
 		@endforeach
 	</select>


 	<button class="btn btn-primary btn-sm" type="submit">Guardar</button>
 </form>