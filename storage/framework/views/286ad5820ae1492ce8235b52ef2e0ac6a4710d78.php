<?php $__env->startSection("content"); ?>
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
                <?php $__currentLoopData = $contacto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cont): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($cont->id); ?></td>
                        <td><?php echo e($cont->nick); ?> </td>
                        <td><?php echo e($cont->celular); ?> </td>
                        <td><?php echo e($cont->email); ?></td>                        
                        <td><?php echo e($cont->estado); ?> </td>
                        <td>                            
                            <a href="<?php echo e(url('/contacto/'.$cont->id.'/edit')); ?>"class="btn btn-primary">
                            Editar
                            </a>
                            
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<div class="container">
    <a href="<?php echo e(url('/contacto/create')); ?>" class="btn btn-primary">
        Add
    </a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>