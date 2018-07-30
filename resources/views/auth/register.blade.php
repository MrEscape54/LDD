@extends ('layouts.default')
@section('content')
<main class="login-page">
        <div class="contact signin">
        <div class="titulos">
                <p>Registrarse</p>
                <p><a href="login">Ya tengo cuenta</a></p>
            </div>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="reg-form">
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
                    <input type="password"  name="contrasenia" placeholder="Contraseña (mayúscula y número requerido)" />
                    <div class="input-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('contraseña') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="password"  name="contrasenia_confirmation" placeholder="Repite la contraseña" />
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
                        <span class="error"></span>
                        <br><br>
                    <input type="submit" value="Registrarse" />
                    <input type="reset" value="Limpiar campos" />
                </div>
            </form>
        </div>
    </main>

<script type="text/javascript">
var formreg = document.getElementById('reg-form');
var error = document.querySelector('.error');
var inputName = formreg.elements.nombre;
var inputEmail = formreg.elements.email;
var inputPass = formreg.elements.contrasenia;
var inputPass2 = formreg.elements.contrasenia_confirmation;

inputName.onfocus = function() {
  error.innerText = '';
};

inputName.onblur = function() {
  if(this.value == '') {
    error.innerText = 'Por favor escribir tu nombre de usuario';
  }
};

inputEmail.onfocus = function() {
  error.innerText = '';
};

inputEmail.onblur = function() {
  if(this.value == '') {
    error.innerText = 'Por favor escribir tu email';
  }
};

inputPass.onfocus = function() {
  error.innerText = '';
};

inputPass.onblur = function() {
  if(this.value == '') {
    error.innerText = 'Por favor escribir tu contraseña';
  }
};

inputPass2.onfocus = function() {
  error.innerText = '';
};

inputPass2.onblur = function() {
  if(this.value == '') {
    error.innerText = 'Por favor escribir tu contraseña';
  }
};

formreg.addEventListener('submit', function(e){
e.preventDefault();

if(inputName.value == '') {
error.innerText = 'Sin nombre no podés registrarte';
} else if(inputEmail.value == '') {
  error.innerText = 'Sin email no podés registrarte';
} else if(inputPass.value == '') {
  error.innerText = 'Sin contraseña no podés registrarte';
} else if(inputPass2.value == '') {
  error.innerText = 'Sin confirmación de contraseña no podés registrarte';
} else {
  this.submit();
}
});
</script>
@endsection
