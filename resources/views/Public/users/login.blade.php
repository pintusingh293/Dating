@extends('Public.layout.layout')

@section('content')
<section class="section cta">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <span class="text-white font-extra font-md">Sign In to Your Account</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section about">
        <div class="container login-container">
                <div class="row">


                    <div class="col-md-6 login-form-1 login-b" >
                            @if(Session::has('flash_message_error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{!! session('flash_message_error') !!}</strong>
                            </div>
                        @endif
                        @if(Session::has('flash_message_success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{!! session('flash_message_success') !!}</strong>
                            </div>
                        @endif
                        <h3>Sign in to find your perfect partner with our best searching options.</h3>
                    <form action="{{url('/login')}}" method="POST">
                        @csrf
                            <div class="form-group">
                                <input type="text" id="email" name="email"class="form-control" placeholder="Enter your Email Id *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" id="user_password" name="password" class="form-control" placeholder="Your Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-main" value="Login" />

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6"style="margin-top:20px;">
                                <a href="#"  >Forget Password?</a>
                                </div>
                                <div class="form-group col-md-6">
                                <p>Don't have an account Please</p><a href="{{url('/register')}}">Register </a>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
    </section>

@endsection
