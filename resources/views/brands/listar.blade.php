@extends ('layouts.default')

@section('content')

{{ $brands->brand_name}}
{{-- <ul>
   @foreach ($brands as $item)
       <li>
          {{$item->brand_name}}
       </li>
   @endforeach
</ul> --}}

@endsection