@extends('admin.layout.index')

@section('above_head')

    {{-- style button thêm --}}
    <style>
        .btn_add {
            float: right;
            padding-right: 1.25rem;
            margin-top: 1px;
            margin-bottom: 7px;
        }
    </style>
    {{-- <script src={{ url('ckeditor/ckeditor.js') }}></script> --}}

@endsection

@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

<div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">

    <!-- main content -->
    <div class="container-fluid">
        <h2>Chương {{$chapter->number}} - {{$chapter->title}}</h2>
        <p class="lead">
            Sách {{$novel->title}}.
        </p>
        <hr>
        <div class="card" style="margin-bottom: 14rem">
            <div class="card-body">
                <form id="frmProducts" name="frmProducts" class="form-horizontal classFormUpdate validate-form" novalidate="" enctype="multipart/form-data" action="{{route('chapter.update',$chapter->id)}}" method="post">
                    {{ method_field('PUT') }}
                    @csrf
                    <input type="hidden" name="class_id" class="class-id" id="class-id">
                    <div class="form-group">
                        <label for="noiDung">Nội dung:</label>
                        {{-- <div id="editor">{{!!$chapter->content!!}}</div> --}}
                        <div id="editor">{!!$chapter->content!!}</div>
                        <br>
                        <div style="display: inline-block;float: right">
                            <a href="{{route('chapter.index')}}" class="btn btn-warning" style="margin-right: .5rem">Quay Về</a>
                            <a id="btn-save" value="update" class="btn btn-primary" style="margin-right: .5rem;color: white">Lưu</a>
                            {{-- <input type="hidden" id="product_id" name="product_id" value="{{($products->id)}}"> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection



@section('above_body')
    <script>
        let editor;
        ClassicEditor
            .create( document.querySelector('#editor'), {
                toolbar: [ 'bold', 'italic' ]
            })
            .then( newEditor => {
                editor = newEditor;
            })
            .catch( error => {
                console.error( error );
            });
    </script>

    {{-- Script Create Ajax --}}
    <script>
        $(document).ready(function(){

            // create new product ***************************
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
                    content: editor.getData(),
                }

                $.ajax({
                    type: "POST",
                    method:'put',
                    url: '/admin/chapter/updateContent/' + {{$chapter->id}},
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        alertify.success('Sửa thành công');
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            }

        });
    </script>

@endsection

