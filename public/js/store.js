function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(1)').text(++i);
    })
}

$('.add_store').on('click', function(){
    var formData = new FormData($('#add_stores')[0]);
    var link = $('input[name=link]').val().trim();
    $.ajax({
        type: "POST",
        url: "add_store",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Mağaza Əlavə olundu');
                $('.table_body').append('' +
                    '<tr class="tr" id="'+response.id+'">\n' +
                    '    <td class="text-center"><button class="btn btn-info edit_store" href="#edit_store" name="'+response.id+'" data-toggle="modal"><i class="fa fa-pencil"></i></button><br><br><button name="'+response.id+'" class="btn btn-danger delete_stores" href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>\n' +
                    '    <td class="text-center"></td>\n' +
                    '    <td class="text-center"><a target="_blank" class="btn btn-lg btn-primary" href="'+link+'"><i class="fa fa-link"></i></a></td>\n' +
                    '    <td class="text-center"><img style="width: 175px; height: 60px;" src="images/'+response.image+'"></td>\n' +
                    '</tr>' +
                    '');
                $('input[name=link]').val('');
                $('input[name=image]').val('');
                $('#add_store').modal('hide');
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_stores', function (){
    var id = $(this).attr('name');
    $('#myConfirm').find('.delete_store').attr('name',id);
});

$('.delete_store').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_store",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Mağaza silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});

$(document).on('click','.edit_store', function(){
    var id = $(this).attr('name');
    $('#edit_store').attr('name',id);
    var link = $('#'+id+'').find('td:eq(2)').find('a').attr('href').trim();
    $('#edit_store').find('input[name=new_link]').val(link);
});
$('.edit_stores').on('click', function (){
    var id = $(this).parents('#edit_store').attr('name');
    var formData = new FormData($('#edit_stores')[0]);
    formData.append('id', id);
    var new_link = $('input[name=new_link]').val().trim();
    $.ajax({
        type: "POST",
        url: "edit_store",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Mağaza yeniləndi');
                $('#'+id+'').find('td:eq(2)').html('<a target="_blank" class="btn btn-lg btn-primary" href="'+new_link+'"><i class="fa fa-link"></i></a>');
                if (response.image != 1)
                {
                    $('#'+id+'').find('td:eq(3)').html('<img style="width: 175px; height: 60px;" src="images/'+response.image+'">');
                }
                $('input[name=new_link]').val('');
                $('input[name=new_image]').val('');
                $('#edit_store').modal('hide');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
