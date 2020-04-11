<!DOCTYPE html>
<html>
	<head>
        <base href="">
        <meta charset="utf-8" />
        <title>{{Config('app.name')}} | Store Wizard</title>
        <meta name="description" content="Updates and statistics">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

         <!--  General Css  -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

		<!--  proba css  -->
        <link href="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

        


        <link href="{{ asset('pages/css/wizard-1.css') }}" rel="stylesheet" type="text/css" />

        <style type="text/css">
			.logo {

 				margin-top: 30px;
 				margin-bottom: 20px;
			}
			.checkgreen {
				color: #13A22B;
			}
		</style>

		<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
        
</head>










<body>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="kt-portlet">
		<div class="kt-portlet__body kt-portlet__body--fit">
			<div class="kt-grid kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1" data-ktwizard-state="step-first">
				
					<div class="logo" align="center">
                        <a href="{{url('/')}}">
                            <img src="{{asset('images/logo.png')}}" alt="logo image">
                        </a>
                    </div>
				


<div class="container">
				<div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
										<div class="kt-portlet__head kt-portlet__head--lg">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Welcome dear Partneire <small>This is a Demo Wizard for cratinom Store on Diret Travaux, we will join you in every step for create you best store</small></h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												
												<div class="btn-group">
													<button type="button" class="btn btn-brand">
														<i class="la la-check"></i>
														<span class="kt-hidden-mobile">Save</span>
													</button>
													<button type="button" class="btn btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-reload"></i>
																	<span class="kt-nav__link-text">Save & continue</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-power"></i>
																	<span class="kt-nav__link-text">Save & exit</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-edit-interface-symbol-of-pencil-tool"></i>
																	<span class="kt-nav__link-text">Save & edit</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-add-1"></i>
																	<span class="kt-nav__link-text">Save & add new</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
			</div>
		</div>




				<div class="kt-grid__item">
					<!--begin: Form Wizard Nav -->
					<div class="kt-wizard-v1__nav">
						<!--doc: Remove "kt-wizard-v1__nav-items--clickable" class and also set 'clickableSteps: false' in the JS init to disable manually clicking step titles -->
						<div class="kt-wizard-v1__nav-items">
							<div class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
								<div class="kt-wizard-v1__nav-body">
									<div class="kt-wizard-v1__nav-icon">
										<i class="flaticon-list"></i>
									</div>
									<div class="kt-wizard-v1__nav-label">
										1. About The Store
									</div>
								</div>
							</div>
							<div class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
								<div class="kt-wizard-v1__nav-body">
									<div class="kt-wizard-v1__nav-icon">
										<i class="flaticon-cogwheel-1"></i>
									</div>
									<div class="kt-wizard-v1__nav-label">
										2. Select Services
									</div>
								</div>
							</div>
							<div class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
								<div class="kt-wizard-v1__nav-body">
									<div class="kt-wizard-v1__nav-icon">
										<i class="flaticon-truck"></i>
									</div>
									<div class="kt-wizard-v1__nav-label">
										3. Delivery Address
									</div>
								</div>
							</div>
							<div class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
								<div class="kt-wizard-v1__nav-body">
									<div class="kt-wizard-v1__nav-icon">
										<i class="flaticon-globe"></i>
									</div>
									<div class="kt-wizard-v1__nav-label">
										4. Verifications
									</div>
								</div>
							</div>
							<div class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
								<div class="kt-wizard-v1__nav-body">
									<div class="kt-wizard-v1__nav-icon">
										<i class="flaticon-interface-10"></i>
									</div>
									<div class="kt-wizard-v1__nav-label">
										5. Review and Submit
									</div>
								</div>
							</div>
						</div>
					</div>
				<!--end: Form Wizard Nav -->
				</div>
				<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">
					<!--begin: Form Wizard Form-->
					<form class="kt-form" id="kt_form">



			



						<!--begin: Form Wizard Step 1-->
						<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">


							<div class="alert alert-light alert-elevate" role="alert" >
								<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
								<div class="alert-text">
									The Metronic Datatable component supports local or remote data source. For the local data you can pass javascript array as data source. In this example the grid fetches its
								</div>
							</div>



							<div class="kt-heading kt-heading--md">Describe Your Store </div>
							<div class="kt-form__section kt-form__section--first">
								<div class="kt-wizard-v1__form">


									<div class="form-group">
										<div class="kt-wizard-v1__review">
											<div class="kt-wizard-v1__review-item">
												<div class="kt-wizard-v1__review-title">
													<i class="flaticon2-check-mark checkgreen"></i> 
													 Username : Username
												</div>
												<span class="form-text text-muted">Thats your Username whitch you are alredy choose!</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="kt-wizard-v1__review">
											<div class="kt-wizard-v1__review-item">
												<div class="kt-wizard-v1__review-title">
													<i class="flaticon2-check-mark checkgreen"></i> 
													 StoreName : StoreName 
												</div>
												<span class="form-text text-muted">Thats your Storname whitch you are alredy choose!</span>
											</div>
										</div>
									</div>

							<div class="row">
										<div class="col-xl-6">

									<div class="form-group">
											<label>Upload Your Logo</label>
											<div class="col-lg-9 col-xl-6">
												<div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_user_avatar_3">
													<div class="kt-avatar__holder" style="background-image: url(assets/media/users/100_3.jpg)"></div>
													<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
														<i class="fa fa-pen"></i>
														<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
													</label>
													<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
														<i class="fa fa-times"></i>
													</span>
												</div>
												<span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
											</div>
										</div>
									</div>


										<div class="col-xl-6">
										<div class="form-group">
											<label>Upload Your Banner</label>
											
												<div class="dropzone dropzone-default" id="kt_dropzone_1">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>
													</div>
												</div>
											
										</div>
									</div>
								</div>


										
										
										
									
									

										<div class="form-group">
											<label>Discribe Your Store</label>
											
												<textarea class="form-control" id="kt_maxlength_5" maxlength="20" placeholder="" rows="6"></textarea>
												<span class="form-text text-muted">Discribe Your Store In the Best</span>
											
										</div>
										
									
									<div class="row">
										<div class="col-xl-6">
											<div class="form-group">
												<label>How Many Years You aHave Expiriance ?</label>
												<select name="country" class="form-control">
													<option value="">Select</option>
													<option value="0-1">0 - 1 Year</option>
													<option value="1-3">1 - 3 Years</option>
													<option value="3-5">3 - 5 Years</option>
													<option value="5-10">5 - 10 Years</option>
													<option value="10+">10 + Years</option>
												</select>
												<span class="form-text text-muted">Tell a futur buyer how many years you work in this sector.</span>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="form-group">
												<label>How Much Workers is in you Equipe ?</label>
												<select name="country" class="form-control">
													<option value="">Select</option>
													<option value="1">Work Alone</option>
													<option value="1-3">1 - 3 Workers</option>
													<option value="3-5">3 - 5 Workers</option>
													<option value="5-10">5 - 10 Workers</option>
													<option value="10+">10 + Years</option>
												</select>
												<span class="form-text text-muted">Describe your capability.</span>
											</div>
										</div>
									</div>
									


									<div class="row">
										<div class="col-xl-6">
											<div class="form-group">
												<label>Whitch Your function in the Entreprise ?</label>
												<select name="country" class="form-control">
													<option value="">Select</option>
													<option value="Workers">Workers</option>
													<option value="ChefEquipe">Chef Equipe</option>
													<option value="Menager">Menager</option>
													<option value="Director">Director</option>
													<option value="Boss">Boss</option>
												</select>
												<span class="form-text text-muted">Tell Us Your function in the entreprisse</span>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="form-group">
												<label>Do You Have Store on Other Platforms ?</label>
												<select name="country" class="form-control">
													<option value="">Select</option>
													<option value="yes">Yes</option>
													<option value="no">No</option>
												</select>
												<span class="form-text text-muted">Become exclusive Direct Travaux Vendor.</span>
											</div>
										</div>
									</div>



									<div class="form-group">
											<label>Limiting Selections</label>
											<div class="">
												<select class="form-control kt-select2" id="kt_select2_9" name="param" multiple>
													<option></option>
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV" selected>Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div>




										<tr>
																	<td style="width: 30%">Tooltips and popovers</td>
																	<td>
																		<button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_3"> Launch Modal</button>
																	</td>
																</tr>



																<!--begin::Modal-->
							<div class="modal fade" id="kt_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
											<h5>Popover in a modal</h5>
											<p>This <a href="#" role="button" data-toggle="kt-popover" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
											<hr>
											<h5>Tooltips in a modal</h5>
											<p><a href="#" class="tooltip-test" data-toggle="kt-tooltip" title="Tooltip">This link</a> and <a href="#" data-toggle="kt-tooltip" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>

							<!--end::Modal-->
									
									
									
								</div>
							</div>
						</div>
						<!--end: Form Wizard Step 1-->
						<!--begin: Form Wizard Step 2-->
						<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">

							<div class="alert alert-light alert-elevate" role="alert" >
								<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
								<div class="alert-text">
									The Metronic Datatable component supports local or remote data source. For the local data you can pass javascript array as data source. In this example the grid fetches its
								</div>
							</div>




							<div class="kt-heading kt-heading--md">Enter the Details of your Delivery</div>
							<div class="kt-form__section kt-form__section--first">
								<div class="kt-wizard-v1__form">








									<div class="form-group">
											<label>Limiting Selections</label>
											<div class="">
												<select class="form-control kt-select2" id="kt_select2_9" name="param" multiple>
													<option></option>
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV" selected>Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div>



									

										<div class="kt-wizard-v1__form-label">Package Dimensions</div>
									<div class="row">
										<div class="col-xl-4">
											<div class="form-group">
											<label>Emargency Service Modul </label>
											<div>
												<input data-switch="true" type="checkbox" name="switch" id="test" data-on-color="success" data-off-color="warning">
												<span class="form-text text-muted">If You work Emargency Service this modul shuld be on the ON. </span>
											</div>
										</div>
										</div>
										<div class="col-xl-4">
											<div>
												<div class="alert alert-light alert-elevate" role="alert" >
								<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
								<div class="alert-text">
									The Metronic Datatable component supports local or remote data source. For the local 
								</div>
							</div>
											</div>
										</div>
										<div class="col-xl-4">
											<div class="form-group">
											<label>Limiting Selections</label>
											<div class="">
												<select class="form-control kt-select2" id="kt_select2_9" name="param" multiple>
													<option></option>
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV" selected>Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div>
										</div>
									</div>







										


										

							






									<div class="form-group">
										<label>Package Weight in KG</label>
										<input type="text" class="form-control" name="weight" placeholder="Package Weight" value="25">
										<span class="form-text text-muted">Please enter your Package Weight in KG.</span>
									</div>
									<div class="kt-wizard-v1__form-label">Package Dimensions</div>
									<div class="row">
										<div class="col-xl-4">
											<div class="form-group">
												<label>Package Width in CM</label>
												<input type="text" class="form-control" name="width" placeholder="Package Width" value="110">
												<span class="form-text text-muted">Please enter your Package Width in CM.</span>
											</div>
										</div>
										<div class="col-xl-4">
											<div class="form-group">
												<label>Package Height in CM</label>
												<input type="text" class="form-control" name="height" placeholder="Package Length" value="90">
												<span class="form-text text-muted">Please enter your Package Height in CM.</span>
											</div>
										</div>
										<div class="col-xl-4">
											<div class="form-group">
												<label>Package Length in CM</label>
												<input type="text" class="form-control" name="length" placeholder="Package Length" value="150">
												<span class="form-text text-muted">Please enter your Package Length in CM.</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end: Form Wizard Step 2-->
						<!--begin: Form Wizard Step 3-->
						<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
							<div class="kt-heading kt-heading--md">Select your Services</div>
							<div class="kt-form__section kt-form__section--first">
								<div class="kt-wizard-v1__form">



						





									
									<div class="form-group">
										<label>Delivery Type</label>
										<select name="delivery" class="form-control">
											<option value="">Select a Service Type Option</option>
											<option value="overnight" selected>Overnight Delivery (within 48 hours)</option>
											<option value="express">Express Delivery (within 5 working days)</option>
											<option value="basic">Basic Delivery (within 5 - 10 working days)</option>
										</select>
									</div>
									<div class="form-group">
										<label>Packaging Type</label>
										<select name="packaging" class="form-control">
											<option value="">Select a Packaging Type Option</option>
											<option value="regular" selected>Regular Packaging</option>
											<option value="oversized">Oversized Packaging</option>
											<option value="fragile">Fragile Packaging</option>
											<option value="frozen">Frozen Packaging</option>
										</select>
									</div>
									<div class="form-group">
										<label>Preferred Delivery Window</label>
										<select name="preferreddelivery" class="form-control">
											<option value="">Select a Preferred Delivery Option</option>
											<option value="morning" selected>Morning Delivery (8:00AM - 11:00AM)</option>
											<option value="afternoon">Afternoon Delivery (11:00AM - 3:00PM)</option>
											<option value="evening">Evening Delivery (3:00PM - 7:00PM)</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<!--end: Form Wizard Step 3-->
						<!--begin: Form Wizard Step 4-->
						<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
							<div class="kt-heading kt-heading--md">Setup Your Delivery Location</div>
							<div class="kt-form__section kt-form__section--first">
								<div class="kt-wizard-v1__form">
														

																<div class="form-group row">
																	<label class="col-3 col-form-label">Login verification</label>
																	<div class="col-9">
																		<button type="button" class="btn btn-outline-primary btn-sm kt-margin-t-5 kt-margin-b-5">Setup login verification</button>
																		<span class="form-text text-muted">
																			After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
																			<a href="#" class="kt-link">Learn more</a>.
																		</span>
																	</div>
																</div>

																<div class="form-group row">
																	<label class="col-3 col-form-label">Login verification</label>
																	<div class="col-9">
																		<button type="button" class="btn btn-outline-primary btn-sm kt-margin-t-5 kt-margin-b-5">Setup login verification</button>
																		<span class="form-text text-muted">
																			After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
																			<a href="#" class="kt-link">Learn more</a>.
																		</span>
																	</div>
																</div>

																<div class="form-group row">
																	<label class="col-3 col-form-label">Login verification</label>
																	<div class="col-9">
																		<button type="button" class="btn btn-outline-primary btn-sm kt-margin-t-5 kt-margin-b-5" data-toggle="modal" data-target="#kt_modal_3">Setup login verification</button>
																		<span class="form-text text-muted">
																			After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
																			<a href="#" class="kt-link">Learn more</a>.
																		</span>
																	</div>
																</div>

																<div class="form-group row">
																	<label class="col-3 col-form-label">Login verification</label>
																	<div class="col-9">
																		<button type="button" class="btn btn-outline-primary btn-sm kt-margin-t-5 kt-margin-b-5">Setup login verification</button>
																		<span class="form-text text-muted">
																			After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
																			<a href="#" class="kt-link">Learn more</a>.
																		</span>
																	</div>
																</div>


																<tr>
																	<td style="width: 30%">Tooltips and popovers</td>
																	<td>
																		<button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_3"> Launch Modal</button>
																	</td>
																</tr>



																<!--begin::Modal-->
							<div class="modal fade" id="kt_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
											<h5>Popover in a modal</h5>
											<p>This <a href="#" role="button" data-toggle="kt-popover" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
											<hr>
											<h5>Tooltips in a modal</h5>
											<p><a href="#" class="tooltip-test" data-toggle="kt-tooltip" title="Tooltip">This link</a> and <a href="#" data-toggle="kt-tooltip" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>

							<!--end::Modal-->
																
																
														









								</div>
							</div>
						</div>
						<!--end: Form Wizard Step 4-->
						<!--begin: Form Wizard Step 5-->
						<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
							<div class="kt-heading kt-heading--md">Review your Details and Submit</div>
							<div class="kt-form__section kt-form__section--first">
								<div class="kt-wizard-v1__review">
									<div class="kt-wizard-v1__review-item">
										<div class="kt-wizard-v1__review-title">
											Current Address
										</div>
										<div class="kt-wizard-v1__review-content">
											Address Line 1<br />
											Address Line 2<br />
											Melbourne 3000, VIC, Australia
										</div>
									</div>
									<div class="kt-wizard-v1__review-item">
										<div class="kt-wizard-v1__review-title">
											Delivery Details
										</div>
										<div class="kt-wizard-v1__review-content">
											Package: Complete Workstation (Monitor, Computer, Keyboard & Mouse)<br />
											Weight: 25kg<br />
											Dimensions: 110cm (w) x 90cm (h) x 150cm (L)
										</div>
									</div>
									<div class="kt-wizard-v1__review-item">
										<div class="kt-wizard-v1__review-title">
											Delivery Service Type
										</div>
										<div class="kt-wizard-v1__review-content">
											Overnight Delivery with Regular Packaging<br />
											Preferred Morning (8:00AM - 11:00AM) Delivery
										</div>
									</div>
									<div class="kt-wizard-v1__review-item">
										<div class="kt-wizard-v1__review-title">
											Delivery Address
										</div>
										<div class="kt-wizard-v1__review-content">
											Address Line 1<br />
											Address Line 2<br />
											Preston 3072, VIC, Australia
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end: Form Wizard Step 5-->
						<!--begin: Form Actions -->
						<div class="kt-form__actions">
							<button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
								Previous
							</button>
							<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
								Submit
							</button>
							<button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
								Next Step
							</button>
						</div>
					<!--end: Form Actions -->
					</form>
				<!--end: Form Wizard Form-->
				</div>
				<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__copyright">
								2020&nbsp;&copy;&nbsp;<a href="{{url('/')}}" target="_blank" class="kt-link">Direct Travaux</a>
							</div>
							<div class="kt-footer__menu">
								<a href="{{url('/')}}" target="_blank" class="kt-footer__menu-link kt-link">Tarifs</a>
								<a href="{{url('/')}}" target="_blank" class="kt-footer__menu-link kt-link">Aide</a>
								<a href="{{url('/')}}" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>

		
		<!--General JS -->
        <script src="{{ asset('js/app.js') }}"></script>

        
        <!--	Wizard Page JS -->
        <script src="{{ asset('pages/js/wizard-1.js') }}" type="text/javascript"></script>

        
		<!--Upload the product Categories -->
        <script src="{{ asset('pages/js/select2.js') }}" type="text/javascript"></script>


		<!--Store Description JS -->
        <script src="{{ asset('pages/js/bootstrap-maxlength.js') }}" type="text/javascript"></script>


		<!-- Emergency Modul - Switch Button JS -->
        <script src="{{ asset('pages/js/form-widgets.js') }}" type="text/javascript"></script>


        <!--Upload Logo -->
        <script src="{{ asset('pages/js/ktavatar.js') }}" type="text/javascript"></script>

        <!--Upload Banner -->
        <script src="{{ asset('pages/js/dropzonejs.js') }}" type="text/javascript"></script>







       
<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>
        
</html>