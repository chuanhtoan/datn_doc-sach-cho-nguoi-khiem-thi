@section('ajax')

<script>
$(document).ready(function(){

    // Descending ID Table
    $('#data-table').DataTable().order([ 0, "desc" ]).draw();

    //get base URL *********************
    var url = '/admin/novel';

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
        $('#textUnique').html("");
        $('#theLoaiError').html("");
        $('#title').removeClass('is-invalid');
        $('#createEditModal').modal('show');

        // theloai
        theLoaiIDs = [];
    });



    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
        var product_id = $(this).val();
        $('#textUnique').html("");
        $('#theLoaiError').html("");
        $('#title').removeClass('is-invalid');

        // theloai
        theLoaiIDs = $('.hidden_'+product_id).map((_,el) => el.value).get();
        console.log(theLoaiIDs);

        // Populate Data in Edit Modal Form
        $.ajax({
            type: "GET",
            url: url + '/' + product_id,
            success: function (data) {
                $('#product_id').val(data.id);
                $('#title').val(data.title);
                $('#cover').val(data.cover);
                $('#description').val(data.description);
                $('#author').val(data.author);
                $('#status').val(data.status);
                $('#type').val(data.type);
                $('#publishYear').val(data.publishYear);
                $('#language').val(data.language);
                $('#rating').val(data.rating);

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
        if(hl){
            if(theLoaiIDs.length > 0){
                $('#theLoaiError').html("");
                $('#textUnique').html("");
                thucHienAjax();
            }
            else if(theLoaiIDs.length == 0){
                $('#textUnique').html("");
                $('#theLoaiError').html("Ph???i ch???n ??t nh???t 1 th??? lo???i");
            }
            else{
                // $('#theLoaiError').html("");
                // $('#textUnique').html("B???t bu???c ph???i ch???n h??nh");
            }
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
            title: {
                required: true,
            },
            cover: {
                required: true,
            },
            description: {
                required: true,
            },
            author: {
                required: true,
            },
            status: {
                required: true,
            },
            type: {
                required: true,
            },
            publishYear: {
                required: true,
            },
            language: {
                required: true,
            },
            rating: {
                required: true,
            },
        },
        messages: {
            title: {
                required: 'B???n ph???i nh???p tr?????ng n??y',
            },
            cover: {
                required: 'B???n ph???i nh???p tr?????ng n??y',
            },
            description: {
                required: 'B???n ph???i nh???p tr?????ng n??y',
            },
            author: {
                required: 'B???n ph???i nh???p tr?????ng n??y',
            },
            status: {
                required: 'B???n ph???i nh???p tr?????ng n??y',
            },
            type: {
                required: 'B???n ph???i nh???p tr?????ng n??y',
            },
            publishYear: {
                required: 'B???n ph???i nh???p tr?????ng n??y',
            },
            language: {
                required: 'B???n ph???i nh???p tr?????ng n??y',
            },
            rating: {
                required: 'B???n ph???i nh???p tr?????ng n??y',
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
            title: $('#title').val(),
            cover: $('#cover').val(),
            theLoaiIDs: theLoaiIDs,
            description: $('#description').val(),
            author: $('#author').val(),
            status: $('#status').val(),
            type: $('#type').val(),
            publishYear: $('#publishYear').val(),
            language: $('#language').val(),
            rating: $('#rating').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var product_id = $('#product_id').val();;
        var my_url = '/admin/novel';

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + product_id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log('data', data);
                // Lay chuoi the loai
                var theloaiarray = "";
                var hiddenvalue = "";
                data.tlarray.forEach(element => {
                    theloaiarray += element + ", ";
                });
                data.tlarray_id.forEach(element => {
                    hiddenvalue += '<input type="hidden" class="hiddenvalue hidden_'+data.id+'" value="'+element+'">';
                });

                // Cat string description
                var description = "";
                if(data.description.length>50) {
                    description = data.description.substring(0,50)+'...';
                } else {
                    description = data.description;
                }

                var product = '<tr id="product' + data.id + '"><td>' + data.id + '</td><td>'
                + data.title + '</td><td>'
                + '<img style="max-width: 100px;" src="' + data.cover + '" alt="cover"></>'
                + '<td style="min-width: 100px">' + theloaiarray + hiddenvalue + '</td>'
                + '<td style="max-width: 100px">' + description + '</td><td>'
                + data.author + '</td><td>' + data.status + '</td><td>'
                + data.type + '</td><td>' + data.publishYear + '</td><td>'
                + data.language + '</td><td>' + data.rating + '</td>';
                product += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">S???a</button>';
                product += ' <button class="btn btn-danger delete-product" value="' + data.id + '">X??a</button>';
                product += ' <a href="anothertitle/novel/' + data.id + '" class="btn btn-info btn-anothertitle">Ti??u ????? Kh??c</a>';
                product += ' <a href="chapter/novel/' + data.id + '" class="btn btn-dark btn-chapter" value="' + data.id + '">Ch????ng</a>';
                product += ' <a href="comment/novel/' + data.id + '" class="btn btn-success btn-comment" value="' + data.id + '">B??nh Lu???n</a></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#products-list').prepend(product);
                    // alertify
                    alertify.success('Th??m th??nh c??ng');
                }else{ //if user updated an existing record
                    $("#product" + product_id).replaceWith( product );
                    // alertify
                    alertify.success('S???a th??nh c??ng');
                }
                $('#frmProducts').trigger("reset");
                $('#createEditModal').modal('hide');
            },
            error: function (data) {
                $('#title').addClass('is-invalid');
                $('#textUnique').html(JSON.parse(data.responseText).errors.title[0]);
                // console.log('Error:', data);
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
                $('#lableXoa').html('X??a s??ch "' + data.title + '" ?');
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
                alertify.success('X??a th??nh c??ng');
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
