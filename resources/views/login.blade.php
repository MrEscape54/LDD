@extends ('layouts.default')

<?php 

$nombre = '';
$email = '';
$msg = 'none';
$checked = '';

?>

@section('content')
<style>
    .warning{display: <?php echo $msg ?> ;}
</style>

    <div class="warning">
        <div class="input-icon">
        <i style="font-size:1.5em; color:Tomato; margin-right:5px;" class="fas fa-exclamation-triangle"></i>
        </div>
        <p>Usuario o contraseña incorrecta</p>
    </div>

    <main class="login-page">
        <div class="contact login">
            <div class="titulos">
                <p>Ingresar</p>
                <p><a href="registro">Soy nuevo</a></p>
            </div>

            <form method="post">
                <div class="input-group input-group-icon">
                    <input type="email" name="email" placeholder="Correo electrónico" value="<?php echo $email ?>"/>
                    <div class="input-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <span class="obligatorio" ><?php if(isset($errores['email'])) { echo $errores['email'];}?></span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="password" name="password" placeholder="Contraseña"/>
                    <div class="input-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <span class="obligatorio" ><?php if(isset($errores['password'])) { echo $errores['password'];}?></span>
                </div>

                <div class="input-group">
                    <input type="submit" value="Ingresar" />
                    <a href="#">Olvidé mi contraseña</a>
                </div>
                <div>
                <label>
                    <input type="checkbox" name="recordar" id="cbox1" value="recordar" <?php echo $checked ?>>
                    <span>Recordar mi usuario</span>
                </label>
                </div>
            </form>

        </div>
    </main>
@endsection