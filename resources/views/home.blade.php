@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Panel Principal</div>
                    <div class="panel-body">
                        Usuario Logeado!
                    </div>
                </div>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>
                            <a href="{{url("/usuario")}}">Ver Usuarios</a>
                        </td>                        
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
