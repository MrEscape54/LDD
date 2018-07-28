@extends('layouts.default')

@section('content')
<main class="login-page">
    <div class="contact login">
        <div class="titulos">
            <p>{{ __('Reset Password') }}</p>
        </div>
            <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                @csrf
                <div class="input-group input-group-icon">
                <input type="hidden" name="token" value="{{ $token }}">
                </div>

                <div class="input-group input-group-icon">
                    <input type="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" autofocus/>
                    <div class="input-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <span class="obligatorio" > {{ $errors->first('email') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <div class="input-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <span class="obligatorio" > {{ $errors->first('password') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <div class="input-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                </div>

                <div class="input-group">
                    <input type="submit" value="{{ __('Reset Password') }}"></input>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
