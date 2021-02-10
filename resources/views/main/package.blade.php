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
                            <a href="beyan.html"><i class="fas fa-plus"></i>Bəyan et</a>
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
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li class="active-btn">
                                            <a href="/package">
                                                Öncədən bəyan et
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/package">
                                                Xarİcİ anbarda
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/package">
                                                GÖndƏrİlİb
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/package">
                                                Bakıda
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/package">
                                                Keçmİş sİfarİşlər
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tabs-content">
                                    <div class="tab active-tab" id="tab-1">
                                        <div class="inner-box">
                                            <div class="accordion-box">

                                                                                                                                                                    <div class="alert alert-warning" role="alert">Heç bir bağlamanız yoxdur.</div>
                                                                                                                                                    </div>
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
