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
                    <h1>Şəxsi məlumatları dəyiş</h1>
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
                            <h3>{{$user->user_code}}</h3>
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
                    <div class="declare_box add-listing full">
                        <div class="row single-box">
                            <!-- dashboard link slider -->
                            <div class="inner-box">
                                <form accept-charset="UTF-8" id="edit_users"><input type="hidden">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 form-group form-group">
                                            <div class="form-group  ">
                                                <label for="email">E-mail</label>
                                                <input class="form__field" disabled="disabled" name="email" type="text" value="{{$user->email}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  ">
                                                <label for="name">Ad</label>
                                                <input class="form__field" name="name" type="text" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  ">
                                                <label for="surname">Soyadı</label>
                                                <input class="form__field" name="surname" type="text" value="{{$user->surname}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-6 form-group">
                                            <label for="surname">Seriya</label>
                                            <select name="series" id="{{$user->series}}">
                                                <option value="AZE" selected>AZE</option>
                                                <option value="AA">AA</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 col-6 form-group">
                                            <span class="form_span" style="opacity: 0;">&nbsp;</span>
                                            <input style="text-transform:uppercase" class="form__field required" placeholder="12345678" type="text" name="number" value="{{$user->number}}" required="" im-insert="true">
                                        </div>

                                        <div class="col-sm-6 form-group">
                                            <span class="form_span">FİN</span>
                                            <input class="form__field required" data-inputmask="'mask': '*******'" placeholder="FİN" type="text" name="fin" value="{{$user->fin}}" required="" im-insert="true">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  ">
                                                <label for="phone">Telefon</label>
                                                <input class="form__field" disabled="disabled" name="phone" type="number" value="{{$user->phone}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  ">
                                                <span class="form_span">Şəhər</span>
                                                <select name="city" id="{{$user->city}}">
                                                    <option value="Bakı" selected>Bakı</option>
                                                    <option value="Qəbələ" selected>Qəbələ</option>
                                                    <option value="Gəncə" selected>Gəncə</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12  form-group">
                                            <div class="form-group  ">
                                                <label for="address">Ünvan</label>
                                                <textarea class="form__field" rows="4" name="address" cols="50">{{$user->address}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  has-error ">
                                                <label for="password">Şifrə</label>
                                                <input placeholder="Yeni şifrə" class="form__field" name="password" type="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  ">
                                                <label for="password_confirmation">Şifrənin təsdiqi</label>
                                                <input placeholder="Yeni şifrəni təkrar" class="form__field" name="confirm_password" type="password">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn middle_smallbtn">
                                    <button class="theme-btn-one edit_user">Yadda saxla<i class="icon-Arrow-Right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
