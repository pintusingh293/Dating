<?php
use App\Friend;
?>
@extends('public.layout.layout')


@section('content')

    <section class="section cta">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <span class="text-white font-extra font-md">View profile</span>
                </div>
            </div>
        </div>
    </section>


    <section class="section about">


            <div class="container login-container">
                    <div class="container">
                            <a href="/" class="btn btn-info">back</a>
            <div class="row profile inner-cont2">
                <div class="col-md-9 bor-rit">
                    <div class="profile-content">
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
                           <div class="row">
                               <div class="col-md-4">
                                <img src="/uploads/users/{{$profiles['image']}}" style="margin-bottom:20px" />
                                </div>
                                <div class="col-md-8 ">
                                    <ul style="float:right;">
                                        {{-- @if(Friend::where(['user_id'=>Auth::user()->id,
                                        'friend_id'=>{{$profiles->user_id}}
                                        ]) == true) --}}
                                        {{-- <a href="/add-friend/{{$profiles->id}}"> <i class="fas fa-user-friends pl-1" style="font-size:2opx;"></i></a> --}}

                                        @if(!empty($friendrequest))
                                            @if($friendrequest == "Friend Request Send")
                                            <span style="font-size:2opx; color:green"><i class="fas fa-user" style="font-size:2opx;"></i>&nbsp;{{ $friendrequest}}</span>
                                            @elseif($friendrequest == "Unfriend")
                                            <a href="/remove-friend/{{$profiles->id}}"> <i class="fas fa-minus-circle pl-1" style="font-size:2opx;"></i>&nbsp;{{ $friendrequest}}</a>
                                            @else
                                            <a href="/add-friend/{{$profiles->id}}"> <i class="fas fa-user-plus pl-1" style="font-size:2opx;"></i>&nbsp;{{ $friendrequest}}</a>
                                            @endif
                                            @endif
                                        <a href="/chat/{{$profiles->id}}"><i class="far fa-comments p-1" style="font-size:20px;"></i></a>
                                        <a href="/gift/{{$profiles->id}}"><i class="fas fa-gift p-1" style="font-size:20px;"></i></a>

                                    </ul>
                                </div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>First Name</strong></div>
                                  <div class="col-sm-5">{{ $profiles['firstname']}}</div>
                            </div>

                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>Last Name</strong></div>
                                  <div class="col-sm-5">{{ $profiles['lastname']}}</div>
                            </div>

                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>Date of birth</strong></div>
                                  <div class="col-sm-5">{{ $profiles['dob']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>Sex</strong></div>
                                  <div class="col-sm-5">{{ $profiles['gender']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>Height</strong></div>
                                  <div class="col-sm-5">{{ $profiles['height']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>Marital_status</strong></div>
                                  <div class="col-sm-5">{{ $profiles['marital_status']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>Body_type</strong> </div>
                                  <div class="col-sm-5">{{ $profiles['body_type']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>City</strong></div>
                                  <div class="col-sm-5">{{ $profiles['city']}}</div>
                            </div>
                            <div class="row for-bor">
                                    <div class="col-sm-7"><strong>State</strong></div>
                                    <div class="col-sm-5">{{ $profiles['state']}}</div>
                              </div>
                              <div class="row for-bor">
                                    <div class="col-sm-7"><strong>Country</strong></div>
                                    <div class="col-sm-5">{{ $profiles['country']}}</div>
                              </div>
                              <div class="row for-bor">
                                    <div class="col-sm-7"><strong>language</strong></div>
                                    <div class="col-sm-5">{{ $profiles['language']}}</div>
                              </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>How important in a relationship is my partner's dependability ? </strong></div>
                                  <div class="col-sm-5">{{ $profiles['partnerDependability']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>How important in a relationship is the friendship between partners ?</strong> </div>
                            <div class="col-sm-5">{{$profiles['friendshipBetweenPartners']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>How important in a relationship is sexual compatibility ? </strong></div>
                                  <div class="col-sm-5">{{ $profiles['sexual_compatibility']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>What is the longest relationship you have been in ?</strong> </div>
                            <div class="col-sm-5">{{$profiles['longest_relationship']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>Are you on any medication ?</strong> </div>
                                  <div class="col-sm-5">{{$profiles['medication']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>Your Occupation</strong> </div>
                                  <div class="col-sm-5">{{$profiles['occupation']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>Your Income</strong> </div>
                                  <div class="col-sm-5">{{$profiles['income']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"><strong>How often do you exercise ?</strong></div>
                                  <div class="col-sm-5">{{$profiles['exercise']}}</div>
                            </div>
                            <div class="row for-bor">
                                  <div class="col-sm-7"> <strong>What is your education level ? *</strong></div>
                                  <div class="col-sm-5">{{$profiles['education_level']}}</div>
                            </div>


                        </div>
                    </div>
                </div>



        </div>
        </div>
            </div>
        </section>


@endsection
