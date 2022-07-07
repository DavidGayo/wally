 <form method="POST" action="{{ route('empleo.update', ['empleo' => $empleo->id ] ) }}">
 	@method('PUT')
	@csrf
 	<label class="" for="nombre_empleo">Nombre</label>
 	<input type="text" name="nombre_empleo" placeholder="Nombre empleo" value="{{ $empleo->nombre_empleo }}">

 	<label class="" for="descripcion_empleo">Descripción</label>
 	<textarea name="descripcion_empleo"> {{ $empleo->descripcion_empleo }} </textarea>

 	<button class="btn btn-primary btn-sm" type="submit">Actualizar</button>
 </form>

