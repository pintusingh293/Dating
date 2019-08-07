
@extends('Public.layout.layout')

@section('content')

<!-- About start -->
<section class="section cta">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<span class="text-white font-extra font-md">Profile</span>
			</div>
		</div>
	</div>
</section>


<!-- About  End -->

<!-- CTA start -->

<!-- CTA  End -->
<section class="section about">
	<div class="container login-container">
            <div class="container">
    <div class="row profile inner-cont2">
    @foreach( $details as $detail)
        @include('Public.layout.sidebar')

		<div class="col-md-9 bor-rit">
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

            <div class="profile-content">
			   <div class="col-md-12 login-form-1">
                    <form class="form-horizontal" method="post" action="{{ url('/change-password') }}" name="password_validate" id="password_validate" novalidate="novalidate">
                        @csrf
                            <div class="row  for-bor2">
                                <div class="col-sm-5"><strong>Current password</strong></div>
                                <div class="col-sm-7"><input type="text" name="current_pwd" class="form-control" />
                            </div>
                            </div>
                            <div class="row for-bor2">
                                <div class="col-sm-5"><strong>New password</strong></div>
                                <div class="col-sm-7"><input type="text" name="new_pwd" class="form-control" /></div>
                            </div>
                            <div class="row for-bor2">
                                <div class="col-sm-5"><strong>Confirm new password:</strong></div>
                                <div class="col-sm-7"><input type="text" name="confirm_pwd" class="form-control" /></div>
                            </div>

                            <button type="submit" class="btn btn-main">Change password</button>

                    </form>
                </div>
            </div>
        </div>
        @endforeach
	</div>
</div>
<!-- /.MultiStep Form -->
        </div>
</section>
@endsection
