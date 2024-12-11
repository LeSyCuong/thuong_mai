<?php
if ( ! defined("_STATUS") ) {
    echo "Truy cập không hợp lệ...";
    die();
}
require_once(_WEBDIR."/index.php");
$title = !empty($data['title']) ? $data['title'] : 'Vietcod';

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#000f8f" />
    <link rel="canonical" href="<?php _WEBHOST ?>" />
    <meta name='revisit-after' content='2 days' />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="noodp,index,follow" />
    <meta name="description" content="">
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="keywords" content="Cập nhật sau" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:image"
        content="https://bizweb.dktcdn.net/100/502/883/themes/934584/assets/logo.png?1719764721426">
    <meta property="og:image:secure_url"
        content="https://bizweb.dktcdn.net/100/502/883/themes/934584/assets/logo.png?1719764721426">

    <meta property="og:description" content="">
    <meta property="og:url" content="<?php _WEBHOST ?>">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($title); ?>">
    <link rel="apple-touch-icon" sizes="57x57" href=<?php _WEBDIR ?>"/templates/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href=<?php _WEBDIR ?>"/templates/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href=<?php _WEBDIR ?>"/templates/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href=<?php _WEBDIR ?>"/templates/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href=<?php _WEBDIR ?>"/templates/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href=<?php _WEBDIR ?>"/templates/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href=<?php _WEBDIR ?>"/templates/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href=<?php _WEBDIR ?>"/templates/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href=<?php _WEBDIR ?>"/templates/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href=<?php _WEBDIR ?>"/templates/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href=<?php _WEBDIR ?>"/templates/img/favicon/aavicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href=<?php _WEBDIR ?>"/templates/img/favicon/aavicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href=<?php _WEBDIR ?>"/templates/img/favicon/aavicon-16x16.png">
    <link rel="manifest" href=<?php _WEBDIR ?>"/templates/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content=<?php _WEBDIR ?>"/templates/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php _WEBDIR?>"/templates/css/bootstrap.min.css">
    <link rel="stylesheet" href=<?php _WEBDIR?>"/templates/css/style.css">
    <link rel="icon" href=<?php _WEBDIR?>"/templates/css/favicon.png?1719764721426" type="image/x-icon" />

    <link rel="preload" as="script" href=<?php _WEBDIR?>"/templates/js/jquery.js?1719764721426" />
    <script src=<?php _WEBDIR?>"/templates/js/jquery.js?1719764721426" type="text/javascript">
    </script>

    <link rel="preload" as="script" href=<?php _WEBDIR?>"/templates/js/cookie.js?1719764721426" />
    <script src=<?php _WEBDIR?>"/templates/js/cookie.js?1719764721426" type="text/javascript">
    </script>

    <link rel="preload" as="script" href=<?php _WEBDIR?>"/templates/js/swiper.js?1719764721426" />
    <script src=<?php _WEBDIR?>"/templates/js/swiper.js?1719764721426" type="text/javascript">
    </script>

    <link rel="preload" as="script" href=<?php _WEBDIR?>"/templates/js/lazy.js?1719764721426" />
    <script src=<?php _WEBDIR?>"/templates/js/lazy.js?1719764721426" type="text/javascript">
    </script>

    <link rel="preload" as='style' type="text/css" href=<?php _WEBDIR?>"/templates/css/main.scss.css?1719764721426">
    <link rel="preload" as='style' type="text/css" href=<?php _WEBDIR?>"/templates/css/index.scss.css?1719764721426">
    <link rel="preload" as='style' type="text/css"
        href=<?php _WEBDIR?>"/templates/css/bootstrap-4-3-min.css?1719764721426">

    <link href=<?php _WEBDIR?>"/templates/css/bootstrap-4-3-min.css?1719764721426" rel="stylesheet" type="text/css"
        media="all" />
    <link href=<?php _WEBDIR?>"/templates/css/main.scss.css?1719764721426" rel="stylesheet" type="text/css"
        media="all" />
    <link href=<?php _WEBDIR?>"/templates/css/index.scss.css?1719764721426" rel="stylesheet" type="text/css"
        media="all" />
    <link href=<?php _WEBDIR?>"/templates/css/breadcrumb_style.scss.css?1719764721426" rel="stylesheet" type="text/css"
        media="all" />
    <link href=<?php _WEBDIR?>"/templates/css/paginate.scss.css?1719764721426" rel="stylesheet" type="text/css"
        media="all" />
    <link href=<?php _WEBDIR?>"/templates/css/account_oder_style.scss.css?1719764721426" rel="stylesheet"
        type="text/css" media="all" />
    <link href=<?php _WEBDIR?>"/templates/css/sidebar_style.scss.css?1719764721426" rel="stylesheet" type="text/css"
        media="all" />
    <link href=<?php _WEBDIR?>"/templates/css/collection_style.scss.css?1719764721426" rel="stylesheet" type="text/css"
        media="all" />
    <link href=<?php _WEBDIR?>"/templates/css/product_style.scss.css?1719764721426" rel="stylesheet" type="text/css"
        media="all" />
    <link href=<?php _WEBDIR?>"/templates/css/cartpage.scss.css?1719764721426" rel="stylesheet" type="text/css"
        media="all" />
    <script>
    (function() {
        function asyncLoad() {
            var urls = [];
            for (var i = 0; i < urls.length; i++) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = urls[i];
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
        };
        window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load',
            asyncLoad, false);
    })();
    </script>




    <script src="/dist/js/stats.min.js?v=96f2ff2"></script>
    <script>
    $(document).ready(function($) {
        awe_lazyloadImage();
    });

    function awe_lazyloadImage() {
        var ll = new LazyLoad({
            elements_selector: ".lazyload",
            load_delay: 100,
            threshold: 0
        });
    }
    window.awe_lazyloadImage = awe_lazyloadImage;
    </script>

</head>

<body>
    <div class="opacity_menu"></div>
    <div class="banner-top d-none d-md-block" style="background: #000000">
        <div class="container">
            <a href="/collections/all" title="Banner top">
                <picture>

                    <source media="(max-width: 567px)"
                        srcset="//bizweb.dktcdn.net/thumb/large/100/502/883/themes/934584/assets/banner_top.jpg?1719764721426">
                    <img alt="Banner top" width="1270" height="47"
                        src="https://bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner_top.jpg?1719764721426">
                </picture>

            </a>
        </div>
    </div>

    <header class=" header header-scroll">
        <div class="container">
            <div class="header-top d-flex     align-items-center" style="    justify-content: space-between;">
                <a href="/" class="logo" title="Logo">
                    <picture>
                        <source media="(max-width: 567px)"
                            srcset="//bizweb.dktcdn.net/thumb/large/100/502/883/themes/934584/assets/logo-mobile2.png?1719764721426">
                        <img width="414" height="85"
                            src="https://bizweb.dktcdn.net/100/502/883/themes/934584/assets/logo.png?1719764721426"
                            alt="Dola Phone">
                    </picture>
                </a>
                <div style="width: 200px;" class="icon-menu vertical-menu-category d-none d-lg-block">
                    <span class="menu-icon">
                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bars" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            class="svg-inline--fa fa-bars fa-w-14">
                            <path fill="#ffffff"
                                d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"
                                class=""></path>
                        </svg>
                    </span>
                    <span class="vertical-heading-text">Danh mục</span>
                </div>
                <div class="menu-vertical  ">
                    <div class="list_menu_header">
                        <div class="ul nav vertical-nav ul_menu site-nav-vetical">
                            <div class="nav_item nav-item lv1 li_check ">
                                <a href="?modules=sanpham&action=iphone" title="iPhone"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_1.png?1719764721426')">iPhone
                                    <i class="fas fa-angle-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                        </svg>
                                    </i>
                                </a>

                                <div class="ul_content_right_1">
                                    <div class="row">


                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4">

                                            <a href="?modules=sanpham&action=iphone&phien_ban=15"
                                                title="iPhone 15 Series">iPhone 15
                                                Series</a>


                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4">

                                            <a href="?modules=sanpham&action=iphone&phien_ban=14"
                                                title="iPhone 14 Series">iPhone 14
                                                Series</a>


                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4">

                                            <a href="?modules=sanpham&action=iphone&phien_ban=13"
                                                title="iPhone 13">iPhone 13</a>


                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=iphone&phien_ban=12"
                                                title="iPhone 12">iPhone 12</a></div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=iphone&phien_ban=11"
                                                title="iPhone 11">iPhone 11</a></div>


                                    </div>
                                </div>
                            </div>





                            <div class="nav_item nav-item lv1 li_check ">
                                <a href="?modules=sanpham&action=ipad" title="iPad"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_2.png?1719764721426')">iPad
                                    <i class="fas fa-angle-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                        </svg>
                                    </i>
                                </a>

                                <div class="ul_content_right_1">
                                    <div class="row">


                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4">

                                            <a href="?modules=sanpham&action=ipad&phien_ban=pro" title="iPad Pro">iPad
                                                Pro</a>


                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4">

                                            <a href="?modules=sanpham&action=ipad&phien_ban=air" title="iPad Air">iPad
                                                Air</a>


                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=ipad&phien_ban=gen-10"
                                                title="iPad Gen 10">iPad Gen 10</a>
                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=ipad&phien_ban=gen-9"
                                                title="iPad Gen 9">iPad Gen 9</a>
                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=ipad&phien_ban=mini"
                                                title="iPad mini">iPad mini</a></div>


                                    </div>
                                </div>
                            </div>





                            <div class="nav_item nav-item lv1 li_check ">
                                <a href="?modules=sanpham&action=watch" title="Watch"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_3.png?1719764721426')">Watch
                                    <i class="fas fa-angle-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                        </svg>
                                    </i>
                                </a>

                                <div class="ul_content_right_1">
                                    <div class="row">


                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=watch&phien_ban=ultra"
                                                title="Apple Watch Ultra">Apple
                                                Watch
                                                Ultra</a></div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=watch&phien_ban=S7"
                                                title="Apple Watch S7">Apple Watch
                                                S7</a>
                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=watch&phien_ban=SE"
                                                title="Apple Watch SE">Apple Watch
                                                SE</a>
                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=watch&phien_ban=S8"
                                                title="Apple Watch S8">Apple Watch
                                                S8</a>
                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=watch&phien_ban=S9"
                                                title="Apple Watch S9">Apple Watch
                                                S9</a>
                                        </div>


                                    </div>
                                </div>
                            </div>





                            <div class="nav_item nav-item lv1 li_check ">
                                <a href="?modules=sanpham&action=mac" title="Mac"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_4.png?1719764721426')">Mac
                                    <i class="fas fa-angle-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                        </svg>
                                    </i>
                                </a>

                                <div class="ul_content_right_1">
                                    <div class="row">


                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=mac&phien_ban=book"
                                                title="MacBook">MacBook</a></div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=mac&phien_ban=studio"
                                                title="Mac Studio">Mac Studio</a></div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=mac&phien_ban=imac" title="iMac">iMac</a>
                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=mac&phien_ban=mini" title="Mac mini">Mac
                                                mini</a></div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=mac&phien_ban=tv" title="Apple TV">Apple
                                                TV</a></div>


                                    </div>
                                </div>
                            </div>





                            <div class="nav_item nav-item lv1 li_check ">
                                <div class="icon">
                                </div>
                                <a href="?modules=sanpham&action=airpods" title="AirPods"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_5.png?1719764721426')">AirPods
                                </a>
                            </div>





                            <div class="nav_item nav-item lv1 li_check ">
                                <a href="?modules=sanpham&action=amthanh" title="Âm thanh"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_6.png?1719764721426')">Âm
                                    thanh
                                    <i class="fas fa-angle-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                        </svg>
                                    </i>
                                </a>

                                <div class="ul_content_right_1">
                                    <div class="row">


                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4">

                                            <a href="?modules=sanpham&action=amthanh&loai=loa" title="Loa">Loa</a>

                                            <div class="ul_content_right_2">

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=loa-marshall"
                                                        title="Loa Marshall">Loa Marshall</a></div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=loa-bose"
                                                        title="Loa Bose">Loa Bose</a></div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=loa-bang-olufsen"
                                                        title="Loa Bang & Olufsen">Loa Bang & Olufsen</a>
                                                </div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=loa-harman-kardon"
                                                        title="Loa Harman/Kardon">Loa Harman/Kardon</a>
                                                </div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=loa-jbl"
                                                        title="Loa JBL">Loa JBL</a></div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=loa-samsung"
                                                        title="Loa Samsung">Loa Samsung</a></div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=loa-lg"
                                                        title="Loa LG">Loa
                                                        LG</a></div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=loa-sony"
                                                        title="Loa Sony">Loa Sony</a></div>

                                            </div>
                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4">

                                            <a href="?modules=sanpham&action=amthanh&loai=tainghe" title="Tai nghe">Tai
                                                nghe</a>

                                            <div class="ul_content_right_2">

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=tainghe-apple"
                                                        title="Tai nghe Apple">Tai nghe Apple</a></div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=tainghe-samsung"
                                                        title="Tai nghe Samsung">Tai nghe Samsung</a></div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=tainghe-marshall"
                                                        title="Tai nghe Marshall">Tai nghe Marshall</a>
                                                </div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=tainghe-bose"
                                                        title="Tai nghe Bose">Tai nghe Bose</a></div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=tainghe-b-o"
                                                        title="Tai nghe B&O">Tai nghe B&O</a></div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=tainghe-jbl"
                                                        title="Tai nghe JBL">Tai nghe JBL</a></div>

                                                <div class="nav_item nav-item lv3"><a
                                                        href="?modules=sanpham&action=amthanh&loai=tainghe-lg"
                                                        title="Tai nghe LG">Tai nghe LG</a></div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>





                            <div class="nav_item nav-item lv1 li_check ">
                                <a href="?modules=sanpham&action=phukien" title="Phụ kiện"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_7.png?1719764721426')">Phụ
                                    kiện
                                    <i class="fas fa-angle-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                        </svg>
                                    </i>
                                </a>

                                <div class="ul_content_right_1">
                                    <div class="row">


                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=phukien&loai=apple"
                                                title="Phụ kiện Apple">Phụ kiện
                                                Apple</a>
                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=phukien&loai=coc" title="Cốc - Cáp">Cốc -
                                                Cáp</a></div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=phukien&loai=sac" title="Sạc dự phòng">Sạc
                                                dự phòng</a>
                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=phukien&loai=op-lung"
                                                title="Bao da - Ốp lưng">Bao da - Ốp
                                                lưng</a>
                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=phukien&loai=cuong-luc"
                                                title="Dán cường lực">Dán cường
                                                lực</a></div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=phukien&loai=mac"
                                                title="Phụ kiện MacBook">Phụ kiện
                                                MacBook</a></div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=phukien&loai=phim-chuot"
                                                title="Bàn phím - Chuột">Bàn phím -
                                                Chuột</a>
                                        </div>



                                        <div class="nav_item nav-item lv2 col-lg-4 col-md-4"><a
                                                href="?modules=sanpham&action=phukien&loai=balo"
                                                title="Balo - Túi chống shock">Balo -
                                                Túi chống shock</a></div>


                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="search-header">
                    <div class="search-smart">
                        <form action="/search" method="get" class="header-search-form input-group search-bar"
                            role="search">
                            <input type="text" name="query" required
                                class="input-group-field auto-search search-auto form-control"
                                placeholder="Bạn cần tìm gì..." autocomplete="off">
                            <input type="hidden" name="type" value="product">
                            <button type="submit" class="btn icon-fallback-text" aria-label="Tìm kiếm" title="Tìm kiếm">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path fill="#fff"
                                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                    </path>
                                </svg> </button>

                            <div class="search-suggest">
                                <ul class="smart-search-title">
                                    <li data-tab="#tab-search-1" class="active"><a href="javascript:void(0)"
                                            title="Sản phẩm">Sản phẩm</a></li>
                                    <li data-tab="#tab-search-2"><a href="javascript:void(0)" title="Tin tức">Tin
                                            tức</a></li>
                                </ul>
                                <div class="list-search-suggest">
                                    <div class="list-search list-search-style active" id="tab-search-1">
                                    </div>
                                    <div class="list-search2 list-search-style" id="tab-search-2">
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

                <div class="header-control d-none d-xl-flex ">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                    </div>
                    <div class="content">
                        <a title="1900 6750" href="tel:19006750" class="button-wishlist">
                            Hotline<span>1900 6750</span>
                        </a>
                    </div>
                </div>
                <div class="header-control d-none d-lg-flex">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </div>
                    <div class="content">
                        <a title="Hệ thống cửa hàng" href="/he-thong-cua-hang" class="button-wishlist">
                            Hệ thống<span>cửa hàng</span>
                        </a>
                    </div>
                </div>
                <div class="header-control d-none d-lg-flex">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-clipboard2-check" viewBox="0 0 16 16">
                            <path
                                d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z" />
                            <path
                                d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z" />
                            <path
                                d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z" />
                        </svg>
                    </div>
                    <div class="content">
                        <a title="Tra cứu đơn hàng" href="?modules=auth&action=profile&menu=don_hang"
                            class="button-wishlist">
                            Tra cứu<span>đơn hàng</span>
                        </a>
                    </div>
                </div>

                <div class="header-control d-none header-cart block-cart d-lg-flex">

                    <div title="Giỏ hàng" class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 40 40">
                            <defs></defs>
                            <g id="ic-cart">
                                <path id="shopping-bag" class="cls-1"
                                    d="M35.91,36.17,33.24,10.75a1,1,0,0,0-1-.94h-5V8.67a6.47,6.47,0,1,0-12.93,0V9.81h-5a1.05,1.05,0,0,0-1,.94L5.52,36.17a1,1,0,0,0,.93,1.15H34.87a1,1,0,0,0,1.05-1A.41.41,0,0,0,35.91,36.17ZM16.35,8.67a4.38,4.38,0,1,1,8.75,0V9.81H16.35ZM7.73,35.24l2.45-23.33h4.07v2.3a1,1,0,0,0,1,1.09,1,1,0,0,0,1.09-1V11.91H25.1v2.3a1,1,0,0,0,1,1.09,1,1,0,0,0,1.09-1V11.91h4.07l2.45,23.33Z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="content">
                        <a href="?modules=cart&action=product" title="Giỏ hàng">
                            Giỏ hàng: <?php echo getTotalQuantity(); ?></a>
                    </div>

                </div>



                <div class="account-header d-none d-lg-block">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 40 40">
                            <defs></defs>
                            <g id="ic-user">
                                <g id="_6-User" data-name="6-User">
                                    <g id="Group_18" data-name="Group 18">
                                        <path id="Path_92" data-name="Path 92" class="cls-1"
                                            d="M20,22.21a6.12,6.12,0,1,0-6.12-6.12h0A6.13,6.13,0,0,0,20,22.21ZM20,12a4.08,4.08,0,1,1-4.08,4.08A4.08,4.08,0,0,1,20,12Z" />
                                        <path id="Path_93" data-name="Path 93" class="cls-1"
                                            d="M20,4.88A16.31,16.31,0,1,0,36.31,21.19,16.31,16.31,0,0,0,20,4.88Zm0,2A14.25,14.25,0,0,1,31.93,29a15.23,15.23,0,0,0-21.38-2.47A15.66,15.66,0,0,0,8.07,29,14.25,14.25,0,0,1,20,6.92Zm0,28.54A14.24,14.24,0,0,1,9.35,30.65a13.24,13.24,0,0,1,21.3,0A14.24,14.24,0,0,1,20,35.46Z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span>Thông tin</span>
                    <ul>
                        <?php if (isset($_SESSION['user'] )) { ?>
                        <li class="li-account"><a rel="nofollow" href="?modules=auth&action=profile" title="Tài khoản">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
                                    </path>
                                </svg>
                                Tài khoản
                            </a>
                        </li>
                        <li class="li-account"><a rel="nofollow" href="?out" title="Đăng xuất">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z">
                                    </path>
                                </svg>
                                Đăng xuất
                            </a>
                        </li>
                        <?php }else{ ?>
                        <li class="li-account"><a rel="nofollow" href="?modules=auth&action=login" title="Đăng nhập">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z">
                                    </path>
                                </svg>
                                Đăng nhập</a>
                        </li>
                        <li class="li-account"><a rel="nofollow" href="?modules=auth&action=register" title="Đăng ký">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z">
                                    </path>
                                </svg>
                                Đăng ký</a>
                        </li>


                        <?php } ?>
                        <li class="li-account"><a rel="nofollow" href="?modules=cart&action=like"
                                title="Danh sách yêu thích">
                                <svg style="    position: relative;  top: 1px;" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                    </path>
                                </svg>
                                Danh sách yêu thích: <?php echo getTotalWishlistQuantity();?></a>
                        </li>

                    </ul>
                </div>
                <div class="menu-bar d-lg-none d-flex">
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bars" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14">
                        <path fill="#ffffff"
                            d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"
                            class=""></path>
                    </svg>
                </div>
            </div>

        </div>
        <div class=" header-menu">
            <div class="container" style="    position: relative;">
                <div class="header-menu-des">
                    <nav class="header-nav">
                        <ul class="item_big">

                            <li class="d-block d-lg-none title-danhmuc"><span>Menu chính</span></li>




                            <li class="nav-item active  ">
                                <a class="a-img" href="/" title="Trang chủ">
                                    Trang chủ
                                </a>
                            </li>



                            <li class="nav-item  ">
                                <a class="a-img" href="/gioi-thieu" title="Giới thiệu">
                                    Giới thiệu
                                </a>
                            </li>








                            <li class="nav-item   has-mega ">
                                <a class="a-img caret-down" href="/collections/all" title="Sản phẩm">
                                    Sản phẩm
                                </a>
                                <i class="fa fa-caret-down"></i>


                                <div class="mega-content d-lg-block d-none">

                                    <ul class="level0">


                                        <li class="level1 parent item fix-navs" data-title="iPhone"
                                            data-link="?modules=sanpham&action=iphone">
                                            <a class="hmega" href="?modules=sanpham&action=iphone"
                                                title="iPhone">iPhone</a>
                                            <ul class="level1">

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=iphone&phien_ban=15"
                                                        title="iPhone 15 Series">iPhone 15
                                                        Series</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=iphone&phien_ban=14"
                                                        title="iPhone 14 Series">iPhone 14
                                                        Series</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=iphone&phien_ban=13"
                                                        title="iPhone 13">iPhone 13</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=iphone&phien_ban=12"
                                                        title="iPhone 12">iPhone 12</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=iphone&phien_ban=11"
                                                        title="iPhone 11">iPhone 11</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="level1 parent item fix-navs" data-title="iPad"
                                            data-link="?modules=sanpham&action=ipad">
                                            <a class="hmega" href="?modules=sanpham&action=ipad" title="iPad">iPad</a>
                                            <ul class="level1">

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=ipad&phien_ban=pro"
                                                        title="iPad Pro">iPad Pro</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=ipad&phien_ban=air"
                                                        title="iPad Air">iPad Air</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=ipad&phien_ban=gen-10"
                                                        title="iPad Gen 10">iPad Gen
                                                        10</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=ipad&phien_ban=gen-9"
                                                        title="iPad Gen 9">iPad Gen
                                                        9</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=ipad&phien_ban=mini"
                                                        title="iPad mini">iPad mini</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="level1 parent item fix-navs" data-title="Watch"
                                            data-link="?modules=sanpham&action=watch">
                                            <a class="hmega" href="?modules=sanpham&action=watch"
                                                title="Watch">Watch</a>
                                            <ul class="level1">

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=watch&phien_ban=ultra"
                                                        title="Apple Watch Ultra">Apple
                                                        Watch Ultra</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=watch&phien_ban=S7"
                                                        title="Apple Watch S7">Apple
                                                        Watch
                                                        S7</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=watch&phien_ban=SE"
                                                        title="Apple Watch SE">Apple
                                                        Watch
                                                        SE</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=watch&phien_ban=S8"
                                                        title="Apple Watch S8">Apple
                                                        Watch
                                                        S8</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=watch&phien_ban=S9"
                                                        title="Apple Watch S9">Apple
                                                        Watch
                                                        S9</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="level1 parent item fix-navs" data-title="Mac"
                                            data-link="?modules=sanpham&action=mac">
                                            <a class="hmega" href="?modules=sanpham&action=mac" title="Mac">Mac</a>
                                            <ul class="level1">

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=mac&phien_ban=book"
                                                        title="MacBook">MacBook</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=mac&phien_ban=studio"
                                                        title="Mac Studio">Mac Studio</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=mac&phien_ban=imac"
                                                        title="iMac">iMac</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=mac&phien_ban=mini"
                                                        title="Mac mini">Mac mini</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=mac&phien_ban=tv"
                                                        title="Apple TV">Apple TV</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="level1 parent item">
                                            <a class="hmega" href="?modules=sanpham&action=airpods"
                                                title="AirPods">AirPods</a>
                                        </li>



                                        <li class="level1 parent item fix-navs" data-title="Âm thanh"
                                            data-link="?modules=sanpham&action=amthanh">
                                            <a class="hmega" href="?modules=sanpham&action=amthanh" title="Âm thanh">Âm
                                                thanh</a>
                                            <ul class="level1">

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=amthanh&loai=loa"
                                                        title="Loa">Loa</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=amthanh&loai=tainghe"
                                                        title="Tai nghe">Tai nghe</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="level1 parent item fix-navs" data-title="Phụ kiện"
                                            data-link="?modules=sanpham&action=phukien">
                                            <a class="hmega" href="?modules=sanpham&action=phukien" title="Phụ kiện">Phụ
                                                kiện</a>
                                            <ul class="level1">

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=phukien&loai=apple"
                                                        title="Phụ kiện Apple">Phụ
                                                        kiện
                                                        Apple</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=phukien&loai=coc"
                                                        title="Cốc - Cáp">Cốc - Cáp</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=phukien&loai=sac"
                                                        title="Sạc dự phòng">Sạc dự
                                                        phòng</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=phukien&loai=op-lung"
                                                        title="Bao da - Ốp lưng">Bao
                                                        da - Ốp
                                                        lưng</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=phukien&loai=cuong-luc"
                                                        title="Dán cường lực">Dán cường
                                                        lực</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=phukien&loai=mac"
                                                        title="Phụ kiện MacBook">Phụ
                                                        kiện
                                                        MacBook</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=phukien&loai=phim-chuot"
                                                        title="Bàn phím - Chuột">Bàn
                                                        phím -
                                                        Chuột</a>
                                                </li>

                                                <li class="level2">
                                                    <a href="?modules=sanpham&action=phukien&loai=balo"
                                                        title="Balo - Túi chống shock">Balo
                                                        - Túi chống shock</a>
                                                </li>

                                            </ul>
                                        </li>


                                    </ul>

                                </div>
                                <ul class="item_small d-lg-none d-block">
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=iphone" title="iPhone">
                                            iPhone
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="?modules=sanpham&action=iphone&phien_ban=15"
                                                    title="iPhone 15 Series" class="a3">iPhone
                                                    15 Series</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=iphone&phien_ban=14"
                                                    title="iPhone 14 Series" class="a3">iPhone
                                                    14 Series</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=iphone&phien_ban=13" title="iPhone 13"
                                                    class="a3">iPhone
                                                    13</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=iphone&phien_ban=12" title="iPhone 12"
                                                    class="a3">iPhone
                                                    12</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=iphone&phien_ban=11" title="iPhone 11"
                                                    class="a3">iPhone
                                                    11</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=ipad" title="iPad">
                                            iPad
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="?modules=sanpham&action=ipad&phien_ban=pro" title="iPad Pro"
                                                    class="a3">iPad Pro</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=ipad&phien_ban=air" title="iPad Air"
                                                    class="a3">iPad Air</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=ipad&phien_ban=gen-10"
                                                    title="iPad Gen 10" class="a3">iPad Gen
                                                    10</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=ipad&phien_ban=gen-9"
                                                    title="iPad Gen 9" class="a3">iPad Gen
                                                    9</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=ipad&phien_ban=mini" title="iPad mini"
                                                    class="a3">iPad
                                                    mini</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=watch" title="Watch">
                                            Watch
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="?modules=sanpham&action=watch&phien_ban=ultra"
                                                    title="Apple Watch Ultra" class="a3">Apple
                                                    Watch Ultra</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=watch&phien_ban=S7"
                                                    title="Apple Watch S7" class="a3">Apple
                                                    Watch S7</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=watch&phien_ban=SE"
                                                    title="Apple Watch SE" class="a3">Apple
                                                    Watch SE</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=watch&phien_ban=S8"
                                                    title="Apple Watch S8" class="a3">Apple
                                                    Watch S8</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=watch&phien_ban=S9"
                                                    title="Apple Watch S9" class="a3">Apple
                                                    Watch S9</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=mac" title="Mac">
                                            Mac
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="?modules=sanpham&action=mac&phien_ban=book" title="MacBook"
                                                    class="a3">MacBook</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=mac&phien_ban=studio"
                                                    title="Mac Studio" class="a3">Mac
                                                    Studio</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=mac&phien_ban=imac" title="iMac"
                                                    class="a3">iMac</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=mac&phien_ban=mini" title="Mac mini"
                                                    class="a3">Mac mini</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=mac&phien_ban=tv" title="Apple TV"
                                                    class="a3">Apple TV</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=airpods" title="AirPods">
                                            AirPods
                                        </a>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=amthanh" title="Âm thanh">
                                            Âm thanh
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=loa" title="Loa"
                                                    class="a3">Loa</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=tainghe" title="Tai nghe"
                                                    class="a3">Tai nghe</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=phukien" title="Phụ kiện">
                                            Phụ kiện
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="?modules=sanpham&action=phukien&loai=apple"
                                                    title="Phụ kiện Apple" class="a3">Phụ kiện
                                                    Apple</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=phukien&loai=coc" title="Cốc - Cáp"
                                                    class="a3">Cốc -
                                                    Cáp</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=phukien&loai=sac" title="Sạc dự phòng"
                                                    class="a3">Sạc
                                                    dự
                                                    phòng</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=phukien&loai=op-lung"
                                                    title="Bao da - Ốp lưng" class="a3">Bao da
                                                    - Ốp lưng</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=phukien&loai=cuong-luc"
                                                    title="Dán cường lực" class="a3">Dán cường
                                                    lực</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=phukien&loai=mac"
                                                    title="Phụ kiện MacBook" class="a3">Phụ
                                                    kiện MacBook</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=phukien&loai=phim-chuot"
                                                    title="Bàn phím - Chuột" class="a3">Bàn
                                                    phím - Chuột</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=phukien&loai=balo"
                                                    title="Balo - Túi chống shock" class="a3">Balo - Túi
                                                    chống shock</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>



                            <li class="nav-item  ">
                                <a class="a-img" href="/tin-tuc" title="Tin tức">
                                    Tin tức
                                </a>
                            </li>



                            <li class="nav-item  ">
                                <a class="a-img" href="/review-san-pham" title="Review">
                                    Review
                                </a>
                            </li>



                            <li class="nav-item  ">
                                <a class="a-img" href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">
                                    Câu hỏi thường gặp
                                </a>
                            </li>



                            <li class="nav-item  ">
                                <a class="a-img" href="/tra-cuu-bao-hanh" title="Tra cứu bảo hành">
                                    Tra cứu bảo hành
                                </a>
                            </li>



                            <li class="nav-item  ">
                                <a class="a-img" href="/dat-truoc-san-pham" title="Đặt trước">
                                    Đặt trước
                                </a>
                            </li>



                            <li class="nav-item  ">
                                <a class="a-img" href="/lien-he" title="Liên hệ">
                                    Liên hệ
                                </a>
                            </li>
                            <li class="d-block d-lg-none title-danhmuc"><span>Danh mục sản phẩm</span></li>



                            <li class="nav-item d-block d-lg-none  danhmuc">
                                <a class="a-img caret-down" href="?modules=sanpham&action=iphone" title="iPhone"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_1.png?1719764721426')">
                                    iPhone
                                </a>
                                <i class="fa fa-caret-down"></i>
                                <ul class="item_small">
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=iphone&phien_ban=15"
                                            title="iPhone 15 Series">
                                            iPhone 15 Series
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="/iphone-15" title="iPhone 15" class="a3">iPhone
                                                    15</a>
                                            </li>
                                            <li>
                                                <a href="/iphone-15-plus" title="iPhone 15 Plus" class="a3">iPhone
                                                    15 Plus</a>
                                            </li>
                                            <li>
                                                <a href="/iphone-15-pro" title="iPhone 15 Pro" class="a3">iPhone 15
                                                    Pro</a>
                                            </li>
                                            <li>
                                                <a href="/iphone-15-pro-max" title="iPhone 15 Pro Max" class="a3">iPhone
                                                    15 Pro Max</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=iphone&phien_ban=14"
                                            title="iPhone 14 Series">
                                            iPhone 14 Series
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="/iphone-14-pro-max" title="iPhone 14 Pro Max" class="a3">iPhone
                                                    14 Pro Max</a>
                                            </li>
                                            <li>
                                                <a href="/iphone-14-pro" title="iPhone 14 Pro" class="a3">iPhone 14
                                                    Pro</a>
                                            </li>
                                            <li>
                                                <a href="/iphone-14-plus" title="iPhone 14 Plus" class="a3">iPhone
                                                    14 Plus</a>
                                            </li>
                                            <li>
                                                <a href="/iphone-14" title="iPhone 14" class="a3">iPhone
                                                    14</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=iphone&phien_ban=13"
                                            title="iPhone 13">
                                            iPhone 13
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="?modules=sanpham&action=iphone&phien_ban=13-1"
                                                    title="iPhone 13" class="a3">iPhone
                                                    13</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=iphone&phien_ban=13-mini"
                                                    title="iPhone 13 mini" class="a3">iPhone
                                                    13 mini</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=iphone&phien_ban=12"
                                            title="iPhone 12">
                                            iPhone 12
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=iphone&phien_ban=11"
                                            title="iPhone 11">
                                            iPhone 11
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item d-block d-lg-none  danhmuc">
                                <a class="a-img caret-down" href="?modules=sanpham&action=ipad" title="iPad"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_2.png?1719764721426')">
                                    iPad
                                </a>
                                <i class="fa fa-caret-down"></i>
                                <ul class="item_small">
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=ipad&phien_ban=pro"
                                            title="iPad Pro">
                                            iPad Pro
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="?modules=sanpham&action=ipad&phien_ban=pro-2022"
                                                    title="iPad Pro 2022" class="a3">iPad Pro
                                                    2022</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=ipad&phien_ban=air"
                                            title="iPad Air">
                                            iPad Air
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="?modules=sanpham&action=ipad&phien_ban=air-5"
                                                    title="iPad Air 5" class="a3">iPad Air
                                                    5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=ipad&phien_ban=gen-10"
                                            title="iPad Gen 10">
                                            iPad Gen 10
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=ipad&phien_ban=gen-9"
                                            title="iPad Gen 9">
                                            iPad Gen 9
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=ipad&phien_ban=mini"
                                            title="iPad mini">
                                            iPad mini
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item d-block d-lg-none  danhmuc">
                                <a class="a-img caret-down" href="?modules=sanpham&action=watch" title="Watch"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_3.png?1719764721426')">
                                    Watch
                                </a>
                                <i class="fa fa-caret-down"></i>
                                <ul class="item_small">
                                    <li>
                                        <a class="" href="?modules=sanpham&action=watch&phien_ban=ultra"
                                            title="Apple Watch Ultra">
                                            Apple Watch Ultra
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=watch&phien_ban=S7"
                                            title="Apple Watch S7">
                                            Apple Watch S7
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=watch&phien_ban=SE"
                                            title="Apple Watch SE">
                                            Apple Watch SE
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=watch&phien_ban=S8"
                                            title="Apple Watch S8">
                                            Apple Watch S8
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=watch&phien_ban=S9"
                                            title="Apple Watch S9">
                                            Apple Watch S9
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item d-block d-lg-none  danhmuc">
                                <a class="a-img caret-down" href="?modules=sanpham&action=mac" title="Mac"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_4.png?1719764721426')">
                                    Mac
                                </a>
                                <i class="fa fa-caret-down"></i>
                                <ul class="item_small">
                                    <li>
                                        <a class="" href="?modules=sanpham&action=mac&phien_ban=book" title="MacBook">
                                            MacBook
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=mac&phien_ban=studio"
                                            title="Mac Studio">
                                            Mac Studio
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=mac&phien_ban=imac" title="iMac">
                                            iMac
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=mac&phien_ban=mini" title="Mac mini">
                                            Mac mini
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=mac&phien_ban=tv" title="Apple TV">
                                            Apple TV
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  d-block d-lg-none  danhmuc">
                                <a class="a-img" href="?modules=sanpham&action=airpods" title="AirPods"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_5.png?1719764721426')">
                                    AirPods
                                </a>
                            </li>
                            <li class="nav-item d-block d-lg-none  danhmuc">
                                <a class="a-img caret-down" href="?modules=sanpham&action=amthanh" title="Âm thanh"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_6.png?1719764721426')">
                                    Âm thanh
                                </a>
                                <i class="fa fa-caret-down"></i>
                                <ul class="item_small">
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=amthanh&loai=loa"
                                            title="Loa">
                                            Loa
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=loa-marshall"
                                                    title="Loa Marshall" class="a3">Loa
                                                    Marshall</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=loa-bose" title="Loa Bose"
                                                    class="a3">Loa Bose</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=loa-bang-olufsen"
                                                    title="Loa Bang & Olufsen" class="a3">Loa
                                                    Bang & Olufsen</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=loa-harman-kardon"
                                                    title="Loa Harman/Kardon" class="a3">Loa
                                                    Harman/Kardon</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=loa-jbl" title="Loa JBL"
                                                    class="a3">Loa JBL</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=loa-samsung"
                                                    title="Loa Samsung" class="a3">Loa
                                                    Samsung</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=loa-lg" title="Loa LG"
                                                    class="a3">Loa LG</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=loa-sony" title="Loa Sony"
                                                    class="a3">Loa Sony</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="?modules=sanpham&action=amthanh&loai=tainghe"
                                            title="Tai nghe">
                                            Tai nghe
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=tainghe-apple"
                                                    title="Tai nghe Apple" class="a3">Tai nghe
                                                    Apple</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=tainghe-samsung"
                                                    title="Tai nghe Samsung" class="a3">Tai
                                                    nghe Samsung</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=tainghe-marshall"
                                                    title="Tai nghe Marshall" class="a3">Tai
                                                    nghe Marshall</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=tainghe-bose"
                                                    title="Tai nghe Bose" class="a3">Tai nghe
                                                    Bose</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=tainghe-b-o"
                                                    title="Tai nghe B&O" class="a3">Tai
                                                    nghe
                                                    B&O</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=tainghe-jbl"
                                                    title="Tai nghe JBL" class="a3">Tai
                                                    nghe
                                                    JBL</a>
                                            </li>
                                            <li>
                                                <a href="?modules=sanpham&action=amthanh&loai=tainghe-lg"
                                                    title="Tai nghe LG" class="a3">Tai
                                                    nghe
                                                    LG</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item d-block d-lg-none  danhmuc">
                                <a class="a-img caret-down" href="?modules=sanpham&action=phukien" title="Phụ kiện"
                                    style="background-image: url('//bizweb.dktcdn.net/100/502/883/themes/934584/assets/icon_megamenu_7.png?1719764721426')">
                                    Phụ kiện
                                </a>
                                <i class="fa fa-caret-down"></i>
                                <ul class="item_small">
                                    <li>
                                        <a class="" href="?modules=sanpham&action=phukien&loai=apple"
                                            title="Phụ kiện Apple">
                                            Phụ kiện Apple
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=phukien&loai=coc" title="Cốc - Cáp">
                                            Cốc - Cáp
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=phukien&loai=sac"
                                            title="Sạc dự phòng">
                                            Sạc dự phòng
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=phukien&loai=op-lung"
                                            title="Bao da - Ốp lưng">
                                            Bao da - Ốp lưng
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=phukien&loai=cuong-luc"
                                            title="Dán cường lực">
                                            Dán cường lực
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=phukien&loai=mac"
                                            title="Phụ kiện MacBook">
                                            Phụ kiện MacBook
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=phukien&loai=phim-chuot"
                                            title="Bàn phím - Chuột">
                                            Bàn phím - Chuột
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="?modules=sanpham&action=phukien&loai=balo"
                                            title="Balo - Túi chống shock">
                                            Balo - Túi chống shock
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="d-lg-none d-block item-mb">
                                <a href="/he-thong-cua-hang" title="Hệ thống cửa hàng">
                                    Hệ thống cửa hàng
                                </a>

                                <a href="/apps/kiem-tra-don-hang" title="Tra cứu đơn hàng">
                                    Tra cứu đơn hàng
                                </a>
                            </li>


                        </ul>
                    </nav>
                    <div class="control-menu d-none">
                        <a href="#" id="prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="#fff"
                                    d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                            </svg></a>
                        <a href="#" id="next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="#fff"
                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </header>