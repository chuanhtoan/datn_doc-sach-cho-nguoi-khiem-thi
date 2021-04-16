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

@endsection

@section('content')

<div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">

    <!-- main content -->
    <div class="container-fluid">

        <h2>Theo Dõi</h2>
        <p class="lead">
            Quản lý thông tin các theo dõi.
        </p>
        <hr>
        <div class="card">
            <div class="py-4">

                {{-- Create Button --}}
                {{-- <div class="btn_add">
                    <button id="btn_add" name="btn_add" class="btn btn-success btn-detail">Thêm</button>
                </div> --}}

                {{-- table --}}
                <div class="table-responsive">
                    <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Sách</th>
                                <th>Tài Khoản</th>
                                <th style="min-width: 110px;">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody id="products-list" name="products-list">
                            @foreach($items as $item)
                                <tr id="product{{$item->id}}" class="active">
                                    <td>{{$item->id}}</td>
                                    <td>{{App\Model\Novel::find($item->novelID)->title}}</td>
                                    <td>{{App\User::find($item->accUsername)->email}}</td>
                                    <td>
                                        <div style="display: inline-block">
                                            <button class="btn btn-danger delete-product" value="{{$item->id}}">Xóa</button>
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
                <h4 class="modal-title" id="createEditModalLabel">Tài Khoản</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmProducts" name="frmProducts" class="form-horizontal classFormUpdate validate-form" novalidate="">
                    <input type="hidden" name="class_id" class="class-id" id="class-id">
                    <div class="form-group">
                        <label for="name">Tên Hiển Thị:</label>
                        <input type="text" name="name" id="name" class="form-control required" placeholder="Tên thể loại">
                        <br>
                        <label for="avatar">Hình Đại Diện:</label>
                        <input type="text" name="avatar" id="avatar" class="form-control required" placeholder="Tên thể loại">
                        <br>
                        <label for="type">Loại Tài Khoản:</label>
                        <select name="type" id="type" class="form-control">
                            <option value="0">Người dùng</option>
                            <option value="1">Admin</option>
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

    {{-- ajax thêm xóa sửa --}}
    @include('admin.follow.ajaxscript')
    @yield('ajax')

@endsection

