@extends('Admin.layout')
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{asset('images/img-01.png')}}" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="{{route('register')}}" method="POST">

                        @csrf

                        <span class="login100-form-title">
                            Admin  Register
                          </span>

                          @csrf
                          <div class="wrap-input100 validate-input">
                              <input class="input100 @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email">
                              <span class="symbol-input100">
                                  <i class="fa fa-envelope" aria-hidden="true"></i>
                              </span>
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                          <div class="wrap-input100 validate-input" >
                              <input class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name">
                              <span class="symbol-input100">
                                  <i class="fa fa-user" aria-hidden="true"></i>
                              </span>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                          <div class="wrap-input100 validate-input" >
                              <input class="input100  @error('password') is-invalid @enderror " type="password" name="password" placeholder="Password">
                              <span class="symbol-input100">
                                  <i class="fa fa-lock" aria-hidden="true"></i>
                              </span>
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                          <div class="wrap-input100 validate-input" >
                              <input class="input100  @error('password') is-invalid @enderror " type="password" name="password_confirmation" placeholder="Password">
                              <span class="symbol-input100">
                                  <i class="fa fa-lock" aria-hidden="true"></i>
                              </span>

                          </div>







                          <div class="container-login100-form-btn">
                              <button class="login100-form-btn">
                                  Register
                              </button>
                          </div>



                          <div class="text-center p-t-136">
                              <a class="txt2" href="{{route('login')}}">
                                 Login
                                  <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                              </a>
                          </div>










                        </form>
                    </div>
                </div>
            </div>

            @endsection
