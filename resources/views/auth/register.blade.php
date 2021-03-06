@extends('templates.main') 
@section('titulo_pagina', 'Registro') 
@section('estilos')
@endsection
 
@section('contenido')



<div class="row justify-content-center login">
    <div class="card col-sm-6 ">
        <div class="card-block ">

            <!--Header-->
            <div class="form-header cabezera_login  blue-gradient ">
                <h3><i class="fa fa-lock"></i> Registro</h3>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="md-form">
                    <i class="fas fa-address-card prefix"></i>
                    <label for="nombre">Nombre*</label>
                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' invalid' : '' }}" name="nombre" value="{{ old('nombre') }}"
                        required autofocus pattern="^[a-z A-Z]{3,16}$" oninvalid="this.setCustomValidity('El nombre solo puede contener letras y espacios, con una longitud minima de 3 y maxima de 16 caracteres')"
                        oninput="this.setCustomValidity('')"> @if ($errors->has('nombre'))
                    <span class="invalid-feedback ml-5">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span> @endif
                </div>

                <div class="md-form">
                    <i class="fas fa-address-card prefix"></i>
                    <label for="apellido1">Primer Apellido*</label>
                    <input id="apellido1" type="text" class="form-control{{ $errors->has('apellido1') ? ' invalid' : '' }}" name="apellido1"
                        value="{{ old('apellido1') }}" required pattern="^[a-z A-Z]{3,16}$" oninvalid="this.setCustomValidity('El apellido solo puede contener letras y espacios, con una longitud minima de 3 y maxima de 16 caracteres')"
                        oninput="this.setCustomValidity('')"> @if ($errors->has('apellido1'))
                    <span class="invalid-feedback ml-5">
                                        <strong>{{ $errors->first('apellido1') }}</strong>
                                    </span> @endif
                </div>
                <div class="md-form">
                    <i class="fas fa-address-card prefix"></i>
                    <label for="apellido2">Segundo Apellido</label>
                    <input id="apellido2" type="text" class="form-control{{ $errors->has('apellido2') ? ' invalid' : '' }}" name="apellido2"
                        value="{{ old('apellido2') }}" pattern="^[a-z A-Z]{3,16}$" oninvalid="this.setCustomValidity('El apellido solo puede contener letras y espacios, con una longitud minima de 3 y maxima de 16 caracteres')"
                        oninput="this.setCustomValidity('')"> @if ($errors->has('apellido2'))
                    <span class="invalid-feedback ml-5">
                                        <strong>{{ $errors->first('apellido2') }}</strong>
                                    </span> @endif
                </div>
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <label for="nombre_usuario">Nombre Usuario*</label>
                    <input id="nombre_usuario" type="text" class="form-control{{ $errors->has('nombre_usuario') ? ' invalid' : '' }}" name="nombre_usuario"
                        value="{{ old('nombre_usuario') }}" required pattern="^[a-zA-Z0-9_-]{3,30}$" oninvalid="this.setCustomValidity('El username solo puede contener letras y numeros y (_-), con una longitud minima de 3 y maxima de 30 caracteres')"
                        oninput="this.setCustomValidity('')"> @if ($errors->has('nombre_usuario'))
                    <span class="invalid-feedback ml-5">
                                        <strong>{{ $errors->first('nombre_usuario') }}</strong>
                                    </span> @endif
                </div>
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <label for="email">Email*</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' invalid' : '' }}" name="email" value="{{ old('email') }}"
                        required> @if ($errors->has('email'))
                    <span class="invalid-feedback ml-5">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix"></i>
                    <label for="password">Contraseña*</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' invalid' : '' }}" name="password"
                        required
                        pattern="^(?:(?=.*[a-z])(?:(?=.*[A-Z])(?=.*[\d\W])|(?=.*\W)(?=.*\d))|(?=.*\W)(?=.*[A-Z])(?=.*\d)).{8,}$"> 
                        @if ($errors->has('password'))
                    <span class="invalid-feedback ml-5">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix"></i>
                    <label for="password-confirm">Confirmar Contraseña*</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
                <div class="md-form">
                    <i class="fas fa-map-marker prefix"></i>
                    <label for="direccion">Direccion*</label>
                    <input id="direccion" type="text" class="form-control{{ $errors->has('cityLng') ? ' invalid' : '' }} {{ $errors->has('direccion') ? ' invalid' : '' }} {{ $errors->has('cityLat') ? ' invalid' : '' }}"
                        value="{{ old('direccion') }} " name="direccion" autocomplete="off" required> 
                        @if($errors->has('direccion'))
                    <span class="invalid-feedback ml-5">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span> @endif @if ($errors->has('cityLng') && $errors->has('cityLng')
                    )
                    <span class="invalid-feedback ml-5">
                                        <strong>{{ $errors->first('cityLng') }}</strong>
                                    </span> @elseif($errors->has('cityLat'))
                    <span class="invalid-feedback ml-5">
                                        <strong>{{ $errors->first('cityLat') }}</strong>
                                    </span> @elseif($errors->has('cityLng'))
                    <span class="invalid-feedback ml-5">
                                        <strong>{{ $errors->first('cityLng') }}</strong>
                                    </span> @endif
                </div>
                <input type="hidden" id="city2" name="city2" />
                <input type="hidden" id="cityLat" name="cityLat" value="{{ old('cityLat') }} " />
                <input type="hidden" id="cityLng" name="cityLng" value="{{ old('cityLng') }} " />

                <div class="md-form">
                    <i class="fas fa-phone prefix"></i>
                    <label for="telefono">Teléfono</label>
                    <input id="telefono" 
                    type="text" 
                    class="form-control{{ $errors->has('telefono') ? ' invalid' : '' }}" 
                    name="telefono" 
                    value="{{ old('telefono') }}"
                    pattern="^[9|6]\d{8}$"
                    oninvalid="this.setCustomValidity('El numero ha de empezar por 6 ó 9, seguido de 8 numeros')"
                    oninput="this.setCustomValidity('')"
                    >                    @if ($errors->has('telefono'))
                    <span class="invalid-feedback ml-5">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span> @endif
                </div>

                <div class="text-center">
                    <button class="btn btn-primary">Registro</button>
                </div>
            </form>
        </div>

        <!--Footer-->
        <div class="modal-footer">
            <div class="options">
                <p>Ya tienes una cuenta?<a href="{{route('login')}}"> Entra</a></p>
            </div>
        </div>

    </div>
</div>
@endsection
 
@section('scripts')
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCG7G5aANtgkHs8FRZ6kyEsUOCwd4DG5QM&libraries=places"></script>
<script type="application/javascript">
    var input=document.getElementById('direccion');
            autocomplete = new google.maps.places.Autocomplete(input);

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                document.getElementById('city2').value = place.name;
                document.getElementById('cityLat').value = place.geometry.location.lat();
                document.getElementById('cityLng').value = place.geometry.location.lng();});
</script>
@endsection