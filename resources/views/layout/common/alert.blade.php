@if(Session::get('message') && Session::has('message') != "" && Session::get('message_type') && Session::has('message_type') != "")
	<div class="alert alert-{{Session::get('message_type')}}" role="alert">
		<span class="alert_icon lnr lnr-alarm"></span>
		 {{Session::get('message')}}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span class="lnr lnr-cross" aria-hidden="true"></span>
		</button>
	</div>
@endif
