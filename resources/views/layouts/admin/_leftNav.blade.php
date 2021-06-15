<div class="sidebar-inner slimscrollleft">
    <div class="user-details">
        <div class="text-center">
            <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="" class="img-circle">
        </div>
        <div class="user-info">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Mizanur Rahaman Raihan</a>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0)"> Profile</a></li>
                    <li><a href="javascript:void(0)"> Settings</a></li>
                    <li><a href="javascript:void(0)"> Lock screen</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0)"> Logout</a></li>
                </ul>
            </div>

            <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
        </div>
    </div>
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>
            <li>
                <a href="{{route('admin.dashboard')}}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> Users/Student </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('user.index')}}">User List</a></li>
                    <li><a href="{{route('user.create')}}">Create New User</a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Results </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('result.index')}}">Result List</a></li>
                    <li><a href="{{route('result.create')}}">Create New Result</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
