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
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
  <link rel="stylesheet" href="plugins/video-popup/modal-video.min.css">
  <link rel="stylesheet" href="plugins/swiper/swiper.min.css">
  <link rel="stylesheet" href="plugins/date-picker/datepicker.min.css">
  <link rel="stylesheet" href="plugins/clock-picker/clockpicker.min.css">
  <link rel="stylesheet" href="plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.css">
  <link rel="stylesheet" href="plugins/devices.min.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>

<div class="container">
<div class="row ">
				<div class="col-lg-7 col-md-7">
					<a href="index.html"><img src="images/logo.png" alt="" class="img-fluid logo " ></a>


				</div>
<div class="col-lg-5 col-md-5 text-align-r">

  <div class="row">
        <div class="col-sm-12"><a href="#" class="flot-r p-tb1">Select Language</a></div>
        <div class="col-sm-12"><a href="#"><img src="images/login.png" ></a><a href="#"><img src="images/signup.png"></a><a href=""><img src="images/facebook.png"></a></div>
    </div>


				</div>

			</div>


			</div>
		</div>


<!-- About start -->
<section class="section cta">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<span class="text-white font-extra font-md">Forgot Password
</span>
			</div>
		</div>
	</div>
</section>


<!-- About  End -->

<!-- CTA start -->

<!-- CTA  End -->
<section class="section about">
	<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1 login-b" >
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
                    <h3>Please enter the email address you used to register on Serious Dating. We will email you your password.
</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address" value="" />
                        </div>

                        <div class="form-group">

                             <button type="submit" class="btn btn-main">Send Password</button>
                        </div>
                        <div class="form-group"></div>
                  </form>
                </div>

            </div>
        </div>
</section>



<!--Footer start -->


<section class="footer-btm py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				About | Policy | Terms & Conditions | News | Blog | Contact Us<br>

Copyright © 2017, Serious Dating. All Rights Reserved.
		  </div>
            <div class="col-lg-3">
				Would You Like to Follow Us<ul class="list-inline footer-socials mt-2">
						<li class="list-inline-item"><a href="#"><i
									class="ti-facebook mr-2"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="ti-twitter mr-2 "></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="ti-google mr-2 "></i></a></li>
						<li class="list-inline-item"><a href="#"><i	class="ti-instagram mr-2 "></i></a></li>
                        <li class="list-inline-item"><a href="#"><i	class="ti-youtube mr-2 "></i></a></li>
					</ul> </div>

	  </div>
	</div>
</section>
<!-- Footer  End -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/aos/aos.js"></script>
<script src="plugins/shuffle/shuffle.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="plugins/date-picker/datepicker.min.js"></script>
<script src="plugins/clock-picker/clockpicker.min.js"></script>
<script src="plugins/video-popup/jquery-modal-video.min.js"></script>
<script src="plugins/swiper/swiper.min.js"></script>
<script src="plugins/instafeed/instafeed.min.js"></script>
<script src="plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.js"></script>

 <!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="plugins/google-map/gmap.js"></script>
<!-- Main Script -->
<script src="js/contact.js"></script>
<script src="js/script.js"></script>

</html>
