<form method="POST" action="{{ route('producto.update', ['producto' => $producto->id ] ) }}">
 	@method('PUT')
	@csrf
 	<label class="" for="nombre_producto">Nombre</label>
 	<input type="text" name="nombre_producto" placeholder="Nombre producto" value="{{ $producto->nombre_producto }}">

 	<label class="" for="descripcion_producto">Descripción</label>
 	<textarea name="descripcion_producto">{{ $producto->descripcion_producto }}</textarea>

 	<button class="btn btn-primary btn-sm" type="submit">Actualizar</button>
 </form>