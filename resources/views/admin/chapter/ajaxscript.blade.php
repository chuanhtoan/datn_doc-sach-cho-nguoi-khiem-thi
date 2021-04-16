@section('ajax')

<script>
$(document).ready(function(){

    // Descending ID Table
    $('#data-table').DataTable().order([ 0, "desc" ]).draw();

    //get base URL *********************
    var url = '/admin/chapter';


    //display modal form for creating new product *********************
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts').trigger("reset");
        $('#textUnique').html("");
        $('#number').removeClass('is-invalid');
        $('#createEditModal').modal('show');
    });



    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
        var product_id = $(this).val();
        $('#textUnique').html("");
        $('#number').removeClass('is-invalid');

        // Populate Data in Edit Modal Form
        $.ajax({
            type: "GET",
            url: url + '/' + product_id,
            success: function (data) {
                $('#product_id').val(data.id);
                $('#number').val(data.number);
                $('#title').val(data.title);
                $('#novelID').val(data.novelID);
                $('#btn-save').val("update");
                $('#createEditModal').modal('show');
            },
            error: function (data) {
                console.log(JSON.parse(data.responseText));
                console.log('Error:', data);
            }
        });
    });



    // create new product / update existing product ***************************
    $("#btn-save").click(function(){
        var hl = $("#frmProducts").valid();
        if(hl){
            thucHienAjax();
        }
    });

    $("#frmProducts").validate({
        onfocusout: function (element) {
            if ($(element).val() == "") return;
            var hl = $(element).valid();
            if (hl) {
                if ($(element).hasClass('is-invalid'))
                    $(element).removeClass("form-control is-invalid");
                $(element).addClass('form-control is-valid');
            }
        }, onkeyup: false,
        rules: {
            number: {
                required: true,
            },
            title: {
                required: true,
            },
        },
        messages: {
            number: {
                required: 'Bạn phải nhập trường này',
            },
            title: {
                required: 'Bạn phải nhập trường này',
            },
        }, errorPlacement: function (err, elemet) {
            err.insertAfter(elemet);
            err.addClass('invalid-feedback d-inline text-danger');
            elemet.addClass('form-control is-invalid');
            $('.focus-input100-1,.focus-input100-2').addClass('hidden');
        }
    });

    function thucHienAjax(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        // e.preventDefault();
        var formData = {
            number: $('#number').val(),
            title: $('#title').val(),
            novelID: $('#novelID').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var product_id = $('#product_id').val();
        var my_url = '/admin/chapter';

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + product_id;
        }
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                if (!data) {
                    $('#number').addClass('is-invalid');
                    $('#textUnique').html('Chương đã tồn tại');
                }
                else {
                    var product = '<tr id="product' + data.id + '"><td>' + data.id + '</td><td>'
                    + data.number + '</td><td>' + data.title + '</td><td>'
                    + $('#novelID option:selected').html() + '</td>';
                    product += '<td><a href="chapter/chapter-details/' + data.id + '" class="btn btn-info mr-1">Xem</a>';
                    product += '<button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Sửa</button>';
                    product += ' <button class="btn btn-danger delete-product" value="' + data.id + '">Xóa</button></td></tr>';
                    if (state == "add"){ //if user added a new record
                        $('#products-list').prepend(product);
                        // alertify
                        alertify.success('Thêm thành công');
                    }else{ //if user updated an existing record
                        $("#product" + product_id).replaceWith( product );
                        // alertify
                        alertify.success('Sửa thành công');
                    }
                    $('#frmProducts').trigger("reset");
                    $('#createEditModal').modal('hide');
                }
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }



    // delete product and remove it from TABLE list ***************************
    var product_id;

    $(document).on('click','.delete-product',function(){
        product_id = $(this).val();

        // Populate Data in Delete Modal Form
        $.ajax({
            type: "GET",
            url: url + '/' + product_id,
            success: function (data) {
                $('#lableXoa').html('Xóa chương "' + data.number + '" của sách "' + data.title + '" ?');
                $('#deleteModal').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    // Delete Data
    $("#btn-delete").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + product_id,
            success: function (data) {
                $("#product" + product_id).remove();
                $('#deleteModal').modal('hide');
                // alertify
                alertify.success('Xóa thành công');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    // enter key press submit function
    $(document).keypress(function(e) {
        // disable form enter key press
        if (e.which == '13') {
            e.preventDefault();
        }
        // enter key press on modal open
        if ($("#createEditModal").hasClass('show') && (e.keycode == 13 || e.which == 13)) {
            var hl = $("#frmProducts").valid();
            if(hl){
                thucHienAjax();
            }
        }
    });

});
</script>

@endsection
