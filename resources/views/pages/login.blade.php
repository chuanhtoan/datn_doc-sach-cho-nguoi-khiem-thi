@extends('layout.index')

@section('content')

<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Đăng Nhập</h2>
                    <p>Chào mừng bạn đến với Utako</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Đăng Nhập</h3>
                    <form action="#">
                        <div class="input__item">
                            <input type="text" placeholder="Tên đăng nhập">
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="text" placeholder="Mật khẩu">
                            <span class="icon_lock"></span>
                        </div>
                        <button type="submit" class="site-btn">Đăng Nhập</button>
                    </form>
                    <a href="#" class="forget_pass">Quên mật khẩu?</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Không Có Tài Khoản?</h3>
                    <a href="/signup" class="primary-btn">Đăng ký ngay</a>
                </div>
            </div>
        </div>
        <div class="login__social">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <span>hay</span>
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Đăng nhập với Facebook</a></li>
                            <li><a href="#" class="google"><i class="fa fa-google"></i> Đăng nhập với Google</a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Đăng nhập với Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Section End -->

@endsection
