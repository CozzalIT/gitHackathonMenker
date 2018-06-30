<script src="assets/js/landing-page.js"></script>

<div class="welcome-text-area white" style="margin-top: -50px;">
    <div class="area-bg"></div>
    <div class="welcome-area">
        <div class="container">
            <div class="row flex-v-center">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="welcome-text">
                        <h1>Bergabung bersama para pekerja industri kreatif dan freelancer</h1>
                        <p>Dapatkan informasi lebih serta relasi yang lebih luas dalam lingkup nasional guna mengembangkan usaha yang anda jalani</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="background:#00000060; padding-top:20px; border-radius:8px;">

                  <div class="contact-form mb50 wow fadeIn">
                      <form action="process.php" id="daftar" method="post">
                        <h3><center>DAFTARKAN DIRI ANDA</center></h3>
                          <div class="form-group" id="name-field">
                              <div class="form-input">
                                  <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Nama.." required>
                              </div>
                          </div>
                          <div class="form-group" id="email-field">
                              <div class="form-input">
                                  <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email.." required>
                              </div>
                          </div>
                          <div class="form-group" id="phone-field">
                              <div class="form-input">
                                  <input type="text" class="form-control" id="form-phone" name="form-phone" placeholder="Password..">
                              </div>
                          </div>
                          <div class="form-group">
                              <button class="btn btn-primary" type="submit" style="background:black; width: 100%">Daftar Baru</button>
                              <center><p> --- Atau --- </p></center>
                               <button type="reset" id="to_login" class="btn btn-primary" style="background:gray; width: 100%">Sudah Daftar</button>
                          </div>
                      </form>

                      <form action="modules/login/controller/login.php" id="login" method="post">
                        <h3><center>Silahkan Masuk</center></h3>
                          <div class="form-group" id="name-field">
                              <div class="form-input">
                                  <input type="text" class="form-control" id="form-name" name="form-name" name="Username" placeholder="Username ..." required>
                              </div>
                          </div>
                          <div class="form-group" id="email-field">
                              <div class="form-input">
                                  <input type="password" class="form-control" id="form-email" name="form-email" placeholder="Password ..." required>
                              </div>
                          </div>
                          <div class="form-group">
                              <button class="btn btn-primary" type="submit" style="background:#1e88e5; width: 100%" name="requestLogin">Masuk</button>
                              <hr>
                               <button type="reset" id="to_daftar" class="btn btn-primary" style="background:#eaf9ff; width: 100%; color:black;">Kembali</a>
                          </div>
                      </form>

                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
