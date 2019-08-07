<section class="footer-btm py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
            <a href="{{url('/about-us')}}" class="btn">About</a>  |
            <a href="{{url('/policy')}}" class="btn">Policy</a>  |
            <a href="{{url('/termsandconditions')}}" class="btn">Terms & Conditions</a>|
            <a href="{{url('/contact-us')}}" class="btn">Contact Us</a> <br>

                Copyright © 2019, Serious Dating. All Rights Reserved.
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
<script type="text/javascript">
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
          modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
    </script>
    
<!-- jQuery -->
<script src="{{asset('plugins/jQuery/jquery.min.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
{{-- <script src="{{asset('js/multi_step_form.js')}}"></script> --}}
<!-- Bootstrap JS -->
<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/aos/aos.js')}}"></script>
<script src="{{asset('plugins/shuffle/shuffle.min.js')}}"></script>
<script src="{{asset('plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('plugins/date-picker/datepicker.min.js')}}"></script>
<script src="{{asset('plugins/clock-picker/clockpicker.min.js')}}"></script>
<script src="{{asset('plugins/video-popup/jquery-modal-video.min.js')}}"></script>
<script src="{{asset('plugins/swiper/swiper.min.js')}}"></script>
<script src="{{asset('plugins/instafeed/instafeed.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.js')}}"></script>

 <!-- Google Map -->
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script> --}}
<script src="{{asset('plugins/google-map/gmap.js')}}"></script>
<!-- Main Script -->
<script src="{{asset('js/contact.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>


<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script src="{{asset('js/additional-methods.js')}}"></script>
<script src="{{'js/contactform.js'}}"></script>
<script src="{{'js/register1.js'}}"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


{{-- <script src="{{asset('js/jquery-3.1.1.js')}}"></script> --}}

</body>
</html>
