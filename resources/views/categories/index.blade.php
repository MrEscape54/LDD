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

<button type="button" class="btn btn-primary"><a href="{{route('categories.create')}}">Agregar Categoría</a></button>

<table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">category_name</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
         @foreach ($categories as $category) 

         <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->category_name}}</td>

            <td>
              <button type="button" class="btn btn-secondary">
                <a href="{{action('CategoryController@edit', $category['id'])}}">Editar</a>
              </button>
            </td>
            <td>
              <form action="{{action('CategoryController@destroy', $category['id'])}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Eliminar</button>
              </form>
            </td>
         </tr>

         @endforeach
   </tbody>
</table>

@endsection