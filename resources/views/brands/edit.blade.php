@extends ('layouts.back')
@section('content')
<main class="login-page">
        <div class="contact signin">
            <div class="titulos">
                <p>Editar Marca</p>
            </div>
            <form method="POST" action="{{ route('brands.update',$brand->id) }}">
                @csrf
                @method('PATCH')
                <div class="input-group input-group-icon">
                    <input type="text" name="brand_name" value="{{ $brand->brand_name }}"/>
                    <div class="input-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                </div>
                
                <div class="input-group">
                    <input type="submit" value="Confirmar"/>
                    <input type="reset" value="Limpiar campos"/>
                </div>
            </form>
        </div>
    </main>
@endsection