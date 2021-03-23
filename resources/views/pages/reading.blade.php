@extends('layout.reading_layout')

@section('content')

<!-- Blog Details Section Begin -->
<section class="blog-details spad" id="blog-details">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="blog__details__title">
                    <h6>{{$novel->author}} {{'-'}} {{$novel->publishYear}}</h6>
                    <h2>{{$novel->title}} {{'-'}} Chương {{$chapter->number}} @if ($chapter->title!=null) {{'-'}} @endif {{$chapter->title}}</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="blog__details__content">
                    <div class="blog__details__text">
                        <p id="novel-content">{{$chapter->content}}</p>
                    </div>
                    <div class="blog__details__tags">
                        @foreach ($novel_categories as $novel_category)
                            @foreach ($categories as $category)
                                @if ($category->id == $novel_category->categoryID)
                                    <a href="#">{{$category->name}}</a>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                    <div class="blog__details__btns">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__btns__item">
                                    <h5>
                                        <a href="#"><span class="arrow_left"></span> Building a Better LiA...</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__btns__item next__btn">
                                    <h5>
                                        <a href="#">Mugen no Juunin: Immortal – 21 <span class="arrow_right"></span></a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog__details__comment">
                        <h4>3 Bình Luận</h4>
                        <div class="blog__details__comment__item">
                            <div class="blog__details__comment__item__pic">
                                <img src="img/blog/details/comment-1.png" alt="" />
                            </div>
                            <div class="blog__details__comment__item__text">
                                <span>Sep 08, 2020</span>
                                <h5>John Smith</h5>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit, sed quia non numquam
                                    eius modi
                                </p>
                                <a href="#">Like</a>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                        <div
                            class="blog__details__comment__item blog__details__comment__item--reply"
                        >
                            <div class="blog__details__comment__item__pic">
                                <img src="img/blog/details/comment-2.png" alt="" />
                            </div>
                            <div class="blog__details__comment__item__text">
                                <span>Sep 08, 2020</span>
                                <h5>Elizabeth Perry</h5>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit, sed quia non numquam
                                    eius modi
                                </p>
                                <a href="#">Like</a>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                        <div class="blog__details__comment__item">
                            <div class="blog__details__comment__item__pic">
                                <img src="img/blog/details/comment-3.png" alt="" />
                            </div>
                            <div class="blog__details__comment__item__text">
                                <span>Sep 08, 2020</span>
                                <h5>Adrian Coleman</h5>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit, sed quia non numquam
                                    eius modi
                                </p>
                                <a href="#">Like</a>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog__details__form">
                        <h4>Leave A Commnet</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" placeholder="Name" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" placeholder="Email" />
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit" class="site-btn">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

@endsection
