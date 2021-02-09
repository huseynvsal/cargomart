@extends('main.index')
@section('main')
    <section class="registration-section bg-color-3">
        <div class="pattern">
            <div class="pattern-1"
                 style="background-image: url(https://mobex.az/assets/images/shape/shape-85.png);"></div>
            <div class="pattern-2"
                 style="background-image: url(https://mobex.az/assets/images/shape/shape-86.png);"></div>
        </div>
        <div class="auto-container">
            <div class="inner-box" style="max-width: 600px">
                <div class="content-box">
                    <div class="title-box"><h3>Hesab yarat</h3> <a href="/login">Hesabınıza daxil olun</a></div>
                    <div class="inner">
                        <form id="add_users" accept-charset="UTF-8" class="registration-form"
                              autocomplete="new-password"><input name="_token" type="hidden"
                                                                 value="OMmFKKOZ0KAqjbR60hMcvggoLo9ee7ngoTsG4iMa"> @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 form-group ">
                                    <div class="form-group  "><label for="name">Ad (ingilis hərfləri ilə)*</label>
                                        <input class="form__field" name="name" type="text"></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 form-group ">
                                    <div class="form-group  "><label for="surname">Soyadı (ingilis hərfləri
                                            ilə)*</label> <input class="form__field" name="surname" type="text"></div>
                                </div>
                                <div class="col-sm-3 form-group ">
                                    <div class="dropdown" id="series" style="margin-top: 28px;">
                                        <select name="series">
                                            <option value="AZE">AZE</option>
                                            <option value="AA">AA</option>
                                        </select></div>
                                </div>
                                <div class="col-sm-4 form-group"><span class="form_span"
                                                                       style="opacity: 0;">&nbsp;</span> <input
                                        style="text-transform:uppercase" class="form__field required"
                                        onkeypress="return isNumberKey(event)" maxlength="8" placeholder="12345678"
                                        id="passport" type="text" name="number" value="" required="" im-insert="true">
                                </div>
                                <div class="col-sm-5 form-group">
                                    <div data-popup="popovery" title="FIN" data-placement="top" data-html="true"
                                         data-content="<img style='width: 100%' src='https://mobex.az/assets/images/pass.jpg'/>"
                                         class="form-group has-feedback has-feedback-left "><span
                                            class="form_span">FİN</span> <input style="text-transform:uppercase"
                                                                                class="form__field required"
                                                                                onkeypress="return isNumberKey(event)"
                                                                                maxlength="7" placeholder=""
                                                                                id="passport" type="text" name="fin"
                                                                                value="" required="" im-insert="true">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6 form-group "><span class="form_span">Telefon</span> <input
                                        data-inputmask="'mask': '999-999-99-99'" onkeypress="return isNumberKey(event)"
                                        maxlength="10" placeholder="050-500-00-00" id="phone" type="text"
                                        class="form__field" name="phone" value="" required="" im-insert="true"></div>
                                <div class="col-lg-6 col-sm-12 form-group "><span class="form_span">Şəhər</span>
                                    <div class="dropdown" id="cities">
                                        <select name="city" >
                                            <option value="Bakı">Bakı</option>
                                            <option value="Qəbələ">Qəbələ</option>
                                            <option value="Gəncə">Gəncə</option>
                                        </select></div>
                                </div>
                                <div class="col-lg-12 form-group ">
                                    <div class="form-group  "><label for="address">Ünvan</label> <input
                                            class="form__field" rows="4" name="address" type="text"></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 form-group ">
                                    <div class="form-group  "><label for="email">E-mail</label> <input
                                            class="form__field" required="required" name="email" type="text"></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 form-group ">
                                    <div class="form-group  "><label for="password">Şifrə</label> <input
                                            class="form__field" name="password" type="password" value=""></div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-12 col-md-12 col-sm-12 message-btn">
                            <button class="theme-btn-one add_user">Qeydiyyat<i class="icon-Arrow-Right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
