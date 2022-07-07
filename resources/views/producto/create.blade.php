 <form method="POST" action="{{ route('producto.store') }}">
 	@csrf
 	<label class="" for="nombre_producto">Nombre</label>
 	<input type="text" name="nombre_producto" placeholder="Nombre producto">

 	<label class="" for="descripcion_producto">Descripción</label>
 	<textarea name="descripcion_producto"></textarea>

 	<button class="btn btn-primary btn-sm" type="submit">Guardar</button>
 </form>