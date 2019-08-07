<?php
use App\Country;
//$getCountries = new App\Country;
?>

@extends('public.layout.layout')
<!-- About start -->
@section('content')
@include('Public.errors')

<section class="intro"style="margin-top:100px;">
	<div class="container">
		<div class="intro-wrap bg-white w-100">
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
			<h2>Search People</h2>
            <form action="{{ url('/search-user')}}" method="post">
                @csrf
                    <div class="form-row " style="margin-left:90px;">
                    <div class="col-auto">
                            <select class="form-control wid-2" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>

                            </select>
                    </div>
                    <div class="col-auto">
                            <select class="form-control wid-2" name="minAge">
                                    <?php
                                    $minCount = 16;
                                    while($minCount <= 99){
                                    ?>
                                        <option value="{{ $minCount }}">from {{ $minCount }} yrs</option>
                                    <?php $minCount = $minCount + 1; } ?>
                                </select>
                    </div>
                    <div class="col-auto">
                            <select class="form-control wid-2" name="maxAge">
                                    <?php
                                    $maxCount = 16;
                                    while($maxCount <= 99){
                                    ?>
                                    <option value="{{ $maxCount }}" @if($maxCount=="32") selected="" @endif>to {{ $maxCount }} yrs</option>
                                    <?php $maxCount = $maxCount + 1; } ?>
                            </select>
                    </div>
                    <div class="col-auto">

                            <?php $getCountries = Country::get(); ?>
                            <select class="form-control wid-2" name="country">
                                <option value="">Anywhere</option>
                                @foreach($getCountries as $country)
                                    <option value="{{ $country->country_name }}" @if($country->country_name=="India") selected @endif>{{ $country->country_name }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-white form-control">FIND</button>
                    </div>
        </div>
      </form>
	    </div>
    </div>
</section >



<section class="section">
	<div class="container">
    <section class="text-center p-1">
        <span class="text-primary font-extra font-md">Search Results</span>
        <div class="container">
            <div class="row">
                    <?php $count=1; ?>
                        @foreach($searched_users as $user)
                        @if($user->status == 1)
                        <?php $age = date('Y') - date('Y',strtotime($user->dob)); ?>
                            @if($age>=$minAge && $age<=$maxAge)
                            @if($count<=4)
                                <div class="col-md-6">
                                    <div class="user-main">
                                        <div class="row">

                                            <div class="col-md-4">
                                            <img src="/uploads/users/{{$user->image}}" height="120px" width="120px"><br><br>
                                            <div class="row" >
                                        
                                            </div>
                                            </div>
                                            <div class="col-md-8">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="4">
                                                <tbody>
                                                    <tr>
                                                        <td width="48%"><strong>Username:</strong></td>
                                                        <td width="52%" >{{ $user->firstname }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td ><strong>Age:</strong></td>
                                                        <td ><?php
                                                                echo $diff = date('Y') - date('Y',strtotime($user->dob));
                                                    ?> Yrs.</td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor="#FFFFFF" ><strong>Height:</strong></td>
                                                    <td bgcolor="#FFFFFF" >{{$user->height}}</td>
                                                    </tr>


                                                    <tr>
                                                        <td ><strong>Country:</strong></td>
                                                        <td align="left">@if(!empty($user->country)) {{ $user->country }} @endif</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="30" colspan="2" align="right" ><div align="left">
                                                        <a href="/view-profile/{{$user->id}}" class="btn btn-main">View Profile</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                <?php $count = $count+1; ?>
                        @endif
                      @endif
                    @endif
                @endforeach
            </div>
		</div>
    </div>
</section>
@endsection

