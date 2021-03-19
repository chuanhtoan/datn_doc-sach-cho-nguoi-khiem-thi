@section('header')

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="/">
                        <img src="img/logo.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="/">Trang chủ</a></li>
                            <li>
                                <a href="./categories.html">Thể loại <span class="arrow_carrot-down"></span></a>
                                {{-- <div class="dropdown multi-column">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="dropdown">
                                                <li><a href="#">Tiên Hiệp</a></li>
                                                <li><a href="#">Kiếm Hiệp</a></li>
                                                <li><a href="#">Ngôn Tình</a></li>
                                                <li><a href="#">Đô Thị</a></li>
                                                <li><a href="#">Quan Trường</a></li>
                                                <li><a href="#">Võng Du</a></li>
                                                <li><a href="#">Khoa Huyễn</a></li>
                                                <li><a href="#">Hệ Thống</a></li>
                                                <li><a href="#">Huyền Huyễn</a></li>
                                                <li><a href="#">Dị Giới</a></li>
                                                <li><a href="#">Dị Năng</a></li>
                                                <li><a href="#">Quân Sự</a></li>
                                                <li><a href="#">Lịch Sử</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="dropdown">
                                                <li><a href="#">Xuyên Không</a></li>
                                                <li><a href="#">Xuyên Nhanh</a></li>
                                                <li><a href="#">Trọng Sinh</a></li>
                                                <li><a href="#">Trinh Thám</a></li>
                                                <li><a href="#">Thám Hiểm</a></li>
                                                <li><a href="#">Linh Dị</a></li>
                                                <li><a href="#">Sắc</a></li>
                                                <li><a href="#">Ngược</a></li>
                                                <li><a href="#">Sủng</a></li>
                                                <li><a href="#">Cung Đấu</a></li>
                                                <li><a href="#">Nữ Cường</a></li>
                                                <li><a href="#">Gia Đấu</a></li>
                                                <li><a href="#">Đông Phương</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="dropdown">
                                                <li><a href="#">Đam Mỹ</a></li>
                                                <li><a href="#">Bách Hợp</a></li>
                                                <li><a href="#">Hài Hước</a></li>
                                                <li><a href="#">Điền Văn</a></li>
                                                <li><a href="#">Cổ Đại</a></li>
                                                <li><a href="#">Mạt Thế</a></li>
                                                <li><a href="#">Truyện Teen</a></li>
                                                <li><a href="#">Phương Tây</a></li>
                                                <li><a href="#">Nữ Phụ</a></li>
                                                <li><a href="#">Light Novel</a></li>
                                                <li><a href="#">Việt Nam</a></li>
                                                <li><a href="#">Đoản Văn</a></li>
                                                <li><a href="#">Khác</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                <ul class="dropdown">
                                    <li><a href="#">Đam Mỹ</a></li>
                                    <li><a href="#">Bách Hợp</a></li>
                                    <li><a href="#">Hài Hước</a></li>
                                    <li><a href="#">Điền Văn</a></li>
                                    <li><a href="#">Cổ Đại</a></li>
                                    <li><a href="#">Mạt Thế</a></li>
                                    <li><a href="#">Truyện Teen</a></li>
                                    <li><a href="#">Phương Tây</a></li>
                                    <li><a href="#">Nữ Phụ</a></li>
                                    <li><a href="#">Light Novel</a></li>
                                    <li><a href="#">Việt Nam</a></li>
                                    <li><a href="#">Đoản Văn</a></li>
                                    <li><a href="#">Khác</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Theo Dõi</a></li>
                            <li>
                                <a href="./categories.html">Tùy chỉnh <span class="arrow_carrot-down"></span></a>
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
                    <a href="./login.html"><span class="icon_profile"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>

@endsection
