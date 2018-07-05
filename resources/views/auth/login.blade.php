@extends ('layouts.default')

@section('content')

{{-- para editar los campos y mensajes de las validaciones hay que modificar
    la función validateLogin del trait AuthenticatesUsers en Illuminate/Fundation/Auth --}}

 @if ($errors->any()) {{-- se tiene que mostrar solo cuando valide las credenciales --}}
    <div class="warning">
        <div class="input-icon">
        <i style="font-size:1.5em; color:Tomato; margin-right:5px;" class="fas fa-exclamation-triangle"></i>
        </div>
        <p>Usuario o contraseña incorrecta</p>
    </div>
@endif

<main class="login-page">
    <div class="contact login">
        <div class="titulos">
            <p>Ingresar</p>
            <p><a href="registro">Soy nuevo</a></p>
        </div>

        <form method="post">
            @csrf
            <div class="input-group input-group-icon">
                <input type="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" autofocus/>
                <div class="input-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <span class="obligatorio" > {{ $errors->first('email') }}</span>
            </div>

            <div class="input-group input-group-icon">
                <input type="password" name="contraseña" placeholder="Contraseña"/>
                <div class="input-icon">
                    <i class="fas fa-lock"></i>
                </div>
                <span class="obligatorio" >{{ $errors->first('contraseña') }}</span>
            </div>

            <div class="input-group">
                <input type="submit" value="Ingresar" />
                <a href="{{ route('password.request') }}">Olvidé mi contraseña</a>
            </div>
            <div>
            <label>
                <input type="checkbox" name="recordar" id="cbox1" value="recordar" {{ old('recordar') ? 'checked' : '' }}>
                <span>Recordar mi usuario</span>
            </label>
            </div>
        </form>

    </div>
</main>
@endsection