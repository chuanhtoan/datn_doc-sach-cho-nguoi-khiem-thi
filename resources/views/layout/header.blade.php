@section('header')

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="/">
                        <img src={{asset('img/logo.png')}} alt="" />
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="/">Trang chủ</a></li>
                            <li>
                                <a href="#">Thể loại <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown dropdown-categories">
                                    @foreach ($categories as $category)
                                        <li><a href="/category/{{$category->id}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @if (isset($user))
                                <li><a href="/follow">Theo Dõi</a></li>
                            @else
                                <li><a href="/login">Theo Dõi</a></li>
                            @endif
                            <li><a href="/about">Về Chúng Tôi</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <a href="#" class="search-switch">
                        <span class="icon_search"></span>
                    </a>
                    @if (isset($user))
                        <div id="acc-icon">
                            <img style="width: 30px; margin-top: -5px;" src="{{$user->avatar}}">
                            <ul class="my__dropdown">
                                {{-- <li><a href="#">Viết bài</a></li> --}}
                                <li><a href="/logout">Đăng xuất</a></li>
                            </ul>
                        </div>
                    @else
                        <div id="acc-icon">
                            <a href="/login"><span class="icon_profile"></span></a>
                            <ul class="my__dropdown">
                                <li><a href="/login">Đăng nhập</a></li>
                                <li><a href="/signup">Đăng ký</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>

@endsection
