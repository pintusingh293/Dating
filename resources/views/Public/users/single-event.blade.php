@extends('public.layout.layout')


@section('content')

    <section class="section cta">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <span class="text-white font-extra font-md">View event</span>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="margin-bottom:20px; margin-top:20px;">

        <a href="/view-events" class="btn btn-info">Back</a>
        <div class="row">
            <div class="col-md-6">
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
            <h3>{{$events->title}}</h3>

            <img src="/uploads/events/{{$events->featuredimage}}" width="300px" height="250px"/>

            </div>
            <div class="col-md-6">
                    <p style="align-content: center; margin-top:70px;">
                           About: {{$events->long_description}}
                    </p>
            </div>

        </div>
    </div>


@endsection
