<?php
require 'admin/tesst/DAO.php';
$DAO = new DAO();
$Id = $_GET['Id'];
$DAO->getDetailProduct($Id);
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="The firm creates sustainable buildings and spaces., 01, Awesome Interiors, 02, Fresh and Creative, Meet our creative team, Pricing Table Template">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Trang Thong Tin Chi Tiet</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Trang-Thong-Tin-Chi-Tiet.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica:400">






    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "url": "index.html",
            "sameAs": []
        }</script>
    <meta property="og:title" content="Trang Thong Tin Chi Tiet">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="Recycle/index.html">
    <meta property="og:url" content="index.html">
</head>
<body class="u-body u-overlap"><header class="u-clearfix u-header u-header" id="sec-d346"><div class="u-social-icons u-spacing-10 u-social-icons-1">
        <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-type-logo u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e6c0"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-e6c0"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
        </a>
        <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-twitter u-social-type-logo u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4ef4"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-4ef4"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
        </a>
        <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-instagram u-social-type-logo u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e6f4"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-e6f4"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
        </a>
    </div><form action="#" class="u-search u-search-left u-search-1">
        <button class="u-search-button" type="submit">
          <span class="u-search-icon u-spacing-10">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 52.966 52.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3166"></use></svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-3166" x="0px" y="0px" viewBox="0 0 52.966 52.966" style="enable-background:new 0 0 52.966 52.966;" xml:space="preserve" class="u-svg-content"><path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21  c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279  C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19  S32.459,40,21.983,40z"></path></svg>
          </span>
        </button>
        <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
    </form><nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse">
            <a class="u-button-style u-nav-link u-text-black" href="#">
                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
                        </symbol>
                    </defs></svg>
            </a>
        </div>
        <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-black u-text-hover-palette-2-base" href="index.php" style="padding: 10px 18px;">Trang Chinh</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-black u-text-hover-palette-2-base" href="Trang-giỏ-hàng.html" style="padding: 10px 18px;">Giỏ hàng</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-black u-text-hover-palette-2-base" style="padding: 10px 18px;">Hỏi đáp</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-black u-text-hover-palette-2-base" style="padding: 10px 18px;">Hỗ trợ</a>
                </li></ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                <div class="u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Trang-chính.html" style="padding: 10px 18px;">Trang Chinh</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Trang-giỏ-hàng.html" style="padding: 10px 18px;">Giỏ hàng</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 18px;">Hỏi đáp</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 18px;">Hỗ trợ</a>
                        </li></ul>
                </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
    </nav><h4 class="u-align-left u-custom-font u-text u-text-1">TechL​​​ife<br>
    </h4><h4 class="u-align-left u-text u-text-2">- Công nghệ và cuộc sống -</h4><div class="u-align-left u-border-1 u-border-grey-15 u-expanded-width u-line u-line-horizontal u-line-1"></div><nav class="u-menu u-menu-dropdown u-offcanvas u-menu-2">
        <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#">
                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
                        </symbol>
                    </defs></svg>
            </a>
        </div>
        <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Laptop</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Màn hình</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Bàn phím</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Chuột - Lót chuột</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Tai nghe gaming</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Ghế gaming</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Console</a>
                </li></ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                <div class="u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-nav u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Laptop</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Màn hình</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Bàn phím</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Chuột - Lót chuột</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Tai nghe gaming</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Ghế gaming</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 32px;">Console</a>
                        </li></ul>
                </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
    </nav></header>
<section class="u-clearfix u-section-1" id="carousel_9217">
    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
            <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                        <?php
                        foreach ($_SESSION['listDetailProduct'] -> message as $listRecommendations){
                            echo '<h2 class="u-text u-text-1">';echo $listRecommendations->Laptop_Name,'<br>';
                        }
                        ?>
                    </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-valign-bottom-xs u-container-layout-2">
                        <?php
                        foreach ($_SESSION['listDetailProduct'] -> message as $listRecommendations){
                            if($listRecommendations->Laptop_Picture == "null"){
                                $picture = "nopicture.png";
                            }
                            else{
                                $picture = $listRecommendations->Laptop_Picture;
                            }
                            echo '<img class="u-expand-resize u-image u-image-1" src="images/';echo $picture,'">';
                            echo '<h4 class="u-align-center-xs u-text u-text-palette-2-base u-text-3">';echo $listRecommendations->Laptop_Money,'</h4>';
                        }
                        ?>
                        <a href="Thanh-Toan.html" data-page-id="55856673" class="u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-palette-2-base u-radius-50 u-btn-1">Mua ngay</a>
                        <a href="Gio-Hang.html" data-page-id="2311505361" class="u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-1-base u-radius-50 u-btn-2">Thêm vào giỏ hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-b044">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">Cấu hình chi tiết</h2>
        <p class="u-text u-text-2">Dưới đây là cấu hình chi tiết (mang tính tham khảo)</p>
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
            <div class="u-layout" style="">
                <div class="u-layout-row" style="">
                    <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                        <div class="u-container-layout u-valign-top u-container-layout-1">
                            <ul class="u-align-left u-custom-list u-text u-text-3">
                                <?php
                                foreach ($_SESSION['listDetailProduct']-> message as $key => $value){
                                    echo '
                                <li style="margin-left: 1.8em;">
                                    <div class="u-list-icon u-text-palette-2-base">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 344.406 344.406" x="0px" y="0px" id="svg-7fbc" style="margin: -1.3em; font-size: 1.3em;"><g><g><path d="M243.243,0h-142.08c-13.767,0.044-24.916,11.193-24.96,24.96v298.8c0,21,21.04,31.2,37.48,5l58.52-93.28l58.52,93.28    c16.44,26.2,37.48,15.96,37.48-5V24.96C268.159,11.193,257.01,0.044,243.243,0z"></path>
                                                </g>
                                            </g></svg>
                                    </div> ';echo"Tên máy: ".$value->Laptop_Name,' </br>
                                           ';echo"Hệ điều hành: ".$value->Laptop_OS,' </br>
                                           ';echo"Hãng sản xuất: ".$value->Laptop_Manufacturer,' </br>
                                           ';echo"CPU máy: ".$value->Laptop_CPU,' </br>
                                           ';echo"Dung lượng Ram: ".$value->Laptop_Ram,' </br>
                                           ';echo"Chip đồ họa: ".$value->Laptop_VGA,' </br>
                                           ';echo"Dung lượng HDD: ".$value->Laptop_Hdd,' </br>
                                </li>
                        </ul>
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle u-container-layout-2">
                            <ul class="u-align-left u-custom-list u-text u-text-4">
                                <li style="margin-left: 1.8em;">
                                    <div class="u-list-icon u-text-palette-2-base">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 344.406 344.406" x="0px" y="0px" id="svg-7fbc" style="margin: -1.3em; font-size: 1.3em;"><g><g><path d="M243.243,0h-142.08c-13.767,0.044-24.916,11.193-24.96,24.96v298.8c0,21,21.04,31.2,37.48,5l58.52-93.28l58.52,93.28    c16.44,26.2,37.48,15.96,37.48-5V24.96C268.159,11.193,257.01,0.044,243.243,0z"></path>
                                                </g>
                                            </g></svg>
                                    </div> ';echo"Dung lượng SSD: ".$value->Laptop_Ssd,' </br>
                                           ';echo"Màn hình: ".$value->Laptop_Display,' </br>
                                           ';echo"Cổng LAN: ".$value->Laptop_Lan,' </br>
                                           ';echo"Wifi: ".$value->Laptop_WirelessLan,' </br>
                                           ';echo"Các cổng kết nối: ".$value->Laptop_ConnectionGate,' </br>
                                           ';echo"Bàn phím: ".$value->Laptop_KeyBoard,' </br>
                                           ';echo"Dung lượng pin: ".$value->Laptop_Pin,' </br>
                                           ';echo"Trọng lượng: ".$value->Laptop_Weight,' </br>
                                           ';echo"Ổ đĩa quang: ".$value->Laptop_OpticalDrive,' </br>
                                </li>
                            </ul>
                        </div>
                    </div>';
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-section-3" id="carousel_aa35">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-white u-layout-cell-1">
                        <div class="u-container-layout u-valign-top u-container-layout-1">
                            <h1 class="u-text u-text-1">01</h1>
                            <h2 class="u-text u-text-2">THIẾT KẾ GAMING</h2>
                            <p class="u-text u-text-3">Nitro 7&nbsp;AN715-54-750K&nbsp;là bản nâng cấp hoàn hảo của Nitro 5. Chất liệu nhôm nguyên khối chắc chắn chỉ mỏng 19.9mm. Vỏ họa tiết phây xước chéo với điểm nhấn bằng những đường cắt bóng mờ. Viền màn hình mỏng 7.4mm và tỉ lệ màn hình so với thân máy đạt 80%. Tổng thể thiết kế hài hòa và góc cạnh đậm chất gaming.</p>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-white u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                            <h1 class="u-text u-text-4">02</h1>
                            <h2 class="u-text u-text-5">KẾT NỐI GAMING</h2>
                            <p class="u-text u-text-6">Nitro 7&nbsp;AN715-54-750K&nbsp;được trang bị kết kên Ethernet siêu tốc Killer™ Ethernet E2500. Wi-Fi Gigabit 5 với công nghệ 2×2 MU-MIMO. Đầy đủ các cổng kết nối khác như HDMI 2.0, USB Type-C 3.2 Gen 1…</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-section-4" id="sec-72f7">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-white u-layout-cell-1">
                        <div class="u-container-layout u-valign-top u-container-layout-1">
                            <h1 class="u-text u-text-1">03</h1>
                            <h2 class="u-text u-text-2">NITRO SENSE</h2>
                            <p class="u-text u-text-3">NitroSense - một ứng dụng có thể truy cập được bằng một chạm thông qua phím nóng NitroSense trên bàn phím. Sau khi bật, người dùng có thể trực quan theo dõi được ngay nhiệt độ, hiệu suất, năng lượng sử dụng và nhiều thứ khác. Ứng dụng này cũng cho phép theo dõi tốc độ quạt và điều chỉnh trong thời gian thực, do đó game thủ có thể tùy chỉnh tốc độ quạt theo ý muốn của mình bất kỳ lúc nào.</p>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-white u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                            <h1 class="u-text u-text-4">04</h1>
                            <h2 class="u-text u-text-5">CẤU HÌNH GAMING</h2>
                            <p class="u-text u-text-6">Màn hình độ phân giải cao kích thước 15,6 inch có khả năng tái tạo màu sắc chân thật với tần số quét 144Hz và thời gian phản hồi 3 ms, mang lại trải nghiệm mượt mà mà không bị rách hay xé khung hình. Bộ xử lý Intel® Core ™ thế hệ thứ 9 và GPU NVIDIA mới nhất cung cấp hiệu năng vượt trội cho Nitro 7 đảm bảo quá trình chơi game không bị gián đoạn. Chiếc laptop cũng sở hữu khả năng lưu trữ lớn, với hai khe cắm có sẵn SSD PCIe M.2 Gen 3x4 sử dụng công nghệ NVMe RAID 0, bộ nhớ RAM DDR4 lên đến 32GB cùng ổ cứng HDD lên đến 2TB.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-section-5" id="sec-a194">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-white u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-1">
                            <h1 class="u-text u-text-1">05</h1>
                            <h2 class="u-text u-text-2">CHẤT LƯỢNG ÂM THANH PHÒNG THU</h2>
                            <p class="u-text u-text-3">Chất lượng âm thanh được xử lý bằng phần mềm Waves MaxxAudio® và Acer TrueHarmony™ đưa chất lượng âm thanh phòng thu đến gần hơn với người dùng máy tính tại nhà, giúp game thủ như đang ở trong không gian sống động của các cuộc đua nghẹt thở.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
        background-color: #ffffff !important
    }</style>


<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-32e3"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
    </div></footer>
<section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-design" target="_blank">
        <span>Website Design Free</span>
    </a>
    <p class="u-text">
        <span>created with</span>
    </p>
    <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>HTML Website Builder</span>
    </a>.
</section>
</body>
</html>
