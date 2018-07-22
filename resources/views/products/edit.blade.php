@extends ('layouts.back')
@section('content')
<main class="login-page">
        <div class="contact signin">
            <div class="titulos">
                <p>Editar Producto</p>
            </div>
            <form method="POST" action="{{ route('products.update',$product->id) }} enctype="multipart/form-data">
                @csrf
                <input name="_method" type="hidden" value="PATCH" role="form">
                <div class="input-group input-group-icon">
                    <input type="hidden" name="brand_id" value="{{ $product->brand_id }}" min="1"/>
                    <div class="input-icon">
                        <i class="fas fa-clock"></i>
                    </div>

                </div>
                <div class="input-group input-group-icon">
                    <input type="number" name="category_id" value="{{ $product->category_id }}" min="1"/>
                    <div class="input-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('category_id') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="number" name="genre_id" value="{{ $product->genre_id }}" min="1" max="2"/>
                    <div class="input-icon">
                        <span class="fas fa-venus-mars"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('genre_id') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="text"  name="description" value="{{ $product->description }}"/>
                    <div class="input-icon">
                        <i class="fas fa-font"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('description') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="number"  name="price" value="{{ $product->price }}"/>
                    <div class="input-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('price') }}</span>
                </div>

                <div class="input-group input-group-icon">
                  <input type="number"  name="isAvailable"  value="{{ $product->isAvailable }}" min="0" max="1"/>
                  <div class="input-icon">
                      <i class="fas fa-check"></i>
                  </div>
                  <span class="obligatorio" >{{ $errors->first('isAvailable') }}</span>
              </div>

                <div class="input-group input-group-icon">
                <input type="file"  name="picture" value="{{ $product->picture }}"/>
                    <div class="input-icon">
                    <i class="fas fa-file-image"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('picture') }}</span>
                </div>

                

                <div class="input-group">
                    <input type="submit" value="Confirmar"/>
                    <input type="reset" value="Limpiar campos"/>
                </div>
            </form>
        </div>
    </main>
@endsection