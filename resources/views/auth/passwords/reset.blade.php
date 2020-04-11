@extends('layout.index')
@section('content')
<section class="login_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                    <div class="cardify login">
                        <div class="login--header">
                            <h3>Welcome To Change Password</h3>
                            <p>You can change your password</p>
                        </div>
                        <!-- end .login_header -->

                        <div class="login--form">
                            <div class="form-group required">
                                <label for="email">Email Address </label>
                                <input id="email" name="email" value="{{ $email ?? old('email') }}" type="text" class="text_field" placeholder="Enter your email address" autocomplete="email" autofocus>

                                <span class="mcolor4">
                                    {{$errors->first('email')}}
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

                            <button class="btn btn--md btn--round" type="submit">Reset</button>

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
@endsection
