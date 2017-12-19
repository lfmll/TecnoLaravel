@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Enviar Mensaje</div>
                    <form method="POST" action="{{route('mensaje.store')}}">
                        {{csrf_field()}}
                        <div class="panel-body">
                                                                         
                        <div class="form-group" {{$errors->has('body')? 'has-error': ""}}>
                            <textarea name="body" class="form-control" placeholder="Escriba su mensaje aqui"></textarea>
                            {!! $errors->first('body',"<span class=help-block>:message</span>")!!}
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Enviar</button>
                        </div>

                    </div>    
                    </form>
                    
                </div>
            </div>
        </div>
    </dsiv>
    @endsection

