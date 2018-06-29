@extends ('layouts.default')

@section('content')

<ul>
   @foreach ($brands as $item)
       <li>
          {{$item->brand_name}}
       </li>
   @endforeach
</ul>

@endsection