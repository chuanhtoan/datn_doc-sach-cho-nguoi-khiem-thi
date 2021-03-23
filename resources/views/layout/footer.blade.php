@section('footer')

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
                        <li><a href="/about">Về Chúng Tôi</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</footer>

@endsection
