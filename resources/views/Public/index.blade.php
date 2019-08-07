<?php
use App\Country;
//$getCountries = new App\Country;
use App\User_details;
use App\User;
use App\Cache;
use App\Event;
use App\Post;
use App\AboutSeriousDating;
?>

@extends('Public.layout.layout')

@section('content')

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
<section class="slider-hero hero-slider  hero-style-1  ">
        <div class="swiper-container swiper-container-horizontal">
          <div class="swiper-wrapper">
            <!-- start slide-item -->
            <div class="swiper-slide slide-item">
              <div class="slide-inner slide-bg-image main-sider-inner" data-background="images/frontend_images/banner/slide-1.jpg">
                <!-- <div class="overlay"></div> -->
                <div class="container">
                  <div class="row">
                    <div class="col-lg-7">
                      <span data-swiper-parallax="300" class="text-primary font-extra font-md">Meet Singles From Salem</span>
                      <h1 class="mt-3 mb-5 text-lg text-white" data-swiper-parallax="400">Where Exceptional People Meet Personalize Your Experience</h1>

                      @if(!Auth::check())
                      <a href="{{url('/register')}}" class="btn btn-main mr-3" data-swiper-parallax="500">JOIN NOW</a>
                      @else
                      <a href="{{url('/registration')}}" class="btn btn-main mr-3" data-swiper-parallax="500">JOIN NOW</a>
                      @endif

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end slide-item -->

            <!-- start slide-item -->
            <div class="swiper-slide slide-item">
              <div class="slide-inner slide-bg-image main-sider-inner" data-background="images/frontend_images/banner/slide-1.jpg">
                <!-- <div class="overlay"></div> -->
                <div class="container">
                  <div class="row">
                    <div class="col-lg-7">
                      <span data-swiper-parallax="300" class="text-primary font-extra font-md">Meet Singles From Salem</span>
                      <h1 class="mt-3 mb-5 text-lg text-white" data-swiper-parallax="400">Where Exceptional People Meet Personalize Your Experience</h1>
                    @if(!Auth::check())
                      <a href="{{url('/register')}}" class="btn btn-main mr-3" data-swiper-parallax="500">JOIN NOW</a>
                      @else
                      <a href="{{url('/registration')}}" class="btn btn-main mr-3" data-swiper-parallax="500">JOIN NOW</a>
                    @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end slide-item -->

            <!-- start slide-item -->
            <div class="swiper-slide slide-item">
              <div class="slide-inner slide-bg-image main-sider-inner" data-background="images/frontend_images/banner/slide-1.jpg">
                <!-- <div class="overlay"></div> -->
                <div class="container">
                  <div class="row">
                    <div class="col-lg-7">
                      <span data-swiper-parallax="300" class="text-primary font-extra font-md">Meet Singles From Salem</span>
                      <h1 class="mt-3 mb-5 text-lg text-white" data-swiper-parallax="400">Where Exceptional People Meet Personalize Your Experience</h1>

                      @if(!Auth::check())
                      <a href="{{url('/register')}}" class="btn btn-main mr-3" data-swiper-parallax="500">JOIN NOW</a>
                      @else
                      <a href="{{url('/registration')}}" class="btn btn-main mr-3" data-swiper-parallax="500">JOIN NOW</a>
                    @endif

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end slide-item -->
          </div>
          <!-- end swiper-wrapper -->
          <!-- swipper controls -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </section>
      <!--  Banner End -->

      <!--  Intro start -->
      <section class="intro">
          <div class="container">
              <div class="intro-wrap bg-white w-100">
                   <h2>Search People</h2>
              <form action="{{ url('/search-user')}}" method="post">
                @csrf
                    <div class="form-row " style="margin-left:90px">
                    <div class="col-auto">
                            <select class="form-control wid-2" name="gender">
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
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
      </section >
      <!--  Intro End -->

      <!-- About start -->
      <section class="section about">
          <div class="container">
              <div class="row  justify-content-center ">
                  <div class="col-lg-12 text-center">
                      <span class="text-primary font-extra font-md">About Seriousdatings</span>
                    <p>Seriousdatings.com is dedicated and devoted with one purpose, helping single-minded people break the ice in meeting their soul mate.
      Due to our personal commitments, there is very little time to find that special someone. Dating should be meaningful and rewarding not stressful.
      </p>
                  </div>
            </div>

          </div>
      </section>
      <!-- About  End -->
      <section class="section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4">
                      <span class="text-primary font-extra font-md">Recent Registered Users</span>
                    <div class="regi-us">


                            @foreach (User_details::orderBy('id',
                            'desc')->take(12)->get() as $user)


                    <a href="/view-profile/{{$user->id}}">
                                    <img class="img-circle" src="/uploads/users/{{ $user['image'] }}" height="80px" width="80px"/>
                            </a>

                            @endforeach

                        </div>
                  </div>
                  @if(Auth::check())
                  <div class="col-lg-4">
                        <span class="text-primary font-extra font-md">Online Users</span>
                      <div class="regi-us">

                              @if(Auth::check())
                              @foreach (User::all() as $user)
                              @if($user->isOnline(Auth::user()['id']))
                              @if($user['details']['image'] == "")
                              <a href="/view-profile/{{ $user['details']['id'] }}">
                                    <img class="img-circle" src="/images/no_image.png" height="80px" width="80px"/>
                              </a>
                              @else
                              <a href="/view-profile/{{$user['details']['id']}}">
                                      <img class="img-circle" src="/uploads/users/{{ $user['details']['image'] }}" height="80px" width="80px"/>
                              </a>
                              @endif
                              @endif
                              @endforeach
                              @endif

                    </div>
                    </div>
                    @endif
                  <div class="col-lg-4">
                      <span class="text-primary font-extra font-md">Latest News</span>
                    <div class="regi-us">

                        <div class="panel panel-danger">

                      <div class="panel-body">
                          <ul class="media-list">
                              @foreach(Event::orderBy('id',
                              'desc')->take(3)->get() as $event)
                              <li class="media">
                                  <div class="media-left ">
                                  <img src="uploads/events/{{ $event['featuredimage']}}" width="80px" height="80px">
                                  </div>
                                  <div class="media-body">

                                      <h4 class="media-heading news-font">
                                      <a href="/single-event/{{ $event->id}}"> {{ $event['title']}}</a>
                                      </h4>
                                      <span class="news-tex2">
                                         {{ $event['created_at']}}
                                      </span>
                                      <p class="news-tex">
                                            {{ $event['short_description']}}
                                      </p>
                                  </div>
                              </li>
                              @endforeach
                          </ul>
                        <a href="{{url('/view-events')}}" class="btn btn-main mr-3 btn-block">View All News »</a>
                      </div>
                    </div>
                  </div>
            </div>


          </div>
      </section>
      <!-- CTA start -->
      <section class="section cta">
          <div class="overlay"></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-12 text-center">
                      <span class="font-extra text-md-2 text-white-70">Refer Your Friends</span>
                      <h2 class="mt-3 text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h2>

                      <button id="myBtn" class="btn btn-white">Invite friends</button>
                            <div id="myModal" class="modal">
                            <div class="modal-content">
                                <div class="row">
                                    <div class="col-9">
                                        <h3 style="float:left;"><i class="fa fa-paper-plane"></i> Invite Friends</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="close">&times;</span>
                                    </div>
                                </div>
                                <div class="row">

                                        <ul class="list-inline mt-2 center">
                                                <li class="list-inline-item"><a href="#"><i class="ti-facebook mr-2"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="ti-twitter mr-2 "></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="ti-google mr-2 "></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i	class="ti-instagram mr-2 "></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i	class="ti-youtube mr-2 "></i></a></li>
                                        </ul>

                                </div>
                                <p></p>
                            </div>

                            </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- CTA  End -->
      <section class="section about">
          <div class="container">
              <div class="row  justify-content-center mb-5">
                  <div class="col-lg-12 text-center">
                      <span class="text-primary font-extra font-md">About Seriousdatings</span>

                  </div>
            </div>

              <div class="row">

                @foreach(AboutSeriousDating::orderBy('id',
                'desc')->take(4)->get() as $about)
                  <div class="col-lg-3 col-md-3 mb-5 mb-lg-0 text-ali-ce" data-aos="fade-up">
                  <img src="uploads/abouts/{{$about->image}}" alt="" class="img-fluid">
                <div class="mt-3">
                <h3>{{ $about->title }}</h3>
                <p>{{ $about->description}}</p>
                </div>
                </div>
                @endforeach


              </div>
          </div>
      </section>

      <section class="section testi">
          <div class="container">


              <!-- Section: Testimonials v.1 -->
      <section class="text-center p-1">

        <!-- Section heading -->
        <span class="text-primary font-extra font-md">Testimonials from Real Couples</span>
        <!-- Section description -->
        <p class="dark-grey-text w-responsive mx-auto mb-5">Find out what about real couple have to say about related.
      </p>

        <!-- Grid row -->
        <div class="row">
                @foreach(Post::orderBy('id',
                'desc')->take(3)->get() as $post)
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
            <!--Card-->

            <div class="card testimonial-card">
              <!--Background color-->
              <div class="card-up info-color"></div>
              <!--Avatar-->
              <div class="avatar mx-auto white">
              <img src="uploads/posts/{{ $post['featuredimage']}}" class="rounded-circle img-fluid" height="80px;" width="80px;">
              </div>
              <div class="card-body">
                <!--Name-->
              <h4 class="font-weight-bold mb-4 red"><a href="/single-post/{{ $post->id}}">{{$post['title']}}</a></h4>
                <hr>
                <!--Quotation-->
              <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>{{ $post['short_description']}}</p>
              </div>
            </div>
            <!--Card-->
          </div>
          <!--Grid column-->

            @endforeach
        </div>
        <!-- Grid row -->
        <a href="/view-posts" class="btn btn-main">View all Posts</a>
      </section>
      <!-- Section: Testimonials v.1 -->
          </div>
      </section>

@endsection
