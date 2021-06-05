<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="Anime Template" />
		<meta name="keywords" content="Anime, unica, creative, html" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="_token" content="{{ csrf_token() }}" />
        <title>Utako</title>
        <link rel="icon" href="{{asset('img/utako/icon.png')}}">

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
			rel="stylesheet"
		/>

		<!-- Css Styles -->
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('css/plyr.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />

        <!-- Custom Dialogflow CSS -->
        <style>
            df-messenger {
                --df-messenger-button-titlebar-color: #E53637;
                margin-right: auto;
            }
            button#widgetIcon .df-chat-icon {
                object-fit: contain;
            }
            #voiceBtn {
				position: fixed;
				bottom: 20px;
				right: 20px;
				width: 100px;
				height: 100px;
				border-radius: 50%;
				background-color: red;
				z-index: 9999;
				display: none;
                background: #e53637;
                border: 2px solid white;
			}
            @media all and (max-width: 600px) {
                df-messenger {
                    display: none;
                }
				#voiceBtn {
					display: block;
				}
            }
        </style>

        {{-- JQuery --}}
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	</head>

	<body>
		<!-- Page Preloder -->
		<div id="preloder">
			<div class="loader"></div>
		</div>

		<!-- Header Section Begin -->
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
                                    <li><a href="/follow">Theo Dõi</a></li>
                                    <li>
                                        <a href="#">Tùy chỉnh <span class="arrow_carrot-down"></span></a>
                                        <ul class="dropdown dropdown-options">
                                            <form class="form-horizontal">
                                                <div class="form-group form-group-sm d-flex align-items-center justify-content-between mt-2">
                                                    <label class="col-sm-2 col-md-5 control-label mt-3" for="changeBGid">Màu nền: </label>
                                                    <div class="col-sm-5 col-md-7">
                                                        <select class="form-control" onchange="changeBG(this)" id="changeBGid">
                                                            <option value="#0B0C2A" selected="">Màu tối</option>
                                                            <option value="#F4F4F4">Màu sáng</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-sm d-flex align-items-center justify-content-between mt-2">
                                                    <label class="col-sm-2 col-md-5 control-label mt-3" for="changeFZid">Cỡ chữ: </label>
                                                    <div class="col-sm-5 col-md-7">
                                                        <select class="form-control" onchange="changeFZ(this)" id="changeFZid">
                                                            <option value="16">16</option>
                                                            <option value="18">18</option>
                                                            <option value="20">20</option>
                                                            <option value="22" selected="">22</option>
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
                                                <div class="form-group form-group-sm d-flex align-items-center justify-content-between mt-2">
                                                    <label class="col-sm-2 col-md-5 control-label mt-3" for="changeLHid">Cách dòng: </label>
                                                    <div class="col-sm-5 col-md-7">
                                                        <select class="form-control" onchange="changeLH(this)" id="changeLHid">
                                                            <option value="1">1</option>
                                                            <option value="1.5">1.5</option>
                                                            <option value="2" selected="">2</option>
                                                            <option value="2.5">2.5</option>
                                                            <option value="3">3</option>
                                                            <option value="3.5">3.5</option>
                                                            <option value="4">4</option>
                                                            <option value="4.5">4.5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-sm d-flex align-items-center justify-content-between mt-2">
                                                    <label class="col-sm-2 col-md-5 control-label mt-3" for="changePDid">Khung: </label>
                                                    <div class="col-sm-5 col-md-7">
                                                        <select class="form-control" onchange="changePD(this)" id="changePDid">
                                                            <option value="notfull" selected="">Khung nhỏ</option>
                                                            <option value="full">Khung full</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-sm d-flex align-items-center justify-content-between mt-2">
                                                    <label class="col-sm-2 col-md-5 control-label mt-3" for="changeFFid">Kiểu chữ: </label>
                                                    <div class="col-sm-5 col-md-7">
                                                        <select class="form-control" onchange="changeFF(this)" id="changeFFid">
                                                            <option value="Mulish" selected="">Mulish</option>
                                                            <option value="Oswald">Oswald</option>
                                                            <option value="sans-serif">Sans Serif</option>
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
                            <a href="#" class="search-switch">
                                <span class="icon_search"></span>
                            </a>
                            @if (isset($user))
                                <div id="acc-icon">
                                    <img style="width: 30px; margin-top: -5px;" src="{{$user->avatar}}">
                                    <ul class="my__dropdown">
                                        <li><a href="#">Viết bài</a></li>
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
		<!-- Header End -->

		@yield('content')

		<!-- Footer Section Begin -->
		<footer class="footer">
            <div class="page-up">
                <a href="#" id="scrollToTopButton"
                    ><span class="arrow_carrot-up"></span
                ></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer__logo">
                            <a href="./index.html"><img src="{{asset('img/logo.png')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer__nav">
                            <ul>
                                <li class="active"><a href="/">Trang Chủ</a></li>
                                <li><a href="#">Thể Loại</a></li>
                                <li><a href="/follow">Theo Dõi</a></li>
                                <li><a href="#">Tùy Chỉnh</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </footer>
		<!-- Footer Section End -->

		<!-- Search model Begin -->
		<div class="search-model">
			<div class="h-100 d-flex align-items-center justify-content-center">
				<div class="search-close-switch"><i class="icon_close"></i></div>
				<form class="search-model-form" method="get" action="/search">
					<input type="text" id="search" name="search" placeholder="Tìm kiếm....." />
				</form>
			</div>
		</div>
		<!-- Search model end -->

        <!-- Voice Button -->
		<button id="voiceBtn"></button>
		<!-- Voice Button -->

		<!-- Js Plugins -->
		<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/player.js')}}"></script>
		<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('js/mixitup.min.js')}}"></script>
		<script src="{{asset('js/jquery.slicknav.js')}}"></script>
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>

        <!-- Dialogflow -->
        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
        <df-messenger
        intent="WELCOME"
        chat-title="Utako Hỗ Trợ"
        chat-icon="{{asset('img/icon.png')}}"
        agent-id="8f9fb2d1-f4f7-4010-947e-2124765be88c"
        language-code="en"
        ></df-messenger>

        <!-- Responsive Voice -->
        <script src="https://code.responsivevoice.org/responsivevoice.js?key=CCtXSEMa"></script>
        <script>
            responsiveVoice.setDefaultVoice("Vietnamese Female");
        </script>

        <script src="{{asset('js/main.js')}}"></script>

        <!-- Section Javascript -->
        @yield('js')
	</body>
</html>
