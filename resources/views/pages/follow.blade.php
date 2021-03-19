@extends('layout.index')

@section('content')

<!-- Product Section Begin -->
<section class="product-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="product__page__content">
                    <div class="product__page__title">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6">
                                <div class="section-title">
                                    <h4>{{$category->name}}</h4>
                                </div>
                            </div>
                            {{-- <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="product__page__filter">
                                    <p>Order by:</p>
                                    <select>
                                        <option value="">A-Z</option>
                                        <option value="">1-10</option>
                                        <option value="">10-50</option>
                                    </select>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($novel_categories as $nvct)
                            @foreach ($novels as $novel)
                                @if ($nvct->novelID == $novel->id)
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item">
                                            <a href="/novel/{{$novel->id}}">
                                                <div class="product__item__pic set-bg" data-setbg="{{$novel->cover}}">
                                                    <div class="ep">18 / 18</div>
                                                    <div class="comment">
                                                        <i class="fa fa-comments"></i> 11
                                                    </div>
                                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                                </div>
                                            </a>
                                            <div class="product__item__text">
                                                <ul>
                                                    @foreach ($novel_categories_all as $nv_ct)
                                                        @foreach ($categories as $ct)
                                                            @if ($nv_ct->novelID == $novel->id && $nv_ct->categoryID == $ct->id)
                                                                <a href="/category/{{$ct->id}}"><li>{{$ct->name}}</li></a>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </ul>
                                                <h5><a href="/novel/{{$novel->id}}">{{$novel->title}}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
                {{-- <div class="product__pagination">
                    <a href="#" class="current-page">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#"><i class="fa fa-angle-double-right"></i></a>
                </div> --}}
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
