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
                    <h4 class="page-title">Bəyənatlar düzəliş et</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin">Ev</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Bəyənatlar düzəliş et</li>
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
                            <br>
                            <div class="table-responsive">
                                @if(isset($order))
                                    @foreach($order as $order)
                                    <form id="edit_orders">
                                        @csrf
                                        <label>Anbar</label><br>
                                        <select name="storage" class="form-control" id="{{$order->country_id}}">
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->country}}</option>
                                            @endforeach
                                        </select><br>
                                        <label>Məhsul linki</label><br>
                                        <input class="form-control" name="website" type=text placeholder="Məhsul linki" value="{{$order->website}}"><br>
                                        <label>Trek nömrəsi</label><br>
                                        <input class="form-control" name="track" type=text placeholder="Trek nömrəsi" value="{{$order->track}}"><br>
                                        <label>Məhsul kateqoriyası</label><br>
                                        <select class="form-control" name="category" id="{{$order->category}}">
                                            <option value="Aksesuarlar">Aksesuarlar</option>
                                            <option value="Avtomobil ehtiyyat hissəsi">Avtomobil ehtiyyat hissəsi</option>
                                            <option value="Ayaqqabı">Ayaqqabı</option>
                                            <option value="Bot">Bot</option>
                                            <option value="Digər">Digər</option>
                                            <option value="Ehtiyyat hissəsi">Ehtiyyat hissəsi</option>
                                            <option value="Elektronika">Elektronika</option>
                                            <option value="Ev alətləri">Ev alətləri</option>
                                            <option value="Ev telefonu">Ev telefonu</option>
                                            <option value="Eynək">Eynək</option>
                                            <option value="Geyim aksesuarları">Geyim aksesuarları</option>
                                            <option value="Gümüş">Gümüş</option>
                                            <option value="Kamera">Kamera</option>
                                            <option value="Kitab">Kitab</option>
                                            <option value="Kompyuter aksesuarlari">Kompyuter aksesuarlari</option>
                                            <option value="Kosmetika">Kosmetika</option>
                                            <option value="Kurtka">Kurtka</option>
                                            <option value="Laptoplar">Laptoplar</option>
                                            <option value="Ofis ləvazimatı">Ofis ləvazimatı</option>
                                            <option value="Oyun CD">Oyun CD</option>
                                            <option value="Oyun konsolu">Oyun konsolu</option>
                                            <option value="Oyun ucun aksesuarlar">Oyun ucun aksesuarlar</option>
                                            <option value="Oyuncaqlar">Oyuncaqlar</option>
                                            <option value="Paltar">Paltar</option>
                                            <option value="Parfümeriya">Parfümeriya</option>
                                            <option value="Planşet">Planşet</option>
                                            <option value="Playstation">Playstation</option>
                                            <option value="Powerbank">Powerbank</option>
                                            <option value="Pram">Pram</option>
                                            <option value="Qida əlavələri">Qida əlavələri</option>
                                            <option value="Qulaqlıqlar">Qulaqlıqlar</option>
                                            <option value="Rəqəmsal fotoapparatlar">Rəqəmsal fotoapparatlar</option>
                                            <option value="Saatlar">Saatlar</option>
                                            <option value="TV Set">TV Set</option>
                                            <option value="Telefon keysləri">Telefon keysləri</option>
                                            <option value="Teleskop / Mikroskop">Teleskop / Mikroskop</option>
                                            <option value="Tools">Tools</option>
                                            <option value="Tshirt">Tshirt</option>
                                            <option value="Vitaminlər">Vitaminlər</option>
                                            <option value="Çantalar">Çantalar</option>
                                            <option value="Çay, kofe, şokolad">Çay, kofe, şokolad</option>
                                            <option value="İdman ayaqqabısı">İdman ayaqqabısı</option>
                                            <option value="İdman malları">İdman malları</option>
                                            <option value="Şalvar">Şalvar</option>
                                            <option value="Stasionar telefon">Stasionar telefon</option>
                                        </select><br>
                                        <label>Sayı</label><br>
                                        <input class="form-control" name="count" type=number placeholder="Sayı" value="{{$order->count}}"><br>
                                        <label>Qiyməti</label><br>
                                        <input class="form-control" name="price" type=number placeholder="Qiyməti" value="{{$order->price}}"><br>
                                        <label>Valyuta</label><br>
                                        <select class="form-control" name="currency" id="{{$order->currency}}">
                                            <option value="TRY">TRY</option>
                                            <option value="USD">USD</option>
                                            <option value="AZN">AZN</option>
                                            <option value="EUR">EUR</option>
                                            <option value="RUB">RUB</option>
                                            <option value="GBP">GBP</option>
                                            <option value="KZT">KZT</option>
                                        </select><br>
                                        <label>Qeyd</label><br>
                                        <textarea rows="7" class="form-control" name="information">{{$order->information}}</textarea><br>
                                        <label>Məhsulun statusu</label><br>
                                        <select class="form-control" name="status" id="{{$order->status}}">
                                            <option value="new_order">Sifariş verilir</option>
                                            <option value="storage">Xarici anbarda</option>
                                            <option value="sent">Göndərilib</option>
                                            <option value="baku">Bakıda</option>
                                            <option value="completed">Təhvil verildi</option>
                                        </select><br>
                                        <select class="form-control" name="liquid" id="{{$order->liquid}}">
                                            <option value="0">Maye yoxdur</option>
                                            <option value="1">Maye var</option>
                                        </select><br>
                                    </form>
                                    <button type="button" class="edit_orders btn btn-lg btn-dark offset-5" name="{{$order->id}}">Düzəliş et</button>
                                    @endforeach
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
