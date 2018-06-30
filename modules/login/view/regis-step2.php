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
<div class="mainmenu-area mod-navbar" id="">
    <div class="mainmenu-area-bg"></div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#home" class="navbar-brand"><img src="../../../assets/img/logo.png" alt="logo" class="brand-mod"></a>
            </div>
        </div>
    </nav>
</div>

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
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card card-bg pad-bot-card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#t1" role="tab">Tahap 1</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#t2" role="tab">Tahap 2</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#t3" role="tab">Tahap 3</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="t1" role="tabpanel">
                                    <div class="card-block">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Nama</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Nama Lengkap Anda" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Jenis Kelamin</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line" required="">
                                                        <option value="">---Piih Jenis Kelamin---</option>
                                                        <option value="laki">Laki - laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Nomer Telepon</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Format : 08xxxxxxx" class="form-control form-control-line">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--second tab-->

                            <div class="tab-content">
                                <div class="tab-pane active" id="t2" role="tabpanel">
                                    <div class="card-block">
                                        <form class="form-horizontal form-material">


                                            <div class="form-group">
                                                <label class="col-sm-12">Provinsi</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line" required="">
                                                        <option value="">---Piih Provinsi Kelamin---</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-12">Kabupaten/Kota</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line" required="">
                                                        <option value="">---Piih Kabupaten Kota---</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-12">Kecamatan</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line" required="">
                                                        <option value="">---Piih Kecamatan---</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-12">Desa</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line" required="">
                                                        <option value="">---Piih Desa---</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12">Deskripsi Lainnya</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Nama Jalan dsb ..." class="form-control form-control-line">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!--second tab-->


                                <div class="tab-pane" id="t3" role="tabpanel">
                                    <div class="card-block">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
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
