@extends ('layouts.back')
@section('content')
<main class="login-page">
        <div class="contact signin">
            <div class="titulos">
                <p>Agregar Producto</p>
            </div>
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="input-group input-group-icon">
                    <input type="number" name="brand_id" value="{{ old('brand_id') }}" placeholder="Brand ID" />
                    <div class="input-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('brand_id') }}</span>

                </div>
                <div class="input-group input-group-icon">
                    <input type="number" name="category_id" value="{{ old('category_id') }}" placeholder="Category ID" />
                    <div class="input-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('category_id') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="number" name="genre_id" value="{{ old('genre_id') }}" placeholder="Genre ID" />
                    <div class="input-icon">
                        <span class="fas fa-venus-mars"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('genre_id') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="text"  name="description" value="{{ old('description') }}" placeholder="Description" />
                    <div class="input-icon">
                        <i class="fas fa-font"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('description') }}</span>
                </div>

                <div class="input-group input-group-icon">
                    <input type="number"  name="price" value="{{ old('price') }}" placeholder="Price" />
                    <div class="input-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('price') }}</span>
                </div>

                <div class="input-group input-group-icon">
                  <input type="number"  name="isAvailable"  value="{{ old('isAvailable') }}" placeholder="isAvailable" />
                  <div class="input-icon">
                      <i class="fas fa-check"></i>
                  </div>
                  <span class="obligatorio" >{{ $errors->first('isAvailable') }}</span>
              </div>

                <div class="input-group input-group-icon">
                    <input type="file"  name="picture"/>
                    <div class="input-icon">
                    <i class="fas fa-file-image"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('picture') }}</span>
                </div>

                <div class="input-group">
                    <input type="submit" value="Agregar" />
                    <input type="reset" value="Limpiar campos" />
                </div>
            </form>
        </div>
    </main>
@endsection