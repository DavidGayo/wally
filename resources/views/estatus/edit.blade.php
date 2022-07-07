<form method="POST" action="{{ route('cat_estatus.update', ['cat_estatus' => $estatus->id ]) }}">
    @method('PUT')
	@csrf
	<label class="" for="nombre_estatus">Nombre estatus</label>
 	<input type="text" name="nombre_estatus" placeholder="Nombre estatus" value="{{ $estatus->nombre_estatus }} " />

 	<button class="btn btn-primary btn-sm" type="submit">Actualizar</button>
</form>