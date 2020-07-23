@extends('layouts.app')

@section('content')


<section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="login-form"><!--login form-->
                        <h2>Login to your account</h2>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Your Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <span>
                            <input type="checkbox" class="checkbox" name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}> 
                            Keep me signed in
                        </span>

                        <button type="submit" class="btn btn-default">{{ __('Login') }}</button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </section><!--/form-->



@endsection
