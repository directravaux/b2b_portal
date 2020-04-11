<?php $__env->startSection('content'); ?>
<!--================================
            START 404 AREA
    =================================-->
    <section class="four_o_four_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <img src="<?php echo e(asset('img/404-error.jpg')); ?>" alt="404 page">
                    <div class="not_found">
                        <h3>Page Non Trouvée</h3>
                        <p>La page que vous avez essayé de charger est introuvable. Vous avez peut-être utilisé une adresse (URL) incorrecte.</p>
                        <a href="<?php echo e(url('/')); ?>" class="btn btn--round btn--default">Retour à l'Accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
            END 404 AREA
    =================================-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/b2b_portal/resources/views/errors/404.blade.php ENDPATH**/ ?>