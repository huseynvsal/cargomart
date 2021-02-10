function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(1)').text(++i);
    })
}

$('.add_question').on('click', function(){
    var formData = new FormData($('#add_questions')[0]);
    var question = $('textarea[name=question]').val().trim();
    var answer = $('textarea[name=answer]').val().trim();
    $.ajax({
        type: "POST",
        url: "add_question",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Sual Əlavə olundu');
                $('.table_body').append('' +
                    '<tr class="tr" id="'+response.id+'">\n' +
                    '    <td class="text-center"><button class="btn btn-info edit_question" name="'+response.id+'" href="#edit_question" data-toggle="modal"><i class="fa fa-pencil"></i></button><br><br><button class="btn btn-danger delete_questions" name="'+response.id+'"  href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>\n' +
                    '    <td class="text-center"></td>\n' +
                    '    <td class="text-center">'+question+'</td>\n' +
                    '    <td class="text-center">'+answer+'</td>\n' +
                    '</tr>' +
                    '');
                $('input[name=question]').val('');
                $('input[name=answer]').val('');
                $('#add_question').modal('hide');
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_questions', function (){
    var id = $(this).attr('name');
    $('#myConfirm').find('.delete_question').attr('name',id);
});

$('.delete_question').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_question",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Sual silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});

$(document).on('click','.edit_question', function(){
    var id = $(this).attr('name');
    $('#edit_question').attr('name',id);
    var question = $('#'+id+'').find('td:eq(2)').text().trim();
    var answer = $('#'+id+'').find('td:eq(3)').text().trim();
    $('#edit_question').find('textarea[name=new_question]').val(question);
    $('#edit_question').find('textarea[name=new_answer]').val(answer);
});
$('.edit_questions').on('click', function (){
    var id = $(this).parents('#edit_question').attr('name');
    var formData = new FormData($('#edit_questions')[0]);
    formData.append('id', id);
    var new_question = $('textarea[name=new_question]').val().trim();
    var new_answer = $('textarea[name=new_answer]').val().trim();
    $.ajax({
        type: "POST",
        url: "edit_question",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Qiymət yeniləndi');
                $('#'+id+'').find('td:eq(2)').text(''+new_question+'');
                $('#'+id+'').find('td:eq(3)').text(''+new_answer+'');
                $('textarea[name=new_question]').val('');
                $('textarea[name=new_answer]').val('');
                $('#edit_question').modal('hide');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

