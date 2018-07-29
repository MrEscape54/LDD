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

<button type="button" class="btn btn-primary"><a href="{{route('brands.create')}}">Agregar Marca</a></button>

<table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">brand_name</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
         @foreach ($brands as $brand) 

         <tr>
            <th scope="row">{{$brand->id}}</th>
            <td>{{$brand->brand_name}}</td>

            <td>
              <button type="button" class="btn btn-secondary">
                <a href="{{action('BrandController@edit', $brand['id'])}}">Editar</a>
              </button>
            </td>
            <td>
              <form action="{{action('BrandController@destroy', $brand['id'])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Eliminar</button>
              </form>
            </td>
         </tr>

         @endforeach
   </tbody>
</table>

@endsection