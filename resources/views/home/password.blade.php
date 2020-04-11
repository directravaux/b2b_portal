@extends('layout.index')
@section('content')
	<section class="dashboard-area">
	    <div class="dashboard_contents">
	        <div class="container">

				@include('layout.common.alert')

	            <div class="row">
	                <div class="col-md-12">
	                    <div class="dashboard_title_area">
	                        <div class="dashboard__title">
	                            <h3>Password Settings</h3>
	                        </div>
	                    </div>
	                </div>
	                <!-- end /.col-md-12 -->
	            </div>

	            <!-- end /.row -->
				<form role="form" method="POST" action="{{ route('changepassword.post') }}">
                    @csrf
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="information_module">
	                            <a class="toggle_title">
	                                <h4>Password Information</h4>
	                            </a>

	                            <div class="information__set toggle_module">
	                                <div class="information_wrapper form--fields">

	                                	<div class="form-group required">
		                                    <label for="old_password">Old Password </label>
		                                    <input id="old_password" name="old_password" type="password" class="text_field">
		                                    <span class="mcolor4">
		                                        {{$errors->first('old_password')}}
		                                    </span>
		                                </div>

		                                <div class="form-group required">
		                                    <label for="password">Password </label>
		                                    <input id="password" name="password" type="password" class="text_field">
		                                    <span class="mcolor4">
		                                        {{$errors->first('password')}}
		                                    </span>
		                                </div>
		                                <div class="form-group required">
		                                    <label for="con_pass">Confirm Password </label>
		                                    <input id="password_confirmation" name="password_confirmation" type="password" class="text_field">
		                                    <span class="mcolor4">
		                                        {{$errors->first('password_confirmation')}}
		                                    </span>
		                                </div>

	                                </div>
	                                <!-- end /.information_wrapper -->
	                            </div>
	                            <!-- end /.information__set -->
	                        </div>
	                        <!-- end /.information_module -->

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
