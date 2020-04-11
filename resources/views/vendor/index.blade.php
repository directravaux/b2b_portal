@extends('layout.index')
@section('content')
<section class="dashboard-area">
    @section('vendordashboardarea')
        @include('layout.common.vendordashboardarea')
    @show
        <div class="dashboard_contents">
            <div class="container">

                @include('layout.common.alert')

                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="dashboard__title">
                                <h3>Vendor Settings</h3>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
                <form role="form" method="POST" action="{{ route('vendor.profile') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="information_module">
                                <a class="toggle_title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Personal Information
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set toggle_module collapse show" id="collapse2">
                                    <div class="information_wrapper form--fields">
                                    	<div class="form-group">
											<label for="user_name">Username :- </label>
											<label>{{$user->user_name}}</label>
										</div>
										<div class="form-group">
											<label for="email">Email Address :- </label>
											<label>{{$user->email}}</label>
										</div>
                                        <div class="form-group required">
											<label for="first_name">First Name </label>
											<input id="first_name" name="first_name" type="text" class="text_field" value="{{old('first_name',$user->first_name)}}" placeholder="Enter your First Name">
											<span class="mcolor4">
												{{$errors->first('first_name')}}
											</span>
										</div>

										<div class="form-group required">
											<label for="last_name">Last Name </label>
											<input id="last_name" name="last_name" type="text" class="text_field" value="{{old('last_name',$user->last_name)}}" placeholder="Enter your Last Name">
											<span class="mcolor4">
												{{$errors->first('last_name')}}
											</span>
										</div>

										<div class="form-group required">
											<label for="phone">Phone </label>
											<input id="phone" name="phone" value="{{old('phone',$user->phone)}}" type="text" class="text_field numeric" placeholder="Enter your phone number" maxlength="15">
											<span class="mcolor4">
												{{$errors->first('phone')}}
											</span>
										</div>

                                        <!-- lebel for date selection -->
                                        <label for="name">Enterprise <span class="required">*</span></label>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <button type="button" class="btn btn-sm plus">
                                                    +
                                                </button>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="form-group">
                                                    <input id="enterprise" name="enterprise" value="{{old('enterprise')}}" type="text" class="text_field" placeholder="Enter your enterprise">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <button type="button" class="btn btn-sm min">
                                                    -
                                                </button>
                                            </div>
                                        </div>

										<div class="form-group">
											<label for="enterprise">Password : </label>
											<a href="{{route('changepassword.get')}}" target="_blank">Change Password</a>
										</div>

                                        <div class="form-group">
                                            <label for="enterprise">Store : </label>
                                            <a href="{{route('vendor.store')}}" target="_blank">
                                                {{$user->store_name}}
                                            </a>
                                        </div>

                                    </div>
                                    <!-- end /.information_wrapper -->
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->

                            <div class="information_module">
                                <a class="toggle_title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Biling Information
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set toggle_module collapse" id="collapse1">
                                    <div class="information_wrapper form--fields">

                                    	<div class="form-group required">
											<label for="street_number">Street number </label>
											<input id="street_number" name="street_number" value="{{old('street_number',$user->street_number)}}" type="text" class="text_field" placeholder="Enter your Street number">
											<span class="mcolor4">
												{{$errors->first('street_number')}}
											</span>
										</div>
										<div class="form-group required">
											<label for="street_name">Street Name </label>
											<input id="street_name" name="street_name" value="{{old('street_name',$user->street_name)}}" type="text" class="text_field" placeholder="Enter your Street Name" />
											<span class="mcolor4">
												{{$errors->first('street_name')}}
											</span>
										</div>

                                        <div class="form-group required">
											<label for="country">Country
											</label>
											<select name="country" id="country" class="text_field">
												<option value="">Select Country</option>
												@foreach($countries as $key=> $country)
												@if(old('country_id', (isset($user->country)) ? $user->country:'')==$key)
												<option value="{{$key}}" selected>{{$country}}</option>
												@else
												<option value="{{$key}}">{{$country}}</option>
												@endif
												@endforeach
											</select>
											{{$errors->first('country')}}
										</div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group required">
                                                    <label for="city">City
                                                    </label>
                                                    <input id="city" name="city" value="{{old('city',$user->city)}}" type="text" class="text_field" placeholder="Enter your city">
													<span class="mcolor4">
														{{$errors->first('city')}}
													</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group required">
                                                    <label for="zipcode">Zip / Postal Code
                                                    </label>
                                                    <input id="zipcode" name="zipcode" value="{{old('zipcode',$user->zipcode)}}" type="text" class="text_field numeric" placeholder="Enter your Zip code">
													<span class="mcolor4">
														{{$errors->first('zipcode')}}
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->

                            <div class="information_module">
                                <a class="toggle_title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse3">
                                    <h4>Shipping Information
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set toggle_module collapse" id="collapse3">
                                    <div class="information_wrapper form--fields">

                                    	<div class="form-group required">
											<label for="shipping_street_number">Shipping Street number </label>
											<input id="shipping_street_number" name="shipping_street_number" value="{{old('shipping_street_number',$user->shipping_street_number)}}" type="text" class="text_field" placeholder="Enter your Shipping Street number">
											<span class="mcolor4">
												{{$errors->first('shipping_street_number')}}
											</span>
										</div>
										<div class="form-group required">
											<label for="shipping_street_name">Shipping Street Name </label>
											<input id="shipping_street_name" name="shipping_street_name" value="{{old('shipping_street_name',$user->shipping_street_name)}}" type="text" class="text_field" placeholder="Enter your Shipping Street Name">
											<span class="mcolor4">
												{{$errors->first('shipping_street_name')}}
											</span>
										</div>

                                        <div class="form-group">
											<label for="country">Shipping Country
												<sup>*</sup>
											</label>
											<select name="shipping_country" id="shipping_country" class="text_field">
												<option value="">Select Country</option>
												@foreach($countries as $key=> $country)
												@if(old('shipping_country', (isset($user->shipping_country)) ? $user->shipping_country:'')==$key)
												    <option value="{{$key}}" selected>{{$country}}</option>
												@else
												    <option value="{{$key}}">{{$country}}</option>
												@endif
												@endforeach
											</select>
											{{$errors->first('shipping_country')}}
										</div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group required">
                                                    <label for="city">City
                                                    </label>
                                                    <input id="shipping_city" name="shipping_city" value="{{old('shipping_city',$user->shipping_city)}}" type="text" class="text_field" placeholder="Enter your Shipping City">
													<span class="mcolor4">
														{{$errors->first('shipping_city')}}
													</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group required">
                                                    <label for="zipcode">Zip / Postal Code
                                                    </label>
                                                    <input id="shipping_zipcode" name="shipping_zipcode" value="{{old('shipping_zipcode',$user->shipping_zipcode)}}" type="text" class="text_field numeric" placeholder="Enter your Shipping Zip code">
													<span class="mcolor4">
														{{$errors->first('shipping_zipcode')}}
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->

                            <div class="information_module">
                                <a class="toggle_title" href="#collapse4" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse4">
                                    <h4>Payment Information
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set toggle_module collapse" id="collapse4">
                                    <div class="information_wrapper form--fields">

                                        <div class="form-group ">
                                            <label for="payment_option">Payment <span class="required">*</span> </label>

                                            <div class="custom-radio">
                                                <input type="radio" id="payment_paypal" class="role" name="payment_option" value="paypal" @if(old('payment_option', (isset($user->payment_option)) ? $user->payment_option:'')=='paypal') checked @endif>
                                                <label for="payment_paypal">
                                                <span class="circle"></span>Paypal</label>

                                                <input type="radio" id="payment_option_card" class="role" name="payment_option" value="card" @if(old('payment_option', (isset($user->payment_option)) ? $user->payment_option:'')=='card') checked @endif>
                                                <label for="payment_option_card">
                                                <span class="circle"></span>Credit Card</label>

                                                <input type="radio" id="payment_option_bank" class="role" name="payment_option" value="bank" @if(old('payment_option', (isset($user->payment_option)) ? $user->payment_option:'')=='bank') checked @endif>
                                                <label for="payment_option_bank">
                                                <span class="circle"></span>Bank Account</label>
                                            </div>
                                            <span class="mcolor4">
                                                {{$errors->first('payment_option')}}
                                            </span>
                                        </div>

                                        <div class="payment_info modules__content cardInfo">
                                            <div class="form-group required">
                                                <label for="card_number">Card Number </label>
                                                <input id="card_number" name="card_number" value="{{old('card_number',$user->card_number)}}" type="text" class="text_field numeric" placeholder="Enter your card number here..." maxlength="16">
                                                <span class="mcolor4">
                                                    {{$errors->first('card_number')}}
                                                </span>
                                            </div>

                                            <!-- lebel for date selection -->
                                            <label for="name">Expire Date <span class="required">*</span></label>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="select-wrap select-wrap2">
                                                            <select name="card_exp_month" id="card_exp_month" class="text_field">
                                                                <option value="">Select Month</option>
                                                                @foreach($months as $key=> $month)
                                                                @if(old('card_exp_month', (isset($user->card_exp_month)) ? $user->card_exp_month:'')==$key)
                                                                <option value="{{$key}}" selected>{{$month}}</option>
                                                                @else
                                                                <option value="{{$key}}">{{$month}}</option>
                                                                @endif
                                                                @endforeach
                                                            </select>
                                                            <span class="mcolor4">
                                                                {{$errors->first('card_exp_month')}}
                                                            </span>
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
                                                            <select name="card_exp_year" id="card_exp_year" class="text_field">
                                                                <option value="">Select Month</option>
                                                                @foreach($years as $key=> $year)
                                                                @if(old('card_exp_year', (isset($user->card_exp_year)) ? $user->card_exp_year:'')==$key)
                                                                <option value="{{$key}}" selected>{{$year}}</option>
                                                                @else
                                                                <option value="{{$key}}">{{$year}}</option>
                                                                @endif
                                                                @endforeach
                                                            </select>
                                                            <span class="mcolor4">
                                                                {{$errors->first('card_exp_year')}}
                                                            </span>
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
                                                    <div class="form-group required">
                                                        <label for="cv_code">CVV Code</label>

                                                        <input id="card_cvv_code" name="card_cvv_code" value="{{old('card_cvv_code',$user->card_cvv_code)}}" type="text" class="text_field numeric" placeholder="Enter your CVV Code" maxlength="3">
                                                        <span class="mcolor4">
                                                            {{$errors->first('card_cvv_code')}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="payment_info modules__content bankInfo">
                                            <div class="form-group required">
                                                <label for="bank_name">Bank Name </label>

                                                <input id="bank_name" name="bank_name" value="{{old('bank_name',$user->bank_name)}}" type="text" class="text_field" placeholder="Enter your card number here...">
                                                <span class="mcolor4">
                                                    {{$errors->first('bank_name')}}
                                                </span>
                                            </div>

                                            <div class="form-group required">
                                                <label for="bank_accont_no">Bank Account Number </label>

                                                <input id="bank_accont_no" name="bank_accont_no" value="{{old('bank_accont_no',$user->bank_accont_no)}}" type="text" class="text_field numeric" placeholder="Enter your card number here...">
                                                <span class="mcolor4">
                                                    {{$errors->first('bank_accont_no')}}
                                                </span>
                                            </div>

                                            <div class="form-group required">
                                                <label for="bank_ifsc_no">Bank IFSC Code </label>

                                                <input id="bank_ifsc_no" name="bank_ifsc_no" value="{{old('bank_ifsc_no',$user->bank_ifsc_no)}}" type="text" class="text_field" placeholder="Enter your card number here...">
                                                <span class="mcolor4">
                                                    {{$errors->first('bank_ifsc_no')}}
                                                </span>
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
                            <div class="information_module">
                                <a class="toggle_title" href="#collapse8" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <div class="progress_wrapper">
                                        <div class="labels clearfix">
                                            <p>Screenshots.zip</p>
                                            <span data-width="70">70%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>Profile Image & Cover
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set profile_images toggle_module collapse" id="collapse8">
                                    <div class="information_wrapper">

                                        <div class="profile_image_area">
                                        	@if($user->user_photo !='')
                                        		<img src="{{$userPhoto}}" height="100px" width="100px">
                                        	@else
                                            	<img src="{{asset('images/authplc.png')}}">
                                            @endif
                                            <div class="img_info">
                                                <p class="bold">Profile Image</p>
                                                <p class="subtitle">JPG, GIF or PNG 100x100 px</p>
                                            </div>

                                            <label for="cover_photo" class="upload_btn">
                                            	<input id="cover_photo" name="user_photo" type="file">
                                                <span class="btn btn--sm btn--round" aria-hidden="true">Upload Image</span>
                                            </label>
											<span class="mcolor4">
												{{$errors->first('user_photo')}}
											</span>
                                        </div>

                                        <div class="prof_img_upload">
                                            <p class="bold">Cover Image</p>
                                            @if($user->banner_photo !='' && $user->user_role=='vendor')
                                        		<img src="{{$bannerPhoto}}" height="200px" width="495px">
                                        	@else
                                            	<img src="{{asset('images/cvrplc.jpg')}}">
                                            @endif

                                            <div class="upload_title">
                                                <p>JPG, GIF or PNG 750x370 px</p>
                                                <label for="dp" class="upload_btn">
                                                	<input id="dp" name="banner_photo" type="file" class="text_field">
                                                    <input type="file" id="dp">
                                                    <span class="btn btn--sm btn--round" aria-hidden="true">Upload Image</span>
                                                </label>
												<span class="mcolor4">
													{{$errors->first('banner_photo')}}
												</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.information_module -->

                            <div class="information_module">
                                <a class="toggle_title" href="#collapse10" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Social Profiles
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set social_profile toggle_module collapse " id="collapse10">
                                    <div class="information_wrapper">
                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-facebook"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.facebook.com/aazztech">
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-twitter"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.twitter.com/aazztech">
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-google-plus"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.google.com/aazztech">
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-behance"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.behance.com/aazztech">
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->

                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-dribbble"></span>
                                            </div>

                                            <div class="link_field">
                                                <input type="text" class="text_field" placeholder="ex: www.dribbble.com/aazztech">
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->
                                    </div>
                                    <!-- end /.information_wrapper -->
                                </div>
                                <!-- end /.social_profile -->
                            </div>
                            <!-- end /.information_module -->

                            <div class="information_module">
                                <a class="toggle_title" href="#collapse14" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                    <h4>Email Settings
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set mail_setting toggle_module collapse" id="collapse14">
                                    <div class="information_wrapper">
                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt1" class="" name="mail_rating_reminder" checked>
                                            <label for="opt1">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Rating Reminders</span>
                                                <span class="desc">Send an email reminding me to rate an item after purchase</span>
                                            </label>
                                        </div>
                                        <!-- end /.custom-radio -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt2" class="" name="mail_update_noti" checked>
                                            <label for="opt2">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Item Update Notifications</span>
                                                <span class="desc">Send an email when an item I've purchased is updated</span>
                                            </label>
                                        </div>
                                        <!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt3" class="" name="mail_comment_noti" checked>
                                            <label for="opt3">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Item Comment Notifications</span>
                                                <span class="desc">Send me an email when someone comments on one of my items</span>
                                            </label>
                                        </div>
                                        <!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt4" class="" name="mail_item_review_noti" checked>
                                            <label for="opt4">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Item Review Notifications</span>
                                                <span class="desc">Send me an email when my items are approved or rejected</span>
                                            </label>
                                        </div>
                                        <!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt5" class="" name="mail_review_noti" checked>
                                            <label for="opt5">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Buyer Review Notifications</span>
                                                <span class="desc">Send me an email when someone leaves a review with their rating</span>
                                            </label>
                                        </div>
                                        <!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt6" class="" name="mail_support_noti" checked>
                                            <label for="opt6">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Support Notifications</span>
                                                <span class="desc">Send me emails showing my soon to expire support entitlements</span>
                                            </label>
                                        </div>
                                        <!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt7" class="" name="mail_weekly">
                                            <label for="opt7">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Weekly Summary Emails</span>
                                                <span class="desc">Send me emails showing my soon to expire support entitlements</span>
                                            </label>
                                        </div>
                                        <!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                            <input type="checkbox" id="opt8" class="" name="mail_newsletter">
                                            <label for="opt8">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">MartPlace Newsletter</span>
                                                <span class="desc">Get update about latest news, update and more.</span>
                                            </label>
                                        </div>
                                        <!-- end /.custom_checkbox -->
                                    </div>
                                    <!-- end /.information_wrapper -->
                                </div>
                                <!-- end /.information_module -->
                            </div>
                            <!-- end /.information_module -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <div class="col-md-12">
                            <div class="dashboard_setting_btn">
                                <button type="submit" class="btn btn--round btn--md">Save Change</button>
                            </div>
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </form>
                <!-- end /form -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
@stop

@section('scripts')
<script type="text/javascript">
    jQuery(function(){
      var j = jQuery; //Just a variable for using jQuery without conflicts
      var addInput = '#enterprise'; //This is the id of the input you are changing
      var n = 1; //n is equal to 1

      //Set default value to n (n = 1)
      j(addInput).val(n);

      //On click add 1 to n
      j('.plus').on('click', function(){
        j(addInput).val(++n);
      })

      j('.min').on('click', function(){
        //If n is bigger or equal to 1 subtract 1 from n
        if (n >= 1) {
          j(addInput).val(--n);
        } else {
          //Otherwise do nothing
        }
      });
    });

    jQuery(function () {
        function displayPayment()
        {
            jQuery(".cardInfo,.bankInfo").hide();
            var data = $('input[type=radio][name=payment_option]:checked').val();
            if (data == 'card') {
                jQuery(".cardInfo").show();
            } else if (data == 'bank') {
                jQuery(".bankInfo").show();
            } else if (data == 'paypal') {
                jQuery(".cardInfo,.bankInfo").hide();
            }
        }
        displayPayment();
        jQuery("input[type=radio][name=payment_option]").change(function () {
            displayPayment();
        });
    });
</script>
@stop
