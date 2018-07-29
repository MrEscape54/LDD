@extends ('layouts.back')
@section('content')
<main class="login-page">
        <div class="contact signin">
            <div class="titulos">
                <p>Editar Usuario</p>
            </div>
            <form method="POST" action="{{ route('users.update',$user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="input-group input-group-icon">
                    <input type="text" name="nombre" value="{{ $user->name }}" placeholder="Nombre de usuario" />
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('nombre') }}</span>

                </div>
                <div class="input-group input-group-icon">
                    <input type="email" name="email" value="{{ $user->email }}" placeholder="Correo electrónico" />
                    <div class="input-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('email') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="tel" name="teléfono" value="{{ $user->phone }}"
                           placeholder="Teléfono (opcional) xxx-xxxx-xxxx" />
                    <div class="input-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <span class="obligatorio" >{{ $user->teléfono }}</span>
                </div>

                <div class="input-group input-group-icon">
                <input type="hidden"  name="contraseña" value="{{ $user->password }}" placeholder="Contraseña (mayúscula y número requerido)" />
                    <div class="input-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('contraseña') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="file"  name="avatar"/>
                    <div class="input-icon">
                    <i class="fas fa-file-image"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('avatar') }}</span>
                </div>
               
                @if (Auth::User()->isAdmin === 1)
                <div class="input-group input-group-icon">
                <input type="number"  name="isAdmin" value="{{ $user->isAdmin }}" placeholder="Es admin (1 para si - 0 para no)" />
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                @endif

                <div class="input-group">
                    <input type="submit" value="Registrarse" />
                    <input type="reset" value="Limpiar campos" />
                </div>
            </form>
        </div>
    </main>
@endsection