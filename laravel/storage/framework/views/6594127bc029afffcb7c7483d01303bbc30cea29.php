
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    <?php echo HTML::style('packages/jacopo/laravel-authentication-acl/css/bootstrap.min.css'); ?>

    <?php echo HTML::style('packages/jacopo/laravel-authentication-acl/css/style.css'); ?>

    <?php echo HTML::style('packages/jacopo/laravel-authentication-acl/css/baselayout.css'); ?>

    <?php echo HTML::style('packages/jacopo/laravel-authentication-acl/css/fonts.css'); ?>

    <?php echo HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'); ?>


    <?php echo $__env->yieldContent('head_css'); ?>
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <body>
        
        <?php echo $__env->make('laravel-authentication-acl::admin.layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        
        <div class="container-fluid">
            <?php echo $__env->yieldContent('container'); ?>
        </div>

        
        <?php echo $__env->yieldContent('before_footer_scripts'); ?>

        <?php echo HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/jquery-1.10.2.min.js'); ?>

        <?php echo HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/bootstrap.min.js'); ?>


        <?php echo $__env->yieldContent('footer_scripts'); ?>
        
    </body>
</html>