<!DOCTYPE html>
<html>
	<head>
        <base href="">
        <meta charset="utf-8" />
        <title><?php echo e(Config('app.name')); ?> | Store Wizard</title>
        <meta name="description" content="Updates and statistics">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" >
		<!--  proba css  -->
        <link href="<?php echo e(asset('plugins/custom/fullcalendar/fullcalendar.bundle.css')); ?>" rel="stylesheet" type="text/css" />


        <link href="<?php echo e(asset('pages/css/wizard-1.css')); ?>" rel="stylesheet" type="text/css" />

        <style type="text/css">
			.logo {

 				margin-top: 30px;
 				margin-bottom: 20px;
			}
			.infoshow {
				margin-right: 50px; 
				margin-left: 50px;
			}
			.checkgreen {
				color: #00db07;
			}
			.saveform {
				display: inline-block;

			}
		</style>

		<link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" />
        
</head>










<body>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="kt-portlet">
		<div class="kt-portlet__body kt-portlet__body--fit">
			<div class="kt-grid kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1" data-ktwizard-state="step-first">
				<div align="center">
					<div class="logo">
                        <a href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="logo image">
                        </a>
                    </div>
					<h2> Welcome <?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></h2>
					<div class="alert alert-light alert-elevate infoshow" role="alert" >
								<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
								<div class="alert-text">
									The Metronic Datatable component supports local or remote data source. For the local data you can pass javascript array as data source. In this example the grid fetches its
								</div>
							</div>
					<hr>
				</div>
				<div class="kt-grid__item">
					<!--begin: Form Wizard Nav -->
					<div class="kt-wizard-v1__nav">
						<!--doc: Remove "kt-wizard-v1__nav-items--clickable" class and also set 'clickableSteps: false' in the JS init to disable manually clicking step titles -->
						<div class="kt-wizard-v1__nav-items kt-wizard-v1__nav-items--clickable">
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
							<div class="kt-heading kt-heading--md">Describe Your Store </div>
							<div class="kt-form__section kt-form__section--first">
								<div class="kt-wizard-v1__form">
									<div class="form-group">
										<div class="kt-wizard-v1__review">
											<div class="kt-wizard-v1__review-item">
												<div class="kt-wizard-v1__review-title">
													<i class="flaticon2-check-mark checkgreen"></i> 
													 Username : <?php echo e(Auth::user()->user_name); ?>

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
													 StoreName : <?php echo e(Auth::user()->store_name); ?> 
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
											 	<textarea class="form-control" id="kt_autosize_1" rows="3"></textarea>
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
									
									
								</div>
							</div>
						</div>
						<!--end: Form Wizard Step 1-->
						<!--begin: Form Wizard Step 2-->
						<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
							<div class="kt-heading kt-heading--md">Enter the Details of your Delivery</div>
							<div class="kt-form__section kt-form__section--first">
								<div class="kt-wizard-v1__form">
									<div class="form-group">
										<label>Package Details</label>
										<input type="text" class="form-control" name="package" placeholder="Package Details" value="Complete Workstation (Monitor, Computer, Keyboard & Mouse)">
										<span class="form-text text-muted">Please enter your Pakcage Details.</span>
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
									<div class="form-group">
										<label>Address Line 1</label>
										<input type="text" class="form-control" name="locaddress1" placeholder="Address Line 1" value="Address Line 1">
										<span class="form-text text-muted">Please enter your Address.</span>
									</div>
									<div class="form-group">
										<label>Address Line 2</label>
										<input type="text" class="form-control" name="locaddress2" placeholder="Address Line 2" value="Address Line 2">
										<span class="form-text text-muted">Please enter your Address.</span>
									</div>
									<div class="row">
										<div class="col-xl-6">
											<div class="form-group">
												<label>Postcode</label>
												<input type="text" class="form-control" name="locpostcode" placeholder="Postcode" value="3072">
												<span class="form-text text-muted">Please enter your Postcode.</span>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="form-group">
												<label>City</label>
												<input type="text" class="form-control" name="loccity" placeholder="City" value="Preston">
												<span class="form-text text-muted">Please enter your City.</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-6">
											<div class="form-group">
												<label>State</label>
												<input type="text" class="form-control" name="locstate" placeholder="State" value="VIC">
												<span class="form-text text-muted">Please enter your Postcode.</span>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="form-group">
												<label>Country:</label>
												<select name="loccountry" class="form-control">
													<option value="">Select</option>
													<option value="AF">Afghanistan</option>
													<option value="AX">Åland Islands</option>
													<option value="AL">Albania</option>
													<option value="DZ">Algeria</option>
												</select>
											</div>
										</div>
									</div>
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



							<li class="saveform" data-ktwizard-type="action-save">
								<a href='#'> 
									Save an Continue Later
								</a>
							</li>




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
								2020&nbsp;&copy;&nbsp;<a href="<?php echo e(url('/')); ?>" target="_blank" class="kt-link">Direct Travaux</a>
							</div>
							<div class="kt-footer__menu">
								<a href="<?php echo e(url('/')); ?>" target="_blank" class="kt-footer__menu-link kt-link">Tarifs</a>
								<a href="<?php echo e(url('/')); ?>" target="_blank" class="kt-footer__menu-link kt-link">Aide</a>
								<a href="<?php echo e(url('/')); ?>" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
	
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>

        <script src="<?php echo e(asset('pages/js/wizard-1.js')); ?>" type="text/javascript"></script>

        <script src="<?php echo e(asset('pages/js/ktavatar.js')); ?>" type="text/javascript"></script>

        <script src="<?php echo e(asset('pages/js/dropzonejs.js')); ?>" type="text/javascript"></script>

        
</html><?php /**PATH /Applications/MAMP/htdocs/b2b_portal/resources/views/wizard.blade.php ENDPATH**/ ?>