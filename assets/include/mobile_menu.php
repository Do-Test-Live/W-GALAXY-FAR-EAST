<div class="mobile-header mobile-header-4 d-block d-lg-none d-md-none">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="index.php"><img src="assets/img/new/logo.png" alt="" style="width: 80%"></a>
                </div>
                <div class="mobile-nav-icon">
                    <i class="fa-solid fa-bars" style="color: #212529;"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar d-block d-lg-none" id="mobile-menu">
    <div class="menu-logo">
        <a href="#"><img src="assets/img/new/logo.png" alt=""></a>
    </div>
    <div class="menu-close">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">
        <li><a href="index.php"><?php if ($_SESSION['lan'] == 'CN') echo '主頁'; else echo 'HOME' ?></a>
        </li>
        <li><a href="index.php#about_us"><?php if ($_SESSION['lan'] == 'CN') echo '關於我們'; else echo 'ABOUT US' ?></a>
        </li>
        <li><a href="index.php#our_commodities"><?php if ($_SESSION['lan'] == 'CN') echo '我們的商品'; else echo 'OUR COMMODITIES' ?></a>
        </li>
        <li><a href="index.php#contact"><?php if ($_SESSION['lan'] == 'CN') echo '聯繫我們'; else echo 'CONTACT US' ?></a>
        </li>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" style="background-color: #1349a8;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Language
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="assets/include/lan.php?lan=EN">English</a></li>
                <li><a class="dropdown-item" href="assets/include/lan.php?lan=CN">繁體中文</a></li>
            </ul>
        </div>


        <!--<div class="contact-mobile-menu-into">
            <div class="space50"></div>
            <div class="mobile-menu-contact-info-box">
                <div class="">
                    <div class="contact-box-img">
                        <img src="assets/img/icons/contact-page-icon1.svg" alt="">
                    </div>
                </div>
                <div class="contact-hadding">
                    <p>Call</p>
                    <a href="tel:+921-2322-2222" class="font-f-2 font-20 weight-400 line-height-30">+ 921 2322 2222</a>
                </div>
            </div>
            <div class="space40"></div>


            <div class="mobile-menu-contact-info-box">
                <div class="">
                    <div class="contact-box-img">
                        <img src="assets/img/icons/contact-page-icon2.svg" alt="">
                    </div>
                </div>
                <div class="contact-hadding">
                    <p>Email Us</p>
                    <a href="mailto:Info@Example.com" class="font-f-2 font-20 weight-400 line-height-30">Info@Example.com</a>
                </div>
            </div>
            <div class="space40"></div>


            <div class="mobile-menu-contact-info-box">
                <div class="">
                    <div class="contact-box-img">
                        <img src="assets/img/icons/contact-page-icon3.svg" alt="">
                    </div>
                </div>
                <div class="contact-hadding">
                    <p>Office Address</p>
                    <a href="mailto:Maryjane38@gmail.com " class="font-f-2 font-20 weight-400 line-height-30">2025
                        Rockledge #130 Rockledge, United States
                    </a>
                </div>
            </div>
            <div class="space50"></div>

            <div class="social social1">
                <ul>
                    <li>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                    </li>
                </ul>
            </div>


        </div>-->
    </div>
</div>