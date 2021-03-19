@extends('layout.index')

@section('content')

<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"
                                ><span>Watch Now</span> <i class="fa fa-angle-right"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"
                                ><span>Watch Now</span> <i class="fa fa-angle-right"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"
                                ><span>Watch Now</span> <i class="fa fa-angle-right"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Trending Now</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn"
                                    >View All <span class="arrow_right"></span
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($trendingNovels as $trendingNovel)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="/novel/{{$trendingNovel->id}}">
                                        <div class="product__item__pic set-bg" data-setbg="{{$trendingNovel->cover}}">
                                            <div class="ep">18 / 18</div>
                                            <div class="comment">
                                                <i class="fa fa-comments"></i> 11
                                            </div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                    </a>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Category</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5>
                                            <a href="#">{{$trendingNovel->title}}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="popular__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Popular Shows</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn"
                                    >View All <span class="arrow_right"></span
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($popularNovels as $popularNovel)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="/novel/{{$popularNovel->id}}">
                                        <div class="product__item__pic set-bg" data-setbg="{{$popularNovel->cover}}">
                                            <div class="ep">18 / 18</div>
                                            <div class="comment">
                                                <i class="fa fa-comments"></i> 11
                                            </div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                    </a>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="/novel/{{$popularNovel->id}}">{{$popularNovel->title}}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="recent__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Recently Added Shows</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn"
                                    >View All <span class="arrow_right"></span
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($recentlyAdds as $recentlyAdd)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$recentlyAdd->cover}}">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment">
                                            <i class="fa fa-comments"></i> 11
                                        </div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">{{$recentlyAdd->title}}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="live__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Live Action</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn"
                                    >View All <span class="arrow_right"></span
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($liveActions as $liveAction)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div
                                        class="product__item__pic set-bg"
                                        data-setbg="{{$liveAction->cover}}"
                                    >
                                        <div class="ep">18 / 18</div>
                                        <div class="comment">
                                            <i class="fa fa-comments"></i> 11
                                        </div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">{{$liveAction->title}}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                @include('layout.product-sidebar')
                @yield('product-sidebar')
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

@endsection
