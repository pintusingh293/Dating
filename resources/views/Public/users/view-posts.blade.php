<?php
use App\Post;
?>

@extends('public.layout.layout')
<!-- About start -->

@section('content')

    <section class="section cta">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <span class="text-white font-extra font-md">View-all posts</span>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
        <section class="text-center p-1">
            <span class="text-primary font-extra font-md">View All posts</span>
            <div class="container">
                <div class="row">
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
                    @foreach(Post::all() as $post)
                    <div class="col-md-6">
                    <div class="user-main">
                    <div class="row">
                        <div class="col-md-4">
                        <img src="/uploads/posts/{{$post->featuredimage}}" height="80px",width="80px">
                        </div>
                        <div class="col-md-8">
                            <table width="100%" border="0" cellspacing="0" cellpadding="4">
                                <tbody>
                                    <tr>
                                    <td width="100%"><a href="/single-post/{{ $post->id}}"><strong>{{$post->title}}</strong></a></td>

                                    </tr>
                                    <tr>
                                    <td >{{ $post -> created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#FFFFFF" ><strong>{{$post->short_description}}</strong></td>
                                    </tr>

                                    <tr>
                                    <td height="30" colspan="2" align="right" ><div align="left"><a href="/single-post/{{ $post->id}}" class="btn btn-main btn-sm " data-swiper-parallax="500" style="text-align:center;">viewDetails </a></div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
        </div>
    </section>

@endsection
