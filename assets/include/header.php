<header>
    <div class="header-area header-area-all d-none d-lg-block" id="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-elements">
                        <div class="site-logo home1-site-logo">
                            <a href="index.php"
                            ><img src="assets/img/new/logo.png" alt=""/>
                            </a>
                        </div>


                        <div class="main-menu-ex main-menu-ex1 m-auto">
                            <ul class="font-f-2">
                                <li ><a href="index.php"><?php if ($_SESSION['lan'] == 'CN') echo '主頁'; else echo 'HOME' ?></a>
                                </li>
                                <li><a href="#about_us"><?php if ($_SESSION['lan'] == 'CN') echo '關於我們'; else echo 'ABOUT US' ?></a>
                                </li>
                                <li><a href="#our_commodities"><?php if ($_SESSION['lan'] == 'CN') echo '我們的商品'; else echo 'OUR COMMODITIES' ?></a>
                                </li>
                                <li><a href="#contact"><?php if ($_SESSION['lan'] == 'CN') echo '聯繫我們'; else echo 'CONTACT US' ?></a></li>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success custom-btn" style="border-radius: 15px" data-bs-toggle="dropdown" aria-expanded="false">Language</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="assets/include/lan.php?lan=EN">English</a></li><br>
                                        <li><a class="dropdown-item" href="assets/include/lan.php?lan=CN">繁體中文</a></li>
                                    </ul>
                                </div>


                            </ul>
                        </div>

                        <div class="mobile-menu-bar d-lg-none">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>