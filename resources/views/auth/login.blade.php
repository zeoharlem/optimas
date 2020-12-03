@extends('layouts.app')

@section('content')
<section class="section about-us">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="padding: 20px">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                    <div class="heading heading--primary text-center">
                        <h2 class="heading__title"><span>Login</span></h2>
                    </div>

                    <div class="card-body">
                        <form method="POST" class="form message-form" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form__field @error('email') is-invalid @enderror" placeholder="Enter Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form__field @error('password') is-invalid @enderror" placeholder="Enter your password" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="form__submit btn-block">
                                        {{ __('Login Now') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" style="font-weight:normal !important;" href="{{ route('register') }}">
                                            {{ __('Register') }}
                                        </a>
                                        |
                                        <a class="btn btn-link" style="font-weight:normal !important;" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
