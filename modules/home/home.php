<?php
if ( ! defined("_STATUS") ) {
    echo "Truy cập không hợp lệ...";
    die();
}
home("head");
function check_ban($table) {
    $table = preg_replace('/[^a-zA-Z0-9_]/', '', $table); 
    $gg = "SELECT * FROM `$table`" ;
    $check = getRow($gg);
    return is_array($check) ? count($check) : 0;
}
function check_link($table, $colum, $oder) {
    global $conn;
    // Đảm bảo tên bảng chỉ chứa các ký tự hợp lệ
    $table = preg_replace('/[^a-zA-Z0-9_]/', '', $table);
   
    try {
        $sql = "SELECT `$colum` FROM `$table` ORDER BY `id` $oder LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result[$colum] ?? null;
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
        return null;
    }
}

?>

<div class="bodywrap">
    <h1 class="d-none">Dola Phone - </h1>
    <section class="section_slider">
        <div class="home-slider swiper-container">
            <div class="swiper-wrapper">

                <a href="/collections/all" title="Slider" class="swiper-slide">
                    <picture>
                        <source media="(min-width: 1200px)"
                            srcset="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/slider_1.jpg?1719764721426">
                        <source media="(min-width: 992px)"
                            srcset="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/slider_1.jpg?1719764721426">
                        <source media="(min-width: 569px)"
                            srcset="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/slider_1.jpg?1719764721426">
                        <source media="(max-width: 567px)"
                            srcset="//bizweb.dktcdn.net/thumb/large/100/502/883/themes/934584/assets/slider_1.jpg?1719764721426">
                        <img width="1920" height="650"
                            src="//bizweb.dktcdn.net/thumb/grande/100/502/883/themes/934584/assets/slider_1.jpg?1719764721426"
                            alt="Slider" class="img-responsive" />
                    </picture>
                </a>




            </div>
        </div>
        <div class="section_2_banner">
            <div class="container">
                <div class="row row-fix">
                    <div class="col-md-6 col-7 col-fix margin-0">
                        <a class="thumb-image-banner" href="/collections/all" title="Banner">
                            <picture>

                                <source media="(max-width: 567px)"
                                    srcset="//bizweb.dktcdn.net/thumb/large/100/502/883/themes/934584/assets/2banner_1.jpg?1719764721426">
                                <img width="714" height="257"
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/2banner_1.jpg?1719764721426"
                                    alt="Banner">
                            </picture>
                        </a>
                    </div>
                    <div class="col-md-6 col-7 col-fix margin-0">
                        <a class="thumb-image-banner" href="/collections/all" title="Banner">
                            <picture>

                                <source media="(max-width: 567px)"
                                    srcset="//bizweb.dktcdn.net/thumb/large/100/502/883/themes/934584/assets/2banner_2.jpg?1719764721426">
                                <img width="714" height="257"
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/2banner_2.jpg?1719764721426"
                                    alt="Banner">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    var swiper = new Swiper('.home-slider', {
        autoplay: false,
        pagination: {
            el: '.home-slider .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.home-slider .swiper-button-next',
            prevEl: '.home-slider .swiper-button-prev',
        },
    });
    </script>




    <section class="section_chinhsach">
        <div class="container ">
            <div class="block-background">


                <div class="row row-fix">

                    <div class="col-6 col-sm-6 col-lg-3 col-xl-3 col-fix margin-0">
                        <div class="item">
                            <div class="icon">
                                <img width="64" height="64"
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/chinhsach_1.png?1719764721426"
                                    alt="Giao hàng nhanh">

                            </div>
                            <div class="text">
                                <span class="title">Giao hàng nhanh</span>
                                <span class="des"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 col-xl-3 col-fix margin-0">
                        <div class="item">
                            <div class="icon">
                                <img width="64" height="64"
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/chinhsach_2.png?1719764721426"
                                    alt="Tư vấn chuyên nghiệp">

                            </div>
                            <div class="text">
                                <span class="title">Tư vấn chuyên nghiệp</span>
                                <span class="des"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 col-xl-3 col-fix margin-0">
                        <div class="item">
                            <div class="icon">
                                <img width="64" height="64"
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/chinhsach_3.png?1719764721426"
                                    alt="100% chính hãng">

                            </div>
                            <div class="text">
                                <span class="title">100% chính hãng</span>
                                <span class="des"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 col-xl-3 col-fix margin-0">
                        <div class="item">
                            <div class="icon">
                                <img width="64" height="64"
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/chinhsach_4.png?1719764721426"
                                    alt="Thanh toán linh hoạt">

                            </div>
                            <div class="text">
                                <span class="title">Thanh toán linh hoạt</span>
                                <span class="des"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="section_danhmuc2">
        <div class="container">
            <div class="block-background">
                <h3 class="title-index p-5">
                    <a class="title-name" href="/collections/all" title="Danh mục nổi bật">Danh mục nổi bật
                    </a>
                </h3>
                <div class="danhmuc2-slider swiper-container p-5">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="row row-fix">
                                <div class="col-6 item col-fix">
                                    <div class="product-image">
                                        <a class="image_thumb scale_hover" href="/iphone-15-pro-max-1tb-chinh-hang-vn-a"
                                            title="iPhone 15 Pro Max 1TB - Chính hãng VN/A">
                                            <picture>

                                                <source media="(max-width: 567px)"
                                                    srcset="<?php echo check_link('iphone','img', 'ASC'); ?>">
                                                <img width="130" height="130"
                                                    src="<?php echo check_link('iphone','img', 'ASC'); ?>"
                                                    alt="iPhone 15 Pro Max 1TB - Chính hãng VN/A">
                                            </picture>
                                        </a>

                                    </div>


                                </div>
                                <div class="col-6 item col-fix">
                                    <div class="product-image">
                                        <a class="image_thumb scale_hover" href="/iphone-15-plus-512gb-chinh-hang-vn-a"
                                            title="iPhone 15 Plus 512GB - Chính hãng VN/A">
                                            <picture>

                                                <source media="(max-width: 567px)"
                                                    srcset="<?php echo check_link('iphone','img', 'DESC'); ?>"">
                                                <img width=" 130" height="130"
                                                    src="<?php echo check_link('iphone','img', 'DESC'); ?>"
                                                    alt="iPhone 15 Plus 512GB - Chính hãng VN/A">
                                            </picture>
                                        </a>

                                        <a href="?modules=sanpham&action=iphone" class="item-more" title="Xem thêm">+
                                            <?php echo check_ban('iphone'); ?></a>

                                    </div>


                                </div>
                            </div>
                            <a href="?modules=sanpham&action=iphone" title="Iphone">
                                <h3>
                                    Iphone
                                    <span> Nhiều ưu đãi cho iphone 15</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </h3>
                            </a>


                        </div>


                        <div class="swiper-slide">
                            <div class="row row-fix">
                                <div class="col-6 item col-fix">
                                    <div class="product-image">
                                        <a class="image_thumb scale_hover"
                                            href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-1tb-wifi-5g-chinh-hang-vn"
                                            title="<?php echo check_link('ipad','name', 'DESC'); ?>">
                                            <picture>

                                                <source media="(max-width: 567px)"
                                                    srcset="<?php echo check_link('ipad','img', 'DESC'); ?>">
                                                <img width="130" height="130"
                                                    src="<?php echo check_link('ipad','img', 'DESC'); ?>"
                                                    alt="<?php echo check_link('ipad','name', 'DESC'); ?>">
                                            </picture>
                                        </a>

                                    </div>


                                </div>
                                <div class="col-6 item col-fix">
                                    <div class="product-image">
                                        <a class="image_thumb scale_hover"
                                            href="?modules=sanpham&action=ipad&phien_ban=air-5-256gb-5g-chinh-hang-vn"
                                            title="<?php echo check_link('ipad','name', 'ASC'); ?>">
                                            <picture>

                                                <source media="(max-width: 567px)"
                                                    srcset="<?php echo check_link('ipad','img', 'ASC'); ?>">
                                                <img width="130" height="130"
                                                    src="<?php echo check_link('ipad','img', 'ASC'); ?>"
                                                    alt="<?php echo check_link('ipad','name', 'ASC'); ?>">
                                            </picture>
                                        </a>

                                        <a href="/ipad" class="item-more" title="Xem thêm">+
                                            <?php echo check_ban('ipad'); ?></a>

                                    </div>


                                </div>
                            </div>
                            <a href="/ipad" title="Ipad">
                                <h3>
                                    Ipad
                                    <span> Giảm giá cực sốc</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </h3>
                            </a>


                        </div>


                        <div class="swiper-slide">
                            <div class="row row-fix">
                                <div class="col-6 item col-fix">
                                    <div class="product-image">
                                        <a class="image_thumb scale_hover"
                                            href="?modules=sanpham&action=mac&phien_ban=book-pro-m2-13-2022-8cpu-10gpu-256gb-ram-16gb-chinh-hang-vn-z16r0003v-z16t0003v"
                                            title="MacBook Pro M2 13" 2022 8CPU 10GPU 256GB| RAM 16GB Chính hãng VN
                                            (Z16R0003V- Z16T0003V)">
                                            <picture>

                                                <source media="(max-width: 567px)"
                                                    srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/products/220608111844-thumb-macbook-pro-m-92a41cea-1766-4864-b183-14d77a6372e3-35b96841-a2ff-4f13-a7cd-916bc9912862.png?v=1700214792423">
                                                <img width="130" height="130"
                                                    src="//bizweb.dktcdn.net/thumb/medium/100/502/883/products/220608111844-thumb-macbook-pro-m-92a41cea-1766-4864-b183-14d77a6372e3-35b96841-a2ff-4f13-a7cd-916bc9912862.png?v=1700214792423"
                                                    alt="MacBook Pro M2 13" 2022 8CPU 10GPU 256GB| RAM 16GB Chính hãng
                                                    VN (Z16R0003V- Z16T0003V)">
                                            </picture>
                                        </a>

                                    </div>


                                </div>
                                <div class="col-6 item col-fix">
                                    <div class="product-image">
                                        <a class="image_thumb scale_hover"
                                            href="?modules=sanpham&action=mac&phien_ban=imac-m3-2023-24-inch-8-cpu-8-gpu-8gb-256gb-ssd"
                                            title="iMac M3 2023 24 Inch [8 CPU | 8 GPU] 8GB 256GB SSD">
                                            <picture>

                                                <source media="(max-width: 567px)"
                                                    srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/products?modules=sanpham&action=mac&phien_ban=imac-231031035135.png?v=1700215208680">
                                                <img width="130" height="130"
                                                    src="//bizweb.dktcdn.net/thumb/medium/100/502/883/products?modules=sanpham&action=mac&phien_ban=imac-231031035135.png?v=1700215208680"
                                                    alt="iMac M3 2023 24 Inch [8 CPU | 8 GPU] 8GB 256GB SSD">
                                            </picture>
                                        </a>

                                        <a href="/mac" class="item-more" title="Xem thêm">+ 8</a>

                                    </div>


                                </div>
                            </div>
                            <a href="/mac" title="Mac">
                                <h3>
                                    Mac
                                    <span> Giá tốt mỗi ngày</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </h3>
                            </a>


                        </div>


                        <div class="swiper-slide">
                            <div class="row row-fix">
                                <div class="col-6 item col-fix">
                                    <div class="product-image">
                                        <a class="image_thumb scale_hover"
                                            href="?modules=sanpham&action=watch&phien_ban=S7-lte-45mm-chinh-hang-vn-a"
                                            title="Apple Watch S7 LTE 45mm - Chính Hãng VN/A">
                                            <picture>

                                                <source media="(max-width: 567px)"
                                                    srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/products/220817045837-s7-lte-nhom-su-blue.png?v=1700214386510">
                                                <img width="130" height="130"
                                                    src="//bizweb.dktcdn.net/thumb/medium/100/502/883/products/220817045837-s7-lte-nhom-su-blue.png?v=1700214386510"
                                                    alt="Apple Watch S7 LTE 45mm - Chính Hãng VN/A">
                                            </picture>
                                        </a>

                                    </div>


                                </div>
                                <div class="col-6 item col-fix">
                                    <div class="product-image">
                                        <a class="image_thumb scale_hover"
                                            href="?modules=sanpham&action=watch&phien_ban=SE-2022-gps-40mm-chinh-hang-vn-a"
                                            title="Apple Watch SE 2022 GPS 40mm - Chính hãng VN/A">
                                            <picture>

                                                <source media="(max-width: 567px)"
                                                    srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/products/230707101901-apple-watch-se-2022.png?v=1700214265100">
                                                <img width="130" height="130"
                                                    src="//bizweb.dktcdn.net/thumb/medium/100/502/883/products/230707101901-apple-watch-se-2022.png?v=1700214265100"
                                                    alt="Apple Watch SE 2022 GPS 40mm - Chính hãng VN/A">
                                            </picture>
                                        </a>

                                        <a href="/watch" class="item-more" title="Xem thêm">+ 5</a>

                                    </div>


                                </div>
                            </div>
                            <a href="/watch" title="Watch">
                                <h3>
                                    Watch
                                    <span> Ưu đãi cực khủng</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </h3>
                            </a>


                        </div>








                    </div>
                    <div class="swiper-button-next">

                    </div>
                    <div class="swiper-button-prev">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    var swiperdanhmuc2 = new Swiper('.danhmuc2-slider', {
        slidesPerView: 2,
        loop: false,
        grabCursor: true,
        roundLengths: true,
        slideToClickedSlide: false,
        spaceBetween: 10,
        autoplay: false,
        navigation: {
            nextEl: '.section_danhmuc2 .swiper-button-next',
            prevEl: '.section_danhmuc2 .swiper-button-prev',
        },
        breakpoints: {
            300: {
                slidesPerView: 1,
            },
            500: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,

            },
            991: {
                slidesPerView: 3,

            },
            1200: {
                slidesPerView: 4,

            }
        }

    });
    </script>




    <section class="section_product_tab ">
        <div class="container">
            <div class="block-product block-background">
                <div class="row p-5">
                    <div class="col-12 e-tabs not-dqtab ajax-tab-1" data-section="ajax-tab-1" data-view="grid_4">
                        <ul class="tabs tabs-title tab-desktop ajax clearfix">











                            <li class="tab-link has-content" data-tab="tab-1" data-url="san-pham-moi">

                                <span title="Sản phẩm mới">
                                    <img width="60" height="60" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_allpro1.png?1719764721426"
                                        alt="Sản phẩm mới">
                                    Sản phẩm mới
                                </span>
                            </li>














                            <li class="tab-link " data-tab="tab-2" data-url="san-pham-noi-bat">

                                <span title="Sản phẩm nổi bật">
                                    <img width="60" height="60" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_allpro1.png?1719764721426"
                                        alt="Sản phẩm nổi bật">
                                    Sản phẩm nổi bật
                                </span>
                            </li>














                            <li class="tab-link " data-tab="tab-3" data-url="san-pham-ban-chay">

                                <span title="Sản phẩm bán chạy">
                                    <img width="60" height="60" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_3_allpro1.png?1719764721426"
                                        alt="Sản phẩm bán chạy">
                                    Sản phẩm bán chạy
                                </span>
                            </li>

































                        </ul>











                        <div class="tab-1 tab-content">


                            <div class="row row-fix">

                                <div class="col-xl-20 col-lg-3 col-sm-4 col-6 col-fix">



























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494492" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-2tb-wifi-5g-chinh-hang-vn"
                                                title="iPad Pro 11 inch M2 2022 2TB Wifi + 5G - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/221019094952-minhtuanmobile-ipad-08f8a086-4310-441b-a594-f2766853f14e.png?v=1700213538057"
                                                    alt="iPad Pro 11 inch M2 2022 2TB Wifi + 5G - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040484" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-2tb-wifi-5g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-2tb-wifi-5g-chinh-hang-vn"
                                                    title="iPad Pro 11 inch M2 2022 2TB Wifi + 5G - Chính hãng VN">iPad
                                                    Pro 11 inch M2 2022 2TB Wifi + 5G - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                Liên hệ
                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-pro-11-inch-m2-2022-2tb-wifi-5g-chinh-hang-vn"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-pro-11-inch-m2-2022-2tb-wifi-5g-chinh-hang-vn"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-xl-20 col-lg-3 col-sm-4 col-6 col-fix">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494414" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=air-5-64gb-wifi-chinh-hang-vn"
                                                title="iPad Air 5 64GB Wifi - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/220309063455-ipad-air-select-wif.png?v=1700213087077"
                                                    alt="iPad Air 5 64GB Wifi - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040332" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=air-5-64gb-wifi-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            21%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=air-5-64gb-wifi-chinh-hang-vn"
                                                    title="iPad Air 5 64GB Wifi - Chính hãng VN">iPad Air 5 64GB
                                                    Wifi - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                13.390.000₫
                                                <span class="compare-price">16.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-air-5-64gb-wifi-chinh-hang-vn" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-air-5-64gb-wifi-chinh-hang-vn" data-type="ipad"
                                                    tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-xl-20 col-lg-3 col-sm-4 col-6 col-fix">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494422" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=air-5-64gb-5g-chinh-hang-vn"
                                                title="iPad Air 5 64GB 5G - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/220309063531-ipad-air-select-wif-11a03701-6610-4da0-9a7b-4cdb1ba14f16.png?v=1700213083473"
                                                    alt="iPad Air 5 64GB 5G - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040344" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=air-5-64gb-5g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            20%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=air-5-64gb-5g-chinh-hang-vn"
                                                    title="iPad Air 5 64GB 5G - Chính hãng VN">iPad Air 5 64GB
                                                    5G - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                16.890.000₫
                                                <span class="compare-price">20.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-air-5-64gb-5g-chinh-hang-vn" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-air-5-64gb-5g-chinh-hang-vn" data-type="ipad"
                                                    tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-xl-20 col-lg-3 col-sm-4 col-6 col-fix">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494427" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=air-5-256gb-wifi-chinh-hang-vn"
                                                title="iPad Air 5 256GB Wifi - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/220309063614-ipad-air-select-wif-272fbe81-1bff-4515-88da-a4c5e37082c2-7eb0de6d-2d6b-46fc-94af-1c9e0d652cf7.png?v=1700213080090"
                                                    alt="iPad Air 5 256GB Wifi - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040376" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=air-5-256gb-wifi-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            15%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=air-5-256gb-wifi-chinh-hang-vn"
                                                    title="iPad Air 5 256GB Wifi - Chính hãng VN">iPad Air 5
                                                    256GB Wifi - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                17.890.000₫
                                                <span class="compare-price">20.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-air-5-256gb-wifi-chinh-hang-vn" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-air-5-256gb-wifi-chinh-hang-vn" data-type="ipad"
                                                    tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-xl-20 col-lg-3 col-sm-4 col-6 col-fix">





























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33490292" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover" href="/iphone-15-128gb-chinh-hang-vn-a"
                                                title="iPhone 15 128GB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230913033139-iphone-15-yellow.png?v=1700194043987"
                                                    alt="iPhone 15 128GB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="102996221" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-15-128gb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            12%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-15-128gb-chinh-hang-vn-a"
                                                    title="iPhone 15 128GB - Chính hãng VN/A">iPhone 15 128GB -
                                                    Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                21.990.000₫
                                                <span class="compare-price">24.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-15-128gb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-15-128gb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-xl-20 col-lg-3 col-sm-4 col-6 col-fix">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494439" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=air-5-256gb-5g-chinh-hang-vn"
                                                title="iPad Air 5 256GB 5G - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/220309063447-ipad-air-select-wif-498a2e36-4015-4cf2-bf71-2865cc4635c4-e583d274-1bd9-4ee7-b302-0e918b3278e2-434f1bcc-4dea-4c28-8698-e60ed84eaa8d.png?v=1700213041993"
                                                    alt="iPad Air 5 256GB 5G - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040392" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=air-5-256gb-5g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            13%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=air-5-256gb-5g-chinh-hang-vn"
                                                    title="iPad Air 5 256GB 5G - Chính hãng VN">iPad Air 5 256GB
                                                    5G - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                21.790.000₫
                                                <span class="compare-price">24.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-air-5-256gb-5g-chinh-hang-vn" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-air-5-256gb-5g-chinh-hang-vn" data-type="ipad"
                                                    tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-xl-20 col-lg-3 col-sm-4 col-6 col-fix">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494490" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-wifi-5g-chinh-hang-vn"
                                                title="iPad Pro 11 inch M2 2022 Wifi + 5G - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/minhtuanmobile-ipad-pro-11-selec.png?v=1700213362300"
                                                    alt="iPad Pro 11 inch M2 2022 Wifi + 5G - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040481" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-wifi-5g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            17%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-wifi-5g-chinh-hang-vn"
                                                    title="iPad Pro 11 inch M2 2022 Wifi + 5G - Chính hãng VN">iPad
                                                    Pro 11 inch M2 2022 Wifi + 5G - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                23.190.000₫
                                                <span class="compare-price">27.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-pro-11-inch-m2-2022-wifi-5g-chinh-hang-vn"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-pro-11-inch-m2-2022-wifi-5g-chinh-hang-vn"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-xl-20 col-lg-3 col-sm-4 col-6 col-fix">





























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33490296" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover" href="/iphone-15-256gb-chinh-hang-vn-a"
                                                title="iPhone 15 256GB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230913032939-iphone-15-green-8c348a34-ebcd-41c6-8b6d-ef888554c4a2.png?v=1700194186787"
                                                    alt="iPhone 15 256GB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="102999351" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-15-256gb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            13%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-15-256gb-chinh-hang-vn-a"
                                                    title="iPhone 15 256GB - Chính hãng VN/A">iPhone 15 256GB -
                                                    Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                24.290.000₫
                                                <span class="compare-price">27.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-15-256gb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-15-256gb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-xl-20 col-lg-3 col-sm-4 col-6 col-fix">





























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33490364" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/iphone-15-plus-128gb-chinh-hang-vn-a"
                                                title="iPhone 15 Plus 128GB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230913051329-iphone-15-plus-blac.png?v=1700194480037"
                                                    alt="iPhone 15 Plus 128GB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103015066" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-15-plus-128gb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            9%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-15-plus-128gb-chinh-hang-vn-a"
                                                    title="iPhone 15 Plus 128GB - Chính hãng VN/A">iPhone 15
                                                    Plus 128GB - Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                25.390.000₫
                                                <span class="compare-price">27.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-15-plus-128gb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-15-plus-128gb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-xl-20 col-lg-3 col-sm-4 col-6 col-fix">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494498" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-256gb-wifi-5g-chinh-hang-vn"
                                                title="iPad Pro 11 inch M2 2022 256GB Wifi + 5G - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/minhtuanmobile-ipad-pro-11-selec-78be9d03-2d95-4a49-968e-a5332eb20465.png?v=1700213422163"
                                                    alt="iPad Pro 11 inch M2 2022 256GB Wifi + 5G - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040494" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-256gb-wifi-5g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            13%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-256gb-wifi-5g-chinh-hang-vn"
                                                    title="iPad Pro 11 inch M2 2022 256GB Wifi + 5G - Chính hãng VN">iPad
                                                    Pro 11 inch M2 2022 256GB Wifi + 5G - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                26.890.000₫
                                                <span class="compare-price">30.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-pro-11-inch-m2-2022-256gb-wifi-5g-chinh-hang-vn"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-pro-11-inch-m2-2022-256gb-wifi-5g-chinh-hang-vn"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>



                            <div class="text-center no-padding">
                                <a class="see-more" title="Xem toàn bộ sản phẩm" href="/san-pham-moi">Xem toàn
                                    bộ sản phẩm <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                        viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </div>

                        </div>















                        <div class="tab-2 tab-content">


                            <div class="text-center no-padding">
                                <a class="see-more" title="Xem toàn bộ sản phẩm" href="/san-pham-noi-bat">Xem
                                    toàn bộ sản phẩm <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                        viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </div>

                        </div>















                        <div class="tab-3 tab-content">


                            <div class="text-center no-padding">
                                <a class="see-more" title="Xem toàn bộ sản phẩm" href="/san-pham-ban-chay">Xem
                                    toàn bộ sản phẩm <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                        viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </div>

                        </div>




























                    </div>

                </div>
            </div>
        </div>
    </section>








    <section class="section_flashsale">
        <div class="container">
            <div class="thumb-flasale">
                <div class="thumb-title-flash row no-margin">
                    <h3 class="title-index col-lg-4 no-padding">
                        <a class="title-name" href="san-pham-khuyen-mai" title="Deal nổi bật">
                            <img width="250" height="118" class="lazyload"
                                src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/hot_icon.png?1719764721426"
                                alt="flash">
                            Deal nổi bật
                        </a>
                    </h3>
                    <div class="flash-text col-lg-8 no-padding">
                        <div class="text-slider swiper-container">
                            <div class="swiper-wrapper">



                                <div class="swiper-slide"> Cam kết giá tốt nhất thị trường
                                </div>


                                <div class="swiper-slide"> Sản phẩm chính hãng, Mới 100%, Bảo hàng đến 2 năm, 1
                                    ĐỔI 1 trong 10 ngày do lỗi NSX
                                </div>


                                <div class="swiper-slide"> Nhiều chương trình khuyến mãi với ưu đãi cực kì hấp
                                    dẫn
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-fix">
                    <div class="col-md-5 col-lg-4 col-xl-3 col-12 col-fix">

                        <div class="count-down">
                            <div class="timer-view" data-countdown="countdown" data-date="2024-06-20-00-00-00">
                            </div>
                        </div>
                        <img width="400" height="400"
                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/flash.png?1719764721426"
                            alt="Deal nổi bật">
                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-9 col-12 col-fix margin-0">
                        <div class="product-flash-swiper swiper-container p-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-pro">























































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33495206" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/coc-sac-nhanh-apple-20w-type-c-chinh-hang-mhje3za"
                                                title="Cốc sạc nhanh Apple 20W Type-C Chính Hãng MHJE3ZA">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/coc-sac-nhanh-apple-20w-type-c-m.png?v=1700216485363"
                                                    alt="Cốc sạc nhanh Apple 20W Type-C Chính Hãng MHJE3ZA">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103054118" />
                                            <div class="action">
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            46%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/coc-sac-nhanh-apple-20w-type-c-chinh-hang-mhje3za"
                                                    title="Cốc sạc nhanh Apple 20W Type-C Chính Hãng MHJE3ZA">Cốc
                                                    sạc nhanh Apple 20W Type-C Chính Hãng MHJE3ZA</a></h3>
                                            <div class="price-box">
                                                490.000₫
                                                <span class="compare-price">900.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="coc-sac-nhanh-apple-20w-type-c-chinh-hang-mhje3za"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="coc-sac-nhanh-apple-20w-type-c-chinh-hang-mhje3za"
                                                    data-type="Sạc" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>






















                                            <div class="elio-productcount">


                                                <div class="countdown">
                                                    <div class="line"><span style="width:75%;"> </span></div>
                                                    <span class="title">Đã bán 15</span>
                                                </div>


                                            </div>






                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">























































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33495234" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/op-lung-magsafe-iphone-15-apple-silicone-chinh-hang"
                                                title="Ốp lưng MagSafe iPhone 15 Apple Silicone Chính Hãng">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230913055843-mt0u3fe-a2.png?v=1700216651463"
                                                    alt="Ốp lưng MagSafe iPhone 15 Apple Silicone Chính Hãng">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103054176" />
                                            <div class="action">
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/op-lung-magsafe-iphone-15-apple-silicone-chinh-hang"
                                                    title="Ốp lưng MagSafe iPhone 15 Apple Silicone Chính Hãng">Ốp
                                                    lưng MagSafe iPhone 15 Apple Silicone Chính Hãng</a></h3>
                                            <div class="price-box">
                                                1.429.000₫ </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="op-lung-magsafe-iphone-15-apple-silicone-chinh-hang"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="op-lung-magsafe-iphone-15-apple-silicone-chinh-hang"
                                                    data-type="Ốp lưng" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>






















                                            <div class="elio-productcount">


                                                <div class="countdown">
                                                    <div class="line"><span style="width:90%;"> </span></div>
                                                    <span class="title">Đã bán 18</span>
                                                </div>


                                            </div>






                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">























































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494757" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=watch&phien_ban=SE-2022-gps-40mm-chinh-hang-vn-a"
                                                title="Apple Watch SE 2022 GPS 40mm - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230707101901-apple-watch-se-2022.png?v=1700214265100"
                                                    alt="Apple Watch SE 2022 GPS 40mm - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040920" />
                                            <div class="action">
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            29%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=watch&phien_ban=SE-2022-gps-40mm-chinh-hang-vn-a"
                                                    title="Apple Watch SE 2022 GPS 40mm - Chính hãng VN/A">Apple
                                                    Watch SE 2022 GPS 40mm - Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                6.390.000₫
                                                <span class="compare-price">8.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="apple-watch-se-2022-gps-40mm-chinh-hang-vn-a"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="apple-watch-se-2022-gps-40mm-chinh-hang-vn-a"
                                                    data-type="Watch" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>






















                                            <div class="elio-productcount">


                                                <div class="countdown">
                                                    <div class="line"><span style="width:40%;"> </span></div>
                                                    <span class="title">Đã bán 8</span>
                                                </div>


                                            </div>






                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">



























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494220" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/ipad-gen-9-64gb-wifi-chinh-hang-vn"
                                                title="iPad Gen 9 64GB Wifi - Chính Hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/210917052004-ipad-06.png?v=1700212481237"
                                                    alt="iPad Gen 9 64GB Wifi - Chính Hãng VN">


                                            </a>
                                            <div class="tag-km">





                                                <span><img alt="Bán chạy" width="60" height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_3_tag.png?1719764721426">
                                                    Bán chạy</span>

                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103039924" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/ipad-gen-9-64gb-wifi-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            44%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/ipad-gen-9-64gb-wifi-chinh-hang-vn"
                                                    title="iPad Gen 9 64GB Wifi - Chính Hãng VN">iPad Gen 9 64GB
                                                    Wifi - Chính Hãng VN</a></h3>
                                            <div class="price-box">
                                                6.990.000₫
                                                <span class="compare-price">12.390.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-gen-9-64gb-wifi-chinh-hang-vn" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-gen-9-64gb-wifi-chinh-hang-vn" data-type="ipad"
                                                    tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>





























                                            <div class="elio-productcount">


                                                <div class="countdown">
                                                    <div class="line"><span style="width:40%;"> </span></div>
                                                    <span class="title">Đã bán 8</span>
                                                </div>


                                            </div>






                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">








































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33489339" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=iphone&phien_ban=11-64gb-chinh-hang-vn-a"
                                                title="iPhone 11 64GB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230807014406-iphone11.png?v=1700190264893"
                                                    alt="iPhone 11 64GB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="102971934" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=iphone&phien_ban=11-64gb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            29%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=iphone&phien_ban=11-64gb-chinh-hang-vn-a"
                                                    title="iPhone 11 64GB - Chính hãng VN/A">iPhone 11 64GB -
                                                    Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                10.590.000₫
                                                <span class="compare-price">14.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-11-64gb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-11-64gb-chinh-hang-vn-a" data-type="Điện thoại"
                                                    tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>



























                                            <div class="elio-productcount">


                                                <div class="countdown">
                                                    <div class="line"><span style="width:55%;"> </span></div>
                                                    <span class="title">Đã bán 11</span>
                                                </div>


                                            </div>






                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494665" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=watch&phien_ban=SEries-9-gps-45mm-vien-nhom-day-cao-su"
                                                title="Apple Watch Series 9 GPS 45mm Viền Nhôm Dây Cao Su">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230914015555-apple-watch-series.png?v=1700213928387"
                                                    alt="Apple Watch Series 9 GPS 45mm Viền Nhôm Dây Cao Su">


                                            </a>
                                            <div class="tag-km">





                                                <span><img alt="Bán chạy" width="60" height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_3_tag.png?1719764721426">
                                                    Bán chạy</span>

                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040772" />
                                            <div class="action">
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            31%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=watch&phien_ban=SEries-9-gps-45mm-vien-nhom-day-cao-su"
                                                    title="Apple Watch Series 9 GPS 45mm Viền Nhôm Dây Cao Su">Apple
                                                    Watch Series 9 GPS 45mm Viền Nhôm Dây Cao Su</a></h3>
                                            <div class="price-box">
                                                10.990.000₫
                                                <span class="compare-price">15.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="apple-watch-series-9-gps-45mm-vien-nhom-day-cao-su"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="apple-watch-series-9-gps-45mm-vien-nhom-day-cao-su"
                                                    data-type="Watch" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
























                                            <div class="elio-productcount">


                                                <div class="countdown sold-out">

                                                    <div class="line"><span style="width:100%;"> </span></div>
                                                    <span class="title">Hết hàng</span>

                                                </div>


                                            </div>






                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">



























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494047" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=mini-6-64g-wifi-chinh-hang-vn"
                                                title="iPad Mini 6 64G Wifi - Chính Hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/210917104851-ipad-mini-6-64g-wif.png?v=1700211911487"
                                                    alt="iPad Mini 6 64G Wifi - Chính Hãng VN">


                                            </a>
                                            <div class="tag-km">





                                                <span><img alt="Bán chạy" width="60" height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_3_tag.png?1719764721426">
                                                    Bán chạy</span>

                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103039511" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=mini-6-64g-wifi-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            35%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=mini-6-64g-wifi-chinh-hang-vn"
                                                    title="iPad Mini 6 64G Wifi - Chính Hãng VN">iPad Mini 6 64G
                                                    Wifi - Chính Hãng VN</a></h3>
                                            <div class="price-box">
                                                10.990.000₫
                                                <span class="compare-price">16.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-mini-6-64g-wifi-chinh-hang-vn" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-mini-6-64g-wifi-chinh-hang-vn" data-type="ipad"
                                                    tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>



































                                            <div class="elio-productcount">


                                                <div class="countdown">
                                                    <div class="line"><span style="width:80%;"> </span></div>
                                                    <span class="title">Đã bán 16</span>
                                                </div>


                                            </div>






                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">








































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33489505" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=iphone&phien_ban=12-64gb-chinh-hang-vn-a"
                                                title="iPhone 12 64GB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230225033231-12tims.png?v=1700190851827"
                                                    alt="iPhone 12 64GB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="102972175" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=iphone&phien_ban=12-64gb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            43%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=iphone&phien_ban=12-64gb-chinh-hang-vn-a"
                                                    title="iPhone 12 64GB - Chính hãng VN/A">iPhone 12 64GB -
                                                    Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                13.190.000₫
                                                <span class="compare-price">22.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-12-64gb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-12-64gb-chinh-hang-vn-a" data-type="Điện thoại"
                                                    tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>




































                                            <div class="elio-productcount">


                                                <div class="countdown">
                                                    <div class="line"><span style="width:30%;"> </span></div>
                                                    <span class="title">Đã bán 6</span>
                                                </div>


                                            </div>






                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">








































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494275" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/ipad-gen-9-256gb-wifi-4g-chinh-hang-vn"
                                                title="iPad Gen 9 256GB Wifi + 4G - Chính Hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/210917052034-ipad-05-1ce0bd11-cf59-4d28-8d3a-b27cb4798176-6eecca66-f376-4674-b40c-be5fc510cf41-8365c8cc-5e4f-4f26-a9d4-9aea053948a8.png?v=1700212431403"
                                                    alt="iPad Gen 9 256GB Wifi + 4G - Chính Hãng VN">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040058" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/ipad-gen-9-256gb-wifi-4g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            29%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/ipad-gen-9-256gb-wifi-4g-chinh-hang-vn"
                                                    title="iPad Gen 9 256GB Wifi + 4G - Chính Hãng VN">iPad Gen
                                                    9 256GB Wifi + 4G - Chính Hãng VN</a></h3>
                                            <div class="price-box">
                                                13.590.000₫
                                                <span class="compare-price">19.190.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-gen-9-256gb-wifi-4g-chinh-hang-vn" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-gen-9-256gb-wifi-4g-chinh-hang-vn"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>



























                                            <div class="elio-productcount">


                                                <div class="countdown">
                                                    <div class="line"><span style="width:30%;"> </span></div>
                                                    <span class="title">Đã bán 6</span>
                                                </div>


                                            </div>






                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">








































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494337" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/ipad-gen-10-2022-256gb-wifi-chinh-hang-vn-no-1"
                                                title="iPad Gen 10 2022 256GB Wifi - Chính hãng VN - No.1">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230421022354-thiet-ke-chua-co-te-1071bb17-1b31-47c1-9820-147aec6486b9.png?v=1700212684153"
                                                    alt="iPad Gen 10 2022 256GB Wifi - Chính hãng VN - No.1">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040190" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/ipad-gen-10-2022-256gb-wifi-chinh-hang-vn-no-1'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            13%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/ipad-gen-10-2022-256gb-wifi-chinh-hang-vn-no-1"
                                                    title="iPad Gen 10 2022 256GB Wifi - Chính hãng VN - No.1">iPad
                                                    Gen 10 2022 256GB Wifi - Chính hãng VN - No.1</a></h3>
                                            <div class="price-box">
                                                14.590.000₫
                                                <span class="compare-price">16.790.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-gen-10-2022-256gb-wifi-chinh-hang-vn-no-1"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-gen-10-2022-256gb-wifi-chinh-hang-vn-no-1"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>

































                                            <div class="elio-productcount">


                                                <div class="countdown">
                                                    <div class="line"><span style="width:60%;"> </span></div>
                                                    <span class="title">Đã bán 12</span>
                                                </div>


                                            </div>






                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="swiper-button-next">

                            </div>
                            <div class="swiper-button-prev">

                            </div>

                        </div>
                        <div class="text-center no-padding">
                            <a class="see-more" title="Xem toàn bộ sản phẩm" href="san-pham-khuyen-mai">Xem toàn
                                bộ sản phẩm <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg></a>
                        </div>
                    </div>

                </div>


            </div>


        </div>
    </section>
    <script>
    var swiperflash = new Swiper('.product-flash-swiper', {
        slidesPerView: 3,
        loop: false,
        grabCursor: true,
        roundLengths: true,
        slideToClickedSlide: false,
        spaceBetween: 20,
        autoplay: false,
        navigation: {
            nextEl: '.product-flash-swiper .swiper-button-next',
            prevEl: '.product-flash-swiper .swiper-button-prev',
        },
        breakpoints: {
            300: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            450: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }
    });
    var swipertext = new Swiper('.text-slider', {
        autoplay: true,
        effect: 'fade',

    });
    </script>




    <section class="section_product">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-xl-3 ">
                    <div class="block-background h-100">

                        <a style="margin-bottom: 10px" class="thumb-image-banner" href="/collections/all"
                            title="Banner">
                            <img width="900" height="900" class="lazyload"
                                src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner1_product1.jpg?1719764721426"
                                alt="Banner">
                        </a>


                        <a class="thumb-image-banner" href="/collections/all" title="Banner">
                            <img width="900" height="900" class="lazyload"
                                src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner2_product1.jpg?1719764721426"
                                alt="Banner">
                        </a>

                    </div>
                </div>

                <div class="col-lg-8 col-xl-9 ">
                    <div class="block-background">

                        <div class="title-index p-5">
                            <a class="title-name" href="iphone" title="Iphone">Iphone
                            </a>
                            <ul class="menu-title">
                                <li class="nav-item">
                                    <a class="a-img" href="?modules=sanpham&action=iphone&phien_ban=15"
                                        title="iPhone 15 Series">
                                        iPhone 15 Series
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-img" href="?modules=sanpham&action=iphone&phien_ban=14"
                                        title="iPhone 14 Series">
                                        iPhone 14 Series
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-img" href="?modules=sanpham&action=iphone&phien_ban=13"
                                        title="iPhone 13">
                                        iPhone 13
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-img" href="?modules=sanpham&action=iphone&phien_ban=12"
                                        title="iPhone 12">
                                        iPhone 12
                                    </a>
                                </li>


                            </ul>
                        </div>

                        <div class="product1-swiper swiper-container p-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-pro">


























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33490686" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/iphone-15-pro-max-1tb-chinh-hang-vn-a"
                                                title="iPhone 15 Pro Max 1TB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230913060526-iphone-15-pro-max-n-1-59f45888-19c4-48c6-9803-1d3828deeba9-eab63bca-5bbf-4dc6-ac81-6b49a59aadf2.png?v=1700195375837"
                                                    alt="iPhone 15 Pro Max 1TB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103031738" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-15-pro-max-1tb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            9%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-15-pro-max-1tb-chinh-hang-vn-a"
                                                    title="iPhone 15 Pro Max 1TB - Chính hãng VN/A">iPhone 15
                                                    Pro Max 1TB - Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                45.590.000₫
                                                <span class="compare-price">49.990.000₫</span>

                                            </div>


                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-15-pro-max-1tb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-15-pro-max-1tb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">





























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33490376" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/iphone-15-plus-512gb-chinh-hang-vn-a"
                                                title="iPhone 15 Plus 512GB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230913051319-iphone-15-plus-gree-3891c830-4f86-46bf-a147-d1e5d001f700-69fc9483-629c-4dd3-a9eb-7603c2a2a135.png?v=1700194426930"
                                                    alt="iPhone 15 Plus 512GB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103019117" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-15-plus-512gb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            11%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-15-plus-512gb-chinh-hang-vn-a"
                                                    title="iPhone 15 Plus 512GB - Chính hãng VN/A">iPhone 15
                                                    Plus 512GB - Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                32.790.000₫
                                                <span class="compare-price">36.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-15-plus-512gb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-15-plus-512gb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">





























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33490328" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover" href="/iphone-15-512gb-chinh-hang-vn-a"
                                                title="iPhone 15 512GB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230913033227-iphone-15-pink-1-e946aba7-7c98-4d68-9405-66868d14acc4-6844ee0e-e88d-40fd-bce7-c57f26f49a77.png?v=1700194183203"
                                                    alt="iPhone 15 512GB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103003087" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-15-512gb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            12%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-15-512gb-chinh-hang-vn-a"
                                                    title="iPhone 15 512GB - Chính hãng VN/A">iPhone 15 512GB -
                                                    Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                29.990.000₫
                                                <span class="compare-price">33.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-15-512gb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-15-512gb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33490238" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/iphone-14-pro-max-1tb-chinh-hang-vn-a"
                                                title="iPhone 14 Pro Max 1TB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230628110910-iphone-14-pro-max-1-1bad29d8-76a1-4f4a-9bc2-93eee6a2d7ea-61e61768-f143-48bd-a884-d552977c5f1c.png?v=1700193758290"
                                                    alt="iPhone 14 Pro Max 1TB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="102980571" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-14-pro-max-1tb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            25%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-14-pro-max-1tb-chinh-hang-vn-a"
                                                    title="iPhone 14 Pro Max 1TB - Chính hãng VN/A">iPhone 14
                                                    Pro Max 1TB - Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                37.490.000₫
                                                <span class="compare-price">49.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-14-pro-max-1tb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-14-pro-max-1tb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">





























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33489961" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/iphone-14-plus-128gb-chinh-hang-vn-a"
                                                title="iPhone 14 Plus 128GB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230310085902-thiet-ke-chua-co-te.png?v=1700192618437"
                                                    alt="iPhone 14 Plus 128GB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                                <span style="background: #f3bd01"><img alt="Bán chạy" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_3_tag.png?1719764721426">
                                                    Bán chạy</span>

                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="102973211" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-14-plus-128gb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            25%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-14-plus-128gb-chinh-hang-vn-a"
                                                    title="iPhone 14 Plus 128GB - Chính hãng VN/A">iPhone 14
                                                    Plus 128GB - Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                20.990.000₫
                                                <span class="compare-price">27.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-14-plus-128gb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-14-plus-128gb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">





























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33489884" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover" href="/iphone-14-128gb-chinh-hang-vn-a"
                                                title="iPhone 14 128GB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230623042710-iphone-14-128g-blue.png?v=1700192127930"
                                                    alt="iPhone 14 128GB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                                <span style="background: #f3bd01"><img alt="Bán chạy" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_3_tag.png?1719764721426">
                                                    Bán chạy</span>

                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="102972999" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-14-128gb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            26%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-14-128gb-chinh-hang-vn-a"
                                                    title="iPhone 14 128GB - Chính hãng VN/A">iPhone 14 128GB -
                                                    Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                18.490.000₫
                                                <span class="compare-price">24.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-14-128gb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-14-128gb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33490203" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/iphone-14-pro-max-128gb-chinh-hang-vn-a"
                                                title="iPhone 14 Pro Max 128GB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230628111038-iphone-14-pro-max-1.png?v=1700193797330"
                                                    alt="iPhone 14 Pro Max 128GB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="102979061" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-14-pro-max-128gb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            23%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-14-pro-max-128gb-chinh-hang-vn-a"
                                                    title="iPhone 14 Pro Max 128GB - Chính hãng VN/A">iPhone 14
                                                    Pro Max 128GB - Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                29.290.000₫
                                                <span class="compare-price">37.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-14-pro-max-128gb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-14-pro-max-128gb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">









































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33490683" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/iphone-15-pro-max-512gb-chinh-hang-vn-a"
                                                title="iPhone 15 Pro Max 512GB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230913060438-iphone-15-pro-max-b-1-a6e28d40-f9e3-483f-ae8b-39d2fc6ba938.png?v=1700195661260"
                                                    alt="iPhone 15 Pro Max 512GB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103031729" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-15-pro-max-512gb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            10%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-15-pro-max-512gb-chinh-hang-vn-a"
                                                    title="iPhone 15 Pro Max 512GB - Chính hãng VN/A">iPhone 15
                                                    Pro Max 512GB - Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                39.390.000₫
                                                <span class="compare-price">43.990.000₫</span>

                                            </div>


                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-15-pro-max-512gb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-15-pro-max-512gb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">





























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33490670" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/iphone-15-pro-max-256gb-chinh-hang-vn-a"
                                                title="iPhone 15 Pro Max 256GB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230913060551-iphone-15-pro-max-w-1.png?v=1700195664800"
                                                    alt="iPhone 15 Pro Max 256GB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103031708" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-15-pro-max-256gb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            11%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-15-pro-max-256gb-chinh-hang-vn-a"
                                                    title="iPhone 15 Pro Max 256GB - Chính hãng VN/A">iPhone 15
                                                    Pro Max 256GB - Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                33.990.000₫
                                                <span class="compare-price">37.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-15-pro-max-256gb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-15-pro-max-256gb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">





























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33490535" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover" href="/iphone-15-pro-1tb-chinh-hang-vn-a"
                                                title="iPhone 15 Pro 1TB - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230913054934-iphone-15-pro-natur-6001eef4-bc0c-45ec-bc26-c71413787c71-655f9825-e11c-4d13-a2a7-d2ee1dab05ae-25e776b7-54c9-455a-808f-8c481692cf9f.png?v=1700194720300"
                                                    alt="iPhone 15 Pro 1TB - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>



                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                                    Nổi bật</span>



                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103028767" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/iphone-15-pro-1tb-chinh-hang-vn-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            12%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/iphone-15-pro-1tb-chinh-hang-vn-a"
                                                    title="iPhone 15 Pro 1TB - Chính hãng VN/A">iPhone 15 Pro
                                                    1TB - Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                41.490.000₫
                                                <span class="compare-price">46.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="iphone-15-pro-1tb-chinh-hang-vn-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="iphone-15-pro-1tb-chinh-hang-vn-a"
                                                    data-type="Điện thoại" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="swiper-button-next">

                            </div>
                            <div class="swiper-button-prev">

                            </div>
                            <div class="text-center no-padding">
                                <a class="see-more" title="Xem toàn bộ sản phẩm" href="iphone">Xem toàn bộ sản
                                    phẩm <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>
    <script>
    var swiperflash = new Swiper('.product1-swiper', {
        slidesPerView: 3,
        loop: false,
        grabCursor: true,
        roundLengths: true,
        slideToClickedSlide: false,
        spaceBetween: 20,
        autoplay: false,
        navigation: {
            nextEl: '.product1-swiper .swiper-button-next',
            prevEl: '.product1-swiper .swiper-button-prev',
        },

        breakpoints: {
            300: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            450: {
                slidesPerView: 2,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            767: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }

    });
    </script>




    <section class="section_product">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-xl-3 order-2">
                    <div class="block-background h-100">

                        <a style="margin-bottom: 10px" class="thumb-image-banner" href="/collections/all"
                            title="Banner">
                            <img width="900" height="900" class="lazyload"
                                src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner1_product2.jpg?1719764721426"
                                alt="Banner">
                        </a>


                        <a class="thumb-image-banner" href="/collections/all" title="Banner">
                            <img width="900" height="900" class="lazyload"
                                src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner2_product2.jpg?1719764721426"
                                alt="Banner">
                        </a>

                    </div>
                </div>

                <div class="col-lg-8 col-xl-9 order-1">
                    <div class="block-background">

                        <div class="title-index p-5">
                            <a class="title-name" href="ipad" title="Ipad">Ipad
                            </a>
                            <ul class="menu-title">
                                <li class="nav-item">
                                    <a class="a-img" href="?modules=sanpham&action=ipad&phien_ban=pro" title="iPad Pro">
                                        iPad Pro
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-img" href="?modules=sanpham&action=ipad&phien_ban=air" title="iPad Air">
                                        iPad Air
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-img" href="?modules=sanpham&action=ipad&phien_ban=gen-10"
                                        title="iPad Gen 10">
                                        iPad Gen 10
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-img" href="?modules=sanpham&action=ipad&phien_ban=gen-9"
                                        title="iPad Gen 9">
                                        iPad Gen 9
                                    </a>
                                </li>


                            </ul>
                        </div>

                        <div class="product2-swiper swiper-container p-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-pro">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494514" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-1tb-wifi-5g-chinh-hang-vn"
                                                title="iPad Pro 11 inch M2 2022 1TB Wifi + 5G - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/minhtuanmobile-ipad-pro-11-selec-78be9d03-2d95-4a49-968e-a5332eb20465-25342150-a1b4-4244-a941-9089187a0048-44aae303-9599-4883-87ec-8b4256b6f45a.png?v=1700213504547"
                                                    alt="iPad Pro 11 inch M2 2022 1TB Wifi + 5G - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040512" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-1tb-wifi-5g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            2%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-1tb-wifi-5g-chinh-hang-vn"
                                                    title="iPad Pro 11 inch M2 2022 1TB Wifi + 5G - Chính hãng VN">iPad
                                                    Pro 11 inch M2 2022 1TB Wifi + 5G - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                42.990.000₫
                                                <span class="compare-price">43.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-pro-11-inch-m2-2022-1tb-wifi-5g-chinh-hang-vn"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-pro-11-inch-m2-2022-1tb-wifi-5g-chinh-hang-vn"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494439" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=air-5-256gb-5g-chinh-hang-vn"
                                                title="iPad Air 5 256GB 5G - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/220309063447-ipad-air-select-wif-498a2e36-4015-4cf2-bf71-2865cc4635c4-e583d274-1bd9-4ee7-b302-0e918b3278e2-434f1bcc-4dea-4c28-8698-e60ed84eaa8d.png?v=1700213041993"
                                                    alt="iPad Air 5 256GB 5G - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040392" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=air-5-256gb-5g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            13%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=air-5-256gb-5g-chinh-hang-vn"
                                                    title="iPad Air 5 256GB 5G - Chính hãng VN">iPad Air 5 256GB
                                                    5G - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                21.790.000₫
                                                <span class="compare-price">24.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-air-5-256gb-5g-chinh-hang-vn" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-air-5-256gb-5g-chinh-hang-vn" data-type="ipad"
                                                    tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">








































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494337" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/ipad-gen-10-2022-256gb-wifi-chinh-hang-vn-no-1"
                                                title="iPad Gen 10 2022 256GB Wifi - Chính hãng VN - No.1">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230421022354-thiet-ke-chua-co-te-1071bb17-1b31-47c1-9820-147aec6486b9.png?v=1700212684153"
                                                    alt="iPad Gen 10 2022 256GB Wifi - Chính hãng VN - No.1">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040190" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/ipad-gen-10-2022-256gb-wifi-chinh-hang-vn-no-1'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            13%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/ipad-gen-10-2022-256gb-wifi-chinh-hang-vn-no-1"
                                                    title="iPad Gen 10 2022 256GB Wifi - Chính hãng VN - No.1">iPad
                                                    Gen 10 2022 256GB Wifi - Chính hãng VN - No.1</a></h3>
                                            <div class="price-box">
                                                14.590.000₫
                                                <span class="compare-price">16.790.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-gen-10-2022-256gb-wifi-chinh-hang-vn-no-1"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-gen-10-2022-256gb-wifi-chinh-hang-vn-no-1"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">








































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494275" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="/ipad-gen-9-256gb-wifi-4g-chinh-hang-vn"
                                                title="iPad Gen 9 256GB Wifi + 4G - Chính Hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/210917052034-ipad-05-1ce0bd11-cf59-4d28-8d3a-b27cb4798176-6eecca66-f376-4674-b40c-be5fc510cf41-8365c8cc-5e4f-4f26-a9d4-9aea053948a8.png?v=1700212431403"
                                                    alt="iPad Gen 9 256GB Wifi + 4G - Chính Hãng VN">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040058" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='/ipad-gen-9-256gb-wifi-4g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            29%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="/ipad-gen-9-256gb-wifi-4g-chinh-hang-vn"
                                                    title="iPad Gen 9 256GB Wifi + 4G - Chính Hãng VN">iPad Gen
                                                    9 256GB Wifi + 4G - Chính Hãng VN</a></h3>
                                            <div class="price-box">
                                                13.590.000₫
                                                <span class="compare-price">19.190.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-gen-9-256gb-wifi-4g-chinh-hang-vn" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-gen-9-256gb-wifi-4g-chinh-hang-vn"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">























































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494079" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=mini-6-256g-wifi-5g-chinh-hang-vn"
                                                title="iPad Mini 6 256G Wifi + 5G - Chính Hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/210917104814-ipad-mini-6-64g-wif-2da0ed46-a9da-4044-9032-98e817d8d69b-7773e96e-399e-491f-baa1-56a22e125d4b-073b7c9c-40cb-43b6-867a-01c56cec7533.png?v=1700212073370"
                                                    alt="iPad Mini 6 256G Wifi + 5G - Chính Hãng VN">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103039565" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=mini-6-256g-wifi-5g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            24%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=mini-6-256g-wifi-5g-chinh-hang-vn"
                                                    title="iPad Mini 6 256G Wifi + 5G - Chính Hãng VN">iPad Mini
                                                    6 256G Wifi + 5G - Chính Hãng VN</a></h3>
                                            <div class="price-box">
                                                18.990.000₫
                                                <span class="compare-price">24.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-mini-6-256g-wifi-5g-chinh-hang-vn" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-mini-6-256g-wifi-5g-chinh-hang-vn"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494502" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-512gb-wifi-5g-chinh-hang-vn"
                                                title="iPad Pro 11 inch M2 2022 512GB Wifi + 5G - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/221019094952-minhtuanmobile-ipad-6ee6a2ec-837a-44f5-942f-241432fa99c5-ec422a31-aa90-45cc-8e80-dff13cc29628.png?v=1700213533593"
                                                    alt="iPad Pro 11 inch M2 2022 512GB Wifi + 5G - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040499" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-512gb-wifi-5g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            6%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-512gb-wifi-5g-chinh-hang-vn"
                                                    title="iPad Pro 11 inch M2 2022 512GB Wifi + 5G - Chính hãng VN">iPad
                                                    Pro 11 inch M2 2022 512GB Wifi + 5G - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                34.900.000₫
                                                <span class="compare-price">36.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-pro-11-inch-m2-2022-512gb-wifi-5g-chinh-hang-vn"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-pro-11-inch-m2-2022-512gb-wifi-5g-chinh-hang-vn"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494498" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-256gb-wifi-5g-chinh-hang-vn"
                                                title="iPad Pro 11 inch M2 2022 256GB Wifi + 5G - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/minhtuanmobile-ipad-pro-11-selec-78be9d03-2d95-4a49-968e-a5332eb20465.png?v=1700213422163"
                                                    alt="iPad Pro 11 inch M2 2022 256GB Wifi + 5G - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040494" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-256gb-wifi-5g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            13%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-256gb-wifi-5g-chinh-hang-vn"
                                                    title="iPad Pro 11 inch M2 2022 256GB Wifi + 5G - Chính hãng VN">iPad
                                                    Pro 11 inch M2 2022 256GB Wifi + 5G - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                26.890.000₫
                                                <span class="compare-price">30.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-pro-11-inch-m2-2022-256gb-wifi-5g-chinh-hang-vn"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-pro-11-inch-m2-2022-256gb-wifi-5g-chinh-hang-vn"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">



























































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494492" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-2tb-wifi-5g-chinh-hang-vn"
                                                title="iPad Pro 11 inch M2 2022 2TB Wifi + 5G - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/221019094952-minhtuanmobile-ipad-08f8a086-4310-441b-a594-f2766853f14e.png?v=1700213538057"
                                                    alt="iPad Pro 11 inch M2 2022 2TB Wifi + 5G - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040484" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-2tb-wifi-5g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-2tb-wifi-5g-chinh-hang-vn"
                                                    title="iPad Pro 11 inch M2 2022 2TB Wifi + 5G - Chính hãng VN">iPad
                                                    Pro 11 inch M2 2022 2TB Wifi + 5G - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                Liên hệ
                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-pro-11-inch-m2-2022-2tb-wifi-5g-chinh-hang-vn"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-pro-11-inch-m2-2022-2tb-wifi-5g-chinh-hang-vn"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494490" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-wifi-5g-chinh-hang-vn"
                                                title="iPad Pro 11 inch M2 2022 Wifi + 5G - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/minhtuanmobile-ipad-pro-11-selec.png?v=1700213362300"
                                                    alt="iPad Pro 11 inch M2 2022 Wifi + 5G - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040481" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-wifi-5g-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            17%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=pro-11-inch-m2-2022-wifi-5g-chinh-hang-vn"
                                                    title="iPad Pro 11 inch M2 2022 Wifi + 5G - Chính hãng VN">iPad
                                                    Pro 11 inch M2 2022 Wifi + 5G - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                23.190.000₫
                                                <span class="compare-price">27.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-pro-11-inch-m2-2022-wifi-5g-chinh-hang-vn"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-pro-11-inch-m2-2022-wifi-5g-chinh-hang-vn"
                                                    data-type="ipad" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">










































































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494427" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=ipad&phien_ban=air-5-256gb-wifi-chinh-hang-vn"
                                                title="iPad Air 5 256GB Wifi - Chính hãng VN">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/220309063614-ipad-air-select-wif-272fbe81-1bff-4515-88da-a4c5e37082c2-7eb0de6d-2d6b-46fc-94af-1c9e0d652cf7.png?v=1700213080090"
                                                    alt="iPad Air 5 256GB Wifi - Chính hãng VN">


                                            </a>
                                            <div class="tag-km">

                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                                    Mới</span>





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103040376" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=ipad&phien_ban=air-5-256gb-wifi-chinh-hang-vn'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            15%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=ipad&phien_ban=air-5-256gb-wifi-chinh-hang-vn"
                                                    title="iPad Air 5 256GB Wifi - Chính hãng VN">iPad Air 5
                                                    256GB Wifi - Chính hãng VN</a></h3>
                                            <div class="price-box">
                                                17.890.000₫
                                                <span class="compare-price">20.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="ipad-air-5-256gb-wifi-chinh-hang-vn" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="ipad-air-5-256gb-wifi-chinh-hang-vn" data-type="ipad"
                                                    tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="swiper-button-next">

                            </div>
                            <div class="swiper-button-prev">

                            </div>
                            <div class="text-center no-padding">
                                <a class="see-more" title="Xem toàn bộ sản phẩm" href="ipad">Xem toàn bộ sản
                                    phẩm <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>
    <script>
    var swiperflash = new Swiper('.product2-swiper', {
        slidesPerView: 3,
        loop: false,
        grabCursor: true,
        roundLengths: true,
        slideToClickedSlide: false,
        spaceBetween: 20,
        autoplay: false,
        navigation: {
            nextEl: '.product2-swiper .swiper-button-next',
            prevEl: '.product2-swiper .swiper-button-prev',
        },

        breakpoints: {
            300: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            450: {
                slidesPerView: 2,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            767: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }

    });
    </script>




    <section class="section_product">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-xl-3 ">
                    <div class="block-background h-100">

                        <a style="margin-bottom: 10px" class="thumb-image-banner" href="/collections/all"
                            title="Banner">
                            <img width="900" height="900" class="lazyload"
                                src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner1_product3.jpg?1719764721426"
                                alt="Banner">
                        </a>


                        <a class="thumb-image-banner" href="/collections/all" title="Banner">
                            <img width="900" height="900" class="lazyload"
                                src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner2_product3.jpg?1719764721426"
                                alt="Banner">
                        </a>

                    </div>
                </div>

                <div class="col-lg-8 col-xl-9 ">
                    <div class="block-background">

                        <div class="title-index p-5">
                            <a class="title-name" href="mac" title="Mac">Mac
                            </a>
                            <ul class="menu-title">
                                <li class="nav-item">
                                    <a class="a-img" href="?modules=sanpham&action=mac&phien_ban=book" title="MacBook">
                                        MacBook
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-img" href="?modules=sanpham&action=mac&phien_ban=studio"
                                        title="Mac Studio">
                                        Mac Studio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-img" href="?modules=sanpham&action=mac&phien_ban=imac" title="iMac">
                                        iMac
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="a-img" href="?modules=sanpham&action=mac&phien_ban=mini" title="Mac mini">
                                        Mac mini
                                    </a>
                                </li>


                            </ul>
                        </div>

                        <div class="product3-swiper swiper-container p-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-pro">

























































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494869" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=mac&phien_ban=book-pro-m2-13-2022-8cpu-10gpu-256gb-ram-16gb-chinh-hang-vn-z16r0003v-z16t0003v"
                                                title="MacBook Pro M2 13 2022 8CPU 10GPU 256GB| RAM 16GB Chính hãng VN (Z16R0003V- Z16T0003V)">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/220608111844-thumb-macbook-pro-m-92a41cea-1766-4864-b183-14d77a6372e3-35b96841-a2ff-4f13-a7cd-916bc9912862.png?v=1700214792423"
                                                    alt="MacBook Pro M2 13 2022 8CPU 10GPU 256GB| RAM 16GB Chính hãng VN (Z16R0003V- Z16T0003V)">


                                            </a>
                                            <div class="tag-km">





                                                <span style="background: #f3bd01"><img alt="Bán chạy" width="60"
                                                        height="60" class="lazyload"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_3_tag.png?1719764721426">
                                                    Bán chạy</span>

                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103043038" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=mac&phien_ban=book-pro-m2-13-2022-8cpu-10gpu-256gb-ram-16gb-chinh-hang-vn-z16r0003v-z16t0003v'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            8%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=mac&phien_ban=book-pro-m2-13-2022-8cpu-10gpu-256gb-ram-16gb-chinh-hang-vn-z16r0003v-z16t0003v"
                                                    title="MacBook Pro M2 13 2022 8CPU 10GPU 256GB| RAM 16GB Chính hãng VN (Z16R0003V- Z16T0003V)">MacBook
                                                    Pro M2 13" 2022 8CPU 10GPU 256GB| RAM 16GB Chính hãng VN
                                                    (Z16R0003V- Z16T0003V)</a></h3>
                                            <div class="price-box">
                                                35.990.000₫
                                                <span class="compare-price">38.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="macbook-pro-m2-13-2022-8cpu-10gpu-256gb-ram-16gb-chinh-hang-vn-z16r0003v-z16t0003v"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="macbook-pro-m2-13-2022-8cpu-10gpu-256gb-ram-16gb-chinh-hang-vn-z16r0003v-z16t0003v"
                                                    data-type="Mac" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">






































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494975" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=mac&phien_ban=imac-m3-2023-24-inch-8-cpu-8-gpu-8gb-256gb-ssd"
                                                title="iMac M3 2023 24 Inch [8 CPU | 8 GPU] 8GB 256GB SSD">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products?modules=sanpham&action=mac&phien_ban=imac-231031035135.png?v=1700215208680"
                                                    alt="iMac M3 2023 24 Inch [8 CPU | 8 GPU] 8GB 256GB SSD">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103047080" />
                                            <div class="action">
                                            </div>

                                        </div>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=mac&phien_ban=imac-m3-2023-24-inch-8-cpu-8-gpu-8gb-256gb-ssd"
                                                    title="iMac M3 2023 24 Inch [8 CPU | 8 GPU] 8GB 256GB SSD">iMac
                                                    M3 2023 24 Inch [8 CPU | 8 GPU] 8GB 256GB SSD</a></h3>
                                            <div class="price-box">
                                                36.999.000₫ </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="imac-m3-2023-24-inch-8-cpu-8-gpu-8gb-256gb-ssd"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="imac-m3-2023-24-inch-8-cpu-8-gpu-8gb-256gb-ssd"
                                                    data-type="Mac" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">






































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494908" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=mac&phien_ban=book-pro-14-inch-2023-m3-8cpu-10gpu-8gb-1tb-ssd"
                                                title="MacBook Pro 14 inch 2023 M3 8CPU 10GPU 8GB 1TB SSD">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/mbprom3-2310310143271-2310311343-075912c4-d9a2-4f18-a430-899faded17ec.png?v=1700214910080"
                                                    alt="MacBook Pro 14 inch 2023 M3 8CPU 10GPU 8GB 1TB SSD">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103044158" />
                                            <div class="action">
                                            </div>

                                        </div>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=mac&phien_ban=book-pro-14-inch-2023-m3-8cpu-10gpu-8gb-1tb-ssd"
                                                    title="MacBook Pro 14 inch 2023 M3 8CPU 10GPU 8GB 1TB SSD">MacBook
                                                    Pro 14 inch 2023 M3 8CPU 10GPU 8GB 1TB SSD</a></h3>
                                            <div class="price-box">
                                                44.999.000₫ </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12
                                                    tháng</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="macbook-pro-14-inch-2023-m3-8cpu-10gpu-8gb-1tb-ssd"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="macbook-pro-14-inch-2023-m3-8cpu-10gpu-8gb-1tb-ssd"
                                                    data-type="Mac" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">






































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494942" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=mac&phien_ban=studio-chip-apple-m1-max-10-core-cpu-24-core-gpu-512gb-ssd-chinh-hang-vn-a"
                                                title="Mac Studio Chip Apple M1 Max 10‑core CPU 24‑core GPU| 512GB SSD - Chính hãng VN/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/thumb-mac-studio-202203-gallery.png?v=1700215065810"
                                                    alt="Mac Studio Chip Apple M1 Max 10‑core CPU 24‑core GPU| 512GB SSD - Chính hãng VN/A">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103045610" />
                                            <div class="action">
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            4%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=mac&phien_ban=studio-chip-apple-m1-max-10-core-cpu-24-core-gpu-512gb-ssd-chinh-hang-vn-a"
                                                    title="Mac Studio Chip Apple M1 Max 10‑core CPU 24‑core GPU| 512GB SSD - Chính hãng VN/A">Mac
                                                    Studio Chip Apple M1 Max 10‑core CPU 24‑core GPU| 512GB SSD
                                                    - Chính hãng VN/A</a></h3>
                                            <div class="price-box">
                                                52.990.000₫
                                                <span class="compare-price">54.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="mac-studio-chip-apple-m1-max-10-core-cpu-24-core-gpu-512gb-ssd-chinh-hang-vn-a"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="mac-studio-chip-apple-m1-max-10-core-cpu-24-core-gpu-512gb-ssd-chinh-hang-vn-a"
                                                    data-type="Mac" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">























































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494855" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=mac&phien_ban=book-pro-m2-13-2022-8cpu-10gpu-256gb-ram-8gb-chinh-hang-vn-mneh3sa-a-mnep3sa-a"
                                                title="MacBook Pro M2 13 2022 8CPU 10GPU 256GB| RAM 8GB Chính hãng VN ( MNEH3SA/A - MNEP3SA/A)">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/220608111844-thumb-macbook-pro-m-92a41cea-1766-4864-b183-14d77a6372e3.png?v=1700214757760"
                                                    alt="MacBook Pro M2 13 2022 8CPU 10GPU 256GB| RAM 8GB Chính hãng VN ( MNEH3SA/A - MNEP3SA/A)">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103042639" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=mac&phien_ban=book-pro-m2-13-2022-8cpu-10gpu-256gb-ram-8gb-chinh-hang-vn-mneh3sa-a-mnep3sa-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            22%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=mac&phien_ban=book-pro-m2-13-2022-8cpu-10gpu-256gb-ram-8gb-chinh-hang-vn-mneh3sa-a-mnep3sa-a"
                                                    title="MacBook Pro M2 13 2022 8CPU 10GPU 256GB| RAM 8GB Chính hãng VN ( MNEH3SA/A - MNEP3SA/A)">MacBook
                                                    Pro M2 13" 2022 8CPU 10GPU 256GB| RAM 8GB Chính hãng VN (
                                                    MNEH3SA/A - MNEP3SA/A)</a></h3>
                                            <div class="price-box">
                                                28.090.000₫
                                                <span class="compare-price">35.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="macbook-pro-m2-13-2022-8cpu-10gpu-256gb-ram-8gb-chinh-hang-vn-mneh3sa-a-mnep3sa-a"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="macbook-pro-m2-13-2022-8cpu-10gpu-256gb-ram-8gb-chinh-hang-vn-mneh3sa-a-mnep3sa-a"
                                                    data-type="Mac" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">


















































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33495015" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=mac&phien_ban=mini-2020-m1-512gb-ssd-mgnt3sa-a"
                                                title="Mac mini 2020 M1 512GB SSD MGNT3SA/A">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/36735-210520063148-210520183148.png?v=1700215306530"
                                                    alt="Mac mini 2020 M1 512GB SSD MGNT3SA/A">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103048056" />
                                            <div class="action">
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            47%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=mac&phien_ban=mini-2020-m1-512gb-ssd-mgnt3sa-a"
                                                    title="Mac mini 2020 M1 512GB SSD MGNT3SA/A">Mac mini 2020
                                                    M1 512GB SSD MGNT3SA/A</a></h3>
                                            <div class="price-box">
                                                13.490.000₫
                                                <span class="compare-price">25.390.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="mac-mini-2020-m1-512gb-ssd-mgnt3sa-a" tabindex="0"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="mac-mini-2020-m1-512gb-ssd-mgnt3sa-a" data-type=""
                                                    tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">






































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494902" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=mac&phien_ban=book-pro-14-inch-2023-m3-8cpu-10gpu-8gb-512gb-ssd"
                                                title="MacBook Pro 14 inch 2023 M3 8CPU 10GPU 8GB 512GB SSD">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/mbprom3-2310310143271-2310311343.png?v=1700214873887"
                                                    alt="MacBook Pro 14 inch 2023 M3 8CPU 10GPU 8GB 512GB SSD">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103043865" />
                                            <div class="action">
                                            </div>

                                        </div>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=mac&phien_ban=book-pro-14-inch-2023-m3-8cpu-10gpu-8gb-512gb-ssd"
                                                    title="MacBook Pro 14 inch 2023 M3 8CPU 10GPU 8GB 512GB SSD">MacBook
                                                    Pro 14 inch 2023 M3 8CPU 10GPU 8GB 512GB SSD</a></h3>
                                            <div class="price-box">
                                                39.999.000₫ </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="macbook-pro-14-inch-2023-m3-8cpu-10gpu-8gb-512gb-ssd"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="macbook-pro-14-inch-2023-m3-8cpu-10gpu-8gb-512gb-ssd"
                                                    data-type="Mac" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="swiper-slide swiper-slide-pro">






































































                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-cart-form data-id="product-actions-33494843" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=mac&phien_ban=book-pro-m2-13-2022-8cpu-10gpu-512gb-ram-8gb-chinh-hang-vn-mneq3sa-a-mnej3sa-a"
                                                title="Macbook Pro M2 13 2022 8CPU 10GPU 512GB| RAM 8GB Chính hãng VN (MNEQ3SA/A - MNEJ3SA/A)">
                                                <img width="234" height="234" class="lazyload image1"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/220608111844-thumb-macbook-pro-m.png?v=1700214681590"
                                                    alt="Macbook Pro M2 13 2022 8CPU 10GPU 512GB| RAM 8GB Chính hãng VN (MNEQ3SA/A - MNEJ3SA/A)">


                                            </a>
                                            <div class="tag-km">





                                            </div>


                                            <input class="hidden" type="hidden" name="variantId" value="103041840" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='?modules=sanpham&action=mac&phien_ban=book-pro-m2-13-2022-8cpu-10gpu-512gb-ram-8gb-chinh-hang-vn-mneq3sa-a-mnej3sa-a'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>
                                        <span class="smart">Giảm
                                            20%
                                        </span>
                                        <div class="product-info">

                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                    href="?modules=sanpham&action=mac&phien_ban=book-pro-m2-13-2022-8cpu-10gpu-512gb-ram-8gb-chinh-hang-vn-mneq3sa-a-mnej3sa-a"
                                                    title="Macbook Pro M2 13 2022 8CPU 10GPU 512GB| RAM 8GB Chính hãng VN (MNEQ3SA/A - MNEJ3SA/A)">Macbook
                                                    Pro M2 13" 2022 8CPU 10GPU 512GB| RAM 8GB Chính hãng VN
                                                    (MNEQ3SA/A - MNEJ3SA/A)</a></h3>
                                            <div class="price-box">
                                                33.690.000₫
                                                <span class="compare-price">41.990.000₫</span>

                                            </div>


                                            <div class="pro-promo ">
                                                <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30
                                                    ngày nếu có lỗi từ nhà sản xuất</p>
                                            </div>

                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="macbook-pro-m2-13-2022-8cpu-10gpu-512gb-ram-8gb-chinh-hang-vn-mneq3sa-a-mnej3sa-a"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>


                                                <a href="javascript:void(0)" class="setCompare"
                                                    data-compare="macbook-pro-m2-13-2022-8cpu-10gpu-512gb-ram-8gb-chinh-hang-vn-mneq3sa-a-mnej3sa-a"
                                                    data-type="Mac" tabindex="0" title="Thêm vào so sánh">

                                                    <span></span>
                                                    So sánh
                                                </a>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="swiper-button-next">

                            </div>
                            <div class="swiper-button-prev">

                            </div>
                            <div class="text-center no-padding">
                                <a class="see-more" title="Xem toàn bộ sản phẩm" href="mac">Xem toàn bộ sản phẩm
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>
    <script>
    var swiperflash = new Swiper('.product3-swiper', {
        slidesPerView: 3,
        loop: false,
        grabCursor: true,
        roundLengths: true,
        slideToClickedSlide: false,
        spaceBetween: 20,
        autoplay: false,
        navigation: {
            nextEl: '.product3-swiper .swiper-button-next',
            prevEl: '.product3-swiper .swiper-button-prev',
        },

        breakpoints: {
            300: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            450: {
                slidesPerView: 2,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            767: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }

    });
    </script>




    <section class="section_1_banner">
        <div class="container">
            <a class="thumb-image-banner" href="#" title="Banner">
                <img width="1270" height="236" class="lazyload"
                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                    data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner.jpg?1719764721426"
                    alt="Banner">
            </a>
        </div>
    </section>




    <section class="section_danhmuc">
        <div class="container">
            <div class="block-background">
                <h3 class="title-index p-5">
                    <a class="title-name" href="/collections/all" title="Phụ kiện nổi bật">Phụ kiện nổi bật
                    </a>
                </h3>
                <div class="danhmuc-slider swiper-container p-5">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <a href="/noi-chao" title="Pin dự phòng">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/themes/934584/assets/danhmuc_1.jpg?1719764721426">
                                    <img width="240" height="176" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/502/883/themes/934584/assets/danhmuc_1.jpg?1719764721426"
                                        alt="Pin dự phòng" />
                                </picture>
                                <h3>
                                    Pin dự phòng
                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide">
                            <a href="/dao-keo" title="Dán màn hình">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/themes/934584/assets/danhmuc_2.jpg?1719764721426">
                                    <img width="240" height="176" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/502/883/themes/934584/assets/danhmuc_2.jpg?1719764721426"
                                        alt="Dán màn hình" />
                                </picture>
                                <h3>
                                    Dán màn hình
                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide">
                            <a href="/phu-kien-trang-tri-ban-an" title="Củ sạc - Cáp Sạc">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/themes/934584/assets/danhmuc_3.jpg?1719764721426">
                                    <img width="240" height="176" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/502/883/themes/934584/assets/danhmuc_3.jpg?1719764721426"
                                        alt="Củ sạc - Cáp Sạc" />
                                </picture>
                                <h3>
                                    Củ sạc - Cáp Sạc
                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide">
                            <a href="/phu-kien-bep" title="Ốp lưng">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/themes/934584/assets/danhmuc_4.jpg?1719764721426">
                                    <img width="240" height="176" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/502/883/themes/934584/assets/danhmuc_4.jpg?1719764721426"
                                        alt="Ốp lưng" />
                                </picture>
                                <h3>
                                    Ốp lưng
                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide">
                            <a href="/ke" title="Cống Chuyển HUB">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/themes/934584/assets/danhmuc_5.jpg?1719764721426">
                                    <img width="240" height="176" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/502/883/themes/934584/assets/danhmuc_5.jpg?1719764721426"
                                        alt="Cống Chuyển HUB" />
                                </picture>
                                <h3>
                                    Cống Chuyển HUB
                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide">
                            <a href="/salad" title="Loa">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/themes/934584/assets/danhmuc_6.jpg?1719764721426">
                                    <img width="240" height="176" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/502/883/themes/934584/assets/danhmuc_6.jpg?1719764721426"
                                        alt="Loa" />
                                </picture>
                                <h3>
                                    Loa
                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide">
                            <a href="/thuc-pham-organic-khac" title="Airpods">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/themes/934584/assets/danhmuc_7.jpg?1719764721426">
                                    <img width="240" height="176" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/502/883/themes/934584/assets/danhmuc_7.jpg?1719764721426"
                                        alt="Airpods" />
                                </picture>
                                <h3>
                                    Airpods
                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide">
                            <a href="/ke" title="Tai nghe">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/themes/934584/assets/danhmuc_8.jpg?1719764721426">
                                    <img width="240" height="176" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/502/883/themes/934584/assets/danhmuc_8.jpg?1719764721426"
                                        alt="Tai nghe" />
                                </picture>
                                <h3>
                                    Tai nghe
                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide">
                            <a href="/tu" title="Balo - Túi chống sốc">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/themes/934584/assets/danhmuc_9.jpg?1719764721426">
                                    <img width="240" height="176" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/502/883/themes/934584/assets/danhmuc_9.jpg?1719764721426"
                                        alt="Balo - Túi chống sốc" />
                                </picture>
                                <h3>
                                    Balo - Túi chống sốc
                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide">
                            <a href="//duong-the" title="Phụ kiên Apple Watch">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/themes/934584/assets/danhmuc_10.jpg?1719764721426">
                                    <img width="240" height="176" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/502/883/themes/934584/assets/danhmuc_10.jpg?1719764721426"
                                        alt="Phụ kiên Apple Watch" />
                                </picture>
                                <h3>
                                    Phụ kiên Apple Watch
                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide">
                            <a href="//tay-trang" title="Combo Phụ Kiện">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/themes/934584/assets/danhmuc_11.jpg?1719764721426">
                                    <img width="240" height="176" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/502/883/themes/934584/assets/danhmuc_11.jpg?1719764721426"
                                        alt="Combo Phụ Kiện" />
                                </picture>
                                <h3>
                                    Combo Phụ Kiện
                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide">
                            <a href="//ke-mat" title="Phụ Kiện Airpods">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/small/100/502/883/themes/934584/assets/danhmuc_12.jpg?1719764721426">
                                    <img width="240" height="176" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/502/883/themes/934584/assets/danhmuc_12.jpg?1719764721426"
                                        alt="Phụ Kiện Airpods" />
                                </picture>
                                <h3>
                                    Phụ Kiện Airpods
                                </h3>
                            </a>

                        </div>


                    </div>
                    <div class="swiper-button-next">

                    </div>
                    <div class="swiper-button-prev">

                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
    var swiperdanhmuc = new Swiper('.danhmuc-slider', {
        slidesPerView: 3,
        loop: false,
        grabCursor: true,
        roundLengths: true,
        slideToClickedSlide: false,
        spaceBetween: 10,
        autoplay: false,
        slidesPerColumn: 2,
        slidesPerColumnFill: "row",
        navigation: {
            nextEl: '.danhmuc-slider .swiper-button-next',
            prevEl: '.danhmuc-slider .swiper-button-prev',
        },
        breakpoints: {
            300: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            500: {
                slidesPerView: 2,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,

            },
            991: {
                slidesPerView: 4,

            },
            1200: {
                slidesPerView: 6,

            }
        }

    });
    </script>




    <section class="section_product">
        <div class="container">
            <div class="block-background">

                <div class="title-index p-5">
                    <a class="title-name" href="phu-kien" title="Phụ kiện">Phụ kiện
                    </a>
                    <ul class="menu-title">
                        <li class="nav-item">
                            <a class="a-img" href="?modules=sanpham&action=phukien&loai=apple" title="Phụ kiện Apple">
                                Phụ kiện Apple
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="a-img" href="?modules=sanpham&action=phukien&loai=coc" title="Cốc - Cáp">
                                Cốc - Cáp
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="a-img" href="?modules=sanpham&action=phukien&loai=sac" title="Sạc dự phòng">
                                Sạc dự phòng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="a-img" href="?modules=sanpham&action=phukien&loai=op-lung"
                                title="Bao da - Ốp lưng">
                                Bao da - Ốp lưng
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="a-img" href="phu-kien" title="Xem tất cả">
                                Xem tất cả
                            </a>
                        </li>
                    </ul>
                </div>



                <div class="product4-swiper swiper-container p-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-pro">























































































                            <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                data-id="product-actions-33495234" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover"
                                        href="/op-lung-magsafe-iphone-15-apple-silicone-chinh-hang"
                                        title="Ốp lưng MagSafe iPhone 15 Apple Silicone Chính Hãng">
                                        <img width="234" height="234" class="lazyload image1"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230913055843-mt0u3fe-a2.png?v=1700216651463"
                                            alt="Ốp lưng MagSafe iPhone 15 Apple Silicone Chính Hãng">


                                    </a>
                                    <div class="tag-km">





                                    </div>


                                    <input class="hidden" type="hidden" name="variantId" value="103054176" />
                                    <div class="action">
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>

                                        </button>
                                    </div>

                                </div>
                                <div class="product-info">

                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="/op-lung-magsafe-iphone-15-apple-silicone-chinh-hang"
                                            title="Ốp lưng MagSafe iPhone 15 Apple Silicone Chính Hãng">Ốp lưng
                                            MagSafe iPhone 15 Apple Silicone Chính Hãng</a></h3>
                                    <div class="price-box">
                                        1.429.000₫ </div>


                                    <div class="pro-promo ">
                                        <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30 ngày nếu
                                            có lỗi từ nhà sản xuất</p>
                                    </div>

                                    <div class="wishlish-compare">

                                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="op-lung-magsafe-iphone-15-apple-silicone-chinh-hang" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                </path>
                                            </svg>
                                            Thích
                                        </a>


                                        <a href="javascript:void(0)" class="setCompare"
                                            data-compare="op-lung-magsafe-iphone-15-apple-silicone-chinh-hang"
                                            data-type="Ốp lưng" tabindex="0" title="Thêm vào so sánh">

                                            <span></span>
                                            So sánh
                                        </a>

                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="swiper-slide swiper-slide-pro">






































































                            <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                data-id="product-actions-33495221" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover"
                                        href="/op-lung-magsafe-iphone-15-apple-clear-chinh-hang"
                                        title="Ốp lưng MagSafe iPhone 15 Apple Clear Chính Hãng">
                                        <img width="234" height="234" class="lazyload image1"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230913060542-mt203fe-a.png?v=1700216572883"
                                            alt="Ốp lưng MagSafe iPhone 15 Apple Clear Chính Hãng">


                                    </a>
                                    <div class="tag-km">





                                    </div>


                                    <input class="hidden" type="hidden" name="variantId" value="103054151" />
                                    <div class="action">
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>

                                        </button>
                                    </div>

                                </div>
                                <div class="product-info">

                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="/op-lung-magsafe-iphone-15-apple-clear-chinh-hang"
                                            title="Ốp lưng MagSafe iPhone 15 Apple Clear Chính Hãng">Ốp lưng
                                            MagSafe iPhone 15 Apple Clear Chính Hãng</a></h3>
                                    <div class="price-box">
                                        1.429.000₫ </div>


                                    <div class="pro-promo ">
                                        <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30 ngày nếu
                                            có lỗi từ nhà sản xuất</p>
                                    </div>

                                    <div class="wishlish-compare">

                                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="op-lung-magsafe-iphone-15-apple-clear-chinh-hang" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                </path>
                                            </svg>
                                            Thích
                                        </a>


                                        <a href="javascript:void(0)" class="setCompare"
                                            data-compare="op-lung-magsafe-iphone-15-apple-clear-chinh-hang"
                                            data-type="Ốp lưng" tabindex="0" title="Thêm vào so sánh">

                                            <span></span>
                                            So sánh
                                        </a>

                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="swiper-slide swiper-slide-pro">























































































                            <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                data-id="product-actions-33495206" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover"
                                        href="/coc-sac-nhanh-apple-20w-type-c-chinh-hang-mhje3za"
                                        title="Cốc sạc nhanh Apple 20W Type-C Chính Hãng MHJE3ZA">
                                        <img width="234" height="234" class="lazyload image1"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/coc-sac-nhanh-apple-20w-type-c-m.png?v=1700216485363"
                                            alt="Cốc sạc nhanh Apple 20W Type-C Chính Hãng MHJE3ZA">


                                    </a>
                                    <div class="tag-km">





                                    </div>


                                    <input class="hidden" type="hidden" name="variantId" value="103054118" />
                                    <div class="action">
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>

                                        </button>
                                    </div>

                                </div>
                                <span class="smart">Giảm
                                    46%
                                </span>
                                <div class="product-info">

                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="/coc-sac-nhanh-apple-20w-type-c-chinh-hang-mhje3za"
                                            title="Cốc sạc nhanh Apple 20W Type-C Chính Hãng MHJE3ZA">Cốc sạc
                                            nhanh Apple 20W Type-C Chính Hãng MHJE3ZA</a></h3>
                                    <div class="price-box">
                                        490.000₫
                                        <span class="compare-price">900.000₫</span>

                                    </div>


                                    <div class="pro-promo ">
                                        <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12 tháng
                                        </p>
                                    </div>

                                    <div class="wishlish-compare">

                                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="coc-sac-nhanh-apple-20w-type-c-chinh-hang-mhje3za" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                </path>
                                            </svg>
                                            Thích
                                        </a>


                                        <a href="javascript:void(0)" class="setCompare"
                                            data-compare="coc-sac-nhanh-apple-20w-type-c-chinh-hang-mhje3za"
                                            data-type="Sạc" tabindex="0" title="Thêm vào so sánh">

                                            <span></span>
                                            So sánh
                                        </a>

                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="swiper-slide swiper-slide-pro">






































































                            <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                data-id="product-actions-33495197" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover" href="/airtag-chinh-hang-vn-a"
                                        title="AirTag - Chính hãng VN/A">
                                        <img width="234" height="234" class="lazyload image1"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/airtag-2021-minh-tuan-mobile-210.png?v=1700216388853"
                                            alt="AirTag - Chính hãng VN/A">


                                    </a>
                                    <div class="tag-km">





                                    </div>


                                    <input class="hidden" type="hidden" name="variantId" value="103054048" />
                                    <div class="action">
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>

                                        </button>
                                    </div>

                                </div>
                                <span class="smart">Giảm
                                    13%
                                </span>
                                <div class="product-info">

                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="/airtag-chinh-hang-vn-a" title="AirTag - Chính hãng VN/A">AirTag -
                                            Chính hãng VN/A</a></h3>
                                    <div class="price-box">
                                        690.000₫
                                        <span class="compare-price">790.000₫</span>

                                    </div>


                                    <div class="pro-promo ">
                                        <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30 ngày nếu
                                            có lỗi từ nhà sản xuất</p>
                                    </div>

                                    <div class="wishlish-compare">

                                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="airtag-chinh-hang-vn-a" tabindex="0" title="Thêm vào yêu thích">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                </path>
                                            </svg>
                                            Thích
                                        </a>


                                        <a href="javascript:void(0)" class="setCompare"
                                            data-compare="airtag-chinh-hang-vn-a" data-type="AirTag" tabindex="0"
                                            title="Thêm vào so sánh">

                                            <span></span>
                                            So sánh
                                        </a>

                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="swiper-slide swiper-slide-pro">






































































                            <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                data-id="product-actions-33495182" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover"
                                        href="?modules=sanpham&action=amthanh&loai=tainghe-bluetooth-beats-studio-buds-chinh-hang-apple-viet-nam"
                                        title="Tai nghe Bluetooth Beats Studio Buds - Chính hãng Apple Việt Nam">
                                        <img width="234" height="234" class="lazyload image1"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products?modules=sanpham&action=amthanh&loai=tainghe-bluetooth-beats-studio.png?v=1700216280103"
                                            alt="Tai nghe Bluetooth Beats Studio Buds - Chính hãng Apple Việt Nam">


                                    </a>
                                    <div class="tag-km">





                                    </div>


                                    <input class="hidden" type="hidden" name="variantId" value="103054027" />
                                    <div class="action">
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>

                                        </button>
                                    </div>

                                </div>
                                <span class="smart">Giảm
                                    20%
                                </span>
                                <div class="product-info">

                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="?modules=sanpham&action=amthanh&loai=tainghe-bluetooth-beats-studio-buds-chinh-hang-apple-viet-nam"
                                            title="Tai nghe Bluetooth Beats Studio Buds - Chính hãng Apple Việt Nam">Tai
                                            nghe Bluetooth Beats Studio Buds - Chính hãng Apple Việt Nam</a>
                                    </h3>
                                    <div class="price-box">
                                        3.190.000₫
                                        <span class="compare-price">3.990.000₫</span>

                                    </div>


                                    <div class="pro-promo ">
                                        <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30 ngày nếu
                                            có lỗi từ nhà sản xuất</p>
                                    </div>

                                    <div class="wishlish-compare">

                                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="tai-nghe-bluetooth-beats-studio-buds-chinh-hang-apple-viet-nam"
                                            tabindex="0" title="Thêm vào yêu thích">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                </path>
                                            </svg>
                                            Thích
                                        </a>


                                        <a href="javascript:void(0)" class="setCompare"
                                            data-compare="tai-nghe-bluetooth-beats-studio-buds-chinh-hang-apple-viet-nam"
                                            data-type="Tai nghe" tabindex="0" title="Thêm vào so sánh">

                                            <span></span>
                                            So sánh
                                        </a>

                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="swiper-slide swiper-slide-pro">






































































                            <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                data-id="product-actions-33495173" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover"
                                        href="?modules=sanpham&action=amthanh&loai=tainghe-beats-fit-pro-true-wireless-earbuds-chinh-hang-apple"
                                        title="Tai nghe Beats Fit Pro True Wireless Earbuds chính hãng Apple">
                                        <img width="234" height="234" class="lazyload image1"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/beatsfitpro-black-220122042854-2.png?v=1700216211103"
                                            alt="Tai nghe Beats Fit Pro True Wireless Earbuds chính hãng Apple">


                                    </a>
                                    <div class="tag-km">





                                    </div>


                                    <input class="hidden" type="hidden" name="variantId" value="103054009" />
                                    <div class="action">
                                    </div>

                                </div>
                                <div class="product-info">

                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="?modules=sanpham&action=amthanh&loai=tainghe-beats-fit-pro-true-wireless-earbuds-chinh-hang-apple"
                                            title="Tai nghe Beats Fit Pro True Wireless Earbuds chính hãng Apple">Tai
                                            nghe Beats Fit Pro True Wireless Earbuds chính hãng Apple</a></h3>
                                    <div class="price-box">
                                        5.490.000₫ </div>


                                    <div class="pro-promo ">
                                        <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12 tháng
                                        </p>
                                    </div>

                                    <div class="wishlish-compare">

                                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="tai-nghe-beats-fit-pro-true-wireless-earbuds-chinh-hang-apple"
                                            tabindex="0" title="Thêm vào yêu thích">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                </path>
                                            </svg>
                                            Thích
                                        </a>


                                        <a href="javascript:void(0)" class="setCompare"
                                            data-compare="tai-nghe-beats-fit-pro-true-wireless-earbuds-chinh-hang-apple"
                                            data-type="Tai nghe" tabindex="0" title="Thêm vào so sánh">

                                            <span></span>
                                            So sánh
                                        </a>

                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="swiper-slide swiper-slide-pro">






































































                            <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                data-id="product-actions-33495150" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover"
                                        href="?modules=sanpham&action=amthanh&loai=tainghe-bluetooth-airpods-max-chinh-hang-vn-a"
                                        title="Tai nghe Bluetooth AirPods Max - Chính hãng VN/A">
                                        <img width="234" height="234" class="lazyload image1"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/silver-1.png?v=1700216072443"
                                            alt="Tai nghe Bluetooth AirPods Max - Chính hãng VN/A">


                                    </a>
                                    <div class="tag-km">





                                    </div>


                                    <input class="hidden" type="hidden" name="variantId" value="103053910" />
                                    <div class="action">
                                        <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                            onclick="window.location.href='?modules=sanpham&action=amthanh&loai=tainghe-bluetooth-airpods-max-chinh-hang-vn-a'">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-detail"></use>
                                            </svg>

                                        </button>
                                    </div>

                                </div>
                                <span class="smart">Giảm
                                    29%
                                </span>
                                <div class="product-info">

                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="?modules=sanpham&action=amthanh&loai=tainghe-bluetooth-airpods-max-chinh-hang-vn-a"
                                            title="Tai nghe Bluetooth AirPods Max - Chính hãng VN/A">Tai nghe
                                            Bluetooth AirPods Max - Chính hãng VN/A</a></h3>
                                    <div class="price-box">
                                        9.890.000₫
                                        <span class="compare-price">13.990.000₫</span>

                                    </div>


                                    <div class="pro-promo ">
                                        <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12 tháng
                                        </p>
                                    </div>

                                    <div class="wishlish-compare">

                                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="tai-nghe-bluetooth-airpods-max-chinh-hang-vn-a" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                </path>
                                            </svg>
                                            Thích
                                        </a>


                                        <a href="javascript:void(0)" class="setCompare"
                                            data-compare="tai-nghe-bluetooth-airpods-max-chinh-hang-vn-a"
                                            data-type="Tai nghe Bluetooth" tabindex="0" title="Thêm vào so sánh">

                                            <span></span>
                                            So sánh
                                        </a>

                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="swiper-slide swiper-slide-pro">

























































































                            <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                data-id="product-actions-33495118" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover"
                                        href="?modules=sanpham&action=amthanh&loai=tainghe-airpods-pro-2-chinh-hang-vn"
                                        title="Tai nghe AirPods Pro 2 - Chính hãng VN">
                                        <img width="234" height="234" class="lazyload image1"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/thiet-ke-chua-co-ten-6-221223104.png?v=1700215878597"
                                            alt="Tai nghe AirPods Pro 2 - Chính hãng VN">


                                    </a>
                                    <div class="tag-km">





                                        <span style="background: #f3bd01"><img alt="Bán chạy" width="60" height="60"
                                                class="lazyload"
                                                src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_3_tag.png?1719764721426">
                                            Bán chạy</span>

                                    </div>


                                    <input class="hidden" type="hidden" name="variantId" value="103053737" />
                                    <div class="action">
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>

                                        </button>
                                    </div>

                                </div>
                                <span class="smart">Giảm
                                    23%
                                </span>
                                <div class="product-info">

                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="?modules=sanpham&action=amthanh&loai=tainghe-airpods-pro-2-chinh-hang-vn"
                                            title="Tai nghe AirPods Pro 2 - Chính hãng VN">Tai nghe AirPods Pro
                                            2 - Chính hãng VN</a></h3>
                                    <div class="price-box">
                                        5.390.000₫
                                        <span class="compare-price">6.990.000₫</span>

                                    </div>


                                    <div class="pro-promo ">
                                        <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12 tháng
                                        </p>
                                    </div>

                                    <div class="wishlish-compare">

                                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="tai-nghe-airpods-pro-2-chinh-hang-vn" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                </path>
                                            </svg>
                                            Thích
                                        </a>


                                        <a href="javascript:void(0)" class="setCompare"
                                            data-compare="tai-nghe-airpods-pro-2-chinh-hang-vn" data-type="AirPods"
                                            tabindex="0" title="Thêm vào so sánh">

                                            <span></span>
                                            So sánh
                                        </a>

                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="swiper-slide swiper-slide-pro">

























































































                            <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                data-id="product-actions-33495099" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover"
                                        href="?modules=sanpham&action=amthanh&loai=tainghe-airpods-3-2022-chinh-hang-vn"
                                        title="Tai nghe AirPods 3 2022 - Chính hãng VN">
                                        <img width="234" height="234" class="lazyload image1"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/thiet-ke-chua-co-ten-7-221223104-3a586e83-e771-46e7-9a71-a1ac01db83c4.png?v=1700215781847"
                                            alt="Tai nghe AirPods 3 2022 - Chính hãng VN">


                                    </a>
                                    <div class="tag-km">





                                        <span style="background: #f3bd01"><img alt="Bán chạy" width="60" height="60"
                                                class="lazyload"
                                                src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_3_tag.png?1719764721426">
                                            Bán chạy</span>

                                    </div>


                                    <input class="hidden" type="hidden" name="variantId" value="103053096" />
                                    <div class="action">
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>

                                        </button>
                                    </div>

                                </div>
                                <span class="smart">Giảm
                                    35%
                                </span>
                                <div class="product-info">

                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="?modules=sanpham&action=amthanh&loai=tainghe-airpods-3-2022-chinh-hang-vn"
                                            title="Tai nghe AirPods 3 2022 - Chính hãng VN">Tai nghe AirPods 3
                                            2022 - Chính hãng VN</a></h3>
                                    <div class="price-box">
                                        3.850.000₫
                                        <span class="compare-price">5.950.000₫</span>

                                    </div>


                                    <div class="pro-promo ">
                                        <p class="line-clamp line-clamp-2">Được hỗ trợ 1 đổi 1 trong 30 ngày nếu
                                            có lỗi từ nhà sản xuất</p>
                                    </div>

                                    <div class="wishlish-compare">

                                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="tai-nghe-airpods-3-2022-chinh-hang-vn" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                </path>
                                            </svg>
                                            Thích
                                        </a>


                                        <a href="javascript:void(0)" class="setCompare"
                                            data-compare="tai-nghe-airpods-3-2022-chinh-hang-vn" data-type="AirPods"
                                            tabindex="0" title="Thêm vào so sánh">

                                            <span></span>
                                            So sánh
                                        </a>

                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="swiper-slide swiper-slide-pro">






































































                            <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                data-id="product-actions-33495087" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover"
                                        href="?modules=sanpham&action=amthanh&loai=tainghe-airpods-3-2021-ho-tro-sac-magsafe-chinh-hang-vn"
                                        title="Tai nghe AirPods 3 2021 hỗ trợ sạc Magsafe - Chính hãng VN">
                                        <img width="234" height="234" class="lazyload image1"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/thiet-ke-chua-co-ten-7-221223104.png?v=1700215696873"
                                            alt="Tai nghe AirPods 3 2021 hỗ trợ sạc Magsafe - Chính hãng VN">


                                    </a>
                                    <div class="tag-km">





                                    </div>


                                    <input class="hidden" type="hidden" name="variantId" value="103051573" />
                                    <div class="action">
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>

                                        </button>
                                    </div>

                                </div>
                                <span class="smart">Giảm
                                    34%
                                </span>
                                <div class="product-info">

                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="?modules=sanpham&action=amthanh&loai=tainghe-airpods-3-2021-ho-tro-sac-magsafe-chinh-hang-vn"
                                            title="Tai nghe AirPods 3 2021 hỗ trợ sạc Magsafe - Chính hãng VN">Tai
                                            nghe AirPods 3 2021 hỗ trợ sạc Magsafe - Chính hãng VN</a></h3>
                                    <div class="price-box">
                                        3.900.000₫
                                        <span class="compare-price">5.950.000₫</span>

                                    </div>


                                    <div class="pro-promo ">
                                        <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12 tháng
                                        </p>
                                    </div>

                                    <div class="wishlish-compare">

                                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="tai-nghe-airpods-3-2021-ho-tro-sac-magsafe-chinh-hang-vn"
                                            tabindex="0" title="Thêm vào yêu thích">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                </path>
                                            </svg>
                                            Thích
                                        </a>


                                        <a href="javascript:void(0)" class="setCompare"
                                            data-compare="tai-nghe-airpods-3-2021-ho-tro-sac-magsafe-chinh-hang-vn"
                                            data-type="AirPods" tabindex="0" title="Thêm vào so sánh">

                                            <span></span>
                                            So sánh
                                        </a>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="swiper-button-next">

                    </div>
                    <div class="swiper-button-prev">

                    </div>
                    <div class="text-center no-padding">
                        <a class="see-more" title="Xem toàn bộ sản phẩm" href="phu-kien">Xem toàn bộ sản phẩm
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg></a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <script>
    var swiperflash = new Swiper('.product4-swiper', {
        slidesPerView: 3,
        loop: false,
        grabCursor: true,
        roundLengths: true,
        slideToClickedSlide: false,
        spaceBetween: 10,
        autoplay: false,
        slidesPerColumn: 2,
        slidesPerColumnFill: "row",
        navigation: {
            nextEl: '.product4-swiper .swiper-button-next',
            prevEl: '.product4-swiper .swiper-button-prev',
        },
        breakpoints: {
            300: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            450: {
                slidesPerView: 2,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            767: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            1200: {
                slidesPerView: 5,
                spaceBetween: 20
            }
        }
    });
    </script>




    <section class="section_1_banner">
        <div class="container">
            <a class="thumb-image-banner" href="#" title="Banner">
                <img width="1270" height="236" class="lazyload"
                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                    data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner2.jpg?1719764721426"
                    alt="Banner">
            </a>
        </div>
    </section>




    <section class="section_blog">
        <div class="container">
            <div class="block-product block-background">
                <h3 class="title-index p-5">
                    <a class="title-name" href="tin-tuc" title="Tin tức mới nhất">Tin tức mới nhất
                    </a>
                </h3>
                <div class="row p-5">
                    <div class="col-md-6">
                        <div class="item-blog-big">
                            <div class="block-thumb">

                                <a class="thumb"
                                    href="/iphone-15-hong-co-may-phien-ban-5-diem-doc-dao-khien-nhieu-chi-em-yeu-thich"
                                    title="iPhone 15 hồng có mấy phiên bản? 5 Điểm độc đáo khiến nhiều chị em yêu thích">
                                    <img class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="https://bizweb.dktcdn.net/100/502/883/articles/tt10.png?v=1700186854563"
                                        alt="iPhone 15 hồng có mấy phiên bản? 5 Điểm độc đáo khiến nhiều chị em yêu thích">
                                </a>


                            </div>
                            <div class="block-content">

                                <h3>
                                    <a class="line-clamp line-clamp-1"
                                        href="/iphone-15-hong-co-may-phien-ban-5-diem-doc-dao-khien-nhieu-chi-em-yeu-thich"
                                        title="iPhone 15 hồng có mấy phiên bản? 5 Điểm độc đáo khiến nhiều chị em yêu thích">iPhone
                                        15 hồng có mấy phiên bản? 5 Điểm độc đáo khiến nhiều chị em yêu
                                        thích</a>
                                </h3>
                                <div class="time-post">
                                    Ngày đăng:
                                    <span>17/11/2023</span>
                                </div>

                                <p class="justify line-clamp line-clamp-3">1. iPhone 15 màu hồng có mấy phiên
                                    bản?
                                    Apple ra mắt hai phiên bản màu hồng dành iPhone 15 series gồm dòng thường và
                                    dòng Plus. Sắc hồng nhạt quyến rũ, gam màu nhẹ nhàng, không quá nổi bật
                                    nhưng tạo nên cá tính riêng cho các phái nữ khi...
                                </p>

                            </div>


                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="item-blog-small">
                            <div class="block-thumb">

                                <a class="thumb" href="/iphone-15-co-may-mau-mau-nao-dep-nhat"
                                    title="iPhone 15 có mấy màu? Màu nào đẹp nhất">
                                    <img width="140" height="75" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="https://bizweb.dktcdn.net/100/502/883/articles/tt9.png?v=1700186740677"
                                        alt="iPhone 15 có mấy màu? Màu nào đẹp nhất">
                                </a>


                            </div>
                            <div class="block-content">

                                <h3>
                                    <a class="line-clamp line-clamp-2" style="    height: auto"
                                        href="/iphone-15-co-may-mau-mau-nao-dep-nhat"
                                        title="iPhone 15 có mấy màu? Màu nào đẹp nhất">iPhone 15 có mấy màu? Màu
                                        nào đẹp nhất</a>
                                </h3>

                                <p class="justify line-clamp line-clamp-2">1. Tổng quan về iPhone 15&nbsp;
                                    Ngày 13/09, Apple đã trình làng 4 phiên bản iPhone 15 Series. Mỗi phiên bản
                                    đều có những nâng cấp ấn tượng. Hai phiên bản mới năm nay sở hữu thiết kế ấn
                                    tượng với màn hình đục lỗ, tính năng độc đáo Dynamics Island....
                                </p>

                            </div>
                        </div>
                        <div class="item-blog-small">
                            <div class="block-thumb">

                                <a class="thumb" href="/chi-phi-san-xuat-iphone-15-series"
                                    title="Chi phí sản xuất iPhone 15 Series">
                                    <img width="140" height="75" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="https://bizweb.dktcdn.net/100/502/883/articles/tt8.png?v=1700185782440"
                                        alt="Chi phí sản xuất iPhone 15 Series">
                                </a>


                            </div>
                            <div class="block-content">

                                <h3>
                                    <a class="line-clamp line-clamp-2" style="    height: auto"
                                        href="/chi-phi-san-xuat-iphone-15-series"
                                        title="Chi phí sản xuất iPhone 15 Series">Chi phí sản xuất iPhone 15
                                        Series</a>
                                </h3>

                                <p class="justify line-clamp line-clamp-2">Mới đây, Nikkei đã đưa ra báo cáo cho
                                    thấy chi phí sản xuất iPhone 15 Pro Max đang tăng thêm 12 % so với năm
                                    ngoái. Bên cạnh đó, những mẫu iPhone 15 thường tăng từ 6 - 8%.&nbsp;
                                    Chi phí sản xuất ước tính của từng phiên bản khoảng...
                                </p>

                            </div>
                        </div>
                        <div class="item-blog-small">
                            <div class="block-thumb">

                                <a class="thumb" href="/cong-sac-usb-c-iphone-15-va-cong-dung"
                                    title="Cổng sạc USB-C IPhone 15 và công dụng">
                                    <img width="140" height="75" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="https://bizweb.dktcdn.net/100/502/883/articles/tt7.png?v=1700185692710"
                                        alt="Cổng sạc USB-C IPhone 15 và công dụng">
                                </a>


                            </div>
                            <div class="block-content">

                                <h3>
                                    <a class="line-clamp line-clamp-2" style="    height: auto"
                                        href="/cong-sac-usb-c-iphone-15-va-cong-dung"
                                        title="Cổng sạc USB-C IPhone 15 và công dụng">Cổng sạc USB-C IPhone 15
                                        và công dụng</a>
                                </h3>

                                <p class="justify line-clamp line-clamp-2">1. Cổng sạc USB-C trên iPhone
                                    15&nbsp;
                                    Thiết kế cổng sạc iPhone 15&nbsp;tương tự như các cổng Type C có sẵn trên
                                    thị trường. Apple cung cấp 2 phiên bản USB-C 2 với dòng thường và USB-C 3
                                    với dòng cao cấp như Pro và Pro Max.&nbsp;

                                    2. Những công dụng chuẩn...
                                </p>

                            </div>
                        </div>
                        <div class="item-blog-small">
                            <div class="block-thumb">

                                <a class="thumb" href="/14-cap-nhat-tinh-nang-tren-ios-17-1"
                                    title="14 cập nhật tính năng trên iOS 17.1">
                                    <img width="140" height="75" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="https://bizweb.dktcdn.net/100/502/883/articles/tt6.png?v=1700185628053"
                                        alt="14 cập nhật tính năng trên iOS 17.1">
                                </a>


                            </div>
                            <div class="block-content">

                                <h3>
                                    <a class="line-clamp line-clamp-2" style="    height: auto"
                                        href="/14-cap-nhat-tinh-nang-tren-ios-17-1"
                                        title="14 cập nhật tính năng trên iOS 17.1">14 cập nhật tính năng trên
                                        iOS 17.1</a>
                                </h3>

                                <p class="justify line-clamp line-clamp-2">1.AirDrop Over Internet
                                    Tính năng Airdrop thông qua Wifi và kết nối mạng trên iOS 17.7 đã khả dụng
                                    sau khi người dùng kết nối với thiết bị khác. Việc chuyển đổi dữ liệu dễ
                                    dàng hơn mà không gây trở ngại với số lượng tệp lớn. Một nút tính năng...
                                </p>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="text-center no-padding">
                    <a class="see-more" title="Xem toàn bộ tin tức" href="tin-tuc">Xem toàn bộ tin tức <svg
                            xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg></a>
                </div>


            </div>
        </div>


    </section>




    <section class="section_video">
        <div class="container ">
            <div class="block-product block-background">
                <h3 class="title-index p-5">
                    <a class="title-name" href="review-san-pham" title="Review sản phẩm">Review sản phẩm
                    </a>


                </h3>


                <div class="row p-5">









                    <a href="javascript:void(0)" data-video="LsRIo0kFclg" class="item col-lg-3 col-sm-5 col-9 playVideo"
                        title="iPHONE 15 PRO MAX: KHUI HỘP, TRẢI NGHIỆM VÀ CHIA SẺ CHI TIẾT CÁCH DÙNG Ổ CỨNG GẮN NGOÀI">
                        <div class="block-thumb">

                            <div class="thumb"
                                title="iPHONE 15 PRO MAX: KHUI HỘP, TRẢI NGHIỆM VÀ CHIA SẺ CHI TIẾT CÁCH DÙNG Ổ CỨNG GẮN NGOÀI">
                                <img class="lazyload"
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                    data-src="https://bizweb.dktcdn.net/100/502/883/articles/maxresdefault-10.jpg?v=1700644932717"
                                    alt="iPHONE 15 PRO MAX: KHUI HỘP, TRẢI NGHIỆM VÀ CHIA SẺ CHI TIẾT CÁCH DÙNG Ổ CỨNG GẮN NGOÀI">
                            </div>


                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-play-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                                </svg>
                            </div>

                        </div>
                        <div class="block-content">
                            <h3 class="line-clamp line-clamp-2">
                                iPHONE 15 PRO MAX: KHUI HỘP, TRẢI NGHIỆM VÀ CHIA SẺ CHI TIẾT CÁCH DÙNG Ổ CỨNG
                                GẮN NGOÀI
                            </h3>
                        </div>
                    </a>









                    <a href="javascript:void(0)" data-video="x6EwB8JHA-U" class="item col-lg-3 col-sm-5 col-9 playVideo"
                        title="Mở hộp IPhone 15 Pro Max">
                        <div class="block-thumb">

                            <div class="thumb" title="Mở hộp IPhone 15 Pro Max">
                                <img class="lazyload"
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                    data-src="https://bizweb.dktcdn.net/100/502/883/articles/maxresdefault-9.jpg?v=1700644891397"
                                    alt="Mở hộp IPhone 15 Pro Max">
                            </div>


                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-play-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                                </svg>
                            </div>

                        </div>
                        <div class="block-content">
                            <h3 class="line-clamp line-clamp-2">
                                Mở hộp IPhone 15 Pro Max
                            </h3>
                        </div>
                    </a>









                    <a href="javascript:void(0)" data-video="TgndsCjb1fQ" class="item col-lg-3 col-sm-5 col-9 playVideo"
                        title="Review iPhone 15 Pro Max: thay đổi nhỏ (hay lớn)?">
                        <div class="block-thumb">

                            <div class="thumb" title="Review iPhone 15 Pro Max: thay đổi nhỏ (hay lớn)?">
                                <img class="lazyload"
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                    data-src="https://bizweb.dktcdn.net/100/502/883/articles/maxresdefault-8.jpg?v=1700644851670"
                                    alt="Review iPhone 15 Pro Max: thay đổi nhỏ (hay lớn)?">
                            </div>


                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-play-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                                </svg>
                            </div>

                        </div>
                        <div class="block-content">
                            <h3 class="line-clamp line-clamp-2">
                                Review iPhone 15 Pro Max: thay đổi nhỏ (hay lớn)?
                            </h3>
                        </div>
                    </a>









                    <a href="javascript:void(0)" data-video="iWHPniNYpFM" class="item col-lg-3 col-sm-5 col-9 playVideo"
                        title="SO SÁNH iPHONE 15 PRO MAX VS iPHONE 14 PRO MAX: CÓ ĐÁNG NÂNG CẤP???">
                        <div class="block-thumb">

                            <div class="thumb"
                                title="SO SÁNH iPHONE 15 PRO MAX VS iPHONE 14 PRO MAX: CÓ ĐÁNG NÂNG CẤP???">
                                <img class="lazyload"
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                    data-src="https://bizweb.dktcdn.net/100/502/883/articles/maxresdefault-7.jpg?v=1700644624290"
                                    alt="SO SÁNH iPHONE 15 PRO MAX VS iPHONE 14 PRO MAX: CÓ ĐÁNG NÂNG CẤP???">
                            </div>


                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-play-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                                </svg>
                            </div>

                        </div>
                        <div class="block-content">
                            <h3 class="line-clamp line-clamp-2">
                                SO SÁNH iPHONE 15 PRO MAX VS iPHONE 14 PRO MAX: CÓ ĐÁNG NÂNG CẤP???
                            </h3>
                        </div>
                    </a>

                </div>
                <div class="text-center no-padding">
                    <a class="see-more" title="Xem toàn bộ video" href="review-san-pham">Xem toàn bộ video <svg
                            xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg></a>
                </div>



            </div>
        </div>

    </section>
    <div class="popup-video">
        <div class="body-popup">

        </div>
        <div class="close-popup-video">
            <i class="fa fa-close"></i>
            Đóng
        </div>
    </div>




    <section class="section_danhgia">
        <div class="container">
            <div class="block-background">
                <h3 class="title-index p-5">
                    <span class="title-name">FEEDBACK TỪ KHÁCH HÀNG</span>
                </h3>
                <div class="danhgia-slider swiper-container p-5">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide item">

                            <div class="row     align-items-center">
                                <div class="avatar col-lg-4">
                                    <img width="80" height="80" alt="Hoàng Dung" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/danhgia_1.jpg?1719764721426">
                                    <div class="testimonial">
                                        <h5>
                                            Hoàng Dung
                                        </h5>
                                        <span>Nhân viên văn phòng </span>
                                    </div>
                                </div>
                                <div class="content col-lg-8">
                                    <p>
                                        Mình lần đầu mua ở Dolaphone. Shop có rất nhiều sản phẩm cao cấp mà mình
                                        tham khảo nhiều nơi ít có thông tin. Tình trạng sản phẩm chính hãng nên
                                        mình khá yên tâm khi quyết định mua sản phẩm tại đây.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide item">

                            <div class="row     align-items-center">
                                <div class="avatar col-lg-4">
                                    <img width="80" height="80" alt="Sở Bình" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/danhgia_2.jpg?1719764721426">
                                    <div class="testimonial">
                                        <h5>
                                            Sở Bình
                                        </h5>
                                        <span>Chủ shop Đồ Ngủ Bìn Bìn</span>
                                    </div>
                                </div>
                                <div class="content col-lg-8">
                                    <p>
                                        Mình lần đầu mua ở Dolaphone. Shop có rất nhiều sản phẩm cao cấp mà mình
                                        tham khảo nhiều nơi ít có thông tin. Tình trạng sản phẩm chính hãng nên
                                        mình khá yên tâm khi quyết định mua sản phẩm tại đây.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide item">

                            <div class="row     align-items-center">
                                <div class="avatar col-lg-4">
                                    <img width="80" height="80" alt="Ngọc Tuyến" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/danhgia_3.jpg?1719764721426">
                                    <div class="testimonial">
                                        <h5>
                                            Ngọc Tuyến
                                        </h5>
                                        <span>Đầu bếp</span>
                                    </div>
                                </div>
                                <div class="content col-lg-8">
                                    <p>
                                        Mình lần đầu mua ở Dolaphone. Shop có rất nhiều sản phẩm cao cấp mà mình
                                        tham khảo nhiều nơi ít có thông tin. Tình trạng sản phẩm chính hãng nên
                                        mình khá yên tâm khi quyết định mua sản phẩm tại đây.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next">

                    </div>
                    <div class="swiper-button-prev">

                    </div>

                </div>
            </div>
        </div>


    </section>
    <script>
    var swiperdanhgia = new Swiper('.danhgia-slider', {
        autoplay: false,
        slidesPerView: 2,
        spaceBetween: 30,
        navigation: {
            nextEl: '.danhgia-slider .swiper-button-next',
            prevEl: '.danhgia-slider .swiper-button-prev',
        },
        breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            500: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 30
            },
            991: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1200: {
                slidesPerView: 2,
                spaceBetween: 30
            }
        }
    });
    </script>









</div>












<script>
(function($) {
    "use strict";
    $.ajaxChimp = {
        responses: {
            "We have sent you a confirmation email": 0,
            "Please enter a valueggg": 1,
            "An email address must contain a single @": 2,
            "The domain portion of the email address is invalid (the portion after the @: )": 3,
            "The username portion of the email address is invalid (the portion before the @: )": 4,
            "This email address looks fake or invalid. Please enter a real email address": 5
        },
        translations: {
            en: null
        },
        init: function(selector, options) {
            $(selector).ajaxChimp(options)
        }
    };
    $.fn.ajaxChimp = function(options) {
        $(this).each(function(i, elem) {
            var form = $(elem);
            var email = form.find("input[type=email]");
            var label = form.find("label[for=" + email.attr("id") + "]");
            var settings = $.extend({
                url: form.attr("action"),
                language: "en"
            }, options);
            var url = settings.url.replace("/post?", "/post-json?").concat("&c=?");
            form.attr("novalidate", "true");
            email.attr("name", "EMAIL");
            form.submit(function() {
                var msg;

                function successCallback(resp) {
                    if (resp.result === "success") {
                        msg = "We have sent you a confirmation email";
                        label.removeClass("error").addClass("valid");
                        email.removeClass("error").addClass("valid")
                    } else {
                        email.removeClass("valid").addClass("error");
                        label.removeClass("valid").addClass("error");
                        var index = -1;
                        try {
                            var parts = resp.msg.split(" - ", 2);
                            if (parts[1] === undefined) {
                                msg = resp.msg
                            } else {
                                var i = parseInt(parts[0], 10);
                                if (i.toString() === parts[0]) {
                                    index = parts[0];
                                    msg = parts[1]
                                } else {
                                    index = -1;
                                    msg = resp.msg
                                }
                            }
                        } catch (e) {
                            index = -1;
                            msg = resp.msg
                        }
                    }
                    if (settings.language !== "en" && $.ajaxChimp.responses[msg] !==
                        undefined && $.ajaxChimp.translations && $.ajaxChimp
                        .translations[settings.language] && $.ajaxChimp.translations[
                            settings.language][$.ajaxChimp.responses[msg]]) {
                        msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp
                            .responses[msg]
                        ]
                    }
                    label.html(msg);
                    label.show(2e3);
                    if (settings.callback) {
                        settings.callback(resp)
                    }
                }
                var data = {};
                var dataArray = form.serializeArray();
                $.each(dataArray, function(index, item) {
                    data[item.name] = item.value
                });
                $.ajax({
                    url: url,
                    data: data,
                    success: successCallback,
                    dataType: "jsonp",
                    error: function(resp, text) {
                        console.log("mailchimp ajax submit error: " + text)
                    }
                });
                var submitMsg = "Submitting...";
                if (settings.language !== "en" && $.ajaxChimp.translations && $
                    .ajaxChimp.translations[settings.language] && $.ajaxChimp
                    .translations[settings.language]["submit"]) {
                    submitMsg = $.ajaxChimp.translations[settings.language]["submit"]
                }
                label.html(submitMsg).show(2e3);
                return false
            })
        });
        return this
    }
})(jQuery);
</script>

<?php
home("foot");
?>