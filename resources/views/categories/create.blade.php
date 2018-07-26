@extends ('layouts.back')
@section('content')
<main class="login-page">
        <div class="contact signin">
            <div class="titulos">
                <p>Agregar Categoría</p>
            </div>
            <form method="POST" action="{{ route('categories.store') }}">
                @csrf
                <div class="input-group input-group-icon">
                    <input type="text" name="category_name" value="{{ old('category_name') }}" placeholder="Category Name" />
                    <div class="input-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('category_name') }}</span>

                <div class="input-group">
                    <input type="submit" value="Agregar" />
                    <input type="reset" value="Limpiar campos" />
                </div>
            </form>
        </div>
    </main>
@endsection