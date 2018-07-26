@extends ('layouts.back')
@section('content')
<main class="login-page">
        <div class="contact signin">
            <div class="titulos">
                <p>Agregar Marca</p>
            </div>
            <form method="POST" action="{{ route('brands.store') }}">
                @csrf
                <div class="input-group input-group-icon">
                    <input type="text" name="brand_name" value="{{ old('brand_name') }}" placeholder="Brand Name" />
                    <div class="input-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('brand_name') }}</span>

                <div class="input-group">
                    <input type="submit" value="Agregar" />
                    <input type="reset" value="Limpiar campos" />
                </div>
            </form>
        </div>
    </main>
@endsection