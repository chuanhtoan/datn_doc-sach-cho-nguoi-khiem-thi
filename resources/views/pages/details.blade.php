@extends('layout.index')

@section('content')

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="anime__details__pic set-bg" data-setbg="{{$novel->cover}}">
                        <div class="comment"><i class="fa fa-comments"></i> {{$commentCount}}</div>
                        {{-- <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3 id="anime-title">{{$novel->title}}</h3>
                            <span>{{$another_title->title}}</span>
                        </div>
                        {{-- <div class="anime__details__rating">
                            <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                            <span>1.029 Votes</span>
                        </div> --}}
                        <p class="mt-4" id="novel-description">{{$novel->description}}</p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Tác giả:</span> {{$novel->author}}</li>
                                        <li><span>Tình trạng:</span> {{$novel->status}}</li>
                                        <li><span>Loại:</span> {{$novel->type}}</li>
                                        <li><span>Năm sản xuất:</span> {{$novel->publishYear}}</li>
                                        <li><span>Ngôn ngữ:</span> {{$novel->language}}</li>
                                        <li><span>Xếp loại:</span> {{$novel->rating}}</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li>
                                            <span>Thể loại:</span>
                                            @foreach ($novel_categories as $novel_category)
                                                @foreach ($categories as $category)
                                                    @if ($category->id == $novel_category->categoryID)
                                                        {{$category->name}},
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="anime__details__btn">
                            @if (isset($follow_lists))
                                <a href="/unfollow/{{$novel->id}}" class="follow-btn"><i class="fa fa-heart-o"></i> Hủy Theo Dõi</a>
                            @else
                                <a href="/follow/{{$novel->id}}" class="follow-btn"><i class="fa fa-heart-o"></i> Theo Dõi</a>
                            @endif

                            @if (count($chapters) > 0)
                                <a href="/novel/{{$novel->id}}/{{$chapters[0]->number}}" class="watch-btn"><span>Đọc ngay</span> <i class="fa fa-angle-right"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="anime__details__widget">
                    <div class="section-title">
                        <h5>Chương</h5>
                    </div>
                    <div class="chapters__list--wrap">
                        <ul class="chapters__list">
                            @foreach ($chapters as $chapter)
                                <li class="chapters__list--item"><a href="{{$novel->id}}/{{$chapter->number}}">
                                    Chương {{$chapter->number}} @if ($chapter->title!=null) {{'-'}} @endif {{$chapter->title}}
                                </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Bình luận</h5>
                    </div>
                    @foreach ($comments as $comment)
                        @foreach ($accounts as $account)
                            @if ($comment->accUsername == $account->id)
                                <div class="anime__review__item">
                                    <div class="anime__review__item__pic">
                                        <img src="{{$account->avatar}}" alt="avatar">
                                    </div>
                                    <div class="anime__review__item__text">
                                        <h6>{{$account->name}}</h6>
                                        <p>{{$comment->content}}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
                <div class="anime__details__form">
                    @if (isset($user))
                        <div class="section-title">
                            <h5>Bình Luận</h5>
                        </div>
                        <form id="commentForm">
                            <textarea id="comment" placeholder="Nhập bình luận của bạn"></textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i> Gửi</button>
                        </form>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="anime__details__sidebar">
                    <div class="section-title">
                        <h5>bạn có thể thích...</h5>
                    </div>
                    @foreach ($novels as $nl)
                        <a href="{{$nl->id}}">
                            <div class="product__sidebar__view__item set-bg" data-setbg="{{$nl->cover}}">
                                {{-- <div class="ep">2 / ?</div> --}}
                                {{-- <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                <h5>{{$nl->title}}</h5>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->

<script>
$(document).ready(function(){
    $("#commentForm").submit(function(e){
        e.preventDefault();
        thucHienAjax();
    });
    function thucHienAjax(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        var formData = {
            novelID: {!! $novel->id !!},
            accUsername: {!! $logged !!},
            content: $('#comment').val(),
        }

        var state = 'create';
        var type = "POST";
        var my_url = '/comment';
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log('Success:', data)
                location.reload()
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }
});
</script>

@endsection
