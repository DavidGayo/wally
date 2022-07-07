 <form method="POST" action="{{ route('cat_estatus.store') }}">
 	@csrf
 	<label class="" for="nombre_estatus">Nombre estatus</label>
 	<input type="text" name="nombre_estatus" placeholder="Nombre estatus">

 	<button class="btn btn-primary btn-sm" type="submit">Guardar</button>
 </form>