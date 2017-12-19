@extends("layouts.app")

@section("content")
    <div class="container white">
        <h1>Nuevo Contacto</h1>
        <!-- Formulario -->
        @include('contacto.form',['contacto'=>$contacto,'url'=>'/contacto','method'=>'POST'])
    </div>

@endsection
