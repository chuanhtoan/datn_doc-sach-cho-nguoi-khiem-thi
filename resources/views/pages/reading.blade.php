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
                                    <a href="/category/{{$category->id}}">{{$category->name}}</a>
                                @endif
                            @endforeach
                        @endforeach
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

<script>
// // Event speak
// let fired = false
// $(document).on('keydown', function(e) {
//     if (!fired && (e.keyCode === 96 || e.keyCode === 45)) {
//         fired = true
//         responsiveVoice.speak(document.getElementById("novel-content").textContent, "Vietnamese Female");
//     }
// }).on('keyup', function(e) {
//     if (e.keyCode === 96 || e.keyCode === 45) {
//         fired = false
//     }
// });
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
