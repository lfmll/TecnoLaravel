<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Enviar Mensaje</div>
                    <form method="POST" action="<?php echo e(route('mensaje.store')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="panel-body">
                                                                         
                        <div class="form-group" <?php echo e($errors->has('body')? 'has-error': ""); ?>>
                            <textarea name="body" class="form-control" placeholder="Escriba su mensaje aqui"></textarea>
                            <?php echo $errors->first('body',"<span class=help-block>:message</span>"); ?>

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
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>