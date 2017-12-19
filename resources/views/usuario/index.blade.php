@extends("layouts.app")
@section("content")
    <div class="big-padding text-center blue-grey white-text">
        <h1>Usuarios</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Celular</td>
                    <td>E-mail</td>                       
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($usuario as $usr)
                    <tr>
                        <td>{{$usr->id}}</td>
                        <td>{{$usr->name}} </td>
                        <td>{{$usr->celular}} </td>
                        <td>{{$usr->email}}</td>                                                
                        <td>                            
                            <a href="{{url("/contacto/$usr->id")}}">Ver Contactos</a>
                            
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

@endsection