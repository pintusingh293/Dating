<?php
use App\Post;
use App\Event;
use App\AboutSeriousDating;

?>

@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
  <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->


<!--End-Chart-box-->
    <hr/>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Latest Posts</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <ul class="recent-posts">
                @foreach(Post::all() as $post)
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="/uploads/posts/{{ $post->featuredimage}}"> </div>
                <div class="article-post"> <span class="user-info"> {{ $post->title}} / Date: {{ $post->created_at}} </span>
                <p><a href="#"> {{$post->description}}</a> </p>
                </div>
              </li>
              @endforeach
                <button class="btn btn-warning btn-mini">View All</button>
            </ul>
          </div>
        </div>


        <div class="widget-box">
          <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG3" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
            <h5>News updates</h5>
          </div>
          <div class="widget-content nopadding updates collapse in" id="collapseG3">
              @foreach( Event::all() as $event)
            <div class="new-update clearfix"><i class="icon-ok-sign"></i>
            <div class="update-done"><a title="" href="#"><strong>{{$event->title}}</strong></a> <span>{{ $event->description}}</span> </div>
            <div class="update-date">{{$event->created_at}}</div>
            </div>
            @endforeach
          </div>
        </div>

        <div class="widget-box">
                <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG3" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
                  <h5>About Serious Dating</h5>
                </div>
                <div class="widget-content nopadding updates collapse in" id="collapseG3">
                    @foreach( AboutSeriousDating::all() as $about)
                  <div class="new-update clearfix"><i class="icon-ok-sign"></i>
                  <div class="update-done"><a title="" href="#"><strong>{{$about->title}}</strong></a> <span>{{ $about->description}}</span> </div>
                  <div class="update-date">{{$about->created_at}}</div>
                  </div>
                  @endforeach
                </div>
              </div>

      </div>
    </div>
  </div>

@endsection
