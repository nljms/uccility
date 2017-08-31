<div class="col-md-2 left_col scrollbar" id="style-1">
    <div class="left_cols">
        <div class="clearfix"></div>
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('img/img_avatar3.png')}}" class="img-circle profile_img" alt="avatar_img">
            </div>
            <div class="profile_info">
                <span>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</span>
                @foreach(Auth::user()->roles as $role)
                <p>{{ $role->display_name }}</p>
                @endforeach
            </div>
        </div>
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            @include('_includes.admin-nav-permissions')
        </div>
    </div>
</div>