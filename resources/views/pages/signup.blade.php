@extends('layout.index')

@section('content')

<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Đăng Ký</h2>
                    <p>Chào mừng bạn đến với Utako</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Signup Section Begin -->
<section class="signup spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login__form">
                    <h3>Đăng Ký</h3>
                    <form method="POST" action="/signup">
                        @csrf
                        <div class="input__item">
                            <input type="text" placeholder="Tên đăng nhập" name="email">
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="text" placeholder="Tên hiển thị" name="name">
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="password" placeholder="Mật khẩu" name="password">
                            <span class="icon_lock"></span>
                        </div>
                        <button type="submit" class="site-btn">Đăng Ký</button>
                    </form>
                    <h5>Đã có tài khoản? <a href="/login">Đăng Nhập!</a></h5>
                </div>
            </div>
            {{-- <div class="col-lg-6">
                <div class="login__social__links">
                    <h3>Đăng Nhập Với:</h3>
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Đăng nhập với Facebook</a>
                        </li>
                        <li><a href="#" class="google"><i class="fa fa-google"></i> Đăng nhập với Google</a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Đăng nhập với Twitter</a></li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- Signup Section End -->

@endsection
