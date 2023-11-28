<?php
session_start();

if(!isset($_SESSION['lan'])){
    $_SESSION['lan'] = 'CN';
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <!--=====TITLE=======-->
    <title>Galaxy Far East Limited</title>

    <!--=====CSS=======-->
    <?php include('assets/include/css.php'); ?>

    <style>
        .card {
            padding-right: 0;
            padding-left: 0;
            margin-top: 0

        }


        .custom-btn{
            background: #2658af;
            color: white;
            border: 1px solid #2658af;
            font-weight: 600;
            width: 150px;
            font-size: 14px;
        }


        .custom-btn:hover{
            background: #1e488f;
            color: white;
            border: 1px solid #2658af;
            font-weight: 600;
        }


        @media only screen and (max-width: 550px) {
            .custom-btn{
                width: 75px;
                font-size: 11px;
            }
        }
    </style>

    <!-- UIkit CSS -->
 <!--   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.8/dist/css/uikit.min.css"/>-->

    <!-- UIkit JS -->
  <!--  <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.8/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.8/dist/js/uikit-icons.min.js"></script>-->
</head>

<body>

<!--=====progress START=======-->

<div class="paginacontainer">

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

</div>

<!--=====progress END=======-->


<!--=====HEADER START=======-->
<?php include('assets/include/header.php'); ?>
<!--=====HEADER END=======-->

<!--=====Mobile header start=======-->
<?php include('assets/include/mobile_menu.php'); ?>
<!--=====Mobile header end=======-->

<!--=====Hero start=======-->

<!--<div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push">
    <ul class="uk-slideshow-items">
        <li>
            <img src="assets/img/new/hero1.png" alt="">
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
                <h5 class="uk-margin-remove"><b>Galaxy Far East Limited </b> is a leading engineering construction and
                    international
                    commodity trading company. （字体大一号）</h5>
                <p class="uk-margin-remove"> We responsibly move physical commodities from places they are plentiful to
                    where they are most
                    needed to build better world efficiently.</p>
            </div>
        </li>
        <li>
            <img src="assets/img/new/hero2.png" alt="">
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
                <h3 class="uk-margin-remove"><b>Galaxy Far East Limited </b> is a leading engineering construction and
                    international
                    commodity trading company. （字体大一号）</h3>
                <p class="uk-margin-remove"> We responsibly move physical commodities from places they are plentiful to
                    where they are most
                    needed to build better world efficiently.</p>
            </div>
        </li>
        <li>
            <img src="assets/img/new/hero3.png" alt="">
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
                <h3 class="uk-margin-remove"><b>Galaxy Far East Limited </b> is a leading engineering construction and
                    international
                    commodity trading company. （字体大一号）</h3>
                <p class="uk-margin-remove"> We responsibly move physical commodities from places they are plentiful to
                    where they are most
                    needed to build better world efficiently.</p>
            </div>
        </li>

    </ul>

    <div class="uk-light">
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous
           uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next
           uk-slideshow-item="next"></a>
    </div>
</div>-->


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active ">
            <img src="assets/img/new/hero1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block   d-md-block">
                <div class="  ">
                    <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38 text-white" data-aos="fade-right"
                        data-aos-duration="1300"></h1>
                    <div class="space8"></div>
                    <h6 class=" font-20 line-height-38 font-lg-20  line-height-lg-48 text-white" data-aos="fade-right" data-aos-duration="1000">

                    </h6>
                </div>
            </div>
            <div class="carousel-caption d-block  d-md-block">
                <div class="text-left">
                    <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38 text-white" data-aos="fade-right"
                        data-aos-duration="1300"><b><?php if ($_SESSION['lan'] == 'CN') echo '銀河遠東'; else echo 'Galaxy Far East Limited ' ?></b> <?php if ($_SESSION['lan'] == 'CN') echo '是一家領先的工程建設和國際商品貿易公司.'; else echo 'is a leading engineering construction and  international
                        commodity trading company. ' ?>
                       </h1>
                    <a href="#our_commodities" class="btn btn-success custom-btn mt-2"><?php if ($_SESSION['lan'] == 'CN') echo '瞭解更多'; else echo ' Discover More' ?></a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/new/hero2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block  d-md-block">
                <div class="text-left">
                    <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38 text-white" data-aos="fade-right"
                        data-aos-duration="1300"><b><?php if ($_SESSION['lan'] == 'CN') echo '銀河遠東'; else echo 'Galaxy Far East Limited ' ?></b> <?php if ($_SESSION['lan'] == 'CN') echo '是一家領先的工程建設和國際商品貿易公司.'; else echo 'is a leading engineering construction and  international
                        commodity trading company. ' ?>
                    </h1>
                    <a href="https://join.skype.com/invite/Q1aUan3JSIBE" target="_blank" class="btn btn-success custom-btn mt-2"><?php if ($_SESSION['lan'] == 'CN') echo '瞭解更多'; else echo ' Discover More' ?></a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/new/hero3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block  d-md-block ">
                <div class="text-left">
                    <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38 text-white" data-aos="fade-right"
                        data-aos-duration="1300"><b><?php if ($_SESSION['lan'] == 'CN') echo '銀河遠東'; else echo 'Galaxy Far East Limited ' ?></b> <?php if ($_SESSION['lan'] == 'CN') echo '是一家領先的工程建設和國際商品貿易公司.'; else echo 'is a leading engineering construction and  international
                        commodity trading company. ' ?>
                    </h1>
                    <a href="https://join.skype.com/invite/Q1aUan3JSIBE" target="_blank" class="btn btn-success custom-btn mt-2"><?php if ($_SESSION['lan'] == 'CN') echo '瞭解更多 '; else echo ' Discover More' ?></a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!--=====Hero end=======-->


<!--=====choose us start=======-->
<div class="choose1 sp4" id="about_us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hadding1">
                    <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                        data-aos-duration="1300"><?php if ($_SESSION['lan'] == 'CN') echo '我們是誰'; else echo ' Who We Are？' ?></h1>
                    <div class="space8"></div>
                    <p style="text-align: justify;font-size: 24px" data-aos="fade-right" data-aos-duration="1000"><?php if ($_SESSION['lan'] == 'CN') echo '銀河遠東成立於2018 年，從事工程建設和商品貿易。'; else echo '  <br>Galaxy Far East Limited </b> was established in 2018, engages in engineering construction and
                        commodity
                        trading.' ?></p>
                        <p  style="text-align: justify;font-size: 24px" data-aos="fade-right" data-aos-duration="1200"><?php if ($_SESSION['lan'] == 'CN') echo '我們從事的行業歷史悠久，早在數千年前人類就開始了土木工程和易貨貿易。 '; else echo ' Our industry has a long history, humans began civil engineering and barter trade
                        thousands of years ago.' ?>
                        </p>
                        <p  style="text-align: justify;font-size: 24px" data-aos="fade-right" data-aos-duration="1400"><?php if ($_SESSION['lan'] == 'CN') echo '如今，運用貿易技巧並借助全球網絡，我們履行著分銷及交付實物商品的重要經濟職能，以此平衡全球原材料的供需，滿足發達經濟體與新興經濟體的渴望和需求。'; else echo 'Based on trade techniques and global network, we perform the vital economic function of
                        distributing and
                        delivering physical goods nowadays. In order to balance the global supply and demand of raw
                        materials,
                        and meet the aspirations and needs of advanced and emerging economies.' ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="choose-image-all text-center">
                    <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="assets/img/new/who-we-are.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="coumter1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-sm-6 col-4 text-center">
                            <div class="counter-hadding" data-aos="zoom-out" data-aos-duration="1000">
                                <p class="fs-6" style="font-size: 29px !important;"><?php if ($_SESSION['lan'] == 'CN') echo '活躍 '; else echo 'Active' ?></p>
                                <h1 class="text-black"><?php if ($_SESSION['lan'] == 'CN') echo '兩個國家 （中国 & 印度）'; else echo '2 Countries' ?> </h1>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-lg-4 text-center col-4">
                            <div class="counter-hadding" data-aos="zoom-out" data-aos-duration="1600">
                                <p class="fs-6"  style="font-size: 29px !important;"><?php if ($_SESSION['lan'] == 'CN') echo '服務'; else echo 'Service' ?></p>
                                <h1 class="text-black"><?php if ($_SESSION['lan'] == 'CN') echo '於四個行業'; else echo '4 Industries' ?> </h1>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-lg-4 text-center col-4">
                            <div class="counter-hadding" data-aos="zoom-out" data-aos-duration="1400">
                                <p class="fs-6"  style="font-size: 29px !important;"><?php if ($_SESSION['lan'] == 'CN') echo '辦公 '; else echo 'Offices' ?></p>
                                <h1 class="text-black"><?php if ($_SESSION['lan'] == 'CN') echo '四個地點'; else echo '4 Locations' ?> </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-3">
            <div class="col-lg-6 order-lg-1 order-0">
                <div class="choose-image-all text-center">
                    <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="assets/img/new/our-advantages.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 order-lg-1 order-0">
                <div class="hadding1">
                    <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                        data-aos-duration="1300"><?php if ($_SESSION['lan'] == 'CN') echo '我們的優勢 '; else echo 'Our Advantages' ?></h1>
                    <div class="space8"></div>
                    <p style="text-align: justify;font-size: 24px" data-aos="fade-right" data-aos-duration="1000"><?php if ($_SESSION['lan'] == 'CN') echo '銀河遠東最顯著的優勢是遍布主要業務地點的員工網絡。通過在交易商品的主要地點開設辦公室，員工就當地市場情況提供的信息對確定我們的業務經營至關重要。 '; else echo 'Our most significant advantage is its employee network spread across major business locations.
                        By opening offices at the main locations where goods are traded, local market information
                        provided by employees is crucial for our business operations.' ?></p>
                        <p style="text-align: justify;font-size: 24px" data-aos="fade-right" data-aos-duration="1000"><?php if ($_SESSION['lan'] == 'CN') echo '辦公室網絡也為我們提供了最新的洞見和市場認知。當地的員工可幫助我們訂立新合同，加強與供應商和客戶的關係，從而提高公司的採購和分銷能力。 '; else echo ' The office network also supports us with the latest insights and market awareness. Local
                        employees can help us sign new contracts, strengthen relationships with suppliers and customers,
                        and thereby enhance our procurement and distribution capabilities.' ?></p>
                        <p style="text-align: justify;font-size: 24px" data-aos="fade-right" data-aos-duration="1000"><?php if ($_SESSION['lan'] == 'CN') echo '我們嚴格執行“瞭解你的客戶”(KYC)程序並遵守對所有員工具有強制力的全面的“商業行為守則” '; else echo '  We strictly adhere to the \'Know Your Customer\' (KYC) procedure and adhere to a comprehensive and
                        mandatory \'Code of Business Conduct\' for all employees.' ?></p>
                </div>
            </div>
        </div>
        <div class="row  align-items-center mt-5  ">
            <div class="hadding1  mb-3">
                <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38 text-center" data-aos="fade-right"
                    data-aos-duration="1300"><?php if ($_SESSION['lan'] == 'CN') echo '我們做什么 '; else echo 'What We Do？' ?></h1>
                <div class="space30"></div>
            </div>
            <div class="card  col-lg-2 col-12  mb-3 mr-2" style="  height: 600px;">
                <img src="assets/img/new/salt.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h6 class="card-title"><?php if ($_SESSION['lan'] == 'CN') echo '原鹽行業 '; else echo 'SALT INDUSTRY' ?></h6>
                    <p style="text-align: justify" class="card-text"><?php if ($_SESSION['lan'] == 'CN') echo '銀河遠東與印度領先的鹽礦合作，將優質的散裝原鹽發往中國，為中國氯鹼和純鹼化工企業提供質優價廉的生產原料，用於生產聚氯乙烯樹脂、燒鹼、純鹼等化工產品，並將這些化工產品推廣到南亞和中東市場； '; else echo 'Supported by leading Salt mines in India on
                        partnership, we ship raw Salt in
                        bulk to China, which is high-quality and low-cost raw materials for Chinese Chlor-Alkali and
                        Soda Ash Plants, to manufacture chemical products like PVC Resin, Caustic Soda, Soda Ash etc.,
                        and promote these chemical products to South Asia and Middle East market.' ?></p>
                </div>
            </div>
            <div class="card  col-lg-2 col-12 mb-3 mr-2" style="  height: 600px;">
                <img src="assets/img/new/chemical.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h6 class="card-title"><?php if ($_SESSION['lan'] == 'CN') echo '化工行業 '; else echo 'CHEMICAL INDUSTRY' ?></h6>
                    <p style="text-align: justify" class="card-text"><?php if ($_SESSION['lan'] == 'CN') echo '銀河遠東提供中國的化工設備和生產技術，協助印度鹽礦建立化工廠，生產液體溴素和溴化學品，這些化學產品可以為當地的制藥行業和油田開採提供生產原料； '; else echo 'We support Indian Salt mines to set up chemical
                        plants, with Chinese Chemical
                        Equipment & Technology, to manufacture liquid Bromine and Bromides, which are raw materials for
                        local pharmaceutical and oil field exploration industries.' ?></p>
                </div>
            </div>
            <div class="card  col-lg-2 col-12 mb-3 mr-2" style="  height: 600px;">
                <img src="assets/img/new/our-commodities2.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h6 class="card-title"><?php if ($_SESSION['lan'] == 'CN') echo '鐵礦和鋼鐵行業 '; else echo 'IRON ORE & STEEL INDUSTRY' ?></h6>
                    <p style="text-align: justify" class="card-text"><?php if ($_SESSION['lan'] == 'CN') echo '銀河遠東與中國鋼鐵廠的買家進行印度鐵礦石的大宗貿易，生產鋼鐵產品。我們還向中國當地合作夥伴採購和銷售鋼筋等結構鋼，用於房地產建設。 '; else echo 'We trade India Iron Ore in bulk with buyers for  Chinese steel works, to
                        manufacturer steel products. We also purchase and sell structural steel like Rebar to our
                        Chinese local partners for real estate construction. ' ?></p>
                </div>
            </div>
            <div class="card  col-lg-2 col-12 mb-3 mr-2" style="  height: 600px;">
                <img src="assets/img/new/real.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h6 class="card-title"><?php if ($_SESSION['lan'] == 'CN') echo '房地產建築行業 '; else echo 'REAL-ESTATE CONSTRUCTION INDUSTRY' ?></h6>
                    <p style="text-align: justify" class="card-text"><?php if ($_SESSION['lan'] == 'CN') echo '我們在中國大陸從事房地產工程建設，建設項目座落於安徽、湖北、江蘇等省份，年建築面積約2000萬平方英尺，年產值約人民幣25 億。 '; else echo 'We are engaged in real estate construction Industry
                        in Chinese Mainland. Our
                        projects are in Anhui, Hubei and Jiangsu provinces, with under-construction area around 20
                        million square feet and value of construction around CNY 2.5 billion annually.' ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-5" id="our_commodities">
            <div class="hadding1">
                <h1 class="font-10 font-lg-40  line-height-lg-48 line-height-38 text-center" data-aos="fade-right"
                    data-aos-duration="1300"><?php if ($_SESSION['lan'] == 'CN') echo '我們的商品 '; else echo 'OUR COMMODITIES' ?></h1>
                <div class="space30"></div>
            </div>
            <div class="row align-items-center mt-5 mb-5">
                <div class="col-lg-6 order-lg-0 order-1">
                    <div class="choose-image-all text-center">
                        <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                            <img src="assets/img/new/our-commodities1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 order-0  mb-3">
                    <div class="hadding1">
                        <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                            data-aos-duration="1300"><?php if ($_SESSION['lan'] == 'CN') echo '原鹽'; else echo 'Salt in bulk' ?></h1>
                        <div class="space8"></div>
                        <p data-aos="fade-right" data-aos-duration="1000"><?php if ($_SESSION['lan'] == 'CN') echo '我們通過散貨船供應散裝印度海鹽發往中國，氯化鈉含量從94%到 99.5%，可滿足氯鹼和純鹼工業使用需求。'; else echo 'We trade Sea Salt in bulk for Chlor-Alkali &
                            Soda
                            Ash Industrial use, with pure NaCl from 94% to 99.5% from India to China.' ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6  mb-3">
                <div class="hadding1">
                    <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                        data-aos-duration="1300"><?php if ($_SESSION['lan'] == 'CN') echo '鐵礦'; else echo 'Iron Ore in bulk' ?></h1>
                    <div class="space8"></div>
                    <p data-aos="fade-right" data-aos-duration="1000"><?php if ($_SESSION['lan'] == 'CN') echo '我們通過散貨船供應印度鐵礦粉/球團發往中國，礦粉鐵含量從52%到65%'; else echo 'We trade Iron Ore Fine/Pellet in bulk for Steel Works with Fine Fe content from 52% to 65%
                        from
                        India to China.' ?>

                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-image-all text-center">
                    <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="assets/img/new/our-commodities2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-5">
            <div class="col-lg-6 order-lg-0 order-1">
                <div class="choose-image-all text-center">
                    <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="assets/img/new/our-commodities3.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 order-0  mb-3">
                <div class="hadding1">
                    <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                        data-aos-duration="1300"><?php if ($_SESSION['lan'] == 'CN') echo '聚氯乙烯樹脂'; else echo 'PVC Resin' ?></h1>
                    <div class="space8"></div>
                    <p data-aos="fade-right" data-aos-duration="1000"><?php if ($_SESSION['lan'] == 'CN') echo '我們交易中國產聚氯乙烯樹脂，產品源於乙烯法或者電石法生產工藝，K 值從 55 到 70，用於生產管材，型材，地板，電纜等產品。'; else echo 'We trade PVC Resin K value from 55-70 range from Ethylene basis or Carbide basis, for Pipe,
                        Profile, Floor and Cable application, from China to India.' ?>
                    </p>

                </div>
            </div>
        </div>
        <div class="row align-items-center mt-5  mb-3">
            <div class="col-lg-6">
                <div class="hadding1">
                    <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                        data-aos-duration="1300"><?php if ($_SESSION['lan'] == 'CN') echo '溴素和溴化學品'; else echo 'Liquid Bromine' ?></h1>
                    <div class="space8"></div>
                    <p data-aos="fade-right" data-aos-duration="1000"><?php if ($_SESSION['lan'] == 'CN') echo '我們供應印度產溴素通過ISO儲罐運輸，以及溴化鈉和溴化鈣等化學品，可通過集裝箱船發往各主要海港。'; else echo 'We supply Liquid Bromine by ISO tank, NaBr and
                        CaBr2 from India, with container shipping line service to different main sea ports.' ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="choose-image-all text-center">
                    <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="assets/img/new/our-commodities4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-5">
            <div class="col-lg-6 order-lg-0 order-1">
                <div class="choose-image-all text-center">
                    <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="assets/img/new/our-commodities5.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 order-0 mb-3">
                <div class="hadding1">
                    <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                        data-aos-duration="1300"> <?php if ($_SESSION['lan'] == 'CN') echo '建築鋼材'; else echo 'Structural Steel-Rebar ' ?></h1>
                    <div class="space8"></div>
                    <p data-aos="fade-right" data-aos-duration="1000"><?php if ($_SESSION['lan'] == 'CN') echo '我們採購和銷售建築鋼材，如螺紋鋼產品，用於中國的土木工程建設或者出口到其他國家。'; else echo 'We purchase and sell structural steel like Rebar, for local civil engineering construction
                        in
                        China or export to other countries.' ?>

                    </p>

                </div>
            </div>
        </div>
        <div class="row align-items-center mt-5 ">
            <div class="col-lg-6">
                <div class="hadding1">
                    <h1 class="font-30 font-lg-40  line-height-lg-48 line-height-38" data-aos="fade-right"
                        data-aos-duration="1300"><?php if ($_SESSION['lan'] == 'CN') echo '化工設備和技术'; else echo 'Chemical Equipment & Technology' ?></h1>
                    <div class="space8"></div>
                    <p data-aos="fade-right" data-aos-duration="1000"><?php if ($_SESSION['lan'] == 'CN') echo '我們提供從鹵水中提取溴素的生產裝置及技術，幫助客戶設立工廠生產溴素及溴化物產品。'; else echo 'We supply Cold process Bromine Plant and
                        Technology, to produce Bromine or Bromide from brine.' ?>

                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="choose-image-all text-center">
                    <div class="choose1-img border5" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="assets/img/new/our-commodities6.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====choose us end=======-->

<!--=====Footer start=======-->
<footer class="footer-area padding-top font-f-2" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-footer mr50 hadding2">
                    <div class="site-logo home1-site-logo">
                        <a href="#"
                        ><img src="assets/img/new/logo.png" alt=""/>
                        </a>
                    </div>
                    <div class="hadding3">
                        <p><?php if ($_SESSION['lan'] == 'CN') echo '我們負責任地將實物商品從產能過剩之地轉移至需求旺盛之地，高效地建設更美好的世界。'; else echo '  We responsibly move physical commodities from places they are plentiful to where they are most needed to build better world efficiently.' ?>

                        </p>
                    </div>
                </div>
                <div class="space24"></div>
            </div>
            <div class="col-lg-4 col-sm-6 hadding2 mt-4  ">
                <div class="single-footer">
                    <h3 class="font-f-2 fs-5 weight-700 line-height-20">
                        Quick Links
                    </h3>
                    <div>
                        <ul class="font-f-2 font-16 line-height-26 pera-c-1">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="#about_us">ABOUT US</a></li>
                            <li><a href="#our_commodities">OUR COMMODITIES</a></li>
                            <li><a href="#contact">CONTACT US</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 hadding1 mt-4 ">
                <div class="single-footer-contact single-footer">
                    <h3 class="font-f-2 fs-5 weight-700 line-height-20"><?php if ($_SESSION['lan'] == 'CN') echo '聯繫我們'; else echo ' CONTACT US' ?></h3>


                    <div class="padding-left20">
                        <div class="">
                            <p><?php if ($_SESSION['lan'] == 'CN') echo '地址：'; else echo ' Address:' ?><br><?php if ($_SESSION['lan'] == 'CN') echo '香港油麻地彌敦道 498-500 號泰盛商業大廈 5/F'; else echo ' 5/F TAI SHING COMMERCIAL BUILDING, 498-500 NATHAN
                                ROAD, KOWLOON,
                                HONGKONG' ?></p>
                        </div>
                        <div class="space5"></div>
                        <div class="foonter-contact3">
                            <div class="foonter-contact-p3">
                                <p>Email :<br>INFO@GALAXYFAREAST.COM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row align-items-center copyright2">
                <div class="col-lg-12 text-center">
                    <p class="font-16 weight-400 font-f-2 line-height-16 pera-c-1">
                        © 2023 <b>Galaxy Far East Limited</b>. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=====Footer end=======-->


<!--=====JS=======-->
<?php include('assets/include/js.php'); ?>
</body>
</html>
