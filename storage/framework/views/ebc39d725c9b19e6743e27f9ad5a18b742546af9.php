<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php echo $__env->yieldPushContent('meta'); ?>

    <title><?php echo e(Config('app.name')); ?> <?php if(!empty($title)): ?> | <?php echo e($title); ?> <?php endif; ?></title>

    
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/fontello.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/lnr-icon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/trumbowyg.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
    

    
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/favicon.png')); ?>">

    <?php echo $__env->yieldPushContent('styles'); ?>

    <?php $__env->startSection('styles'); ?>
    <?php echo $__env->yieldSection(); ?>
</head>

<body class="preload home1 mutlti-vendor">

    
    <?php $__env->startSection('header'); ?>
        <?php echo $__env->make('layout.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldSection(); ?>

    <?php if(isset($title)): ?>
        <?php echo $__env->make('layout.common.breadcrumb',['title'=>$title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php $__env->startSection('footer'); ?>
        <?php echo $__env->make('layout.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldSection(); ?>


    <script>
        var public_path = "<?php echo URL::to('/');; ?>/";
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    
    <script src="<?php echo e(asset('js/vendor/jquery/jquery-1.12.3.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/jquery/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/jquery/uikit.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/chart.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/grid.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/jquery.barrating.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/jquery.countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/jquery.counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/jquery.easing1.3.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/tether.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/trumbowyg.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('js/map.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    

    <?php echo $__env->yieldPushContent('scripts'); ?>

    <?php $__env->startSection('scripts'); ?>
    <?php echo $__env->yieldSection(); ?>

</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/b2b_portal/resources/views/layout/index.blade.php ENDPATH**/ ?>