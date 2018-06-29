<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php
  require('../../../template/head.php');
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
              $thisPage = "Cari Relasi";
              require('../../../template/navbar-modules.php');
            ?>
            <!--END MAINMENU AREA END-->
        </div>
        <?php
          //require('../../../template/welcome.php');
        ?>
    </header>
    <!--END TOP AREA-->

    <!--FEATURES TOP AREA-->
    <section class="features-top-area padding-100-50" id="features">
        <div class="container">
            <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-xlg-3 col-md-5">
                        <!-- Column -->
                        <div class="card card-bg">
                            <img class="card-img-top" src="../../../assets/img/background/profile-bg.jpg" alt="Card image cap">
                            <div class="card-block little-profile text-center">
                                <div class="pro-img"><img src="../../../assets/img/users/profile.jpg" alt="user" /></div>
                                <h3 class="m-b-0">Angela Dominic</h3>
                                <p>Web Designer &amp; Developer</p>
                                <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Follow</a>
                                <div class="row text-center m-t-20 pad-bot-card">
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">1099</h3><small>Articles</small></div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">23,469</h3><small>Followers</small></div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">6035</h3><small>Following</small></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card card-bg">
                            <div class="card-block bg-info pad-bot-card">
                                <h4 class="text-white card-title">My Contacts</h4>
                                <h6 class="card-subtitle text-white m-b-0 op-5">Checkout my contacts here</h6>
                            </div>
                            <div class="card-block">
                                <div class="message-box contact-box">
                                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                                    <div class="message-widget contact-widget">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../../../assets/img/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">info@wrappixel.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../../../assets/img/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">pamela1987@gmail.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">cruise1298.fiplip@gmail.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../../../assets/img/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">kat@gmail.com</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="form-horizontal form-material mrgn-event">
                        <div class="form-group" style="margin-bottom: 10px;">
                            <h4 class="col-md-12" style="margin-bottom: 0px;">Cari Relasi Baru</h4>
                            <div class="col-md-12" style="background:white;">
                                <input rows="5" class="form-control form-control-line" style="padding-top: 10px;padding-left: 0px;"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-success"><i class="fa fa-search"></i> Temukan</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-lg-9 col-xlg-9 col-md-7">
                        <div class="card card-bg pad-bot-card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#semua" role="tab">Hasil</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#sub-sektor" role="tab">Filter</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!--second tab-->
                                <div class="tab-pane active" id="semua" role="tabpanel">
                                    <div class="card-block">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../../../assets/img/users/1.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>Arsitektur</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../../../assets/img/users/1.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>Arsitektur</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../../../assets/img/users/1.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>Arsitektur</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../../../assets/img/users/1.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>Arsitektur</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../../../assets/img/users/1.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>Arsitektur</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../../../assets/img/users/2.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                  <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                      <p>Game dan Aplikasi</p>
                                                  </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../../../assets/img/users/2.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                  <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                      <p>Fashion</p>
                                                  </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../../../assets/img/users/2.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                  <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                      <p>Game dan Aplikasi</p>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="tab-pane" id="sub-sektor" role="tabpanel">
                                    <div class="card-block">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group mrgn-event">
                                                <label class="col-sm-12">Pilih Provinsi</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>-- Provinsi --</option>
                                                        <option>Jakarta</option>
                                                        <option>Jawa Barat</option>
                                                        <option>Jawa Tengah</option>
                                                        <option>Jawa Timur</option>
                                                        <option>Sumatra Barat</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mrgn-event">
                                                <label class="col-sm-12">Pilih Kota</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>-- Kota --</option>
                                                        <option>Aceh</option>
                                                        <option>Bandung</option>
                                                        <option>Depok</option>
                                                        <option>Surabaya</option>
                                                        <option>Yogyakarta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mrgn-event">
                                                <label class="col-sm-12">Pilih Sub Sektor</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>-- Sub Sektor --</option>
                                                        <option>Arsitektur</option>
                                                        <option>Animasi</option>
                                                        <option>Fashion</option>
                                                        <option>Desain Komunikasi Visual</option>
                                                        <option>Game dan Aplikasi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Terapkan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </section>
    <!--FEATURES TOP AREA END-->

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
