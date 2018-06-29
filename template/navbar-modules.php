<div class="mainmenu-area mod-navbar" id="">
    <div class="mainmenu-area-bg"></div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#home" class="navbar-brand"><img src="../../../assets/img/logo.png" alt="logo" class="brand-mod"></a>
            </div>
            <div id="main-nav" class="stellarnav">
                <ul id="nav" class="nav">
                    <li <?php if ($thisPage=="Beranda") echo "class='active'";?>><a href="../../beranda/view/">Beranda</a></li>
                    <li <?php if ($thisPage=="Pesan") echo "class='active'";?>><a href="../../message/view">Pesan</a></li>
                    <li <?php if ($thisPage=="Cari Relasi") echo "class='active'";?>><a href="../../search/view">Cari Relasi</a></li>
                    <li <?php if ($thisPage=="Acara") echo "class='active'";?>><a href="../../event/view">Acara</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="search-form-switcher" class="search-collapse-area collapse white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="white">
                        <form action="#" class="search-form">
                            <input type="search" name="search" id="search" placeholder="Search Here..">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
