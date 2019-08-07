<div class="col-md-3">
        <div class="profile-sidebar">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
            <img src="/uploads/users/{{$detail['image']}}">
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                        {{ $detail['firstname']}}
                </div>
                <div class="profile-usertitle-job">
                        {{ $detail['gender']}}</div>
            </div>

            <div class="profile-usermenu">
                <ul >

                    <li><a href="{{url('/my-profile')}}"><i class="glyphicon glyphicon-user"></i>Profile</a></li>
                    <li><a href="{{url('/edit-account')}}"><i class="glyphicon glyphicon-ok"></i>Edit Account </a></li>
                    <li><a href="{{url('/pending-request')}}"><i class="glyphicon glyphicon-ok"></i>Pending Request </a></li>
                    <li><a href="{{url('/myfriends')}}"><i class="glyphicon glyphicon-ok"></i>My Friends </a></li>

                    <li><a href="{{url('/change-password')}}"><i class="glyphicon glyphicon-flag"></i>Change password</a>
                    <li><a href="{{url('/membership-status')}}"><i class="glyphicon glyphicon-flag"></i>Membership status</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
