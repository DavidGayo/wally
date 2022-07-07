 <form method="POST" action="{{ route('empleo.store') }}">
 	@csrf
 	<label class="" for="nombre_empleo">Nombre</label>
 	<input type="text" name="nombre_empleo" placeholder="Nombre empleo">

 	<label class="" for="descripcion_empleo">Descripción</label>
 	<textarea name="descripcion_empleo"></textarea>

 	<button class="btn btn-primary btn-sm" type="submit">Guardar</button>
 </form>