<?php echo Form::open(['url' => $url, 'method' => $method, 'files'=>true ]); ?>

<div class="form-group">
    <?php echo e(Form::text('nick',$contacto->nick,['class'=>'form-control','placeholder'=>'nick'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::number('celular',$contacto->celular,['class'=>'form-control','placeholder'=>'celular'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::text('email',$contacto->email,['class'=>'form-control','placeholder'=>'correo electronico'])); ?>

</div>

<div class="form-group text-right">
    <a href="<?php echo e(url('/contacto')); ?>"> Regresar al listado producto
    </a>
    <input type="submit" value="Enviar" class="btn btn-sucess">
</div>
<?php echo Form::close(); ?>


