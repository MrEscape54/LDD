@extends('layouts.back')

@section('content')

@foreach($products as $product)
  @include('products.product') <!-- searchbox -->
@endforeach

@endsection
