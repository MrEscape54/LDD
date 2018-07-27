@extends ('layouts.back')

@section('content')
<main> {{-- Texto de correo para envío de mails --}}
    <div>
        <h3>zzzzzzzzzz</h3>
        <p>Estimado: {{ $user->email }}</p>
        <p>xxxxxxxxxxxxxxx</p>
      </div>
</main>

@endsection