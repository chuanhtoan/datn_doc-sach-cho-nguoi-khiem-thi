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

        {{-- JQuery --}}
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	</head>

	<body>
		<!-- Page Preloder -->
		<div id="preloder">
			<div class="loader"></div>
		</div>

		<!-- Header Section Begin -->
		@include('layout.header')
        @yield('header')
		<!-- Header End -->

		@yield('content')

		<!-- Footer Section Begin -->
		@include('layout.footer')
        @yield('footer')
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

		<!-- Js Plugins -->
		<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/player.js')}}"></script>
		<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('js/mixitup.min.js')}}"></script>
		<script src="{{asset('js/jquery.slicknav.js')}}"></script>
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>

        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml            : true,
                    version          : 'v10.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- Your Chat Plugin code -->
        <div class="fb-customerchat"
            attribution="setup_tool"
            page_id="101854082014253">
        </div>

        <!-- Responsive Voice -->
        <script src="https://code.responsivevoice.org/responsivevoice.js?key=6du6EqaA"></script>
        <script>
            responsiveVoice.setDefaultVoice("Vietnamese Female");
        </script>

        <!-- Section Javascript -->
        @yield('js')
	</body>
</html>
