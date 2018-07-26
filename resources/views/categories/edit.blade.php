@extends ('layouts.back')
@section('content')
<main class="login-page">
        <div class="contact signin">
            <div class="titulos">
                <p>Editar Categoría</p>
            </div>
            <form method="POST" action="{{ route('categories.update',$category->id) }}">
                @csrf
                <input name="_method" type="hidden" value="PATCH" role="form">
                <div class="input-group input-group-icon">
                    <input type="text" name="category_name" value="{{ $category->category_name }}"/>
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