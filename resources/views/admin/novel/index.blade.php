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

        .btn-anothertitle, .btn-chapter, .btn-comment {
            width: 111px;
            margin-top: 10px;
        }

        /* Checkboxs the loai */
        /* Hiding the checkbox, but allowing it to be focused */
        .badgebox
        {
            opacity: 0;
        }

        .badgebox + .badge
        {
            /* Move the check mark away when unchecked */
            text-indent: -999999px;
            /* Makes the badge's width stay the same checked and unchecked */
            width: 27px;
        }

        .badgebox:focus + .badge
        {
            /* Set something to make the badge looks focused */
            /* This really depends on the application, in my case it was: */

            /* Adding a light border */
            box-shadow: inset 0px 0px 5px;
            /* Taking the difference out of the padding */
        }

        .badgebox:checked + .badge
        {
            /* Move the check mark back when checked */
            text-indent: 0;
        }
    </style>

@endsection

@section('content')

<div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">

    <!-- main content -->
    <div class="container-fluid">

        <h2>Sách</h2>
        <p class="lead">
            Quản lý thông tin các sách.
        </p>
        <hr>
        <div class="card">
            <div class="py-4">

                {{-- Create Button --}}
                <div class="btn_add">
                    <button id="btn_add" name="btn_add" class="btn btn-success btn-detail">Thêm</button>
                </div>

                {{-- table --}}
                <div class="table-responsive">
                    <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tiêu Đề</th>
                                <th>Ảnh Bìa</th>
                                <th>Thể Loại</th>
                                <th>Tóm Tắt</th>
                                <th>Tác Giả</th>
                                <th>Trạng Thái</th>
                                <th>Loại</th>
                                <th>Năm Xuất Bản</th>
                                <th>Ngôn Ngữ</th>
                                <th>Phân Loại</th>
                                <th style="min-width: 110px;">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody id="products-list" name="products-list">
                            @foreach($items as $item)
                                <tr id="product{{$item->id}}" class="active">
                                    <td>{{$item->id}}</td>
                                    <td style="min-width: 100px">{{$item->title}}</td>
                                    <td><img style="max-width: 100px;" src="{{$item->cover}}" alt="cover"></td>
                                    <td style="min-width: 100px">
                                        @foreach ($novel_categories as $novel_category)
                                            @if ($novel_category->novelID == $item->id)
                                                @foreach ($categories as $category)
                                                    @if ($category->id == $novel_category->categoryID)
                                                        {{$category->name}},
                                                        <input type="hidden" class="hiddenvalue hidden_{{$item->id}}" value="{{$category->id}}">
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </td>
                                    <td style="min-width: 100px; max-width: 100px">{{Str::limit($item->description, 50)}}</td>
                                    <td>{{$item->author}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>{{$item->publishYear}}</td>
                                    <td>{{$item->language}}</td>
                                    <td>{{$item->rating}}</td>
                                    <td>
                                        <div style="display: inline-block">
                                            <button class="btn btn-warning btn-detail open_modal" value="{{$item->id}}">Sửa</button>
                                            <button class="btn btn-danger delete-product" value="{{$item->id}}">Xóa</button>
                                            <a href="anothertitle/novel/{{$item->id}}" class="btn btn-info btn-anothertitle">Tiêu Đề Khác</a>
                                            <a href="chapter/novel/{{$item->id}}" class="btn btn-dark btn-chapter" value="{{$item->id}}">Chương</a>
                                            <a href="comment/novel/{{$item->id}}" class="btn btn-success btn-comment" value="{{$item->id}}">Bình Luận</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

{{-- Create Edit Modal --}}
<div id="createEditModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="margin-bottom: 200px">
            <div class="modal-header">
                <h4 class="modal-title" id="createEditModalLabel">Sách</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmProducts" name="frmProducts" class="form-horizontal classFormUpdate validate-form" novalidate="">
                    <input type="hidden" name="class_id" class="class-id" id="class-id">
                    <div class="form-group">
                        <label for="title">Tiêu Đề:</label>
                        <input type="text" name="title" id="title" class="form-control required" placeholder="Tiêu đề">
                        <p id="textUnique" class="invalid-feedback d-inline text-danger"></p>
                        <br>
                        <label for="cover">Ảnh Bìa:</label>
                        <input type="text" name="cover" id="cover" class="form-control required" placeholder="Link ảnh bìa">
                        <br>
                        <label for="">Thể loại:</label>
                        <div>
                            @foreach ($categories as $item)
                                <label for="theloai{{$item->id}}" class="btn btn-info">{{$item->name}}
                                    <input type="checkbox" id="theloai{{$item->id}}" value="{{$item->id}}" class="badgebox form-control theloai_checkbox">
                                    <span class="badge">&check;</span>
                                </label>
                            @endforeach
                        </div>
                        <p id="theLoaiError" class="invalid-feedback d-inline text-danger"></p>
                        <br>
                        <label for="description">Tóm Tắt:</label>
                        <textarea type="textarea" name="description" id="description" class="form-control required" placeholder="Tóm tắt nội dung sách" rows="4"></textarea>
                        <br>
                        <label for="author">Tác Giả:</label>
                        <input type="text" name="author" id="author" class="form-control required" placeholder="Tên tác giả">
                        <br>
                        <label for="status">Trạng Thái:</label>
                        <select name="status" id="status" class="form-control">
                            <option value="Đã hoàn thành">Đã hoàn thành</option>
                            <option value="Chưa hoàn thành">Chưa hoàn thành</option>
                        </select>
                        <br>
                        <label for="type">Loại:</label>
                        <input type="text" name="type" id="type" class="form-control required" placeholder="Loại sách">
                        <br>
                        <label for="publishYear">Năm Xuất Bản:</label>
                        <select name="publishYear" id="publishYear" class="form-control">
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                        </select>
                        <br>
                        <label for="language">Ngôn Ngữ:</label>
                        <select name="language" id="language" class="form-control">
                            @foreach ($languages as $language)
                                <option value="{{$language}}">{{$language}}</option>
                            @endforeach
                        </select>
                        <br>
                        <label for="rating">Phân Loại:</label>
                        <select name="rating" id="rating" class="form-control">
                            <option value="G">G</option>
                            <option value="PG">PG</option>
                            <option value="R">R</option>
                            <option value="X">X</option>
                        </select>
                        <br>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="btn-cancel" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" id="btn-save" value="update">Lưu</button>
                <input type="hidden" id="product_id" name="product_id" value="0">
            </div>
        </div>
    </div>
</div>

{{-- Delete Modal --}}
<div id="deleteModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="deleteModalLabel">Thông báo!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <label id="lableXoa"></label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" id="btn-delete" value="delete">Xoá</button>
                <input type="hidden" id="product_id_delete" name="product_id_delete" value="0">
            </div>
        </div>
    </div>
</div>



@section('above_body')

    {{-- datePicker --}}


    {{-- validate --}}
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

    {{-- ajax thêm xóa sửa --}}
    @include('admin.novel.ajaxscript')
    @yield('ajax')

    {{-- alertify --}}
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

@endsection

