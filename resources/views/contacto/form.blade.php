{!! Form::open(['url' => $url, 'method' => $method, 'files'=>true ])!!}
<div class="form-group">
    {{Form::text('nick',$contacto->nick,['class'=>'form-control','placeholder'=>'nick'])}}
</div>
<div class="form-group">
    {{Form::number('celular',$contacto->celular,['class'=>'form-control','placeholder'=>'celular'])}}
</div>
<div class="form-group">
    {{Form::text('email',$contacto->email,['class'=>'form-control','placeholder'=>'correo electronico'])}}
</div>

<div class="form-group text-right">
    <a href="{{url('/contacto')}}"> Regresar al listado producto
    </a>
    <input type="submit" value="Enviar" class="btn btn-sucess">
</div>
{!! Form::close() !!}

