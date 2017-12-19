<?php $__env->startSection("content"); ?>
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
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($usr->id); ?></td>
                        <td><?php echo e($usr->name); ?> </td>
                        <td><?php echo e($usr->celular); ?> </td>
                        <td><?php echo e($usr->email); ?></td>                                                
                        <td>                            
                            <a href="<?php echo e(url("/contacto/$usr->id")); ?>">Ver Contactos</a>
                            
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>