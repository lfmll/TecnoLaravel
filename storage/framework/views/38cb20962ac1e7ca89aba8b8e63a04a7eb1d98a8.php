<?php $__env->startSection('content'); ?>
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
                            <a href="<?php echo e(url("/usuario")); ?>">Ver Usuarios</a>
                        </td>                        
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>