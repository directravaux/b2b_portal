@extends('layout.index')
@section('content')
<section class="login_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <span class="alert_icon lnr lnr-alarm"></span>
                             {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span class="lnr lnr-cross" aria-hidden="true"></span>
                            </button>
                        </div>
                    @endif
                <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                    <div class="cardify login">
                        <div class="login--header">
                            <h3>Welcome To Reset Password</h3>
                            <p>You can reset your password</p>
                        </div>
                        <!-- end .login_header -->
                        <div class="login--form">
                            <div class="form-group required emailData">
                                <label for="email">Email Address </label>
                                <input id="email" name="email" value="{{old('email')}}" type="text" class="text_field" placeholder="Enter your register email address" autofocus>
                                <span class="mcolor4 errorMsg">
                                    {{$errors->first('email')}}
                                </span>
                                <span class="mcolor1 successMsg">
                                </span>
                            </div>
                            <button class="btn btn--md btn--round" type="submit">{{ __('Send Password Reset Link') }}</button>
                            <div class="login_assist">
                                <p class="signup">
                                    <a href="{{url('/login')}}">Back</a>
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
@stop
