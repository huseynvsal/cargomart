@extends('admin.index')
@section('body')
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Bəyənatlar cədvəli</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin">Ev</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Bəyənatlar cədvəli</li>
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr id="less_info">
                                        <th class="text-center" scope="col">Düzəlt/Sil</th>
                                        <th class="text-center" scope="col">№</th>
                                        <th class="text-center" scope="col">Anbar</th>
                                        <th class="text-center" scope="col">Məhsul</th>
                                        <th class="text-center" scope="col">Faktura (yüklə)</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table_body">
                                    @foreach($orders as $key => $order)
                                        <tr class="tr" id="{{$order->id}}">
                                            <td class="text-center"><a class="btn btn-info" href="/edit_orders/{{$order->id}}"><i class="fa fa-pencil"></i></a><br><br><button class="btn btn-danger delete_orders" name="{{$order->id}}" href="#myConfirm" data-toggle="modal"><i class="fa fa-trash"></i></button></td>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td class="text-center">{{$order->storage}}</td>
                                            <td class="text-center"><a class="btn btn-lg btn-primary" href="{{$order->website}}" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td class="text-center"><a class="btn btn-lg btn-warning" href="{{asset('/files/'.$order->invoice)}}" download><i class="fa fa-file"></i></a></td>
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
                                            <button type="button" class="btn btn-danger delete_order" name="">Bəli</button>
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
