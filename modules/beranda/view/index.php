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
                    <div class="col-lg-9 col-xlg-9 col-md-7">
                        <div class="card card-bg pad-bot-card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Activity</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-block">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../../../assets/img/users/1.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>assign a new task <a href="#"> Design weblayout</a></p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../../../assets/img/big/img1.jpg" alt="user" class="img-responsive radius"></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../../../assets/img/big/img2.jpg" alt="user" class="img-responsive radius"></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../../../assets/img/big/img3.jpg" alt="user" class="img-responsive radius"></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../../../assets/img/big/img4.jpg" alt="user" class="img-responsive radius"></div>
                                                        </div>
                                                        <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../../../assets/img/users/2.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div> <a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <div class="m-t-20 row">
                                                            <div class="col-md-3 col-xs-12"><img src="../../../assets/img/big/img1.jpg" alt="user" class="img-responsive radius"></div>
                                                            <div class="col-md-9 col-xs-12">
                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="#" class="btn btn-success"> Design weblayout</a></div>
                                                        </div>
                                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../../../assets/img/users/3.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../../../assets/img/users/4.jpg" alt="user" class="img-circle"> </div>
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
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">Johnathan Deo</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johnathan@admin.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4 class="font-medium m-t-30">Skill Set</h4>
                                        <hr>
                                        <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
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

    <!--SCREENSHOT AREA-->
    <section class="screenshot-area gray-bg section-padding" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Awesome <span>Screenshot</span></h2>
                        <span class="icon-and-border"><i class="material-icons">phone_android</i></span>
                        <p>Rapidiously monetize state of the art ROI rather than quality. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim neque aliquid.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="screenshot-slider-area wow fadeIn">
                        <div class="screenshot-slider">
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-1.jpg" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-2.jpg" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-3.jpg" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-4.jpg" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-5.jpg" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-6.jpg" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-7.jpg" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-1.jpg" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-2.jpg" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-3.jpg" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-4.jpg" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-5.jpg" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="../../../assets/img/screenshot/screenshot-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SCREENSHOT AREA END-->

    <!--TESTMONIAL AREA-->
    <section class="testmonial-area section-padding" id="client">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>What's say our <span>Clients</span></h2>
                        <span class="icon-and-border"><i class="material-icons">phone_android</i></span>
                        <p>Rapidiously monetize state of the art ROI rather than quality. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim neque aliquid.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="testmonial-member-list wow fadeIn">
                        <div class="single-testmonial center">
                            <div class="testmonial-author-data">
                                <div class="author-image">
                                    <img src="../../../assets/img/testmonial/testmonial-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="testmonial-author-details">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas mo tias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio</p>
                            </div>
                            <div class="author-designation">
                                <h4>TOPSMMPANEL.COM</h4>
                                <p>CEO Of TOPSMMPANEL.COM</p>
                            </div>
                        </div>
                        <div class="single-testmonial center">
                            <div class="testmonial-author-data">
                                <div class="author-image">
                                    <img src="../../../assets/img/testmonial/testmonial-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="testmonial-author-details">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas mo tias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio</p>
                            </div>
                            <div class="author-designation">
                                <h4>TOPSMMPANEL.COM</h4>
                                <p>CEO Of TOPSMMPANEL.COM</p>
                            </div>
                        </div>
                        <div class="single-testmonial center">
                            <div class="testmonial-author-data">
                                <div class="author-image">
                                    <img src="../../../assets/img/testmonial/testmonial-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="testmonial-author-details">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas mo tias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio</p>
                            </div>
                            <div class="author-designation">
                                <h4>TOPSMMPANEL.COM</h4>
                                <p>CEO Of TOPSMMPANEL.COM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TESTMONIAL AREA END-->

    <!--DOWNLOAD AREA-->
    <section class="download-area section-padding relative white">
        <div class="area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="download-content sm-center xs-center xs-mb50 xs-font wow fadeIn">
                        <h2>Get Download Massive app !</h2>
                        <p>app download App store, It’s a long established fact that a reader will be distracted by the readable content....</p>
                        <a href="#" class="download-button"><i class="fa fa-apple"></i>Download On The <span>App Store</span></a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4 col-sm-6 col-xs-12">
                    <div class="download-content sm-center xs-center wow fadeIn">
                        <h2>Download From Google Play</h2>
                        <p>app download App store, It’s a long established fact that a reader will be distracted by the readable content....</p>
                        <a href="#" class="download-button"><i class="fa fa-play"></i>Get It On <span>Google Play</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--DOWNLOAD AREA END-->

    <!--TEAM AREA-->
    <section class="team-area section-padding" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Our Expert <span>Team</span></h2>
                        <span class="icon-and-border"><i class="material-icons">phone_android</i></span>
                        <p>Rapidiously monetize state of the art ROI rather than quality. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim neque aliquid.</p>
                    </div>
                </div>
            </div>
            <div class="row flex-v-center mb50 wow fadeIn">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="team-member-thumb tab-content">
                        <div class="member-thumb member-one tab-pane fade in active">
                            <img src="../../../assets/img/team/team-1.png" alt="">
                        </div>
                        <div class="member-thumb member-two tab-pane fade">
                            <img src="../../../assets/img/team/team-2.png" alt="">
                        </div>
                        <div class="member-thumb member-three tab-pane fade">
                            <img src="../../../assets/img/team/team-3.png" alt="">
                        </div>
                        <div class="member-thumb member-four tab-pane fade">
                            <img src="../../../assets/img/team/team-4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="team-member-details tab-content">
                        <div class="member-details-content xs-center member-one tab-pane fade in active">
                            <div class="member-name-and-designation mb50">
                                <h3>priyanka chopra<span>Brocker of Cow</span></h3>
                            </div>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisi enim, vulputate at justo tristique.</p>
                            <ul class="social-bookmark mt50">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                        <div class="member-details-content xs-center member-two tab-pane fade">
                            <div class="member-name-and-designation mb50">
                                <h3>priyanka chopra<span>Brocker of Cow</span></h3>
                            </div>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisi enim, vulputate at justo tristique.</p>
                            <ul class="social-bookmark mt50">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                        <div class="member-details-content xs-center member-three tab-pane fade">
                            <div class="member-name-and-designation mb50">
                                <h3>priyanka chopra<span>Brocker of Cow</span></h3>
                            </div>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisi enim, vulputate at justo tristique.</p>
                            <ul class="social-bookmark mt50">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                        <div class="member-details-content xs-center member-four tab-pane fade">
                            <div class="member-name-and-designation mb50">
                                <h3>priyanka chopra<span>Brocker of Cow</span></h3>
                            </div>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nisi enim, vulputate at justo tristique.</p>
                            <ul class="social-bookmark mt50">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="team-member-thumb-menu">
                        <ul class="inline-blcok">
                            <li class="active"><a data-toggle="tab" href=".member-one"><img src="../../../assets/img/team/thumb-3.jpg" alt=""></a></li>
                            <li><a data-toggle="tab" href=".member-two"><img src="../../../assets/img/team/thumb-2.jpg" alt=""></a></li>
                            <li><a data-toggle="tab" href=".member-three"><img src="../../../assets/img/team/thumb-1.jpg" alt=""></a></li>
                            <li><a data-toggle="tab" href=".member-four"><img src="../../../assets/img/team/thumb-4.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TEAM AREA END-->

    <!--PRICING AREA-->
    <section class="price-area padding-100-70 sky-gray-bg" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Pricing <span>Table</span></h2>
                        <span class="icon-and-border"><i class="material-icons">phone_android</i></span>
                        <p>Rapidiously monetize state of the art ROI rather than quality. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim neque aliquid.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-price center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="price-hidding">
                            <h2>Basic</h2>
                        </div>
                        <div class="price-rate">
                            <h2><sup>$</sup>19
                                <sub>lifetime</sub>
                            </h2>
                        </div>
                        <div class="price-details">
                            <ul>
                                <li>One User</li>
                                <li>1000 ui elements</li>
                                <li>E-mail support</li>
                            </ul>
                        </div>
                        <div class="buy-now-button">
                            <a href="#" class="read-more">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-price center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="price-hidding">
                            <h2>Premium</h2>
                        </div>
                        <div class="price-rate">
                            <h2><sup>$</sup>19
                                <sub>lifetime</sub>
                            </h2>
                        </div>
                        <div class="price-details">
                            <ul>
                                <li>One User</li>
                                <li>1000 ui elements</li>
                                <li>E-mail support</li>
                            </ul>
                        </div>
                        <div class="buy-now-button">
                            <a href="#" class="read-more">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-price center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="price-hidding">
                            <h2>Standard</h2>
                        </div>
                        <div class="price-rate">
                            <h2><sup>$</sup>19
                                <sub>lifetime</sub>
                            </h2>
                        </div>
                        <div class="price-details">
                            <ul>
                                <li>One User</li>
                                <li>1000 ui elements</li>
                                <li>E-mail support</li>
                            </ul>
                        </div>
                        <div class="buy-now-button">
                            <a href="#" class="read-more">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-price center wow fadeInUp visible-sm" data-wow-delay="0.5s">
                        <div class="price-hidding">
                            <h2>Business</h2>
                        </div>
                        <div class="price-rate">
                            <h2><sup>$</sup>19
                                <sub>lifetime</sub>
                            </h2>
                        </div>
                        <div class="price-details">
                            <ul>
                                <li>One User</li>
                                <li>1000 ui elements</li>
                                <li>E-mail support</li>
                            </ul>
                        </div>
                        <div class="buy-now-button">
                            <a href="#" class="read-more">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PRICING AREA END-->

    <!--BLOG AREA-->
    <section class="blog-feed-area padding-100-70 white-gray-bg" id="news">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>From <span>Blog</span></h2>
                        <span class="icon-and-border"><i class="material-icons">phone_android</i></span>
                        <p>Rapidiously monetize state of the art ROI rather than quality. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim neque aliquid.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog mb30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-thumb width100">
                            <a href="blog.html"><img src="../../../assets/img/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="blog-details padding-30 border">
                            <h4><a href="blog.html">Experience And Resources By Your Side.</a></h4>
                            <p class="blog-meta"><i class="material-icons">event_note</i> <a href="#">02 February 2016  </a> <i class="material-icons">group</i> <a href="#">Super User</a></p>
                            <p>Lorem ipsum dolor sit amet, nec in adipiscing purus luctus, urna pellentesque fringilla vel</p>
                            <a class="readmore" href="blog.html">Continue....</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog mb30 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-thumb width100">
                            <a href="blog.html"><img src="../../../assets/img/blog/blog-2.jpg" alt=""></a>
                        </div>
                        <div class="blog-details padding-30 border">
                            <h4><a href="blog.html">The Most Effective App For mobile</a></h4>
                            <p class="blog-meta"><i class="material-icons">event_note</i> <a href="#">02 February 2016  </a> <i class="material-icons">group</i> <a href="#">Super User</a></p>
                            <p>Lorem ipsum dolor sit amet, nec in adipiscing purus luctus, urna pellentesque fringilla vel</p>
                            <a class="readmore" href="blog.html">Continue....</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog mb30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-thumb width100">
                            <a href="blog.html"><img src="../../../assets/img/blog/blog-3.jpg" alt=""></a>
                        </div>
                        <div class="blog-details padding-30 border">
                            <h4><a href="blog.html">We Help Your Time Work For Your Company</a></h4>
                            <p class="blog-meta"><i class="material-icons">event_note</i> <a href="#">02 February 2016  </a> <i class="material-icons">group</i> <a href="#">Super User</a></p>
                            <p>Lorem ipsum dolor sit amet, nec in adipiscing purus luctus, urna pellentesque fringilla vel</p>
                            <a class="readmore" href="blog.html">Continue....</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--CONTACT US AREA-->
    <?php
      require('../../../template/contact-us.php');
    //<!--CONTACT US AREA END-->
    //<!--FOOTER AREA-->
      require('../../../template/footer.php');
    ?>
    <!--FOOTER AREA END-->


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
