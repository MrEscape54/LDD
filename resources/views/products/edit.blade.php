@extends ('layouts.back')
@section('content')
<main class="login-page">
        <div class="contact signin">
            <div class="titulos">
                <p>Editar Producto</p>
            </div>
            <form method="POST" action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="input-group input-group-icon">
                    <select name="brand_id" class="input-group input-group-icon select-group">
                        @foreach ($brands as $brand)
                            <option value="{{$brand->id}}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
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
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
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
                            @foreach ($genres as $genre)
                                <option value="{{$genre->id}}" {{ $product->genre_id == $genre->id ? 'selected' : '' }}>
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
                <input type="file"  name="picture" value="{{ $product->picture }}"/> {{-- No trae la imagen --}}
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