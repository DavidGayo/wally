 <form method="POST" action="{{ route('empleado.store') }}">
 	@csrf
 	<label class="" for="nombre_empleado">Nombre</label>
 	<input type="text" name="nombre_empleado" placeholder="Nombre">

 	<label class="" for="direccion_empleado">Direccion</label>
 	<input type="text" name="direccion_empleado" placeholder="Direccion">

 	<select name="estatus" id="estatus">
 		@foreach ($estatus as $estatu)
 			<option value="{{ $estatu->id }}">{{ $estatu->nombre_estatus }}</option>}
 		@endforeach
 	</select>


 	<button class="btn btn-primary btn-sm" type="submit">Guardar</button>
 </form>