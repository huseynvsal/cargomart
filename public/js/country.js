function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(1)').text(++i);
    })
}

$('.add_country').on('click', function(){
    var formData = new FormData($('#add_countries')[0]);
    var country = $('input[name=country]').val().trim();
    $.ajax({
        type: "POST",
        url: "add_country",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Ölkə Əlavə olundu');
                $('.table_body').append('' +
                    '<tr class="tr" id="'+response.id+'">\n' +
                    '    <td class="text-center"><button class="btn btn-info edit_country" href="#edit_country" name="'+response.id+'" data-toggle="modal"><i class="fa fa-pencil"></i></button><br><br><button name="'+response.id+'" class="btn btn-danger delete_countries" href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>\n' +
                    '    <td class="text-center"></td>\n' +
                    '    <td class="text-center">'+country+'</td>\n' +
                    '    <td class="text-center"><img style="width: 40px; height: 40px; border-radius: 50%;" src="images/'+response.flag+'"></td>\n' +
                    '</tr>' +
                    '');
                $('input[name=country]').val('');
                $('input[name=flag]').val('');
                $('#add_country').modal('hide');
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_countries', function (){
    var id = $(this).attr('name');
    $('#myConfirm').find('.delete_country').attr('name',id);
});

$('.delete_country').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_country",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Ölkə silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});

$(document).on('click','.edit_country', function(){
    var id = $(this).attr('name');
    $('#edit_country').attr('name',id);
    var country = $('#'+id+'').find('td:eq(2)').text().trim();
    $('#edit_country').find('input[name=new_country]').val(country);
});
$('.edit_countries').on('click', function (){
    var id = $(this).parents('#edit_country').attr('name');
    var formData = new FormData($('#edit_countries')[0]);
    formData.append('id', id);
    var new_country = $('input[name=new_country]').val().trim();
    $.ajax({
        type: "POST",
        url: "edit_country",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Ölkə yeniləndi');
                $('#'+id+'').find('td:eq(2)').text(''+new_country+'');
                if (response.flag != 1)
                {
                    $('#'+id+'').find('td:eq(3)').html('<img style="width: 40px; height: 40px; border-radius: 50%;" src="images/'+response.flag+'">');
                }
                $('input[name=new_country]').val('');
                $('input[name=new_flag]').val('');
                $('#edit_country').modal('hide');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
