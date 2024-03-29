<?php $__env->startSection('content'); ?>
<section class="dashboard-area">
        <div class="dashboard_contents">
            <div class="container">
                <form role="form" method="POST" action="<?php echo e(route('client.checkout')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>Biling Information </h4>
                                </div>

                                <div class="information__set">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group required">
                                                    <label for="first_name">First Name

                                                    </label>
                                                    <input id="first_name" name="first_name" type="text" class="text_field" value="<?php echo e(old('first_name',$user->first_name)); ?>" placeholder="Enter your First Name">
                                                    <span class="mcolor4">
                                                        <?php echo e($errors->first('first_name')); ?>

                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group required">
                                                    <label for="last_name">last Name

                                                    </label>
                                                    <input id="last_name" name="last_name" type="text" class="text_field" value="<?php echo e(old('last_name',$user->last_name)); ?>" placeholder="Enter your Last Name">
                                                    <span class="mcolor4">
                                                        <?php echo e($errors->first('last_name')); ?>

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.row -->

                                        <div class="form-group required storeName">
                                            <label for="store_name">Storename </label>
                                            <input id="store_name" name="store_name" value="<?php echo e(old('store_name')); ?>" type="text" class="text_field" placeholder="Enter your Storename...">
                                            <span class="mcolor4 errorMsg">
                                                <?php echo e($errors->first('store_name')); ?>

                                            </span>
                                            <span class="mcolor1 successMsg">
                                            </span>
                                        </div>

                                        <div class="form-group required">
                                            <label for="email">User Name

                                            </label>

                                            <input id="user_name" name="user_name" type="text" class="text_field" value="<?php echo e(old('user_name',$user->user_name)); ?>" placeholder="Enter your user Name" readonly="readonly">
                                            <span class="mcolor4">
                                                <?php echo e($errors->first('user_name')); ?>

                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="email1">Email Adress
                                            </label>

                                            <input id="email" name="email" type="text" class="text_field" value="<?php echo e(old('email',$user->email)); ?>" placeholder="Enter your user Name" readonly="readonly">
                                            <span class="mcolor4">
                                                <?php echo e($errors->first('email')); ?>

                                            </span>
                                        </div>

                                        <div class="form-group required">
                                            <label for="country1">Country
                                            </label>
                                            <div class="select-wrap select-wrap2">
                                                <select name="country" id="country" class="text_field">
                                                    <option value="">Select Country</option>
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(old('country_id', (isset($user->country)) ? $user->country:'')==$key): ?>
                                                    <option value="<?php echo e($key); ?>" selected><?php echo e($country); ?></option>
                                                    <?php else: ?>
                                                    <option value="<?php echo e($key); ?>"><?php echo e($country); ?></option>
                                                    <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php echo e($errors->first('country')); ?>

                                                <span class="lnr lnr-chevron-down"></span>
                                            </div>
                                        </div>


                                        <div class="form-group required">
                                            <label for="address1">Street number </label>
                                            <input id="street_number" name="street_number" value="<?php echo e(old('street_number',$user->street_number)); ?>" type="text" class="text_field" placeholder="Enter your Street number">
                                            <span class="mcolor4">
                                                <?php echo e($errors->first('street_number')); ?>

                                            </span>
                                        </div>

                                        <div class="form-group required">
                                            <label for="address2">Street name </label>
                                            <input id="street_name" name="street_name" value="<?php echo e(old('street_name',$user->street_name)); ?>" type="text" class="text_field" placeholder="Enter your Street Name" />
                                            <span class="mcolor4">
                                                <?php echo e($errors->first('street_name')); ?>

                                            </span>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group required">
                                                    <label for="city">City </label>
                                                    <input id="city" name="city" value="<?php echo e(old('city',$user->city)); ?>" type="text" class="text_field" placeholder="Enter your city">
                                                    <span class="mcolor4">
                                                        <?php echo e($errors->first('city')); ?>

                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group required">
                                                    <label for="zipcode">Zip / Postal Code
                                                    </label>
                                                    <input id="zipcode" name="zipcode" value="<?php echo e(old('zipcode',$user->zipcode)); ?>" type="text" class="text_field numeric" placeholder="Enter your Zip code">
                                                    <span class="mcolor4">
                                                        <?php echo e($errors->first('zipcode')); ?>

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <div class="col-lg-6">
                            <div class="information_module order_summary">
                                <div class="toggle_title">
                                    <h4>Order Summary</h4>
                                </div>

                                <ul>
                                    <li class="item">
                                        <a href="#" target="_blank">Finance and Consulting Business Theme</a>
                                        <span>$60</span>
                                    </li>
                                    <li class="item">
                                        <a href="#" target="_blank">Visibility Manager Subscriptions</a>
                                        <span>$60</span>
                                    </li>
                                    <li>
                                        <p>Estimated Taxes & Fees:</p>
                                        <span>$2</span>
                                    </li>
                                    <li class="total_ammount">
                                        <p>Total</p>
                                        <span>$122.00</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.information_module-->

                            <div class="information_module payment_options">
                                <div class="toggle_title">
                                    <h4>Select Payment Method</h4>
                                </div>

                                <ul>
                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="opt1" class="" name="filter_opt">
                                            <label for="opt1">
                                                <span class="circle"></span>Credit Card</label>
                                        </div>
                                        <img src="<?php echo e(asset('images/cards.png')); ?>" alt="Visa Cards">
                                    </li>

                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="opt2" class="" name="filter_opt">
                                            <label for="opt2">
                                                <span class="circle"></span>Paypal</label>
                                        </div>
                                        <img src="<?php echo e(asset('images/paypal.png')); ?>" alt="Visa Cards">
                                    </li>

                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="opt3" class="" name="filter_opt">
                                            <label for="opt3">
                                                <span class="circle"></span>Martplace Credit</label>
                                        </div>
                                        <p>Balance
                                            <span class="bold">$180</span>
                                        </p>
                                    </li>
                                </ul>

                                <div class="payment_info modules__content">
                                    <div class="form-group">
                                        <label for="card_number">Card Number</label>
                                        <input id="card_number" type="text" class="text_field" placeholder="Enter your card number here...">
                                    </div>

                                    <!-- lebel for date selection -->
                                    <label for="name">Expire Date</label>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="select-wrap select-wrap2">
                                                    <select name="months" id="name">
                                                        <option value="">Month</option>
                                                        <option value="jan">jan</option>
                                                        <option value="feb">Feb</option>
                                                        <option value="mar">Mar</option>
                                                        <option value="apr">Apr</option>
                                                        <option value="may">May</option>
                                                        <option value="jun">Jun</option>
                                                        <option value="jul">Jul</option>
                                                        <option value="aug">Aug</option>
                                                        <option value="sep">Sep</option>
                                                        <option value="oct">Oct</option>
                                                        <option value="nov">Nov</option>
                                                        <option value="dec">Dec</option>
                                                    </select>
                                                    <span class="lnr lnr-chevron-down"></span>
                                                </div>
                                                <!-- end /.select-wrap -->
                                            </div>
                                            <!-- end /.form-group -->
                                        </div>
                                        <!-- end /.col-md-6-->

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="select-wrap select-wrap2">
                                                    <select name="years" id="years">
                                                        <option value="">Year</option>
                                                        <option value="28">2028</option>
                                                        <option value="27">2027</option>
                                                        <option value="26">2026</option>
                                                        <option value="25">2025</option>
                                                        <option value="24">2024</option>
                                                        <option value="23">2023</option>
                                                        <option value="22">2022</option>
                                                        <option value="21">2021</option>
                                                        <option value="20">2020</option>
                                                        <option value="19">2019</option>
                                                        <option value="18">2019</option>
                                                        <option value="17">2019</option>
                                                    </select>
                                                    <span class="lnr lnr-chevron-down"></span>
                                                </div>
                                                <!-- end /.select-wrap -->
                                            </div>
                                            <!-- end /.form-group -->
                                        </div>
                                        <!-- end /.col-md-6-->
                                    </div>
                                    <!-- end /.row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cv_code">CVV Code</label>
                                                <input id="cv_code" type="text" class="text_field" placeholder="Enter code here...">
                                            </div>

                                            <button type="submit" class="btn btn--round btn--default">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.information_module-->
                        </div>
                        <!-- end /.col-md-6 -->
                    </div>
                    <!-- end /.row -->
                </form>
                <!-- end /form -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">

    jQuery(document).ready(function() {
        /** store name  */
        jQuery(document).on('blur',"#store_name",function(e) {
            e.preventDefault();
            jQuery(".storeName").find(".successMsg,.errorMsg").html("");
            var storeName = jQuery(this).val();
            if(storeName != '') {
                jQuery.ajax({
                    type: "post",
                    url: public_path + "client/store",
                    data: {
                        "store_name": storeName,
                    },
                    success: function(response) {
                        if (response.success) {
                            jQuery(".storeName").find(".successMsg").html(response.msg);
                        } else {
                            jQuery(".storeName").find(".errorMsg").html(response.msg);
                        }
                    }
                });
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/b2b_portal/resources/views/client/checkout.blade.php ENDPATH**/ ?>