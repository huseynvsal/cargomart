<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megamart</title>
    <link rel="stylesheet" href="{{asset('css/toast.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <div class="header-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 left">
                        <a href="/"><img src="https://www.megamart.az/img/logo_site_online.png" alt=""></a>
                    </div>
                    <div class="col-lg-10 right">
                        <a href="/about">Haqqımızda</a>
                        <a href="#tariff">Tariflər</a>
                        <a href="#stores">Mağazalar</a>
                        <a href="#news">Xəbərlər</a>
                        <a href="/terms">Şərtlər</a>
                        <a href="/questions">Sual-Cavab</a>
                        <a class="enter" href="/login">Giriş</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 left">
                            <i class="fas fa-phone"></i>
                                <span>(012) 310-39-10</span>
                                <span>(055) 944-47-02</span>
                                <span>Korporativ: (055) 944-47-08</span>
                                <span>iş vaxtı: 09:00 - 19:00</span>
                        </div>
                        <div class="col-lg-6 right">
                            <a href="https://www.megamart.az/az/blog">Bloq</a>
                            <a href="https://www.megamart.az/az/page/4-zemanet-ve-qaytarilma">Zəmanət və qaytarılma</a>
                            <a href="https://www.megamart.az/az/page/5-sifaris-etme-qaydalari">Sifariş üsulları</a>
                            <a href="https://www.megamart.az/az/page/12-catdirilma-ve-odeme">Ödəmə üsulları</a>
                            <a href="https://www.megamart.az/az/page/25-catdirilma">Çatdırılma</a>
                            <a class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    AZ
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu2" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">RU</a></li>
                                    <li><a href="#">EN</a></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                </div>
        </div>

        @yield('main')

    <div class="footer text-right">
        <!-- Grid container -->
        <div class="container">
          <form action="">
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-lg-7">
                <p class="cap">ABUNƏ OL VƏ ƏLAVƏ ENDİRİMLƏR QAZAN</p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-4 col-12">
                <!-- Email input -->
                <div class="form-outline">
                  <input type="email" placeholder="Bülletenlərə abunə" id="form5Example2" class="form-control" />
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-1">
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary">Abunə ol</button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </form>
        </div>
        <!-- Grid container -->
      </div>

    <footer class="text-left">
        <!-- Grid container -->
        <div class="container">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 ">
              <span class="text-uppercase  caption">ŞİRKƏT HAQQINDA</span>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="https://www.megamart.az/az/page/15-reklamin-yerleshdirilmesi" class="text-dark">Reklamın yerləşdirilməsi</a>
                </li>
                <li>
                  <a href="https://www.megamart.az/az/page/17-techizatchilarla-ish" class="text-dark">Bizimlə əməkdaşlıq</a>
                </li>
                <li>
                  <a href="https://www.megamart.az/az/page/18-vakansiyalar" class="text-dark">Vakansiyalar</a>
                </li>
                <li>
                  <a href="https://www.megamart.az/az/page/19-azmegamartaz" class="text-dark">Megamart.az</a>
                </li>
                <li>
                    <a href="https://www.megamart.az/az/page/20-bizimle-elaqe" class="text-dark">Bizimlə əlaqə</a>
                  </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6">
              <span class="caption">ALICI ÜÇÜN</span>

              <ul class="list-unstyled">
                <li>
                  <a href="https://www.megamart.az/az/page/11-nece-alis-veris-etmeli" class="text-dark">Necə alış-veriş etməli</a>
                </li>
                <li>
                  <a href="https://www.megamart.az/az/page/24-sual-cavab" class="text-dark">Sual-cavab</a>
                </li>
                <li>
                  <a href="https://www.megamart.az/az/page/31-bonus-sistemi" class="text-dark">Bonus sistemi</a>
                </li>
                <li>
                  <a href="https://www.megamart.az/az/page/34-hediyye-kartlari" class="text-dark">Hədiyyə kartları</a>
                </li>
                <li>
                    <a href="https://www.megamart.az/az/page/39-olke-uzre-catdirilma" class="text-dark">Regionlara çatdırılma</a>
                  </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 ">
              <span class="caption">HÜQUQİ ŞƏXSLƏR ÜÇÜN</span>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="http://corp.megamart.az/" class="text-dark">Korporativ əməkdaşlıq</a>
                </li>
                <li>
                  <a href="https://www.megamart.az/az/page/28-mexfilik-siyaseti" class="text-dark">Məxfilik siyasəti</a>
                </li>
                <li>
                  <a href="https://www.megamart.az/az/page/35-huquqi-melumat" class="text-dark">Hüquqi məlumat</a>
                </li>
                <li>
                  <a href="https://www.megamart.az/az/page/36-istifade-sertleri" class="text-dark">İstifadə şərtləri</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 ">
              <h5 class=" caption">Bizimlə əlaqə</h5>

              <ul class="list-unstyled">
                <li>
                  <a href="#!" class="text-dark"><i class="fas fa-phone"></i>(012) 310-39-10</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">(055) 944-47-02</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">Bizi sosial şəbəkələrdə izləyin</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->
      </footer>

    <div class="footer-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>© 2010-2021 . Megamart.az - onlayn meqamarket</p>
                    <p>"Megamart MMC" VÖEN:1304041801</p>
                </div>
                <div class="col-lg-6 pt-1" style="text-align:right">
                    <img src="https://www.megamart.az/img/idealand.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <a id="button"><i class="fas fa-chevron-up"></i></a>


</body>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/toast.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/cabinet.js')}}"></script>

</html>
