@extends('main.index')
@section('main')
<section class="registration-section bg-color-3">
    <div class="pattern">
        <div class="pattern-1" style="background-image: url(https://mobex.az/assets/images/shape/shape-85.png);"></div>
        <div class="pattern-2" style="background-image: url(https://mobex.az/assets/images/shape/shape-86.png);"></div>
    </div>
    <div class="auto-container">
        <div class="inner-box">
            <div class="content-box">
                <div class="title-box">
                    <h3>Daxil ol</h3>
                </div>
                <div class="inner">
                    <form method="POST" action="https://mobex.az/login" accept-charset="UTF-8" class="registration-form"><input name="_token" type="hidden" value="icEHtV60mWDsXBk2AxOyemhS7OUlp3jv3Vet4Xib">
                        <div class="row clearfix">

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group ">
                                <label>Email və ya müştəri nömrəsi</label>
                                <input class="form__field" id="login" type="text" name="login" value="" required="" autofocus="">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group ">
                                <label>Şifrə</label>
                                <input class="form__field" id="password" type="password" name="password" required="">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <div class="forgot-passowrd clearfix">
                                    <a href="https://mobex.az/password/email">Şifrəmi unutmuşam</a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                <button type="submit" class="theme-btn-one">Daxil ol<i class="icon-Arrow-Right"></i></button>
                            </div>
                        </div>
                    </form>

                    <div class="login-now"><p>Hesabınız yoxdursa, qeydiyyatdan keçin. <a href="https://mobex.az/register">Qeydiyyat</a></p></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
