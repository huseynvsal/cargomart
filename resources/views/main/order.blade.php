@extends('main.index')
@section('main')
<section class="page-title-two">
        <div class="title-box centred bg-color-2">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(https://mobex.az/assets/images/shape/shape-70.png);"></div>
                <div class="pattern-2" style="background-image: url(https://mobex.az/assets/images/shape/shape-71.png);"></div>
            </div>
            <div class="auto-container">
                <div class="title">
                    <h1>Bağlamaların izlənməsi</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="doctors-dashboard bg-color-3">
        <div class="left-panel">
            <div class="profile-box">
                <div class="upper-box">
                    <div class="title-box centred">
                        <div class="inner">
                            <h3>MBX51672</h3>
                        </div>
                    </div>
                </div>
                <div class="profile-info">
                    <ul class="list clearfix">

                        <li>
                            <a href="/order"><i class="fas fa-plus"></i>Bəyan et</a>
                        </li>
                        <li>
                            <a href="/package"><i class="fas fa-calendar-alt"></i>Bağlamalar</a>
                        </li>
                        <li>
                            <a class="current" href="/cabinet"><i class="fas fa-unlock-alt"></i>Hesabım</a>
                        </li>
                        <li>
                            <a href="https://mobex.az/logout"><i class="fas fa-sign-out-alt"></i>Çıxış</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right-panel">
            <div class="content-container">
                <div class="outer-container">
                    <div class="declare_box add-listing full">
                        <div class="row single-box">
                            <!-- dashboard link slider -->
                            <div class="inner-box">
                                                                <form method="POST" action="#" accept-charset="UTF-8" class="beyan_tertib_form" enctype="multipart/form-data"><input name="_token" type="hidden" value="ncjGjgljMGrq5sPVtkHEMxkyXSNU7ta4si5ih2KB">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6">
                                        <div class="form-group  ">
            <label for="country_id">Anbar</label>
            <select name="" id="">
                <option value="">Türkiyə</option>
                <option value="">Çin</option>
            </select>
    </div>                                    </div>
                                    <div class="form-group col-lg-6">
                                        <div class="form-group  ">
            <label for="website_name">Saytın adı</label>
        <input class="form__field" placeholder="məs: www.trendyol.com" data-validation="required" name="website_name" type="text">
    </div>                                    </div>
                                    <div class="form-group col-lg-12">
                                        <div class="form-group  ">
            <label for="tracking_code">Trek nömrə</label>
        <input class="form__field" data-validation="required length custom" data-validation-length="min9" data-validation-regexp="^[A-Za-z0-9-]+$" name="tracking_code" type="text">
    </div>                                    </div>
                                    <div class="form-group col-lg-4">
                                        <div class="form-group  ">
            <label for="type_id">Məhsul kateqoriyası</label>
            <select name="" id="">
                <option value="">Aksesuarlar</option>
                <option value="">Avtomobil ehtiyyat hissəsi</option>
                <option value="">Ayaqqabı</option>
                <option value="">Bot</option>
                <option value="">Digər</option>
            </select>
                        </div>                                    
                    </div>
                                    <div class="form-group col-lg-2">
                                        <div class="form-group  ">
            <label for="number_items">Məhsul sayı</label>
        <input class="form__field" data-validation="required number" data-validation-allowing="range[1;10000]" name="number_items" type="text">
    </div>                                    </div>
                                    <div class="form-group col-lg-3">
                                        <div class="form-group  ">
            <label for="shipping_amount">Faktura qiyməti</label>
        <input class="form__field" data-validation="required number" data-validation-allowing="float" name="shipping_amount" type="text">
    </div>                                    </div>
                                    <div class="form-group col-lg-3">
                                        <div class="form-group  ">
            <label for="shipping_amount_cur">Valyuta</label>
            <select name="" id="">
                <option value="">TRY</option>
                <option value="">USD</option>
                <option value="">AZN</option>
            </select>
    </div>                                    </div>
                                    <div class="form-group col-lg-6">
                                        <span class="form_span">Faktura</span>
                                        <div class="upload_invoice">
                                            <input required="" class="form__field file_upload_input" type="file" name="invoice" data-validation=" required  mime size" data-validation-allowing="jpg, png, pdf, doc, docx, jpeg" data-validation-max-size="3M" placeholder="İnvoys yüklə">
                                        </div>
                                                                            </div>
                                    <div class="form-group col-lg-6">
                                        <div class="form-group  ">
            <label for="user_comment">Qeyd</label>
        <input rows="3" class="form__field" name="user_comment" type="text">
    </div>                                    </div>
                                    <div class="form-group col-lg-6 col-md-8 custom-check-box">
                                    <div style="display:flex;align-items:center">
                                        <input class="inputforcheck" type="checkbox" id="water" name="water" >
                                        <label for="water">Tərkibində maye var</label>
                                    </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-4 text-lg-right">
                                        <div class="col-lg-12 col-md-12 col-lg-12 form-group message-btn middle_smallbtn">
                                            <button type="submit" class="theme-btn-one">Yadda saxla<i class="icon-Arrow-Right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
