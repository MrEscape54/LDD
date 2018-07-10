@extends ('layouts.default')
@section('content')
<main class="login-page">
        <div class="contact signin">
        <div class="titulos">
                <p>Registrarse</p>
                <p><a href="login">Ya tengo cuenta</a></p>
            </div>
            <form method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="input-group input-group-icon">
                    <input type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre de usuario" />
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('nombre') }}</span>

                </div>
                <div class="input-group input-group-icon">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" />
                    <div class="input-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('email') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="tel" name="teléfono" value="{{ old('phone') }}"
                           placeholder="Teléfono (opcional) xxx-xxxx-xxxx" />
                    <div class="input-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('teléfono') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="password"  name="contraseña" placeholder="Contraseña (mayúscula y número requerido)" />
                    <div class="input-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('contraseña') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="password"  name="contraseña_confirmation" placeholder="Repite la contraseña" />
                    <div class="input-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                </div>

                <div class="input-group input-group-icon">
                    <input type="file"  name="avatar"/>
                    <div class="input-icon">
                    <i class="fas fa-file-image"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('avatar') }}</span>

                </div>

                <div class="input-group">
                    <input type="submit" value="Registrarse" />
                    <input type="reset" value="Limpiar campos" />
                </div>
            </form>
        </div>
    </main>
@endsection