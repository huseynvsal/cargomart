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
                        <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8" class="registration-form">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group ">
                                    <label>Email</label>
                                    <input class="form__field @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Məlumatlar yanlışdır</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group ">
                                    <label>Şifrə</label>
                                    <input class="form__field @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password">
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
                        <div class="login-now"><p>Hesabınız yoxdursa, qeydiyyatdan keçin. <a href="/register">Qeydiyyat</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
