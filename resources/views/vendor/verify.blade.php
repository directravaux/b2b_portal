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
	                            <h3>Verification Settings</h3>
	                        </div>
	                    </div>
	                </div>
	                <!-- end /.col-md-12 -->
	            </div>

	            <!-- end /.row -->
				<form role="form" method="POST" action="{{ route('verify.post') }}">
                    @csrf
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="information_module">
	                            <a class="toggle_title">
	                                <h4>Verification Information</h4>
	                            </a>

	                            <div class="information__set toggle_module">
	                                <div class="information_wrapper form--fields">

	                                	<p> <h3> Hi {{$user->first_name}} </h3></p>
			                            <p> <b> Please Verify your E-mail address </b></p>
			                            <p> <b> To start using your account </p>
			                            <p> <b> you need to confirm your account </p>
			                            <p> <b> We have send verification mail to register email address </p>

	                                </div>
	                                <!-- end /.information_wrapper -->
	                            </div>
	                            <!-- end /.information__set -->
	                        </div>
	                        <!-- end /.information_module -->

	                        <div class="dashboard_setting_btn">
	                            <button type="submit" class="btn btn--round btn--md">Resend Email Verification Link</button>
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
