@extends('Public.layout.layout')

@section('content')
<section class="section cta">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <span class="text-white font-extra font-md">Now Free to Communicate</span>
                </div>
            </div>
        </div>
</section>
<section class="section about">
        <div class="container login-container">
        <div class="row">
        <div class="col-md-12 col-md-offset-3">
            <form id="signupForm" action="{{ url('/register')}}" method="POST">
                @csrf

                <div class="inner-cont">
                    <h2 class="fs-title">Register here</h2>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{old('name')}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="user_email">Email *</label>
                    <input type="email" class="form-control" id="user_email" name="email" placeholder="Enter your email id" value="{{old('email')}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="user_password">Password *</label>
                    <input type="password" class="form-control" id="user_password" name="password" placeholder="Enter your password">
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-12">
                        <label for="confirm_password">Confirm Password *</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password">
                        </div>
                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-12">

                                    <input type="checkbox" class="checkbox" id="agree" name="agree">
                                    <strong>Please agree to our policy.</strong>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-info" value="Register Now" />
                    </div>
            </form>
    </div>
    </div>
    </div>
</section>
@endsection
