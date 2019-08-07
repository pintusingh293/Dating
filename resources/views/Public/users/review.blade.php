@extends('Public.layout.layout')

@section('content')

<section class="section cta">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<span class="text-white font-extra font-md">Review Profile</span>
			</div>
		</div>
	</div>
</section>
    <section style="align-content: center; margin-top:50px; margin-bottom:120px;">
        <div class="container">

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

            <h4>
                Your profile is under review!!

            </h4>
            <p>
                As part of this process, we screen every profile to ensure whether it meets our terms and conditions.You will receive a mail from us on your profile status as soon as screening is complete.
            </p>

        </div>

    </section>
@endsection
