function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(1)').text(++i);
    })
}

$('.add_price').on('click', function(){
    var formData = new FormData($('#add_prices')[0]);
    var price = $('input[name=price]').val().trim();
    var weight = $('input[name=weight]').val().trim();
    var type = $('select[name=type] option:selected').text().trim();
    var type_val = $('select[name=type]').val().trim();
    var country = $('select[name=country] option:selected').text().trim();
    $.ajax({
        type: "POST",
        url: "add_price",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Qiymət Əlavə olundu');
                $('.table_body').append('' +
                    '<tr class="tr" id="'+response.id+'">\n' +
                    '    <td class="text-center"><button class="btn btn-info edit_price" name="'+response.id+'" href="#edit_price" data-toggle="modal"><i class="fa fa-pencil"></i></button><br><br><button class="btn btn-danger delete_prices" name="'+response.id+'"  href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>\n' +
                    '    <td class="text-center"></td>\n' +
                    '    <td class="text-center">'+price+'</td>\n' +
                    '    <td class="text-center">'+weight+'</td>\n' +
                    '    <td class="text-center" id="'+type_val+'">'+type+'</td>\n' +
                    '    <td class="text-center">'+country+'</td>\n' +
                    '</tr>' +
                    '');
                $('input[name=price]').val('');
                $('input[name=weight]').val('');
                $('select[name=type]').val('type');
                $('select[name=price]').val('country');
                $('#add_price').modal('hide');
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_prices', function (){
    var id = $(this).attr('name');
    $('#myConfirm').find('.delete_price').attr('name',id);
});

$('.delete_price').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_price",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Qiymət silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});

$(document).on('click','.edit_price', function(){
    var id = $(this).attr('name');
    $('#edit_price').attr('name',id);
    var price = $('#'+id+'').find('td:eq(2)').text().trim();
    var weight = $('#'+id+'').find('td:eq(3)').text().trim();
    var type = $('#'+id+'').find('td:eq(4)').attr('id').trim();
    var country = $('#'+id+'').find('td:eq(5)').text().trim();
    $('#edit_price').find('input[name=new_price]').val(price);
    $('#edit_price').find('input[name=new_weight]').val(weight);
    $('#edit_price').find('select[name=new_type] option').each(function (){
        if ($(this).val() == type){
            $(this).prop('selected', true);
        }
    });
    $('#edit_price').find('select[name=new_country] option').each(function (){
        if ($(this).text() == country){
            $(this).prop('selected', true);
        }
    });
});
$('.edit_prices').on('click', function (){
    var id = $(this).parents('#edit_price').attr('name');
    var formData = new FormData($('#edit_prices')[0]);
    formData.append('id', id);
    var new_price = $('input[name=new_price]').val().trim();
    var new_weight = $('input[name=new_weight]').val().trim();
    var new_type = $('select[name=new_type] option:selected').text().trim();
    var new_country = $('select[name=new_country] option:selected').text().trim();
    $.ajax({
        type: "POST",
        url: "edit_price",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Qiymət yeniləndi');
                $('#'+id+'').find('td:eq(2)').text(''+new_price+'');
                $('#'+id+'').find('td:eq(3)').text(''+new_weight+'');
                $('#'+id+'').find('td:eq(4)').text(''+new_type+'');
                $('#'+id+'').find('td:eq(5)').text(''+new_country+'');
                $('input[name=new_price]').val('');
                $('input[name=new_weight]').val('');
                $('select[name=new_type]').val('new_type');
                $('select[name=new_country]').val('new_country');
                $('#edit_price').modal('hide');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

