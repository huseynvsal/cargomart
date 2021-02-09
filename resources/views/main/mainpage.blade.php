@extends('main.index')
@section('main')
<div class="banner">
    <div class="container">
        <div class="banner-text">
            <span>Ölçüləri daxil edərək, daşınma qiymətini hesablayın.</span>
            <div class="row">
                <div class="col-lg-6">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Türkiyə
                        </button>
                        <div class="dropdown-menu banner-select" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">A</a>
                            <a class="dropdown-item" href="#">B</a>
                            <a class="dropdown-item" href="#">C   </a>
                        </div>
                    </div>
                    <input type="text" class="cek" placeholder="Çəki"> <br> <br>
                    <span>Nəticə: 0</span>
                </div>
                <div class="col-lg-6" style="padding-top:90px;">
                    <a class="enter" href="#">Hesablayın</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- process-style-two -->
<section class="process-style-two bg-color-3 centred">
    <div class="pattern-layer">
        <div class="pattern-1"
             style="background-image: url(https://mobex.az/assets/images/shape/shape-39.png);"></div>
        <div class="pattern-2"
             style="background-image: url(https://mobex.az/assets/images/shape/shape-40.png);"></div>
        <div class="pattern-3"
             style="background-image: url(https://mobex.az/assets/images/shape/shape-41.png);"></div>
        <div class="pattern-4"
             style="background-image: url(https://mobex.az/assets/images/shape/shape-42.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred">
            <p>NECƏ İŞLƏYİR?</p>
            <h2>3 addımda iş prinsipimiz</h2>
        </div>
        <div class="inner-content">
            <div class="arrow" style="background-image: url(https://mobex.az/assets/images/icons/arrow-1.png);"></div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                    <div class="processing-block-two">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="https://mobex.az/assets/images/icons/icon-9.png"
                                                          alt=""></figure>
                            <h3>Xarici saytlardan istədiyiniz məhsulu bəyənirsiniz</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                    <div class="processing-block-two">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="https://mobex.az/assets/images/icons/icon-10.png"
                                                          alt=""></figure>
                            <h3>Saytımıza daxil olaraq məhsulu sifariş edirsiniz</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                    <div class="processing-block-two">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="https://mobex.az/assets/images/icons/icon-11.png"
                                                          alt=""></figure>
                            <h3>Ən qısa zamanda məhsulunuzu sizə qovuşdururuq</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- process-style-two end -->

<!-- pricing-section -->
<section class="pricing-section main_pricing_section bg-color-3 sec-pad" id="tariff">
    <div class="auto-container">
        <div class="sec-title centred">
            <p>TARIFLƏR</p>
            <h2>  Ölkələr Üzrə <span class="color--green">Daşınma</span> Haqqları</h2>
        </div>
        <div class="add-listing  adress_box dash_mobile_hide full">
            <div class="single-box main_page_country_tabs">
                <div class="row">
                    <!-- dashboard link slider -->
                    <div class="col-md-12 address_tabs">
                        <ul>
                            @foreach($countries as $key=>$country)
                            <li id="{{$country->id}}"  @if($key==0) class="active" @endif>
                                <a href="#!">
                                    <img src="{{asset('/images/'.$country->flag)}}" alt=""/>
                                    {{$country->country}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-md-12 adress_info address_tab  active "
                         id="country-1">
                        <div class="tabs-box">
                            <div class="tab-btn-box centred">
                                <ul class="tab-btns tab-buttons clearfix"  >
                                    <li class="tab-btn active-btn" data-tab="#tab-gen-1">
                                        Ümumi
                                    </li>
                                    <li class="tab-btn" data-tab="#tab-liq-1">Maye</li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-gen-1">
                                    <div class="row clearfix">
                                        @foreach($prices as $price)
                                            @if($price->type == 'common')
                                                <div class="col-lg-4 col-md-3 col-sm-12 pricing-block" id="{{$price->country_id}}">
                                                    <div class="pricing-block-one">
                                                        <div class="pricing-table">

                                                            <div class="table-header">
                                                                <h3>  {{$price->price}} USD                                                                                                                            </h3>
                                                            </div>
                                                            <div class="table-content">
                                                                <ul class="list clearfix">
                                                                    <li> <i class="fas fa-check"></i>{{$price->weight}}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab" id="tab-liq-1">
                                    <div class="row clearfix">
                                        @foreach($prices as $price)
                                            @if($price->type == 'liquid')
                                                <div class="col-lg-4 col-md-3 col-sm-12 pricing-block" id="{{$price->country}}">
                                                    <div class="pricing-block-one">
                                                        <div class="pricing-table">

                                                            <div class="table-header">
                                                                <h3> {{$price->price}} USD                                                                                                                                    </h3>
                                                            </div>
                                                            <div class="table-content">
                                                                <ul class="list clearfix">
                                                                    <li><i class="fas fa-check"></i>{{$price->weight}}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- pricing-section end -->

<section style="padding: 95px 0;" class="trigger section gutter-horizontal bg-gray gutter-vertical--m gutter-horizontal">
    <div class="customer-logos slider">
        @foreach($stores as $store)
        <div class="slide-in-right slide"><a href="{{$store->link}}"><img src="{{asset('/images/'.$store->image)}}"  height="65" width="165"></a></div>
        @endforeach
    </div>
</section>

<!-- news-section -->
<section class="news-section bg-color-3">
    <div class="auto-container">
        <div class="sec-title centred">
            <p>YENİLİKLƏR</p>
            <h2>  Xəbərlər və <span class="color--green">Blog</span> Məlumatları</h2>
        </div>
        <div class="row clearfix">
            @foreach($news as $new)
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{asset('/images/'.$new->picture)}}" alt="Smart Customs-da bəyan et">
                            </figure>
                            <div class="lower-content">
                                <h3>  <a title="Smart Customs-da bəyan et"
                                         href="https://mobex.az/news/smart-customs-da-beyan-et">{{$new->header}}</a></h3>
                                <ul class="post-info">

                                    <li>{{date("d.m.Y", strtotime($new->created_at))}}</li>
                                </ul>
                                {!! substr($new->content, 0, 140) !!}...
                                <br><br><br><br>
                                <div class="btn-box">
                                    <a href="/new/{{$new->id}}" class="theme-btn-one">Daha ətraflı<i class="icon-Arrow-Right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
