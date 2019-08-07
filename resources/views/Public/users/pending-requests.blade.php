<?php
use App\User;
use App\User_details;
use App\Friend;
?>
@extends('Public.layout.layout')

@section('content')

<!-- About start -->
<section class="section cta">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<span class="text-white font-extra font-md">Pending Friend Requests</span>
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
    @endforeach
		<div class="col-md-9 bor-rit">
            <div class="profile-content">
                    <h1> Pending Requests </h1>
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
                </div>
                <div class="container-fluid">

                        <table id="myfriends" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>City</th>
                                        <th>Date/Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($myfriends as $friend)
                                    <?php
                                    $sender_name = User::getName($friend->user_id);
                                    $sender_city = User::getCity($friend->user_id);
                                    $sender_id = User::getId($friend->user_id);
                                    ?>

                                <tr>
                                    <td><a target="_blank" href="{{url('/view-profile/'.$sender_id)}}">{{$sender_name}}</a></td>
                                    <td>{{$sender_city}}</td>
                                    <td>{{$friend['created_at']}}</td>
                                    <td>
                                    <a href="/accept-request/{{$friend->user_id}}"><i class="fas fa-user-check"></i></a>|
                                    <a href="/reject-request/{{$friend->user_id}}"><i class="far fa-times-circle"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>


            </div>
        </div>

	</div>
</div>
</div>
</section>
@endsection
