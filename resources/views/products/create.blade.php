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
                    <select name="brand_id" class="input-group input-group-icon select-group">
                            <option value="0" selected disabled>Marca</option>
                            @foreach ($brands as $brand)
                                <option value="{{$brand->id}}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                                    {{$brand->brand_name}}
                                </option>
                            @endforeach
                      </select>
                    <div class="input-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('brand_id') }}</span>

                </div>
                <div class="input-group input-group-icon">
                        <select name="category_id" class="input-group input-group-icon select-group">
                                <option value="0" selected disabled>Categoría</option>
                                @foreach ($categories  as $category)
                                    <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{$category->category_name}}
                                    </option>
                                @endforeach
                          </select>
                    <div class="input-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <span class="obligatorio" >{{ $errors->first('category_id') }}</span>
                </div>

                <div class="input-group input-group-icon">
                        <select name="genre_id" class="input-group input-group-icon select-group">
                                <option value="0" selected disabled>Género</option>
                                @foreach ($genres as $genre)
                                    <option value="{{$genre->id}}" {{ old('genre_id') == $genre->id ? 'selected' : '' }}>
                                        {{$genre->genre_name}}
                                    </option>
                                @endforeach
                          </select>
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
                  <input type="number"  min="0" max="1" name="isAvailable"  value="{{ old('isAvailable') }}" placeholder="1 - Disponible, 0 - No Disponible" />
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