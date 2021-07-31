


@extends('Admin.layout')
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{asset('images/img-01.png')}}" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="{{ route('login')  }}" method="POST">

                @csrf
                <span class="login100-form-title">
                     Login
                </span>


                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100  @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email"   value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                </div>






                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>



                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">


                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <div class="text-center p-t-136">
                    <a class="txt2" href="{{route('user.register')}}">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
