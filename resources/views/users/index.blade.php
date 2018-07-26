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

<button type="button" class="btn btn-primary"><a href="{{route('users.create')}}">Agregar Usuario</a></button>

<table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">email</th>
          <th scope="col">first_name</th>
          <th scope="col">last_name</th>
          <th scope="col">phone</th>
          <th scope="col">avatar</th>
          <th scope="col">isAdmin</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
         @foreach ($users as $user) 

         <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->avatar}}</td>
            <td>{{$user->isAdmin}}</td>
            <td>
              <button type="button" class="btn btn-secondary">
                <a href="{{action('UserController@edit', $user['id'])}}">Editar</a>
              </button>
            </td>
            <td>
              <form action="{{action('UserController@destroy', $user['id'])}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Eliminar</button>
              </form>
            </td>
         </tr>

         @endforeach
   </tbody>
</table>

{{($users->links())}}

@endsection