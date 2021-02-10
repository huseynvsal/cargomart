@extends('admin.index')
@section('body')

    <div class="modal fade" id="add_question" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Əlavə etmə</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <form id="add_questions">
                        @csrf
                        <textarea name="question" placeholder="Sual" class="form-control"></textarea><br>
                        <textarea name="answer" placeholder="Cavab" class="form-control"></textarea><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark add_question">Əlavə et</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="edit_question" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Düzəliş etmə</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <form id="edit_questions">
                        @csrf
                        <textarea name="new_question" placeholder="Sual" class="form-control"></textarea><br>
                        <textarea name="new_answer" placeholder="Cavab" class="form-control"></textarea><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark edit_questions">Düzəliş et</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Suallar cədvəli</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin">Ev</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Suallar cədvəli</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="container col-6">
                                {{--                                <div class="input-group mb-3">--}}
                                {{--                                    <input type="text" class="form-control" name="axtar" placeholder="Məsulun adı">--}}
                                {{--                                    <div class="input-group-append">--}}
                                {{--                                        <button style="background-color: #233242; color: white" class="btn axtar" type="button">Axtar</button>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#add_question">Əlavə et</button>
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr id="less_info">
                                        <th class="text-center" scope="col">Düzəlt/Sil</th>
                                        <th class="text-center" scope="col">№</th>
                                        <th class="text-center" scope="col">Sual</th>
                                        <th class="text-center" scope="col">Cavab</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table_body">
                                    @foreach($questions as $key => $question)
                                        <tr class="tr" id="{{$question->id}}">
                                            <td class="text-center"><button class="btn btn-info edit_question" name="{{$question->id}}" href="#edit_question" data-toggle="modal"><i class="fa fa-pencil"></i></button><br><br><button class="btn btn-danger delete_questions" name="{{$question->id}}" href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td class="text-center">{{$question->question}}</td>
                                            <td class="text-center">{{$question->answer}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Modal HTML -->
                            <div id="myConfirm" class="modal fade" name="confirm">
                                <div class="modal-dialog modal-confirm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="icon-box">
                                                <i class="material-icons">&#xE5CD;</i>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Bu məlumatları silmək istədiyinə əminsən?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info" data-dismiss="modal">Xeyr</button>
                                            <button type="button" class="btn btn-danger delete_question" name="" data-dismiss="modal">Bəli</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
    </div>
@endsection
