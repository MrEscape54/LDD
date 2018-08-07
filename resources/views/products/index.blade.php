@extends ('layouts.back')

@section('content')

@if (Session::has('message'))
<div class="warning">
    <div class="input-icon">
    <i style="font-size:1.5em; color:#28A745; margin-right:5px;" class="fas fa-check"></i>
    </div>
    <p>{{ Session::get('message') }}</p>
</div>
@endif

<button type="button" class="btn btn-primary"><a href="{{route('products.create')}}">Agregar Producto</a></button>

<table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">brand_id</th>
          <th scope="col">category_id</th>
          <th scope="col">genre_id</th>
          <th scope="col">price</th>
          <th scope="col">isAvailable</th>
          <th scope="col">description</th>
          <th scope="col">picture</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
         @foreach ($products as $product) 

         <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->brand_id}}</td>
            <td>{{$product->category_id}}</td>
            <td>{{$product->genre_id}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->isAvailable}}</td>
            <td>{{$product->description}}</td>
            <td><img src="{{$product->picture}}" alt="" style="height:30px;"></td>
            <td>
              <button type="button" class="btn btn-secondary">
                <a href="{{action('ProductController@edit', $product['id'])}}">Editar</a>
              </button>
            </td>
            <td>
              <form action="{{action('ProductController@destroy', $product['id'])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Eliminar</button>
              </form>
            </td>
         </tr>

         @endforeach
   </tbody>
</table>

{{($products->links())}}

@endsection