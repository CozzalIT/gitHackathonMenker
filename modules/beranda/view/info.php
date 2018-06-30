<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php
  require('../../../template/head.php');
  $thisPage = 'Beranda';
?>

<body class="home-one" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="" id="home">
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <?php
              require('../../../template/navbar-modules.php');
            ?>
            <!--END MAINMENU AREA END-->
        </div>
        <?php
          //require('../../../template/welcome.php');
        ?>
    </header>
    <!--END TOP AREA-->

    <!--APP AREA-->
    <section class="app-area relative padding-100-50 sky-gray-bg" id="app">
        <div class="app-area-mockup-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-sm-12 col-xs-12">
                    <div class="area-title wow fadeIn">
                        <h2>Selamat Datanag</h2>
                        <span class="icon-and-border"><i class="material-icons">phone_android</i></span>
                        <p>Anda juga resmi terdaftar di kementrian ketenagakerjaan Republik Indonesia.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                  <!-- Column -->
                  <div class="col-lg-12 col-xlg-12 col-md-12">
                      <div class="card card-bg pad-bot-card">
                          <!-- Tab panes -->
                          <div class="tab-content">
                              <!--second tab-->
                              <div class="tab-pane active" id="Deskripsi" role="tabpanel">
                                  <div class="card-block">
                                      <p class="m-t-30">    
                                        Terimaksih atas partisipasi anda yang telah mendaftarkan diri pada situs jalinrelasi. Selanjutnya silahkan lengkapi data portofolio untuk menambahkan poin dan menaikan Ranking. Hal ini akan membuat orang lebih yakin terhadap profesionalitas anda. Dan membuat anda lebih diperhitungkan dalam profesi anda.
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                          </div>
                      </div>
                  </div>
              </div>
        </div>
    </section>
    <!--APP AREA END-->

    <!--====== SCRIPTS JS ======-->
    <script src="../../../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../../assets/js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="../../../assets/js/vendor/jquery.easing.1.3.js"></script>
    <script src="../../../assets/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="../../../assets/js/vendor/jquery.appear.js"></script>
    <script src="../../../assets/js/owl.carousel.min.js"></script>
    <script src="../../../assets/js/slick.min.js"></script>
    <script src="../../../assets/js/stellar.js"></script>
    <script src="../../../assets/js/wow.min.js"></script>
    <script src="../../../assets/js/jquery-modal-video.min.js"></script>
    <script src="../../../assets/js/stellarnav.min.js"></script>
    <script src="../../../assets/js/contact-form.js"></script>
    <script src="../../../assets/js/jquery.ajaxchimp.js"></script>
    <script src="../../../assets/js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="../../../assets/js/main.js"></script>
</body>

</html>
