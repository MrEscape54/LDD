@extends ('layouts.default')

@section('content')

<div class="destacados">
   @foreach ($products as $product) 

      <div class="collections coll-watches">
         <img class="foto" src="{{$product->picture}}">
            <p class="prod-description">{{$product->description}}</p>
            <p class="prod-description prices"><strong>$ {{ number_format($product->price, 0, ",", ".") }}</strong></p>
            <a class="boton-tr boton-tr-watches" href="#">Agregar al carrito</a>
      </div>

   @endforeach
</div>

{{($products->links())}}

@endsection