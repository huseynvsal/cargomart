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
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" ><i class="fas fa-sign-out-alt"></i>Çıxış</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right-panel">
            <div class="content-container">
                <div class="outer-container">
                    <div class="declare_box add-listing doctor-details-content clinic-details-content full">
                        <div class="row single-box">
                            <!-- dashboard link slider -->
                            <div class="tabs-box">
                                <div class="tab-btn-box centred">
                                    <ul class="nav nav-tabs nav-justified nav-tabs-dropdown tab-btns tab-buttons clearfix" role="tablist">
                                    <li class="col-lg-3" role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Öncədən bəyan et</a></li>
                                    <li class="col-lg-2" role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Xarici anbarda</a></li>
                                    <li class="col-lg-2" role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Göndərilib</a></li>
                                    <li class="col-lg-2" role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Bakıda</a></li>
                                    <li class="col-lg-3" role="presentation"><a href="#settings" aria-controls="past" role="tab" data-toggle="tab">Keçmiş sifarişlər</a></li>
                                    </ul>
                                </div>
                                <div class="tabs-content">
                                    <div class="tab active-tab">
                                        <div class="inner-box">
                                            
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="home">
                                                    <div class="accordion-box">
                                                        <div class="alert alert-warning" role="alert">Heç bir bağlamanız yoxdur.</div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="profile">
                                                    <div class="accordion-box">
                                                                                                                                                                                                                                                            <div class="alert alert-info" role="alert">Çəki və Çatdırılma qiyməti dəyişə bilər.</div>
                                                                                                    
                                                                                                    <div class="title-box">
                                                        <h6>Bağlamalar</h6>
                                                    </div>
                                                    <ul class="accordion-inner">
                                                                                                                    <li class="accordion block">
                                                                <div class="acc-btn">
                                                                    <div class="icon-outer"></div>
                                                                    <h6> fontawesome.com (Türkiyə) -  № MBX567377136</h6>
                                                                </div>
                                                                <div class="acc-content">
                                                                    <div class="accordion__text-block" style="display: block;">
                                                                        <ul class="list list--check list--reset">

                                                                            <li class="list__item"><strong>
                                                                                    Bağlama tarixi:
                                                                                </strong> 10.02.21
                                                                            </li>
                                                                            <li class="list__item">
                                                                                <strong>Trek nömrə</strong>
                                                                                MBX567377136
                                                                            </li>
                                                                          
                                                                            <li class="list__item"><strong>
                                                                                    Mağaza:
                                                                                </strong>
                                                                                fontawesome.com
                                                                            </li>
                                                                            <li class="list__item">
                                                                                <strong>Məhsul sayı</strong>
                                                                                56
                                                                            </li>
                                                                            <li class="list__item">
                                                                                <strong>Çəki:</strong>
                                                                                0 kg
                                                                            </li>
                                                                                                                                                            <li class="list__item">
                                                                                    <strong>
                                                                                        Dəyəri:
                                                                                    </strong>
                                                                                    890 TRY
                                                                                </li>
                                                                                                                                                        <li class="list__item">
                                                                                <strong>
                                                                                    Çatdırılma qiyməti
                                                                                </strong>
                                                                                -
                                                                            </li>
                                                                           

                                                                            <li class="list__item">
                                                                                <strong>
                                                                                    Bəyannamə:
                                                                                </strong>
                                                                                <a target="_blank" href="https://mobex.az/uploads/packages/6023e541ca3cc.jpg">invoys</a>
                                                                            </li>
                                                                                                                                                            <li class="list__item">
                                                                                    <strong>
                                                                                        Qeyd
                                                                                    </strong>
                                                                                    65126
                                                                                </li>
                                                                                                                                                    </ul>
                                                                        <div class="full accordion_inbutton_cont">

                                                                                                                                                            <div class="col-lg-3 col-md-4 col-sm-12 form-group message-btn accordion_inbutton">
                                                                                    <a href="https://mobex.az/user/declaration/7627" class="theme-btn-one"> Dəyiş<i class="icon-Arrow-Right"></i></a>
                                                                                </div>
                                                                                                                                                                    <div class="col-lg-3 col-md-4 col-sm-12 form-group message-btn accordion_inbutton">
                                                                                        <a href="https://mobex.az/user/declaration/delete/7627" class="theme-btn-one" style="background-color: #ff1c90"> Sil<i class="icon-Arrow-down-4"></i></a>
                                                                                    </div>
                                                                                                                                                                                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                                                                            </ul>
                                                                                            </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="messages">Messages...</div>
                                                <div role="tabpanel" class="tab-pane" id="settings">Settings...</div>
                                                <div role="tabpanel" class="tab-pane" id="past">Settings...</div>
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
@endsection
