<?php
use App\User;
use App\User_details;

$datingCount = User::datingProfileExists(Auth::User()['id']);


?>


<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Serious Dating</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/icofont/icofont.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/aos/aos.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/video-popup/modal-video.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/swiper/swiper.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/date-picker/datepicker.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/clock-picker/clockpicker.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/devices.min.css')}}">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <!-- Main Stylesheet -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style1.css')}}" rel="stylesheet" type="text/css">


  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('images/frontend_images/favicon.png')}}" type="image/x-icon">
  <link rel="icon" href="{{ asset('images/frontend_images/favicon.png')}}" type="image/x-icon">

  <style>
  .goog-te-gadget {
    font-family: arial;
    font-size: 11px;
    color: #666;
    white-space: nowrap;
    float: right;
}
  </style>
  <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 80%;
        }

        /* The Close Button */
        .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }

        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
        </style>
</head>

<body>

<div class="container">
<div class="row ">
	<div class="col-lg-7 col-md-7">
        <a href="{{url('/')}}"><img src="images/frontend_images/logo.png" alt="" class="img-fluid logo" style="float:left;"></a>
	</div>
    <div class="col-lg-5 col-md-5">

    <div class="row">
        <div class="col-sm-12" id="google_translate_element">
            <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script>
        </div>


        @if(empty(Auth::check()))


       <div class="col-sm-12">
            <a href="{{url('/loginpage')}}">
                    <img src="images/frontend_images/login.png" >
            </a>
                <a href="{{url('/register')}}">
                    <img src="images/frontend_images/signup.png">
            </a>
        </div>
        @else
        <div class="col-sm-12">
                <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li><a href="{{url('/registration')}}"><i class="icon-user"></i> {{ Auth::User()['name'] }}</a></li>
                        <li class="divider"></li>
                    <li><a href="{{url('/logoutuser')}}"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                  </li>

        </div>

        @endif
    </div>
</div>
</div>
</div>
