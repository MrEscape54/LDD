@extends ('layouts.default')

@section('content')

<ul>
   @foreach ($brands as $item)
       <li>
          {{$item->nombre}}
       </li>
   @endforeach
</ul>

@endsection