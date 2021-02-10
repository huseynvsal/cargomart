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
                    <a href="package.html"><i class="fas fa-calendar-alt"></i>Bağlamalar</a>
                </li>
                <li>
                    <a class="current" href="own_cabinet.html"><i class="fas fa-unlock-alt"></i>Hesabım</a>
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
                                <form method="POST" action="" accept-charset="UTF-8"><input name="_token" type="hidden" value="">
                                    <div class="row">
                                        <div class="col-12 form-group form-group">
                                            <div class="form-group  ">
            <label for="email">E-mail</label>
        <input class="form__field" disabled="disabled" name="email" type="text" value="abes_2go@hotmail.com">
    </div>                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  ">
            <label for="name">Ad (ingilis hərfləri ilə)*</label>
        <input class="form__field" name="name" type="text" value="qweqwe">
    </div>                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  ">
            <label for="surname">Soyadı (ingilis hərfləri ilə)*</label>
        <input class="form__field" name="surname" type="text" value="qweqwe">
    </div>                                        </div>
                                        <div class="col-sm-3 col-6 form-group">
                                    <label for="surname">Seriya</label>
                                            <select name="" id="">
                                                <option value="" selected>AZE</option>
                                                <option value="">AA</option>
                                            </select>
                                            
                                        </div>
                                        <div class="col-sm-3 col-6 form-group">
                                            <span class="form_span" style="opacity: 0;">&nbsp;</span>
                                            <input style="text-transform:uppercase" class="form__field required" placeholder="12345678" id="passport" type="text" name="passport_number" value="23423423" required="" im-insert="true">
                                                                                                                                </div>

                                        <div class="col-sm-6 form-group">
                                            <span class="form_span">FİN</span>
                                            <input class="form__field required" data-inputmask="'mask': '*******'" placeholder="FİN" id="fin" type="text" name="fin" value="2323423" required="" im-insert="true">
                                                                                    </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  ">
            <label for="birthday">Doğum günü</label>
        <input min="1950-01-01" max="2002-01-01" class="form__field changeTypeToDate" name="birthday" type="text">
    </div>                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  ">
            <label for="phone">Telefon</label>
        <input class="form__field" disabled="disabled" name="phone" type="text" value="055-800-44-44">
    </div>                                        </div>
                                        <div class="col-sm-6 form-group">
                                             <div class="form-group  ">
                                            <span class="form_span">Şəhər</span>
                                             <select name="" id="">
                                                <option value="" selected>AZE</option>
                                                <option value="">AA</option>
                                            </select>
                                            </div>                                         
                                        </div>
                                        <div class="col-sm-6 form-group">
                                             <div class="form-group  ">
                                             <span class="form_span">Rayon</span>
                                             <select name="" id="">
                                                <option value="" selected>AZE</option>
                                                <option value="">AA</option>
                                            </select>
                                             </div>
                                          </div>
                                        <div class="col-sm-12 form-group">
                                            <div class="form-group  ">
                                            <span class="form_span">Filial</span>
                                             <select name="" id="">
                                                <option value="" selected>AZE</option>
                                                <option value="">AA</option>
                                            </select>
                                            </div> 
                                        </div>
                                        <div class="col-lg-12  form-group">
                                            <div class="form-group  ">
            <label for="address">Ünvan</label>
        <textarea class="form__field" rows="4" name="address" cols="50">156 Ahmed Racabli</textarea>
    </div>                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  ">
            <label for="zip_code">Poçt İndeksi</label>
        <input class="form__field" name="zip_code" type="text">
    </div>                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  ">
            <label for="company">Şirkət</label>
        <input class="form__field" name="company" type="text" value="abes_2go@hotmail.com">
    </div>                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  has-error ">
            <label for="password">Şifrə</label>
        <input placeholder="Yeni şifrə" class="form__field" name="password" type="password" value="">
            <span class="help-block">
            <strong> password doğrulanması yanlışdır</strong>
        </span>
    </div>                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <div class="form-group  ">
            <label for="password_confirmation">Şifrənin təsdiqi</label>
        <input placeholder="Yeni şifrəni təkrar" class="form__field" name="password_confirmation" type="password" value="">
    </div>                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn middle_smallbtn">
                                            <button type="submit" class="theme-btn-one">Yadda saxla<i class="icon-Arrow-Right"></i></button>
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
