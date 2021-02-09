$(document).ready(function (){
    $('#edit_orders').find('select').each(function (){
        var value = $(this).attr('id');
        $(this).val(value);
    });
});

$('.add_order').on('click', function (){
    var id = $(this).attr('name');
    var formData = new FormData($('#add_orders')[0]);
    formData.append('id', id);
    $.ajax({
        type: "POST",
        url: "add_order",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Bəyan etmə uğurludur');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$('.delete_orders').on('click', function (){
    var id = $(this).attr('name');
    $('#myConfirm').find('.delete_order').attr('name',id);
});

$('.delete_order').on('click', function(){
    var id =$(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "/delete_order",
        data: { 'id':id, "_token": csrf_token},
        success: function (response) {
            tr.remove();
            page();
            $('#myConfirm').modal('hide');
            toastr.success('Bəyənat silindi');
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$('.edit_orders').on('click', function(){
    var id = $(this).attr('name');
    var formData = new FormData($('#edit_orders')[0]);
    formData.append('id', id);
    $.ajax({
        type: "POST",
        url: "/edit_order",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Bəyənat yeniləndi');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
