@extends("layouts.app")
@section("content")
    <div class="big-padding text-center blue-grey white-text">
        <h1>Contactos</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nick</td>
                    <td>Celular</td>
                    <td>E-mail</td>   
                    <td>Estado</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($contacto as $cont)
                    <tr>
                        <td>{{$cont->id}}</td>
                        <td>{{$cont->nick}} </td>
                        <td>{{$cont->celular}} </td>
                        <td>{{$cont->email}}</td>                        
                        <td>{{$cont->estado}} </td>
                        <td>                            
                            <a href="{{url('/contacto/'.$cont->id.'/edit')}}"class="btn btn-primary">
                            Editar
                            </a>
                            
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
<div class="container">
    <a href="{{url('/contacto/create')}}" class="btn btn-primary">
        Add
    </a>
</div>
@endsection