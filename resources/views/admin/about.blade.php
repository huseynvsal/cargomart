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
                    <h4 class="page-title">Haqqımızda</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin">Ev</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Haqqımızda</li>
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
                            <div class="table-responsive">
                                @if(isset($about))
                                    <textarea name="text" id="myTextarea" class="tinymce">{!! $about->content !!}</textarea>
                                    <br>
                                    <input name=image type=file id="upload" hidden onchange=""><br>
                                    <button id="{{$about->id}}" type="button" class="about btn btn-lg btn-dark offset-5">Yerləşdir</button>
                                @else
                                    <textarea name="text" id="myTextarea" class="tinymce"></textarea>
                                    <br>
                                    <input name=image type=file id="upload" hidden onchange=""><br>
                                    <button id="" type="button" class="about btn btn-lg btn-dark offset-5">Yerləşdir</button>
                                @endif
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
