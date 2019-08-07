
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

<section class="section about">
	<div class="container login-container">
            <div class="container">
    <div class="row profile inner-cont2">
    @foreach( $details as $detail)
        @include('Public.layout.sidebar')


		<div class="col-md-9 bor-rit">
            <div class="profile-content">
			   <div class="col-md-12 login-form-1">
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

                    <div class="row for-bor">
  						<div class="col-sm-5"><strong>My Status</strong></div>
  						<div class="col-sm-7">Paid Member</div>
					</div>

                    <div class="row for-bor">
  						<div class="col-sm-5"><strong>Valid Date</strong></div>
  						<div class="col-sm-7">Rita</div>
					</div>

                    <div class="row for-bor">
  						<div class="col-sm-5"><strong>Deactivate Account</strong></div>
  						<div class="col-sm-7">
                            <form method="POST" action="/my-profile/{{Auth::User()['id']}}">
                                @method('DELETE')
                                @csrf
                                    <input type="submit" name="submit" value="Delete" class="btn btn-danger ">
                              </form>

                        </div>
					</div>


                </div>
            </div>
        </div>
        @endforeach
	</div>
</div>
</div>
</section>
@endsection
