@extends('layout.index')

@section('content')

<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">
            @foreach ($novels as $novel)
                <div style="background-position: center 25%;" class="hero__items set-bg" data-setbg="{{$novel->cover}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                @foreach ($novel_categories as $nv_ct)
                                    @foreach ($categories as $category)
                                        @if ($nv_ct->novelID == $novel->id && $nv_ct->categoryID == $category->id)
                                            <div class="label mt-2">
                                                <a href="/category/{{$category->id}}">{{$category->name}}</a>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                                <h2>{{$novel->title}}</h2>
                                <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$novel->description}}</p>
                                <a href="novel/{{$novel->id}}"><span>Đọc ngay</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                                <h4>Truyện đề cử</h4>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn"
                                    >View All <span class="arrow_right"></span
                                ></a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">
                        @foreach ($trendingNovels as $trendingNovel)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="/novel/{{$trendingNovel->id}}">
                                        <div class="product__item__pic set-bg" data-setbg="{{$trendingNovel->cover}}">
                                            <div class="ep">2 / ?</div>
                                            <div class="comment">
                                                <i class="fa fa-comments"></i> 11
                                            </div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                    </a>
                                    <div class="product__item__text">
                                        <ul>
                                            @foreach ($novel_categories as $nv_ct)
                                                @foreach ($categories as $category)
                                                    @if ($nv_ct->novelID == $trendingNovel->id && $nv_ct->categoryID == $category->id)
                                                        <a href="/category/{{$category->id}}"><li>{{$category->name}}</li></a>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </ul>
                                        <h5>
                                            <a href="/novel/{{$trendingNovel->id}}">{{$trendingNovel->title}}</a>
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
                                <h4>Truyện phổ biến</h4>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn"
                                    >View All <span class="arrow_right"></span
                                ></a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">
                        @foreach ($popularNovels as $popularNovel)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="/novel/{{$popularNovel->id}}">
                                    <div class="product__item">
                                        <a href="/novel/{{$popularNovel->id}}">
                                            <div class="product__item__pic set-bg" data-setbg="{{$popularNovel->cover}}">
                                                <div class="ep">2 / ?</div>
                                                <div class="comment">
                                                    <i class="fa fa-comments"></i> 11
                                                </div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                        </a>
                                        <div class="product__item__text">
                                            <ul>
                                                @foreach ($novel_categories as $nv_ct)
                                                    @foreach ($categories as $category)
                                                        @if ($nv_ct->novelID == $popularNovel->id && $nv_ct->categoryID == $category->id)
                                                            <a href="/category/{{$category->id}}"><li>{{$category->name}}</li></a>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </ul>
                                            <h5><a href="/novel/{{$popularNovel->id}}">{{$popularNovel->title}}</a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="recent__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Truyện mới cập nhật</h4>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn"
                                    >View All <span class="arrow_right"></span
                                ></a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">
                        @foreach ($recentlyAdds as $recentlyAdd)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="/novel/{{$recentlyAdd->id}}">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="{{$recentlyAdd->cover}}">
                                            <div class="ep">2 / ?</div>
                                            <div class="comment">
                                                <i class="fa fa-comments"></i> 11
                                            </div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                @foreach ($novel_categories as $nv_ct)
                                                    @foreach ($categories as $category)
                                                        @if ($nv_ct->novelID == $recentlyAdd->id && $nv_ct->categoryID == $category->id)
                                                            <a href="/category/{{$category->id}}"><li>{{$category->name}}</li></a>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </ul>
                                            <h5><a href="#">{{$recentlyAdd->title}}</a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="live__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Truyện chuyển thể</h4>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn"
                                    >View All <span class="arrow_right"></span
                                ></a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">
                        @foreach ($liveActions as $liveAction)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="/novel/{{$liveAction->id}}">
                                    <div class="product__item">
                                        <div
                                            class="product__item__pic set-bg"
                                            data-setbg="{{$liveAction->cover}}"
                                        >
                                            <div class="ep">2 / ?</div>
                                            <div class="comment">
                                                <i class="fa fa-comments"></i> 11
                                            </div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                @foreach ($novel_categories as $nv_ct)
                                                    @foreach ($categories as $category)
                                                        @if ($nv_ct->novelID == $liveAction->id && $nv_ct->categoryID == $category->id)
                                                            <a href="/category/{{$category->id}}"><li>{{$category->name}}</li></a>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </ul>
                                            <h5><a href="/novel/{{$liveAction->id}}">{{$liveAction->title}}</a></h5>
                                        </div>
                                    </div>
                                </a>
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
