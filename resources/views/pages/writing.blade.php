@extends('layout.index')

@section('content')
<script src={{ url('ckeditor/ckeditor.js') }}></script>

<!-- Blog Details Section Begin -->
<section class="blog-details spad" id="blog-details">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                {{-- <div class="blog__details__title">
                    <h6 id="novel-author">{{$novel->author}} {{'-'}} {{$novel->publishYear}}</h6>
                    <h2 id="novel-title">{{$novel->title}} {{'-'}} Chương {{$chapter->number}} @if ($chapter->title!=null) {{'-'}} @endif {{$chapter->title}}</h2>
                </div> --}}
            </div>
            <div class="col-lg-12">
                <div class="blog__details__content">
                    <div class="blog__details__text">
                        <p id="novel-content" contenteditable="true">{{$chapter->content}}</p>
                    </div>
                    <button type="button" id="btn-save">Save</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

<script>
CKEDITOR.disableAutoInline = true;
var editor = CKEDITOR.inline( 'novel-content' );

$(document).ready(function(){
    $("#btn-save").click(function(){
        thucHienAjax();
    });
    function thucHienAjax(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        // e.preventDefault();
        var formData = {
            // idPhim: $('#idPhim').val(),
            title: '0',
            number: 0,
            novelID: {!! $novel->id !!},
            content: CKEDITOR.instances['novel-content'].getData(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = 'create';
        var type = "POST";
        var my_url = '/write';

        // if (state == "update"){
        //     type = "PUT"; //for updating existing resource
        //     my_url += '/' + product_id;
        // }
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log('Succsess')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }
});
</script>

@endsection
