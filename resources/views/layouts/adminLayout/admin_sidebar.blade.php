<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="{{url('admin/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Users</span> <span class="label label-important"></span></a>
            <ul>
                <li><a href="{{ url('admin/view_users')}}">View Users</a></li>
            </ul>
        </li>

        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Posts</span> <span class="label label-important"></span></a>
            <ul>
                <li><a href="{{url('admin/add_posts')}}">Add posts</a></li>
                <li><a href="{{url('admin/view_posts')}}">View posts</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Events</span> <span class="label label-important"></span></a>
            <ul>
                <li><a href="{{url('admin/add_events')}}">Add events</a></li>
                <li><a href="{{url('admin/view_events')}}">View events</a></li>
            </ul>
        </li>

        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>About SeriousDating</span> <span class="label label-important"></span></a>
            <ul>
                <li><a href="{{url('admin/add-about-serious-dating')}}">Add aboutseriousdating</a></li>
                <li><a href="{{url('admin/view-about-serious-dating')}}">View aboutseriousdating</a></li>
            </ul>
        </li>
        <li><a href="{{url('admin/contactuser')}}"><i class="icon icon-user"></i> <span>View Contact user</span></a> </li>
    </ul>
</div>
<!--sidebar-menu-->
