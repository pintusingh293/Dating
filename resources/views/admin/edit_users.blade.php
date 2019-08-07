@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
        <div id="content-header">
          <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Edit user</a> </div>
          <h1>Admin Settings</h1>
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
        </div>
        <div class="container-fluid"><hr>
          <div class="row-fluid">
            <div class="row-fluid">
              <div class="span12">
                <div class="widget-box">
                  <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Edit user</h5>
                  </div>
                  <div class="widget-content nopadding">
                            <form action="/admin/edit_users/{{ $users['id']}}" method="POST">
                                @method('PATCH')
                                @csrf
                                    <div class="inner-cont">
                                        <h2 class="fs-title">Update register user here here</h2>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{$users['name']}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                        <label for="user_email">Email *</label>
                                        <input type="email" class="form-control" id="user_email" name="email" placeholder="Enter your email id" value="{{$users['email']}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                        <label for="user_password">Password *</label>
                                        <input type="password" class="form-control" id="user_password" name="password" placeholder="Enter your password">
                                        </div>
                                    </div>
                                        <input type="submit" name="submit" class="btn btn-info" value="Update Now" />
                                </div>

                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
