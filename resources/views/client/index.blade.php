@extends('layout.index')
@section('content')
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
<section class="dashboard-area">
	<div class="dashboard_menu_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="dashboard_menu">
						<li>
							<a href="#">
								<span class="lnr lnr-briefcase"></span>Purchase History</a>
							</li>
							<li>
								<a href="#">
									<span class="lnr lnr-download"></span>Downloads</a>
								</li>
								<li class="active">
									<a href="#">
										<span class="lnr lnr-cog"></span>Client Info</a>
									</li>
								</ul>
								<!-- end /.dashboard_menu -->
							</div>
							<!-- end /.col-md-12 -->
						</div>
						<!-- end /.row -->
					</div>
					<!-- end /.container -->
				</div>


				<!-- end /.dashboard_menu_area -->
				<div class="dashboard_contents">
					<div class="container">
						@include('layout.common.alert')

						<div class="row">
							<div class="col-md-12">
								<div class="dashboard_title_area">
									<div class="dashboard__title">
										<h3>Account Settings</h3>
									</div>
								</div>
							</div>
							<!-- end /.col-md-12 -->
						</div>
						<!-- end /.row -->
						<form role="form" method="POST" action="{{ route('client.profile') }}" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-md-12">
									<div class="information_module">
										<a class="toggle_title">
											<h4>Personal Information</h4>
										</a>
										<div class="information__set toggle_module">
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
												<div class="form-group">
													<label for="user_photo">Photo</label>
													<label for="user_photo" class="cv_upload">
														<span class="text">Upload your Photo</span>
														<span class="lnr lnr-upload up_icon"></span>
														<input id="user_photo" name="user_photo" type="file" class="text_field">
														<span class="mcolor4">
															{{$errors->first('user_photo')}}
														</span>
													</label>
												</div>
												<div class="form-group required">
													<label for="phone">Phone </label>
													<input id="phone" name="phone" value="{{old('phone',$user->phone)}}" type="text" class="text_field numeric" placeholder="Enter your phone number" maxlength="15">
													<span class="mcolor4">
														{{$errors->first('phone')}}
													</span>
												</div>
												<div class="form-group">
													<label for="enterprise">Password : </label>
													<a href="{{route('changepassword.get')}}" target="_blank">Change Password</a>
												</div>
											</div>
											<!-- end /.information_wrapper -->
										</div>
										<!-- end /.information__set -->
									</div>
									<!-- end /.information_module -->
									<div class="information_module">
										<a class="toggle_title">
											<h4> Billing Address</h4>
										</a>
										<div class="information__set toggle_module">
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
													<label for="city">City </label>
													<input id="city" name="city" value="{{old('city',$user->city)}}" type="text" class="text_field" placeholder="Enter your city">
													<span class="mcolor4">
														{{$errors->first('city')}}
													</span>
												</div>
												<div class="form-group required">
													<label for="zipcode">Zip </label>
													<input id="zipcode" name="zipcode" value="{{old('zipcode',$user->zipcode)}}" type="text" class="text_field numeric" placeholder="Enter your Zip code">
													<span class="mcolor4">
														{{$errors->first('zipcode')}}
													</span>
												</div>
												<div class="form-group">
													<label for="country">Country
														<sup>*</sup>
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
											</div>
										</div>
										<!-- end /.information__set -->
									</div>
									<!-- end /.information_module -->
									<div class="information_module">
										<a class="toggle_title">
											<h4> Shipping Address</h4>
										</a>
										<div class="information__set toggle_module">
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
												<div class="form-group required">
													<label for="shipping_city">Shipping City </label>
													<input id="shipping_city" name="shipping_city" value="{{old('shipping_city',$user->shipping_city)}}" type="text" class="text_field" placeholder="Enter your Shipping City">
													<span class="mcolor4">
														{{$errors->first('shipping_city')}}
													</span>
												</div>
												<div class="form-group required">
													<label for="shipping_zipcode">Shipping Zip </label>
													<input id="shipping_zipcode" name="shipping_zipcode" value="{{old('shipping_zipcode',$user->shipping_zipcode)}}" type="text" class="text_field numeric" placeholder="Enter your Shipping Zip code">
													<span class="mcolor4">
														{{$errors->first('shipping_zipcode')}}
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
											</div>
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
			</div>
		</div>
	</div>
</section>
@stop
