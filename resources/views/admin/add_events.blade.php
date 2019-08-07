@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Add Events</a> </div>
        <h1>Add Events</h1>
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
        <form class="form-horizontal" method="POST" action="/admin/add_events" id="postform" enctype="multipart/form-data">
            @csrf

            <div class="control-group">
                    <label class="control-label">Title</label>
                    <div class="controls">
                      <input type="title" name="title" id="title" placeholder="Title" />
                      <span id=""></span>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Description</label>
                    <div class="controls">
                      <input type="text" name="short_description" id="short_description" class="form-control" placeholder="short description" />
                    </div>
                  </div>
                  <div class="control-group">
                        <label class="control-label">Description</label>
                        <div class="controls">
                          <textarea type="text" name="long_description" id="long_description" class="form-control" placeholder="long description" cols="20" rows="5"></textarea>
                        </div>
                      </div>
                  <div class="control-group">
                    <label class="control-label">Image</label>
                    <div class="controls">
                      <input type="file" name="featuredimage" id="image" />
                    </div>
                  </div>
                  <div class="form-actions">
                    <input type="submit" value="Add" class="btn btn-success">
                  </div>
        </form>
    </div>
</div>
@endsection
