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

                <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                    <div class="cardify login">
                        <div class="login--header">
                            <h3>Welcome To Confirm Password</h3>
                        </div>
                        <!-- end .login_header -->
                        <div class="login--form">
                            <div class="form-group required">
                                <label for="password">Password </label>
                                <input id="password" name="password" type="password" class="text_field">
                                <span class="mcolor4">
                                    {{$errors->first('password')}}
                                </span>
                            </div>

                            <button class="btn btn--md btn--round" type="submit">
                                {{ __('Confirm Password') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
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
