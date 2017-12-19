<?php $__env->startSection("content"); ?>
    <div class="container white">
        <h1>Nuevo Contacto</h1>
        <!-- Formulario -->
        <?php echo $__env->make('contacto.form',['contacto'=>$contacto,'url'=>'/contacto','method'=>'POST'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>