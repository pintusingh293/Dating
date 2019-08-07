@extends('layouts.adminLayout.admin_design')


@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Contact User</a> </div>
        <h1>Contact Us Users</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="icon-th"></i></span>
                        <h5>Contact Us Users</h5>
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
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>FullName</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Comments</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr class="gradeX">
                                    <td>{{ $contact['id'] }}</td>
                                    <td>{{ $contact['fullname'] }}</td>
                                    <td>{{ $contact['email'] }}</td>
                                    <td>{{ $contact['sub'] }}</td>
                                    <td>{{ $contact['comments']}}</td>
                                    <td>
                                    <form method="POST" action="/admin/contactuser/{{ $contact['id']}}">
                                    @method('DELETE')

                                    @csrf
                                    <div>
                                              <input type="submit" name="submit" value="Delete" class="btn btn-secondary ">
                                    </div>

                                  </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
