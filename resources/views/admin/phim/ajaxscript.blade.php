@section('ajax')

<script>
$(document).ready(function(){

    // Descending ID Table
    $('#data-table').DataTable().order([ 0, "desc" ]).draw();
    

    //get base URL *********************
    var url = '/admin/phim';



    // theloai
    var theLoaiIDs = [];
    $('.theloai_checkbox').click(function() {
        if ($(this).is(':checked'))
            theLoaiIDs.push($(this).val());
        else
            theLoaiIDs.splice(theLoaiIDs.indexOf($(this).val()), 1);
    });
    


    //display modal form for creating new product *********************
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts').trigger("reset");
        $('#tenError').html("");
        $('#theLoaiError').html("");
        $('#textUnique').html("");
        $(".image-preview").attr('src','');
        $('#ten').removeClass('is-invalid');
        $('#createEditModal').modal('show');

        // theloai
        theLoaiIDs = [];
    });



    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
        var product_id = $(this).val();
        $('#tenError').html("");
        $('#theLoaiError').html("");
        $('#ten').removeClass('is-invalid');
        $('#textUnique').html("");

        // theloai
        theLoaiIDs = $('.hidden_'+product_id).map((_,el) => el.value).get();

        console.log(theLoaiIDs);

        // Populate Data in Edit Modal Form
        $.ajax({
            type: "GET",
            url: url + '/' + product_id,
            success: function (data) {
                console.log(data);
                $('#product_id').val(data.id);
                $('#ten').val(data.ten);
                $('#kieu').val(data.kieu);
                $('#tomTat').val(data.tomTat);
                $('#soTap').val(data.soTap);
                $('#thoiLuong').val(data.thoiLuong);
                $('#nguon').val(data.nguon);
                $('#ngonNgu').val(data.ngonNgu);
                $('#phanLoaiDoTuoi').val(data.phanLoaiDoTuoi);
                $('#trangThai').val(data.trangThai);
                $('#ngayCongChieu').val(data.ngayCongChieu);
                $('#trailer').val(data.trailer);
                $('#idHangSanXuat').val(data.idHangSanXuat);
                $(".image-preview").attr('src','{{asset('images/upload')}}/'+data.hinh);
                $("#image-input").val(data.hinh);

                // Check the loai checkbox
                $('input[type=checkbox]').prop('checked',false);
                theLoaiIDs.forEach(element => {
                    $("#theloai"+element).prop("checked", true);
                });

                $('#btn-save').val("update");
                $('#createEditModal').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });


    
    // create new product / update existing product ***************************
    $("#btn-save").click(function(){
        var hl = $("#frmProducts").valid();    
        if(hl)
            if(theLoaiIDs.length > 0 && $('#image-input').val()!=""){
                $('#theLoaiError').html("");
                $('#textUnique').html("");
                thucHienAjax();
            }
            else if(theLoaiIDs.length == 0){
                $('#textUnique').html("");
                $('#theLoaiError').html("Phải chọn ít nhất 1 thể loại");
            }
            else{
                $('#theLoaiError').html("");
                $('#textUnique').html("Bắt buộc phải chọn hình");
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
            ten: {
                required: true,
                maxlength: 50
            },
            tomtat: {
                maxlength: 1200
            },
            soTap: {
                required: true
            },
            thoiLuong: {
                required: true,
                maxlength: 50
            },
            ngayCongChieu: {
                required: true,
                maxlength: 50
            },
            trailer: {
                maxlength: 255
            },
        },
        messages: {
            ten: {
                required: 'Bạn phải nhập trường này',
                maxlength: "Tối đa 50 kí tự"
            },
            tomtat: {
                maxlength: "Tối đa 1200 kí tự"
            },
            soTap: {
                required: 'Bạn phải nhập trường này'
            },
            thoiLuong: {
                required: 'Bạn phải nhập trường này',
                maxlength: "Tối đa 50 kí tự"
            },
            ngayCongChieu: {
                required: 'Bạn phải nhập trường này',
                maxlength: "Tối đa 50 kí tự"
            },
            trailer: {
                maxlength: "Tối đa 255 kí tự"
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
            ten: $('#ten').val(),
            kieu: $('#kieu').val(),
            tomTat: $('#tomTat').val(),
            soTap: $('#soTap').val(),
            thoiLuong: $('#thoiLuong').val(),
            nguon: $('#nguon').val(),
            ngonNgu: $('#ngonNgu').val(),
            phanLoaiDoTuoi: $('#phanLoaiDoTuoi').val(),
            trangThai: $('#trangThai').val(),
            ngayCongChieu: $('#ngayCongChieu').val(),
            trailer: $('#trailer').val(),
            idHangSanXuat: $('#idHangSanXuat').val(),
            theLoaiIDs: theLoaiIDs,
            hinh: $('#image-input').val(),
        }

        console.log(formData);

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var product_id = $('#product_id').val();;
        var my_url = '/admin/phim';

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

                // Tom tat phim khong null va limit 30 ki tu
                var tomTat = "";
                if(data.tomTat!=null)
                    if(data.tomTat.length>30) tomTat = data.tomTat.substring(0,30)+'...'; 
                    else tomTat = data.tomTat;

                // Lay chuoi the loai
                var theloaiarray = "";
                var hiddenvalue = "";
                data.tlarray.forEach(element => {
                    theloaiarray += element + ", ";
                });
                data.tlarray_id.forEach(element => {
                    hiddenvalue += '<input type="hidden" class="hiddenvalue hidden_'+data.id+'" value="'+element+'">';
                });

                // Trailer phim khac rong va khac null
                var trailer = (data.trailer!="" && data.trailer!=null)?'<a href="{{' + data.trailer + '}}">Link</a>':"";

                var product = '<tr id="product' + data.id + '"><td>' + data.id + '</td><td>' 
                            + "<img src='{{asset('images/upload')}}/" + data.hinh + "' class='form-cotrol' width='70' class='img-thumbnail'>"
                            + '</td><td>' + data.ten + '</td><td>' + data.kieu + '</td><td>' + tomTat + '</td><td>' 
                            + theloaiarray + hiddenvalue
                            + '</td><td>' + data.soTap + '</td><td>' + data.thoiLuong + '</td><td>' + data.nguon + '</td><td>' + data.ngonNgu + '</td><td>' + data.phanLoaiDoTuoi + '</td><td>' + data.trangThai + '</td><td>' + data.ngayCongChieu + '</td><td>' 
                            + $('#idHangSanXuat option:selected').html() + '</td><td>' 
                            + trailer + '</td><td>' + '';
                product += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Edit</button>';
                product += ' <button class="btn btn-danger delete-product" value="' + data.id + '">Delete</button></td></tr>';

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
            },
            error: function (data) {
                $('#ten').addClass('is-invalid');
                $('#tenError').html(JSON.parse(data.responseText).errors.ten[0]);
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
                $('#lableXoa').html('Xóa phim "' + data.ten + '" ?');
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
