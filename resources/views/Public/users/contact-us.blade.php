
@extends('Public.layout.layout')

@section('content')

<!-- About start -->
<section class="section cta">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<span class="text-white font-extra font-md">Contact Us</span>
			</div>
		</div>
	</div>
</section>

<section class="section about">
    <div class="container">
        <div class="col-md-12">
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
            <form method="POST" action="{{url('/contact-us')}}" id="contactForm">
                @csrf
                <p>Full Name</p>
                <div class="form-group">
                    <input type="text" class="form-control" name="fullname" required/>
                </div>
                <p>Email id	</p>
                <div class="form-group">
                    <input type="email" class="form-control"  name="email" required/>
                </div>
                <p>Subject	</p>
                <div class="form-group">
                    <input type="text" class="form-control"  name="sub" required/>
                </div>
                <p>Comments</p>
                <div class="form-group">
                    <textarea class="form-control" name="comments" required></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-main mr-3" value="submit" />
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
