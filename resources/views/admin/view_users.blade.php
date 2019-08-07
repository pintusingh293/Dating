@extends('layouts.adminLayout.admin_design')



@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">



<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Users</a> </div>
        <h1>Users</h1>
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
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Registered on</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr class="gradeX">
                                    <td>{{ $user['id'] }}</td>
                                    <td>{{ $user['name'] }}</td>
                                    <td>{{ $user['email'] }}</td>
                                    <td class="center">{{ $user['created_at'] }}</td>
                                    <td>
                                        @if(!empty($user['details']['id']))
                                            <a href="#myModal{{ $user['id'] }}" data-toggle="modal" class="btn btn-success">View Details</a>
                                            <div id="myModal{{ $user['id'] }}" class="modal hide">


                                                <div class="modal-header">
                                                    <button data-dismiss="modal" class="close" type="button">×</button>

                                                    <div class="container">
                                                            <h3>User Details</h3>
                                                            <input class="userStatus" rel="{{ $user['id'] }}" type="checkbox" data-toggle="toggle"  data-on="Enabled" data-off="Disabled" @if($user['details']['status']=="1") checked @endif>
                                                        </div>
                                                </div>


                                                <div class="modal-body">
                                                    <table width="100%" cellpadding="10" cellspacing="10">
                                                        <tr>
                                                                <td width="40%" align="left" valign="top" class="body"><strong> First name: </strong></td>
                                                                <td width="60%" align="left" valign="top">{{ $user['details']['firstname'] }}</td>
                                                        </tr>
                                                        <tr>
                                                                <td width="40%" align="left" valign="top" class="body"><strong> Lastname: </strong></td>
                                                                <td width="60%" align="left" valign="top">{{ $user['details']['lastname'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="40%" align="left" valign="top" class="body"><strong> Date of Birth: </strong></td>
                                                            <td width="60%" align="left" valign="top">{{ $user['details']['dob'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> Gender: </strong></td>
                                                            <td align="left" valign="top">
                                                                {{ $user['details']['gender'] }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                                <td align="left" valign="top" class="body"><strong> Seeking for: </strong></td>
                                                                <td align="left" valign="top">
                                                                    {{ $user['details']['seeking'] }}
                                                                </td>
                                                        </tr>

                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> Height: </strong></td>
                                                            <td align="left" valign="top">
                                                                {{ $user['details']['height'] }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> Marital Status: </strong></td>
                                                            <td align="left" valign="top">
                                                                {{ $user['details']['marital_status'] }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> Body Type: </strong></td>
                                                            <td align="left" valign="top">
                                                                {{ $user['details']['body_type'] }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> City: </strong></td>
                                                            <td align="left" valign="top">{{ $user['details']['city'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> State: </strong></td>
                                                            <td align="left" valign="top">{{ $user['details']['state'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> Country: </strong></td>
                                                            <td align="left" valign="top">
                                                                {{ $user['details']['country'] }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> Languages: </strong></td>
                                                            <td align="left" valign="top">
                                                                {{ $user['details']['language'] }}
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> How important in a relationship is my partner's dependability ?: </strong></td>
                                                            <td align="left" valign="top">{{ $user['details']['partnerDependability'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> Occupation: </strong></td>
                                                            <td align="left" valign="top">
                                                                {{ $user['details']['occupation'] }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> Income: </strong></td>
                                                            <td align="left" valign="top">
                                                                {{ $user['details']['income'] }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> How important in a relationship is sexual compatibility ?: </strong></td>
                                                            <td align="left" valign="top">
                                                                {{ $user['details']['sexual_compatibility'] }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                                <td align="left" valign="top" class="body"><strong> How often do you exercise ?: </strong></td>
                                                                <td align="left" valign="top">
                                                                    {{ $user['details']['exercise'] }}
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="top" class="body"><strong> What is the longest relationship you have been in ?: </strong></td>
                                                            <td align="left" valign="top">
                                                                {{ $user['details']['longest_relationship'] }}
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                                <td align="left" valign="top" class="body"><strong> What's your education level ?: </strong></td>
                                                                <td align="left" valign="top">
                                                                    {{ $user['details']['education_level'] }}
                                                                </td>
                                                        </tr><tr>
                                                                <td align="left" valign="top" class="body"><strong>Are you on any medication ?: </strong></td>
                                                                <td align="left" valign="top">
                                                                    {{ $user['details']['medication'] }}
                                                                </td>
                                                            </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        @endif

                                        <a href="/admin/{{$user['id']}}/edit_users" class="btn btn-info"> Edit</a>

                                        <form method="POST" action="/admin/viewuser/{{ $user['id']}}">
                                            @method('DELETE')
                                            @csrf
                                                <input type="submit" name="submit" value="Delete" class="btn btn-danger ">
                                          </form>
                                    </td>
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
