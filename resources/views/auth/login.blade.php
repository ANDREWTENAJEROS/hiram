<!-- @extends('layouts.app') -->

@section('content')
  
        
        <div class="container">
                <div class="row justify-content-center">
                      <div class="col-md-8">
                    {{-- @if (Session::has('message'))
                    </br>
                    </br>
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif --}}
                <div class="card-body">
                    <h2 style="text-align: center">Login to HIRAM</h2></br></br>
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf
                            
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <!-- <input class="input100" id="email" type="email"  name="email" value="{{ old('email') }}" required autofocus> -->
                                <input class="input100" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>

                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <input  class="input100" id="password" type="password"  name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <span class="txt1">
                                Forgot Username / Password?
                            </span>
                            <a class="txt2"  href="{{ route('password.request') }}" >
                                
                            </a>
                        </div>

                        <div class="text-center p-t-136">
                            <a class="txt2" href="{{ route('register') }}">
                                Create your Account
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div></div>
            </div>
        </div>
        
        

@endsection
