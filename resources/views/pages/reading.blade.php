@extends('layout.reading_layout')

@section('content')

<!-- Blog Details Section Begin -->
<section class="blog-details spad" id="blog-details">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="blog__details__title">
                    <h6>{{$novel->author}} {{'-'}} {{$novel->publishYear}}</h6>
                    <h2 id="blog-title">{{$novel->title}} {{'-'}} Chương {{$chapter->number}} @if ($chapter->title!=null) {{'-'}} @endif {{$chapter->title}}</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="blog__details__content">
                    <div class="blog__details__text">
                        <div id="novel-content">{!!$chapter->content!!}</div>
                    </div>
                    <div class="blog__details__tags">
                        @foreach ($novel_categories as $novel_category)
                            @foreach ($categories as $category)
                                @if ($category->id == $novel_category->categoryID)
                                    <a href="/category/{{$category->id}}">{{$category->name}}</a>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                    <div class="blog__details__btns">
                        <div class="row">
                            <div class="col-lg-6">
                                @if ($prevChap)
                                    <div class="blog__details__btns__item pre__btn">
                                        <h5>
                                            <a href="/novel/{{$novel->id}}/{{$prevChap->number}}">
                                                @php $str = $prevChap->title @endphp
                                                @if (strlen($str) >= 40)
                                                    @php $str = substr($str, 0, 40) . "..." @endphp
                                                @endif
                                                <span class="arrow_left"></span> {{$str}}
                                            </a>
                                        </h5>
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                @if ($nextChap)
                                    <div class="blog__details__btns__item next__btn">
                                        <h5>
                                            <a href="/novel/{{$novel->id}}/{{$nextChap->number}}">
                                                @php $str = $nextChap->title @endphp
                                                @if (strlen($str) >= 40)
                                                    @php $str = substr($str, 0, 40) . "..." @endphp
                                                @endif
                                                {{$str}} <span class="arrow_right"></span>
                                            </a>
                                        </h5>
                                    </div>
                                @endif
                            </div>
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
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

{{-- Audio --}}
@if ($chapter->audio)
    <audio style="display: none" id="myAudio" controls="controls">
        @php $audioUrl = explode("/",$chapter->audio)[5] @endphp
        <source src="https://docs.google.com/uc?export=download&id={{$audioUrl}}">
    </audio>
@endif
{{-- End Audio --}}

@endsection

@section('js')

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
