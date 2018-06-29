<div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      MENKER
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item <?php if($thisPage=='dashboard') {echo 'active';} ?>">
        <a class="nav-link" href="../../home/view/">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item <?php if($thisPage=='user') echo 'active'; ?>">
        <a class="nav-link" href="../../user/view/">
          <i class="material-icons">person</i>
          <p>Data User</p>
        </a>
      </li>
      <li class="nav-item <?php if($thisPage=='sub-sector') echo 'active'; ?>">
        <a class="nav-link" href="../../sub-sector/view/">
          <i class="material-icons">horizontal_split</i>
          <p>Sub Sektor</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../home/view/">
          <i class="material-icons">event</i>
          <p>Acara</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../home/view/">
          <i class="material-icons">library_books</i>
          <p>Berita</p>
        </a>
      </li>
      <!-- <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
                <i class="material-icons">unarchive</i>
                <p>Upgrade to PRO</p>
            </a>
        </li> -->
    </ul>
  </div>
</div>
