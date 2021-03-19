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
                            <li><a href="#">Theo Dõi</a></li>
                            <li>
                                <a href="#">Tùy chỉnh <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown dropdown-options">
                                    <form class="form-horizontal">
                                        <div class="form-group form-group-sm d-flex align-items-center justify-content-between mt-2">
                                            <label class="col-sm-2 col-md-5 control-label mt-3" for="truyen-background">Màu nền: </label>
                                            <div class="col-sm-5 col-md-7">
                                                <select class="form-control" onchange="changeBG(this)" id="truyen-background">
                                                    <option value="#0B0C2A" selected="">Màu tối</option>
                                                    <option value="#F4F4F4">Màu sáng</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-sm d-flex align-items-center justify-content-between mt-2">
                                            <label class="col-sm-2 col-md-5 control-label mt-3" for="truyen-background">Size chữ: </label>
                                            <div class="col-sm-5 col-md-7">
                                                <select class="form-control" onchange="selectFunc(this)" id="truyen-background">
                                                    <option value="16" selected="">16</option>
                                                    <option value="18">18</option>
                                                    <option value="20">20</option>
                                                    <option value="22">22</option>
                                                    <option value="24">24</option>
                                                    <option value="26">26</option>
                                                    <option value="28">28</option>
                                                    <option value="30">30</option>
                                                    <option value="32">32</option>
                                                    <option value="34">34</option>
                                                    <option value="36">36</option>
                                                    <option value="38">38</option>
                                                    <option value="40">40</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <a href="#" class="search-switch"
                        ><span class="icon_search"></span
                    ></a>
                    <a href="login"><span class="icon_profile"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>

@endsection
