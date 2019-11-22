<html lang="en">
<head>
{!! Html::style('login_css/vendor/bootstrap/css/bootstrap.min.css') !!}
{!! Html::style('login_css/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}
{!! Html::style('login_css/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') !!}
{!! Html::style('login_css/vendor/css-hamburgers/hamburgers.min.css') !!}
{!! Html::style('login_css/vendor/animsition/css/animsition.min.css') !!}
{!! Html::style('login_css/vendor/select2/select2.min.css') !!}
{!! Html::style('login_css/vendor/daterangepicker/daterangepicker.css') !!}
{!! Html::style('login_css/css/util.css') !!}
{!! Html::style('login_css/css/main.css') !!}
</head>
<body>
<div class="limiter">
        <div class="container-login100" style="background-image: url('login_css/images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                New Register
                </span>          
                    <form method="POST" class="login100-form validate-form p-b-33 p-t-5" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="container-login100-form-btn m-t-32">
                          
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Register') }}
                                </button>
                           
                        </div>
                    </form>
        </div>       
    </div>
</div>
 <div id="dropDownSelect1"></div>
    {!! Html::script('login_css/vendor/jquery/jquery-3.2.1.min.js') !!}
    {!! Html::script('login_css/vendor/animsition/js/animsition.min.js') !!}
    {!! Html::script('login_css/vendor/bootstrap/js/popper.js') !!}
    {!! Html::script('login_css/vendor/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('login_css/vendor/select2/select2.min.js') !!}
    {!! Html::script('login_css/vendor/daterangepicker/moment.min.js') !!}
    {!! Html::script('login_css/vendor/daterangepicker/daterangepicker.js') !!}
    {!! Html::script('login_css/vendor/countdowntime/countdowntime.js') !!}
    {!! Html::script('login_css/js/main.js') !!}

</body>

</html>


