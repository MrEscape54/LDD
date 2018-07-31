@extends ('layouts.back')
@section('content')
<main class="login-page">
        <div class="contact signin">
            <div class="titulos">
                <p>Editar Usuario</p>
            </div>
            <form method="POST" action="{{ route('users.updateProfile',$user->id) }}" enctype="multipart/form-data">
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
                    <input type="text" name="primer_nombre" value="{{ $user->first_name }}" placeholder="Primer Nombre" />
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('primer_nombre') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="text" name="apellido" value="{{ $user->last_name }}" placeholder="Apellido" />
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('apellido') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="email" name="email" value="{{ $user->email }}" placeholder="Correo electrónico" />
                    <div class="input-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('email') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="tel" name="teléfono" value="{{ $user->phone }}" placeholder="Teléfono (opcional) xxx-xxxx-xxxx" />
                    <div class="input-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('teléfono') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="file"  name="avatar"/>
                    <div class="input-icon">
                    <i class="fas fa-file-image"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('avatar') }}</span>
                </div>

                <div class="input-group">
                    <input type="submit" value="Actualizar" />
                    <input type="reset" value="Limpiar campos" />
                </div>
            </form>
        </div>
    </main>
@endsection
