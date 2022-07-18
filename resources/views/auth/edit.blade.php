  @extends('layouts.layout')

     @section('header')
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Usiario                            
                    </h3>

                    <span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="{{ route('usuario.index') }}" class="kt-subheader__breadcrumbs-link">
                            Usuarios                        
                        </a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <span class="kt-subheader__breadcrumbs-link">
                            Editar
                        </span>
                    </div>
                </div>        
            </div>
        </div>
        <!-- end:: Subheader -->
    @stop

    @section('content')
        
        <div class="kt-portlet">
            <<div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Usuario
                    </h3>
                </div>
            </div>

            <form class="kt-form kt-form--label-right" method="POST" action="{{ route('usuario.update', ['usuario' => $usuario->id ] ) }}">
 				@method('PUT')
				@csrf
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label for="name" class="col-2 col-form-label">Nombre</label>
                        <div class="col-10">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $usuario->name }}" required autocomplete="name" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-2 col-form-label">Correo</label>
                        <div class="col-10">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $usuario->email }}" required autocomplete="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-2 col-form-label">Password</label>
                        <div class="col-10">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-2 col-form-label">Confirmar password</label>
                        <div class="col-10">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rol" class="col-2 col-form-label">Rol</label>
                        <div class="col-10">
                            <select class="form-control" id="rol" name="rol">
                                <option value="admin" @if($usuario->rol == 'admin') selected @endif>Administrador</option>
                                <option value="invitado" @if($usuario->rol == 'invitado') selected @endif>Invitado</option>
                            </select>
                        </div>
                    </div>         
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-10">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <a href="{{ route('usuario.index') }}" role="button" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @stop