<?php $__env->startSection('content'); ?>
<section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                    <?php echo csrf_field(); ?>
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Welcome Back</h3>
                                <p>You can sign in with your username</p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">
                                <div class="form-group required userName">
                                    <label for="user_name">Username </label>
                                    <input id="user_name" name="user_name" value="<?php echo e(old('user_name')); ?>" type="text" class="text_field userNameData" placeholder="Enter your username...">
                                    <span class="mcolor4 errorMsg">
                                        <?php echo e($errors->first('user_name')); ?>

                                    </span>
                                </div>

                                <div class="form-group required">
                                    <label for="password">Password </label>
                                    <input id="password" name="password" type="password" class="text_field">
                                    <span class="mcolor4">
                                        <?php echo e($errors->first('password')); ?>

                                    </span>
                                </div>

                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="ch2">
                                        <label for="ch2">
                                            <span class="shadow_checkbox"></span>
                                            <span class="label_text">Remember me</span>
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn--md btn--round" type="submit">Login Now</button>

                                <div class="login_assist">
                                    <p class="recover">Lost your
                                        <!-- <a href="pass-recovery.html">username</a> or -->
                                        <a href="<?php echo e(url('/password/reset')); ?>">password</a>?
                                    </p>
                                    <p class="signup">
                                        Don't have an <a href="<?php echo e(url('/register')); ?>">account</a>?
                                    </p>
                                </div>
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/b2b_portal/resources/views/auth/login.blade.php ENDPATH**/ ?>