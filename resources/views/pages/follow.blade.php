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
                                    <h4>Theo dõi</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($follow_lists as $follow_list)
                            @foreach ($novels as $novel)
                                @if ($follow_list->novelID == $novel->id)
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item">
                                            <a href="/novel/{{$novel->id}}">
                                                <div class="product__item__pic set-bg" data-setbg="{{$novel->cover}}">
                                                    {{-- <div class="ep">2 / ?</div>
                                                    <div class="comment">
                                                        <i class="fa fa-comments"></i> 11
                                                    </div>
                                                    <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                                </div>
                                            </a>
                                            <div class="product__item__text">
                                                <ul>
                                                    @foreach ($novel_categories as $nv_ct)
                                                        @foreach ($categories as $category)
                                                            @if ($nv_ct->novelID == $novel->id && $nv_ct->categoryID == $category->id)
                                                                <a href="/category/{{$category->id}}"><li>{{$category->name}}</li></a>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </ul>
                                                <h5 class="result-title">
                                                    <a href="/novel/{{$novel->id}}">{{$novel->title}}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
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
