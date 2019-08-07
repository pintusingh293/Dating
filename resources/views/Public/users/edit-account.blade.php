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
            <div class="profile-content">
            <form action="/edit-account/{{$detail['id']}}" method="POST" id="detailForm" >
                    @csrf
                    @method('PATCH')
                    @include('Public.errors')
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
			   <div class="col-md-12 login-form-1">

                    <div class="row  for-bor2">
  						<div class="col-sm-7"><strong>First Name</strong></div>
                        <div class="col-sm-5"><input type="text" id="firstname" name="firstname" class="form-control" value="{{ $detail['firstname'] }}" />
					  </div>
					</div>

                    <div class="row for-bor2 ">
  						<div class="col-sm-7"><strong>Last Name</strong></div>
  						<div class="col-sm-5"><input type="text" name="lastname" class="form-control" value="{{ $detail['lastname'] }}" /></div>
					</div>

                    <div class="row for-bor2">
  						<div class="col-sm-7"><strong>Date of birth</strong></div>
  						<div class="col-sm-5"><input type="text"name="dob" class="form-control" value="{{ $detail['dob'] }}" /></div>
					</div>
                    <div class="row for-bor2">
  						<div class="col-sm-7"><strong>Gender</strong></div>
  						<div class="col-sm-5"><input type="text" name="gender" class="form-control" value="{{ $detail['gender'] }}" /></div>
                    </div>
                    <div class="row for-bor2">
                            <div class="col-sm-7"><strong>Seeking</strong></div>
                            <div class="col-sm-5"><input type="text" name="seeking" class="form-control" value="{{ $detail['seeking'] }}" /></div>
                      </div>

                      <div class="row for-bor2">
                            <div class="col-sm-7"><strong>Height</strong> </div>
                            <div class="col-sm-5"><input type="text" name="height" class="form-control" value="{{ $detail['height'] }}" /></div>
                      </div>
                      <div class="row for-bor2">
                            <div class="col-sm-7"><strong>Body_type</strong> </div>
                            <div class="col-sm-5"><input type="text" name="body_type" class="form-control" value="{{ $detail['body_type'] }}" /></div>
                      </div>
                    <div class="row for-bor2">
  						<div class="col-sm-7"><strong>Phone</strong></div>
  						<div class="col-sm-5"><input type="text" name="phone" class="form-control" value="{{ $detail['phone'] }}" /></div>
					</div>

                    <div class="row for-bor2">
                            <div class="col-sm-7"><strong>City</strong> </div>
                            <div class="col-sm-5"><input type="text" name="city" class="form-control" value="{{ $detail['city'] }}" /></div>
                      </div>
                      <div class="row for-bor2">
                            <div class="col-sm-7"><strong>State</strong> </div>
                            <div class="col-sm-5"><input type="text" name="state" class="form-control" value="{{ $detail['state'] }}" /></div>
                      </div>
                      <div class="row for-bor2">
                            <div class="col-sm-7"><strong>Country</strong> </div>
                            <div class="col-sm-5"><input type="text" name="country" class="form-control" value="{{ $detail['country'] }}" /></div>
                      </div>
                      <div class="row for-bor2">
                            <div class="col-sm-7"><strong>Language</strong> </div>
                            <div class="col-sm-5"><input type="text" name="languages" class="form-control" value="{{ $detail['language'] }}" /></div>
                      </div>

                    <div class="row for-bor2">
  						<div class="col-sm-7"><strong>Marital-Status</strong></div>
  						<div class="col-sm-5"><input type="text" name="marital_status" class="form-control" value="Rita1165" /></div>
					</div>
                    <div class="row for-bor2">
  						<div class="col-sm-7"><strong>How important in a relationship is my partner's dependability ? </strong></div>
  						<div class="col-sm-5"><input type="text" class="form-control" name="partnerDependability" value="{{ $detail['partnerDependability'] }}" /></div>
					</div>
                    <div class="row for-bor2">
  						<div class="col-sm-7"><strong>How important in a relationship is the friendship between partners ?</strong> </div>
                    <div class="col-sm-5"><input type="text" class="form-control" name="friendshipBetweenPartners" value="{{$detail['friendshipBetweenPartners']}}" /></div>
					</div>
                    <div class="row for-bor2">
  						<div class="col-sm-7"><strong>How important in a relationship is sexual compatibility ? </strong></div>
                    <div class="col-sm-5"><input type="text" class="form-control" name="sexual_compatibility" value="{{ $detail['sexual_compatibility']}}" /></div>
					</div>
                    <div class="row for-bor2">
  						<div class="col-sm-7"><strong>What is the longest relationship you have been in ?</strong> </div>
                    <div class="col-sm-5"><input type="text" class="form-control" name="longest_relationship" value="{{ $detail['longest_relationship']}}" /></div>
					</div>
                    <div class="row for-bor2">
  						<div class="col-sm-7"><strong>Are you on any medication ?</strong> </div>
                    <div class="col-sm-5"><input type="text" class="form-control" name="medication" value="{{ $detail['medication']}}" /></div>
					</div>
                    <div class="row for-bor2">
  						<div class="col-sm-7"><strong>Your Occupation</strong> </div>
                    <div class="col-sm-5"><input type="text" class="form-control" name="occupation" value="{{$detail['occupation']}}" /></div>
					</div>
                    <div class="row for-bor2">
  						<div class="col-sm-7"><strong>Your Income</strong> </div>
                    <div class="col-sm-5"><input type="text" class="form-control" name="income" value="{{$detail['income']}}" /></div>
					</div>
                    <div class="row for-bor2">
  						<div class="col-sm-7"><strong>How often do you exercise ?</strong></div>
                    <div class="col-sm-5"><input type="text" class="form-control" name="exercise" value="{{ $detail['exercise']}}" /></div>
					</div>
                    <div class="row for-bor2">
  						<div class="col-sm-7"> <strong>What's your education level ? *</strong></div>
                    <div class="col-sm-5"><input type="text" class="form-control" name="education_level" value="{{ $detail['education_level']}}" /></div>
					</div>
                    <input type="submit" class="btn btn-main" value="Update" />


                </div>
            </div>
        </form>
        </div>
        @endforeach
	</div>
</div>
<!-- /.MultiStep Form -->
        </div>
</section>
@endsection
