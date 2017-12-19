@extends("layouts.app")
@section("content")
<div class="container white">
    <h1>Editar Contacto</h1>
    <!-- Formulario -->
    @include('contacto.form',['contacto'=>$contacto,'url'=>'/contacto/'.$contacto->id,'method'=>'PATCH'])
</div>

@endsection

