@section('left_drawer')
<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
    <div class="mdk-drawer__content">
        <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">

            <nav class="drawer  drawer--dark">
                <div class="drawer-spacer">
                    <div class="media align-items-center">
                        <a href="/admin/novel"><img alt="Logo" src="{{asset('backend/images/logo_only.png')}}" /></a>
                        <div class="media-body" style="padding-left: 14px; margin-top: 10px">
                            <a href="/admin/novel" class="h5 m-0 text-link">Utako | Admin</a>
                        </div>
                    </div>
                </div>

                <!-- HEADING -->
                <div class="py-2 drawer-heading">
                    Quản lý Sách
                </div>
                <!-- MENU -->
                <ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
                    <li class="drawer-menu-item">
                    {{-- <li class="drawer-menu-item active "> --}}
                        <a href="/admin/novel">
                            <i class="material-icons">local_movies</i>
                            <span class="drawer-menu-text"> Sách</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item">
                        <a href="/admin/category">
                            <i class="material-icons">dns</i>
                            <span class="drawer-menu-text"> Thể Loại</span>
                            {{-- <span class="badge badge-pill badge-success ml-1">4</span> --}}
                        </a>
                    </li>
                    <li class="drawer-menu-item ">
                        <a href="/admin/chapter">
                            <i class="material-icons">store</i>
                            <span class="drawer-menu-text"> Chương</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item ">
                        <a href="/admin/anothertitle">
                            <i class="material-icons">movies</i>
                            <span class="drawer-menu-text"> Tiêu Đề Khác</span>
                        </a>
                    </li>
                </ul>

                <!-- HEADING -->
                <div class="py-2 drawer-heading">
                    Quản lý Khác
                </div>
                <!-- MENU -->
                <ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
                    <li class="drawer-menu-item ">
                        <a href="/admin/follow">
                            <i class="material-icons">dashboard</i>
                            <span class="drawer-menu-text"> Theo Dõi</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item ">
                        <a href="/admin/comment">
                            <i class="material-icons">announcement</i>
                            <span class="drawer-menu-text"> Bình Luận</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item ">
                        <a href="/admin/user">
                            <i class="material-icons">account_circle</i>
                            <span class="drawer-menu-text"> Tài Khoản</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection
