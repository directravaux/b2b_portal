@extends('layout.index')
@section('content')
<section class="pricing_area section--padding">
	<div class="container">
		<div class="row">
			<!-- start col-md-12 -->
			<div class="col-md-12">
				<div class="section-title">
					<h1>Fair and Simple
					<span class="highlighted">Pricing</span>
					</h1>
					<p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid
					est laborum dolo rumes fugats untras.</p>
				</div>
				<!-- end /.section-title -->
			</div>
			<!-- end /.col-md-12 -->
		</div>
		<!-- end /.row -->
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="pricing red">
					<h4 class="pricing--title">Starter</h4>
					<p class="pricing--price">
						<sup>$</sup>
						<span class="ammount">69.0</span>/month
					</p>
					<div class="pricing--features">
						<ul>
							<li>
								<strong>3 Months</strong> Membership
							</li>
							<li>
								<strong>All Wordpress Templates</strong>
								<span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats."></span>
							</li>
							<li>Forum Support</li>
							<li>Unlimited Domain Usage</li>
							<li>
								<strong>1 Domain</strong> Tech Support
								<span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats."></span>
							</li>
							<li>Copyright Removal</li>
							<li>
								<strong>Demos</strong> Included
								<span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats."></span>
							</li>
							<li>Demo Pagebuilder</li>
						</ul>
					</div>
					<!-- end /.pricing--features -->
					<a href="{{ route('client.price') }}" class="pricing--btn btnSubmit">Get Started Plan</a>
					<!-- end /.pricing--btn -->
				</div>
				<!-- end /.pricing -->
			</div>
			<!-- end /.col-md-4 -->
			<div class="col-lg-4 col-md-6">
				<div class="pricing blue">
					<h4 class="pricing--title">Business</h4>
					<p class="pricing--price">
						<sup>$</sup>
						<span class="ammount">99.00</span>/month
					</p>
					<div class="pricing--features">
						<ul>
							<li>
								<strong>3 Months</strong> Membership
							</li>
							<li>
								<strong>All Wordpress Templates</strong>
								<span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats."></span>
							</li>
							<li>Forum Support</li>
							<li>Unlimited Domain Usage</li>
							<li>
								<strong>1 Domain</strong> Tech Support
								<span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats."></span>
							</li>
							<li>Copyright Removal</li>
							<li>
								<strong>Demos</strong> Included
								<span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats."></span>
							</li>
							<li>Demo Pagebuilder</li>
						</ul>
					</div>
					<!-- end /.pricing--features -->
					<a href="{{ route('client.price') }}" class="pricing--btn btnSubmit">Get Started Plan</a>
					<!-- end /.pricing--btn -->
				</div>
				<!-- end /.pricing -->
			</div>
			<!-- end /.col-md-4 -->
			<div class="col-lg-4 col-md-6">
				<div class="pricing yellow">
					<h4 class="pricing--title">Agency</h4>
					<p class="pricing--price">
						<sup>$</sup>
						<span class="ammount">299.00</span>/month
					</p>
					<div class="pricing--features">
						<ul>
							<li>
								<strong>3 Months</strong> Membership
							</li>
							<li>
								<strong>All Wordpress Templates</strong>
								<span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats."></span>
							</li>
							<li>Forum Support</li>
							<li>Unlimited Domain Usage</li>
							<li>
								<strong>1 Domain</strong> Tech Support
								<span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats."></span>
							</li>
							<li>Copyright Removal</li>
							<li>
								<strong>Demos</strong> Included
								<span class="lnr lnr-question-circle" data-toggle="tooltip" data-placement="top" title="quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats."></span>
							</li>
							<li>Demo Pagebuilder</li>
						</ul>
					</div>
					<!-- end /.pricing--features -->
					<a href="{{ route('client.price') }}" class="pricing--btn btnSubmit">Get Started Plan</a>
					<!-- end /.pricing--btn -->
				</div>
				<!-- end /.pricing -->
			</div>
			<!-- end /.col-md-4 -->
		</div>
		<!-- end /.row -->
	</div>
	<!-- end /.container -->
</section>
@stop
