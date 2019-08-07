@extends('Public.layout.layout')

@section('content')
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

                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>First Name</strong></div>
  						<div class="col-sm-5">{{ $detail['firstname']}}</div>
					</div>

                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>Last Name</strong></div>
  						<div class="col-sm-5">{{ $detail['lastname']}}</div>
					</div>

                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>Date of birth</strong></div>
  						<div class="col-sm-5">{{ $detail['dob']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>Sex</strong></div>
  						<div class="col-sm-5">{{ $detail['gender']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>Height</strong></div>
  						<div class="col-sm-5">{{ $detail['height']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>Marital_status</strong></div>
  						<div class="col-sm-5">{{ $detail['marital_status']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>Body_type</strong> </div>
  						<div class="col-sm-5">{{ $detail['body_type']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>City</strong></div>
  						<div class="col-sm-5">{{ $detail['city']}}</div>
                    </div>
                    <div class="row for-bor">
                            <div class="col-sm-7"><strong>State</strong></div>
                            <div class="col-sm-5">{{ $detail['state']}}</div>
                      </div>
                      <div class="row for-bor">
                            <div class="col-sm-7"><strong>Country</strong></div>
                            <div class="col-sm-5">{{ $detail['country']}}</div>
                      </div>
                      <div class="row for-bor">
                            <div class="col-sm-7"><strong>language</strong></div>
                            <div class="col-sm-5">{{ $detail['language']}}</div>
                      </div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>How important in a relationship is my partner's dependability ? </strong></div>
  						<div class="col-sm-5">{{ $detail['partnerDependability']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>How important in a relationship is the friendship between partners ?</strong> </div>
                    <div class="col-sm-5">{{$detail['friendshipBetweenPartners']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>How important in a relationship is sexual compatibility ? </strong></div>
  						<div class="col-sm-5">{{ $detail['sexual_compatibility']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>What is the longest relationship you have been in ?</strong> </div>
                    <div class="col-sm-5">{{$detail['longest_relationship']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>Are you on any medication ?</strong> </div>
  						<div class="col-sm-5">{{$detail['medication']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>Your Occupation</strong> </div>
  						<div class="col-sm-5">{{$detail['occupation']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>Your Income</strong> </div>
  						<div class="col-sm-5">{{$detail['income']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"><strong>How often do you exercise ?</strong></div>
  						<div class="col-sm-5">{{$detail['exercise']}}</div>
					</div>
                    <div class="row for-bor">
  						<div class="col-sm-7"> <strong>What is your education level ? *</strong></div>
  						<div class="col-sm-5">{{$detail['education_level']}}</div>
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
