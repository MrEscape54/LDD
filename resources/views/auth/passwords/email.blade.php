@extends('layouts.default')

@section('content')
<main class="login-page">

        @if (session('status'))
        <div class="password-sent" role="alert">
            {{ session('status') }}
        </div>
        @endif

    <div class="contact login">
        <div class="titulos">
            <p>{{ __('Reset Password') }}</p>
        </div>

        <form method="post" action="{{ route('password.email') }}">
            @csrf
            <div class="input-group input-group-icon">
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" autofocus/>
                <div class="input-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <span class="obligatorio" > {{ $errors->first('email') }}</span>
            </div>

            <div class="input-group">
                <input type="submit" value="Restablecer" />
            </div>
        </form>

    </div>
</main>
@endsection
