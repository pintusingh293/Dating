@extends('Public.layout.layout')

@section('content')

<style>

@import url(http://fonts.googleapis.com/css?family=Droid+Serif);
/* Above line is to import google font style */
.content{
width:960px;
margin:20px auto;
}
fieldset{
display:none;
width: 800px;
padding:20px;
margin-top:50px;
margin-left: 85px;
border-radius:5px;
box-shadow: 3px 3px 25px 1px gray;
}
#first{
display:block;
width: 800px;
padding:20px;
margin-top:50px;
border-radius:5px;
margin-left: 85px;
box-shadow: 3px 3px 25px 1px gray;
}


</style>

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
    <div class="content">
            <div class="">
                    @if(Session::has('flash_message_error'))
                    <div class="alert alert-error alert-block">
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
                <form action="{{ url('/registration')}}" id="registration" method="post" enctype="multipart/form-data">
                @csrf


                        @include('Public.errors')
                    @if(!empty($datingProfile->user_id))
                        <input type="hidden" name="user_id" value="{{ $datingProfile->user_id }}">
                    @endif
                    @include('Public.users.register-step1')
                    {{-- @include('Public.users.register-step2')
                    @include('Public.users.register-step3') --}}
            </form>

        </div>
    </div>
@endsection
