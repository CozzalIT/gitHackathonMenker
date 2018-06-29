<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php
  require('../../../template/head.php');
  $thisPage = 'detailAcara';
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
                        <h2>Judul atau tema <span>Acara</span></h2>
                        <span class="icon-and-border"><i class="material-icons">phone_android</i></span>
                        <p>Rapidiously monetize state of the art ROI rather than quality. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim neque aliquid.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
                            <div class="qs-box relative mb50 left  wow fadeInUp" data-wow-delay="0.2s">
                              <center>
                                <div class="qs-box-icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <h3>Poin Kehadiran</h3>
                                <p>275 Poin</p>
                              </center>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
                            <div class="qs-box relative mb50 left  wow fadeInUp" data-wow-delay="0.2s">
                              <center>
                                <div class="qs-box-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <h3>Waktu</h3>
                                <p>25 Jul 2018 10:00 WIB</p>
                              </center>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
                            <div class="qs-box relative mb50 left  wow fadeInUp" data-wow-delay="0.2s">
                              <center>
                                <div class="qs-box-icon">
                                    <i class="fa fa-bars"></i>
                                </div>
                                <h3>Kuota</h3>
                                <p>Tersisa 42</p>
                              </center>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
                            <div class="qs-box relative mb50 left  wow fadeInUp" data-wow-delay="0.2s">
                              <center>
                                <div class="qs-box-icon">
                                    <i class="fa fa-asterisk"></i>
                                </div>
                                <h3>Sub Sektor</h3>
                                <p>Arsitektur</p>
                              </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                  <!-- Column -->
                  <div class="col-lg-12 col-xlg-12 col-md-12">
                      <div class="card card-bg pad-bot-card">
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs profile-tab" role="tablist">
                              <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#Deskripsi" role="tab">Deskripsi</a> </li>
                              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Dokumentasi" role="tab">Dokumentasi</a> </li>
                              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Diskusi" role="tab">Diskusi</a> </li>
                          </ul>
                          <!-- Tab panes -->
                          <div class="tab-content">
                              <!--second tab-->
                              <div class="tab-pane active" id="Deskripsi" role="tabpanel">
                                  <div class="card-block">
                                      <div class="row">
                                          <div class="col-md-3 col-xs-6 b-r"> <strong>Pemateri</strong>
                                              <br>
                                              <p class="text-muted">- Johnathan Deo <br> - Dibuka Pendaftaran</p>
                                              <p class="text-muted"></p>
                                          </div>
                                          <div class="col-md-3 col-xs-6 b-r"> <strong>Lokasi</strong>
                                              <br>
                                              <p class="text-muted">JAKARTA SELATAN</p>
                                          </div>
                                          <div class="col-md-3 col-xs-6 b-r"> <strong>HTM</strong>
                                              <br>
                                              <p class="text-muted">175.000 IDR</p>
                                          </div>
                                          <div class="col-md-3 col-xs-6"> <strong></strong>
                                              <br>

                                          </div>
                                      </div>
                                      <hr>
                                      <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                      <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                  </div>
                              </div>
                              <div class="tab-pane" id="Dokumentasi" role="tabpanel">
                                  <div class="card-block">
                                    <div class="row mrgn-event">
                                        <div class="col-lg-3 col-md-6 m-b-20"><img src="../../../assets/img/big/img1.jpg" alt="user" class="img-responsive radius"></div>
                                        <div class="col-lg-3 col-md-6 m-b-20"><img src="../../../assets/img/big/img2.jpg" alt="user" class="img-responsive radius"></div>
                                        <div class="col-lg-3 col-md-6 m-b-20"><img src="../../../assets/img/big/img3.jpg" alt="user" class="img-responsive radius"></div>
                                        <div class="col-lg-3 col-md-6 m-b-20"><img src="../../../assets/img/big/img4.jpg" alt="user" class="img-responsive radius"></div>
                                    </div>
                                  </div>
                              </div>
                              <div class="tab-pane" id="Diskusi" role="tabpanel">
                                  <div class="card-block">
                                    <div class="sl-item mrgn-event">
                                        <div class="sl-right">
                                            <div> <a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <div class="m-t-20 row">
                                                    <div class="col-md-9 col-xs-12">
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> </div>
                                                </div>
                                                <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item mrgn-event">
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                            </div>
                                            <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item mrgn-event">
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <blockquote class="m-t-10">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-12">Klik untuk mendaftar</label>
                            <button class="btn btn-success btn-event col-sm-1">Peserta</button>
                            <button class="btn btn-info btn-event col-sm-1">Pemateri</button>
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
