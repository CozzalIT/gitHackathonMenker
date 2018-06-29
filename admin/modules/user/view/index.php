<!DOCTYPE html>
<?php
  require('../../../template/head.php');
  $thisPage='user';
?>

<body class="">
  <div class="wrapper ">
    <?php
      require('../../../template/sidebar.php');
    ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php
        require('../../../template/navbar.php');
      ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data User</h4>
                  <p class="card-category"> Pekerja industri kreatif dan Pekerja lepasan</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          NO
                        </th>
                        <th>
                          NIK
                        </th>
                        <th>
                          Nama
                        </th>
                        <th>
                          Sub Sektor
                        </th>
                        <th>
                          Alamat
                        </th>
                        <th>
                          <center>
                            Action
                          </center>
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            2510450710920005
                          </td>
                          <td>
                            Ridwan Niagara
                          </td>
                          <td>
                            Arsitektur
                          </td>
                          <td class="text-primary">
                            Jakarta, Jakarta Utara
                          </td>
                          <td>
                            <center>
                              <a href="#pablo" class="btn btn-primary btn-round">Manage<div class="ripple-container"></div></a>
                              <a href="#pablo" class="btn btn-danger btn-round">Blok<div class="ripple-container"></div></a>
                            </center>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            2510244511900001
                          </td>
                          <td>
                            Rinjani Amalia
                          <td>
                            Fashion
                          </td>
                          <td class="text-primary">
                            Jawa Barat, Bandung
                          </td>
                          <td>
                            <center>
                              <a href="#pablo" class="btn btn-primary btn-round">Manage<div class="ripple-container"></div></a>
                              <a href="#pablo" class="btn btn-danger btn-round">Blok<div class="ripple-container"></div></a>
                            </center>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            4578361245895489
                          </td>
                          <td>
                            Ahmad Subarjo
                          </td>
                          <td>
                            Desain Interior
                          </td>
                          <td class="text-primary">
                            Jawa Timur, Malang
                          </td>
                          <td>
                            <center>
                              <a href="#pablo" class="btn btn-primary btn-round">Manage<div class="ripple-container"></div></a>
                              <a href="#pablo" class="btn btn-danger btn-round">Blok<div class="ripple-container"></div></a>
                            </center>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="#">
                  About Us
                </a>
              </li>
              <li>
                <a href="#">
                  Blog
                </a>
              </li>
              <li>
                <a href="#">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="#" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../../../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../../../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../../../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../../../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
