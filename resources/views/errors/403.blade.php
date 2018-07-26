@extends ('layouts.back')

@section('content')
<main>
    <div class="faq-msg">
        <h3>You do not have enough privileges to access this page</h3>
      </div>
</main>
@php 
   header( "refresh:2; url=/" );
@endphp
@endsection