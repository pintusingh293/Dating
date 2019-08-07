@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">View Posts</a> </div>
        <h1>View Posts</h1>
    </div>
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
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="icon-th"></i></span>
                        <h5>Users</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>Post ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Featured Image</th>
                                    <th>Actions</th>
                                </tr>

                                <tbody>

                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{ $post['id']}}</td>
                                            <td>{{ $post['title']}}</td>
                                            <td>{{ $post['short_description']}}</td>

                                            <td><img src="/uploads/posts/{{ $post['featuredimage']}}" width="60px" height="60px"/></td>
                                            <td>
                                                    <form method="POST" action="/admin/view_posts/{{ $post['id']}}">
                                                        @method('DELETE')
                                                        @csrf
                                                            <input type="submit" name="submit" value="Delete" class="btn btn-danger ">
                                                      </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
