<?php
if (!defined("_STATUS")) {
    echo "Truy cập không hợp lệ...";
    die();
}

$data = [
    "title"=> "Mac"
];

home("head", $data);
$gia = isset($_GET['gia']) ? $_GET['gia'] : '';  // Lấy giá trị từ URL
$tags = isset($_GET['tags']) ? $_GET['tags'] : ''; 
$bo_nho = isset($_GET['bo_nho']) ? $_GET['bo_nho'] : '';  
$ram = isset($_GET['ram']) ? $_GET['ram'] : '';  
$camera= isset($_GET['camera']) ? $_GET['camera'] : '';  
$man_hinh= isset($_GET['man_hinh']) ? $_GET['man_hinh'] : '';  
$phien_ban = isset($_GET['phien_ban']) ? $_GET['phien_ban'] : ''; 

$selected_prices = $gia ? explode(',', $gia) : []; // Chia tách các điều kiện đã chọn
$selected_tags = $tags ? explode(',', $tags) : []; 
$selected_bo_nho = $bo_nho ? explode(',', $bo_nho) : []; 
$selected_ram = $ram ? explode(',', $ram) : []; 
$selected_camera = $camera ? explode(',', $camera) : [];
$selected_man_hinh= $man_hinh ? explode(',', $man_hinh) : [];
$selected_phien_ban = $phien_ban ? explode(',', $phien_ban) : [];

$sql = "SELECT * FROM Mac";

// Xử lý điều kiện lọc 
if ($gia) {
    $price_conditions = explode(',', $gia);
    $price_conditions = array_map(function($condition) {
        $condition = trim($condition, '()');
        return "gia_km " . $condition;
    }, $price_conditions);
    
    if (!empty($price_conditions)) {
        $sql .= " WHERE " . implode(" AND ", $price_conditions);
    }
}

if (!empty($selected_tags)) {
    $tag_conditions = array_map(function($tag) {
        return "nhu_cau LIKE '%" . $tag . "%'"; 
    }, $selected_tags);
    
    if (!empty($price_conditions )) {
        $sql .= " AND (" . implode(" OR ", $tag_conditions) . ")";
    } else {
        $sql .= " WHERE " . implode(" OR ", $tag_conditions);
    }
}

if (!empty($selected_camera)) {
    $camera_conditions = array_map(function($camera) {
        return "tinh_nang_camera LIKE '%" . $camera. "%'"; 
    }, $selected_camera);
    
    if (!empty($price_conditions) || !empty($selected_tags) ) {
        $sql .= " AND (" . implode(" OR ", $camera_conditions) . ")";
    } else {
        $sql .= " WHERE " . implode(" OR ", $camera_conditions);
    }
}

if (!empty($selected_bo_nho)) {
    $bo_nho_conditions = array_map(function($condition) {
        $condition = trim($condition, '()');
        return "bo_nho " . $condition;
    }, $selected_bo_nho);

    if (!empty($price_conditions) || !empty($selected_tags) || !empty($selected_camera) ) {
        $sql .= " AND (" . implode(" OR ", $bo_nho_conditions) . ")";
    } else {
        $sql .= " WHERE " . implode(" OR ", $bo_nho_conditions);
    }
}

if (!empty($selected_ram)) {
    $ram_conditions = array_map(function($condition) {
        $condition = trim($condition, '()');
        return "ram " . $condition;
    }, $selected_ram);

    if (!empty($price_conditions) || !empty($selected_tags) || !empty($selected_bo_nho) || !empty($selected_camera)) {
        $sql .= " AND (" . implode(" OR ", $ram_conditions) . ")";
    } else {
        $sql .= " WHERE " . implode(" OR ", $ram_conditions);
    }
}

if (!empty($selected_man_hinh)) {
    $man_hinh_conditions = array_map(function($condition) {
        $condition = trim($condition, '()');
        return "man_hinh " . $condition;
    }, $selected_man_hinh);

    // Nếu có điều kiện giá, tags, ram, hoặc bo_nho, sử dụng "AND", ngược lại sử dụng "WHERE"
    if (!empty($price_conditions) || !empty($selected_tags) || !empty($selected_bo_nho) || !empty($selected_camera) || !empty($selected_ram)) {
        $sql .= " AND (" . implode(" OR ", $man_hinh_conditions) . ")";
    } else {
        $sql .= " WHERE " . implode(" OR ", $man_hinh_conditions);
    }
}

if (!empty($selected_phien_ban)) {
    $phien_ban_conditions = array_map(function($condition) {
        // Đảm bảo giá trị nằm trong dấu nháy đơn và thoát ký tự đặc biệt
        return "phien_ban = '" . addslashes($condition) . "'";
    }, $selected_phien_ban);

    if (!empty($price_conditions) || !empty($selected_tags) || !empty($selected_bo_nho) || !empty($selected_camera) || !empty($selected_ram) || !empty($selected_man_hinh)) {
        $sql .= " AND (" . implode(" OR ", $phien_ban_conditions) . ")";
    } else {
        $sql .= " WHERE " . implode(" OR ", $phien_ban_conditions);
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sort = isset($_POST['sort']) ? $_POST['sort'] : '';
    if ($sort) {
        switch ($sort) {
            case 'alpha-asc':
                $sql .= " ORDER BY ten_san_pham  ASC";
                break;
            case 'alpha-desc':
                $sql .= " ORDER BY ten_san_pham  DESC";
                break;
            case 'created-desc':
                if (!empty($price_conditions) || !empty($selected_tags) || !empty($selected_bo_nho) || !empty($selected_camera) || !empty($selected_ram) || !empty($selected_man_hinh)) {
                    $sql .= " AND moi = 1";
                } else {
                    $sql .= " WHERE moi = 1";
                }
                break;
            case 'price-asc':
                $sql .= " ORDER BY gia_km ASC";
                break;
            case 'price-desc':
                $sql .= " ORDER BY gia_km DESC";
                break;
        }
    }
}

$check = getRow($sql);
function check_ban($ban) {
    $ban = addslashes($ban); 
    $gg = "SELECT * FROM Mac WHERE phien_ban = '$ban'";
    $check = getRow($gg);
    return count($check);  
}

?>
<style>
.btn-quick-sort form button {
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-right: 10px;
    background: white;
    color: #333;
    cursor: pointer;
    padding: 8px 15px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.btn-quick-sort form button:hover {
    background: #e0e0e0;
    color: #000;
    border-color: #bbb;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.btn-quick-sort form button.active {
    font-weight: bold;
    background: #007bff;
    color: #fff;
    border-color: #0056b3;
    box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
}

.btn-quick-sort form {
    display: inline-block;
}
</style>
<script>
function updateUrl(checkbox, group) {
    var url = new URL(window.location.href); // Lấy URL hiện tại
    var priceConditions = url.searchParams.get('gia') ? url.searchParams.get('gia').split(',') : [];
    var tags = url.searchParams.get('tags') ? url.searchParams.get('tags').split(',') : [];
    var boNhoConditions = url.searchParams.get('bo_nho') ? url.searchParams.get('bo_nho').split(',') : [];
    var ramConditions = url.searchParams.get('ram') ? url.searchParams.get('ram').split(',') : []; // Thêm xử lý cho ram
    var cameraConditions = url.searchParams.get('camera') ? url.searchParams.get('camera').split(',') : [];
    var man_hinhConditions = url.searchParams.get('man_hinh') ? url.searchParams.get('man_hinh').split(',') : [];
    // Thêm hoặc xóa điều kiện lọc khi checkbox được chọn hoặc bỏ chọn
    if (checkbox.checked) {
        if (group === 'price') {
            priceConditions.push(checkbox.value); // Thêm điều kiện vào mảng
        } else if (group === 'tags') {
            tags.push(checkbox.value);
        } else if (group === 'bonho') {
            boNhoConditions.push(checkbox.value);
        } else if (group === 'ram') {
            ramConditions.push(checkbox.value);
        } else if (group === 'camera') {
            cameraConditions.push(checkbox.value)
        } else if (group === 'man_hinh') {
            man_hinhConditions.push(checkbox.value);
        }
    } else {
        if (group === 'price') {
            priceConditions = priceConditions.filter(function(value) {
                return value !== checkbox.value;
            });
        } else if (group === 'tags') {
            tags = tags.filter(function(value) {
                return value !== checkbox.value;
            });
        } else if (group === 'bonho') {
            boNhoConditions = boNhoConditions.filter(function(value) {
                return value !== checkbox.value;
            });
        } else if (group === 'ram') {
            ramConditions = ramConditions.filter(function(value) {
                return value !== checkbox.value;
            });
        } else if (group === 'camera') {
            cameraConditions = cameraConditions.filter(function(value) {
                return value !== checkbox.value;
            });
        } else if (group === 'man_hinh') {
            man_hinhConditions = man_hinhConditions.filter(function(value) {
                return value !== checkbox.value;
            });
        }
    }

    // Cập nhật tham số trong URL
    if (priceConditions.length > 0) {
        url.searchParams.set('gia', priceConditions.join(','));
    } else {
        url.searchParams.delete('gia');
    }

    if (tags.length > 0) {
        url.searchParams.set('tags', tags.join(','));
    } else {
        url.searchParams.delete('tags');
    }

    if (boNhoConditions.length > 0) {
        url.searchParams.set('bo_nho', boNhoConditions.join(','));
    } else {
        url.searchParams.delete('bo_nho');
    }

    if (ramConditions.length > 0) {
        url.searchParams.set('ram', ramConditions.join(','));
    } else {
        url.searchParams.delete('ram');
    }

    if (cameraConditions.length > 0) {
        url.searchParams.set('camera', cameraConditions.join(','));
    } else {
        url.searchParams.delete('camera');
    }

    if (man_hinhConditions.length > 0) {
        url.searchParams.set('man_hinh', man_hinhConditions.join(','));
    } else {
        url.searchParams.delete('man_hinh');
    }

    // Tải lại trang với URL mới
    window.location.href = url.toString();
}

// Khi trang được tải, chọn các checkbox đã được chọn trước đó từ URL
document.addEventListener('DOMContentLoaded', function() {
    var selectedPrices = <?php echo json_encode($selected_prices); ?>;
    var selectedTags = <?php echo json_encode($selected_tags); ?>;
    var selectedBoNho = <?php echo json_encode($selected_bo_nho); ?>;
    var selectedRam = <?php echo json_encode($selected_ram); ?>;
    var selectedCamera = <?php echo json_encode($selected_camera); ?>;
    var selectedMan_hinh = <?php echo json_encode($selected_man_hinh); ?>;

    selectedPrices.forEach(function(priceCondition) {
        var checkbox = document.querySelector('input[value="' + priceCondition + '"]');
        if (checkbox) {
            checkbox.checked = true;
        }
    });

    selectedTags.forEach(function(tag) {
        var checkbox = document.querySelector('input[value="' + tag + '"]');
        if (checkbox) {
            checkbox.checked = true;
        }
    });

    selectedBoNho.forEach(function(boNhoCondition) {
        var checkbox = document.querySelector('input[value="' + boNhoCondition + '"]');
        if (checkbox) {
            checkbox.checked = true;
        }
    });

    selectedRam.forEach(function(ramCondition) {
        var checkbox = document.querySelector('input[value="' + ramCondition + '"]');
        if (checkbox) {
            checkbox.checked = true;
        }
    });

    selectedCamera.forEach(function(cameraCondition) {
        var checkbox = document.querySelector('input[value="' + cameraCondition + '"]');
        if (checkbox) {
            checkbox.checked = true;
        }
    });

    selectedMan_hinh.forEach(function(man_hinhCondition) {
        var checkbox = document.querySelector('input[value="' + man_hinhCondition + '"]');
        if (checkbox) {
            checkbox.checked = true;
        }
    });
});
</script>


<div class="bodywrap">
    <section class="bread-crumb">

        <div class="container">

            <ul class="breadcrumb">
                <li class="home">
                    <a href="/"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>&nbsp;</span>
                </li>


                <li><strong><span> Mac <?php 
                if(isset($_GET['phien_ban'])){
                    echo $_GET['phien_ban'];
                }
                 ?></span></strong></li>


            </ul>
        </div>
    </section>
    <div class="layout-collection">

        <div class="container">

            <section class="section_banner_col">
                <div class="banner-swiper swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                    style="cursor: grab;">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">


                        <a href="/collections/all" class="swiper-slide thumb-image-banner swiper-slide-active"
                            title="Banner" style="width: 342px; margin-right: 10px;">
                            <img width="840" height="252" class="lazyload loaded"
                                src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner_col_1.png?1719764721426"
                                data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner_col_1.png?1719764721426"
                                alt="Banner" data-was-processed="true">
                        </a>



                        <a href="/collections/all" class="swiper-slide thumb-image-banner swiper-slide-next"
                            title="Banner" style="width: 342px; margin-right: 10px;">
                            <img width="840" height="252" class="lazyload loaded"
                                src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner_col_2.png?1719764721426"
                                data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/banner_col_2.png?1719764721426"
                                alt="Banner" data-was-processed="true">
                        </a>



                    </div>
                    <div class="swiper-button-prev swiper-button-disabled"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </section>
            <script>
            var swiperbanner1 = new Swiper('.banner-swiper', {
                slidesPerView: 3,
                loop: false,
                grabCursor: true,
                spaceBetween: 30,
                roundLengths: true,
                slideToClickedSlide: false,
                navigation: {
                    nextEl: '.banner-swiper .swiper-button-next',
                    prevEl: '.banner-swiper .swiper-button-prev',
                },
                autoplay: false,
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
                        slidesPerView: 2,
                        spaceBetween: 10
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    991: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    1200: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    }
                }
            });
            </script>
            <section class="section_danhmuc">


                <div class="danhmuc-slider swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                    style="cursor: grab;">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">


                        <div class="swiper-slide swiper-slide-active" style="width: 194px; margin-right: 10px;">
                            <a href="?modules=sanpham&action=mac&phien_ban=book" title="MacBook">
                                <div class="thumb">
                                    <img width="80" height="80" class="lazyload loaded"
                                        src="//bizweb.dktcdn.net/thumb/large/100/502/883/collections/230224041834-macbboook21-2302241-1.png?v=1700726195013"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/collections/230224041834-macbboook21-2302241-1.png?v=1700726195013"
                                        alt="MacBook" data-was-processed="true">

                                </div>
                                <h3>
                                    <span class="line-clamp line-clamp-1">MacBook</span>

                                    <span class="count">(<?php echo check_ban('book'); ?> sản phẩm)</span>

                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide swiper-slide-next" style="width: 194px; margin-right: 10px;">
                            <a href="?modules=sanpham&action=mac&phien_ban=studio" title="Mac Studio">
                                <div class="thumb">
                                    <img width="80" height="80" class="lazyload loaded"
                                        src="//bizweb.dktcdn.net/thumb/large/100/502/883/collections/230224032847-macstudio1-23022415.png?v=1700726232673"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/collections/230224032847-macstudio1-23022415.png?v=1700726232673"
                                        alt="Mac Studio" data-was-processed="true">

                                </div>
                                <h3>
                                    <span class="line-clamp line-clamp-1">Mac Studio</span>

                                    <span class="count">(<?php echo check_ban('studio'); ?> sản phẩm)</span>

                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide" style="width: 194px; margin-right: 10px;">
                            <a href="?modules=sanpham&action=mac&phien_ban=imac" title="iMac">
                                <div class="thumb">
                                    <img width="80" height="80" class="lazyload loaded"
                                        src="//bizweb.dktcdn.net/thumb/large/100/502/883/collections/230224033707-imac21-230224153707.png?v=1700726214843"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/collections/230224033707-imac21-230224153707.png?v=1700726214843"
                                        alt="iMac" data-was-processed="true">

                                </div>
                                <h3>
                                    <span class="line-clamp line-clamp-1">iMac</span>

                                    <span class="count">(<?php echo check_ban('imac'); ?> sản phẩm)</span>

                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide" style="width: 194px; margin-right: 10px;">
                            <a href="?modules=sanpham&action=mac&phien_ban=mini" title="Mac mini">
                                <div class="thumb">
                                    <img width="80" height="80" class="lazyload loaded"
                                        src="//bizweb.dktcdn.net/thumb/large/100/502/883/collections/macmini1-230224162853.png?v=1700726267723"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/collections/macmini1-230224162853.png?v=1700726267723"
                                        alt="Mac mini" data-was-processed="true">

                                </div>
                                <h3>
                                    <span class="line-clamp line-clamp-1">Mac mini</span>

                                    <span class="count">(<?php echo check_ban('mini'); ?> sản phẩm)</span>

                                </h3>
                            </a>

                        </div>


                        <div class="swiper-slide" style="width: 194px; margin-right: 10px;">
                            <a href="?modules=sanpham&action=mac&phien_ban=tv" title="Apple TV">
                                <div class="thumb">
                                    <img width="80" height="80" class="lazyload loaded"
                                        src="//bizweb.dktcdn.net/thumb/large/100/502/883/collections/230224042246-appetv1-23022416224.png?v=1700726292900"
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/collections/230224042246-appetv1-23022416224.png?v=1700726292900"
                                        alt="Apple TV" data-was-processed="true">

                                </div>
                                <h3>
                                    <span class="line-clamp line-clamp-1">Apple TV</span>

                                    <span class="count">(<?php echo check_ban('tv'); ?> sản phẩm)</span>

                                </h3>
                            </a>

                        </div>


                    </div>
                    <div class="swiper-button-next">

                    </div>
                    <div class="swiper-button-prev swiper-button-disabled">

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

                navigation: {
                    nextEl: '.danhmuc-slider .swiper-button-next',
                    prevEl: '.danhmuc-slider .swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 2,
                    },
                    500: {
                        slidesPerView: 2,
                    },
                    640: {
                        slidesPerView: 3,
                    },
                    768: {
                        slidesPerView: 5,

                    },
                    991: {
                        slidesPerView: 6,

                    },
                    1200: {
                        slidesPerView: 7,

                    }
                }

            });
            </script>
            <div class="block-background" style="margin-bottom: 20px;">
                <h1 class="title-page">
                    <span>Mac
                    </span>
                </h1>

                <aside class="dqdt-sidebar sidebar">
                    <script src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/search_filter.js?1719764721426"
                        type="text/javascript"></script>
                    <div class="filter-content">

                        <div class="filter-container">
                            <div class="col_title">
                                <div class="filter-container__selected-filter" style="display: none;">
                                    <div class="filter-container__selected-filter-header clearfix">
                                        <span class="filter-container__selected-filter-header-title">
                                            Bạn chọn
                                        </span>
                                    </div>
                                    <div class="filter-container__selected-filter-list">
                                        <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                            class="filter-container__clear-all">Bỏ hết <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="10"
                                                height="10" x="0" y="0" viewBox="0 0 365.696 365.696"
                                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                <g>
                                                    <path xmlns="http://www.w3.org/2000/svg"
                                                        d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"
                                                        fill="#ffffff" data-original="#fff" style="" class=""></path>
                                                </g>
                                            </svg></a>
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Lọc giá -->
                            <div class="title-boloc">
                                Bộ lọc sản phẩm
                            </div>

                            <aside class="aside-item filter-price">

                                <div class="title-head">
                                    Chọn mức giá
                                </div>

                                <div class="aside-content filter-group content_price">
                                    <div id="price-filters">
                                        <ul>

                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-duoi-10-000d">
                                                        <input type="checkbox" id="filter-duoi-10-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="Dưới 10.000đ" value="(<10000)"
                                                            onclick="updateUrl(this, 'price')">
                                                        <i class="fa"></i>
                                                        <span>Dưới 10.000đ</span>
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-10-000d-50-000d">
                                                        <input type="checkbox" id="filter-10-000d-50-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="10.000đ - 50.000đ"
                                                            value="(>=10000 AND gia_km <=50000)"
                                                            onclick="updateUrl(this, 'price')">
                                                        <i class="fa"></i>
                                                        <span>Từ 10.000đ - 50.000đ</span>
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-50-000d-100-000d">
                                                        <input type="checkbox" id="filter-50-000d-100-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="50.000đ - 100.000đ"
                                                            value="(>=50000 AND gia_km<=100000)"
                                                            onclick="updateUrl(this, 'price')">
                                                        <i class="fa"></i>
                                                        <span>Từ 50.000đ - 100.000đ</span>
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-100-000d-200-000d">
                                                        <input type="checkbox" id="filter-100-000d-200-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="100.000đ - 200.000đ"
                                                            value="(>=100000 AND gia_km<=200000)"
                                                            onclick="updateUrl(this, 'price')">
                                                        <i class="fa"></i>
                                                        <span>Từ 100.000đ - 200.000đ</span>
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-200-000d-300-000d">
                                                        <input type="checkbox" id="filter-200-000d-300-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="200.000đ - 300.000đ"
                                                            value="(>=200000 AND gia_km<=300000)"
                                                            onclick="updateUrl(this, 'price')">
                                                        <i class="fa"></i>
                                                        <span>Từ 200.000đ - 300.000đ</span>
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-300-000d-500-000d">
                                                        <input type="checkbox" id="filter-300-000d-500-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="300.000đ - 500.000đ"
                                                            value="(>=300000 AND gia_km<=500000)"
                                                            onclick="updateUrl(this, 'price')">
                                                        <i class="fa"></i>
                                                        <span>Từ 300.000đ - 500.000đ</span>
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-500-000d-1-000-000d">
                                                        <input type="checkbox" id="filter-500-000d-1-000-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="500.000đ - 1.000.000đ"
                                                            value="(>=500000 AND gia_km<=1000000)"
                                                            onclick="updateUrl(this, 'price')">
                                                        <i class="fa"></i>
                                                        <span>Từ 500.000đ - 1 triệu</span>
                                                    </label>
                                                </span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <span>
                                                    <label for="filter-tren1-000-000d">
                                                        <input type="checkbox" id="filter-tren1-000-000d"
                                                            data-group="Khoảng giá" data-field="price_min"
                                                            data-text="Trên 1.000.000đ" value="(>1000000)"
                                                            onclick="updateUrl(this, 'price')">
                                                        <i class="fa"></i>
                                                        <span>Trên 1 triệu</span>
                                                    </label>
                                                </span>
                                            </li>



                                        </ul>
                                    </div>
                                </div>
                            </aside>

                            <!-- End Lọc giá -->
                            <!-- Lọc Loại -->
                            <!-- End Lọc Loại -->

                            <!-- Lọc Thương hiệu -->




                            <!-- End Lọc Thương hiệu -->

                            <aside class="aside-item filter-tag">

                                <div class="title-head">
                                    Nhu cầu sử dụng
                                </div>
                                <div class="aside-content filter-group">
                                    <ul>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-choi-game">
                                                    <input type="checkbox" id="filter-choi-game" data-group="tag2"
                                                        data-field="tags" data-text="Chơi game" value="game"
                                                        onclick="updateUrl(this, 'tags')">
                                                    <i class="fa"></i>
                                                    <span>Chơi game</span>
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-pin-trau">
                                                    <input type="checkbox" id="filter-pin-trau" data-group="tag2"
                                                        data-field="tags" data-text="Pin trâu" value="pin"
                                                        onclick="updateUrl(this, 'tags')">
                                                    <i class="fa"></i>
                                                    <span>Pin trâu</span>
                                                </label>
                                            </span>
                                        </li>

                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-dung-luong-lon">
                                                    <input type="checkbox" id="filter-dung-luong-lon" data-group="tag2"
                                                        data-field="tags" data-text="Dung lượng lớn" value="dungluong"
                                                        onclick="updateUrl(this, 'tags')" data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Dung lượng lớn</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-cau-hinh-cao">
                                                    <input type="checkbox" id="filter-cau-hinh-cao" data-group="tag2"
                                                        data-field="tags" data-text="Cấu hình cao" value="cauhinh"
                                                        onclick="updateUrl(this, 'tags')" data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Cấu hình cao</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-mong-nhe">
                                                    <input type="checkbox" id="filter-mong-nhe" data-group="tag2"
                                                        data-field="tags" data-text="Mỏng nhẹ" value="nhe"
                                                        onclick="updateUrl(this, 'tags')" data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Mỏng nhẹ</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-chup-anh-dep">
                                                    <input type="checkbox" id="filter-chup-anh-dep" data-group="tag2"
                                                        data-field="tags" data-text="chupanh" value="chupanh"
                                                        onclick="updateUrl(this, 'tags')" data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Chụp ảnh đẹp</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-nho-gon-de-cam-nam">
                                                    <input type="checkbox" id="filter-nho-gon-de-cam-nam"
                                                        data-group="tag2" data-field="tags"
                                                        onclick="updateUrl(this, 'tags')"
                                                        data-text="Nhỏ gọn, dễ cầm nắm" value="nho" data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Nhỏ gọn, dễ cầm nắm</span>
                                                </label>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </aside>

                            <!-- Lọc theo chất liệu -->

                            <aside class="aside-item filter-tag ">

                                <div class="title-head">
                                    Bộ nhớ trong
                                </div>
                                <div class="aside-content filter-group">
                                    <ul>




                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-128gb-va-256gb">
                                                    <input type="checkbox" id="filter-128gb-va-256gb" data-group="tag2"
                                                        data-field="tags" data-text="128GB và 256GB"
                                                        onclick="updateUrl(this, 'bonho')"
                                                        value="(>=128 AND bo_nho <= 256)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>128GB và 256GB</span>
                                                </label>
                                            </span>
                                        </li>

                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-tren-512gb">
                                                    <input type="checkbox" id="filter-tren-512gb" data-group="tag2"
                                                        data-field="tags" data-text="Trên 512GB" value="(> 512)"
                                                        onclick="updateUrl(this, 'bonho')" data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Trên 512GB</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-duoi-32gb">
                                                    <input type="checkbox" id="filter-duoi-32gb" data-group="tag2"
                                                        data-field="tags" data-text="Dưới 32GB" value="(< 32)"
                                                        onclick="updateUrl(this, 'bonho')" data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Dưới 32GB</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-32gb-va-64gb">
                                                    <input type="checkbox" id="filter-32gb-va-64gb" data-group="tag2"
                                                        data-field="tags" data-text="32GB và 64GB"
                                                        onclick="updateUrl(this, 'bonho')"
                                                        value="(>= 32 AND bo_nho<= 64)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>32GB và 64GB</span>
                                                </label>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </aside>

                            <!-- End lọc theo chất liệu -->
                            <!-- Lọc kích thước màn hình -->

                            <aside class="aside-item filter-tag ">

                                <div class="title-head">
                                    Dung lượng RAM
                                </div>
                                <div class="aside-content filter-group">
                                    <ul>




                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-duoi-4gb">
                                                    <input type="checkbox" id="filter-duoi-4gb" data-group="tag3"
                                                        data-field="tags" data-text="Dưới 4GB" value="(< 4)"
                                                        onclick="updateUrl(this, 'ram')" data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Dưới 4GB</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-4gb-6gb">
                                                    <input type="checkbox" id="filter-4gb-6gb" data-group="tag3"
                                                        data-field="tags" data-text="4GB - 6GB"
                                                        value="(>= 4 AND ram <= 6)" onclick="updateUrl(this, 'ram')"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>4GB - 6GB</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-8gb-12gb">
                                                    <input type="checkbox" id="filter-8gb-12gb" data-group="tag3"
                                                        data-field="tags" data-text="8GB - 12GB"
                                                        value="(>= 8 and ram <=12)" onclick="updateUrl(this, 'ram')"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>8GB - 12GB</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-12gb-tro-len">
                                                    <input type="checkbox" id="filter-12gb-tro-len" data-group="tag3"
                                                        data-field="tags" data-text="12GB trở lên"
                                                        onclick="updateUrl(this, 'ram')" value="(> 12)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>12GB trở lên</span>
                                                </label>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </aside>

                            <!-- End lọc theo kích thước màn hình -->
                            <!-- Lọc tính năng camera -->

                            <aside class="aside-item filter-tag ">

                                <div class="title-head">
                                    Tính năng camera
                                </div>
                                <div class="aside-content filter-group">
                                    <ul>




                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-sac-khong-day">
                                                    <input type="checkbox" id="filter-sac-khong-day" data-group="tag4"
                                                        data-field="tags" data-text="Sạc không dây"
                                                        onclick="updateUrl(this, 'camera')" value="sac"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Sạc không dây</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-bao-mat-van-tay">
                                                    <input type="checkbox" id="filter-bao-mat-van-tay" data-group="tag4"
                                                        data-field="tags" data-text="Bảo mật vân tay"
                                                        onclick="updateUrl(this, 'camera')" value="baomat"
                                                        data-operator=" OR">
                                                    <i class="fa"></i>
                                                    <span>Bảo mật vân tay</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-nhan-dien-khuon-mat">
                                                    <input type="checkbox" id="filter-nhan-dien-khuon-mat"
                                                        data-group="tag4" data-field="tags"
                                                        onclick="updateUrl(this, 'camera')"
                                                        data-text="Nhận diện khuôn mặt" value="khuonmat"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Nhận diện khuôn mặt</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-khang-nuoc-khang-bui">
                                                    <input type="checkbox" id="filter-khang-nuoc-khang-bui"
                                                        data-group="tag4" data-field="tags"
                                                        onclick="updateUrl(this, 'camera')"
                                                        data-text="Kháng nước, kháng bụi" value="khangnuoc"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Kháng nước, kháng bụi</span>
                                                </label>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </aside>

                            <!-- End lọc theo tính nắng camera -->
                            <!-- Lọc theo tính năng đặc biệt -->

                            <aside class="aside-item filter-tag ">

                                <div class="title-head">
                                    Kích thước màn hình
                                </div>
                                <div class="aside-content filter-group">
                                    <ul>




                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-tren-6-inch">
                                                    <input type="checkbox" id="filter-tren-6-inch" data-group="tag5"
                                                        data-field="tags" data-text="Trên 6 inch" value="(>6)"
                                                        onclick="updateUrl(this, 'man_hinh')" data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Trên 6 inch</span>
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-duoi-6-inch">
                                                    <input type="checkbox" id="filter-duoi-6-inch" data-group="tag5"
                                                        onclick="updateUrl(this, 'man_hinh')" data-field="tags"
                                                        data-text="Dưới 6 inch" value="(<6)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    <span>Dưới 6 inch</span>
                                                </label>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </aside>

                            <!-- End lọc theo tính năng đặc biệt -->

                        </div>
                    </div>
                </aside>


                <div class="category-products">
                    <div class="sort-cate clearfix margin-bottom-10 hidden-xs">


                        <div class="sort-cate-left hidden-xs">
                            <h3><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12px"
                                    height="12px" viewBox="0 0 97.761 97.762"
                                    style="enable-background:new 0 0 97.761 97.762;" xml:space="preserve">
                                    <path d="M42.761,65.596H34.75V2c0-1.105-0.896-2-2-2H16.62c-1.104,0-2,0.895-2,2v63.596H6.609c-0.77,0-1.472,0.443-1.804,1.137
					 c-0.333,0.695-0.237,1.519,0.246,2.117l18.076,26.955c0.38,0.473,0.953,0.746,1.558,0.746s1.178-0.273,1.558-0.746L44.319,68.85
					 c0.482-0.6,0.578-1.422,0.246-2.117C44.233,66.039,43.531,65.596,42.761,65.596z"></path>
                                    <path d="M93.04,95.098L79.71,57.324c-0.282-0.799-1.038-1.334-1.887-1.334h-3.86c-0.107,0-0.213,0.008-0.318,0.024
					 c-0.104-0.018-0.21-0.024-0.318-0.024h-3.76c-0.849,0-1.604,0.535-1.887,1.336L54.403,95.1c-0.215,0.611-0.12,1.289,0.255,1.818
					 s0.983,0.844,1.633,0.844h5.773c0.88,0,1.657-0.574,1.913-1.416l2.536-8.324h14.419l2.536,8.324
					 c0.256,0.842,1.033,1.416,1.913,1.416h5.771c0.649,0,1.258-0.314,1.633-0.844C93.16,96.387,93.255,95.709,93.04,95.098z
					 M68.905,80.066c2.398-7.77,4.021-13.166,4.82-16.041l4.928,16.041H68.905z"></path>
                                    <path d="M87.297,34.053H69.479L88.407,6.848c0.233-0.336,0.358-0.734,0.358-1.143V2.289c0-1.104-0.896-2-2-2H60.694
					 c-1.104,0-2,0.896-2,2v3.844c0,1.105,0.896,2,2,2h16.782L58.522,35.309c-0.233,0.336-0.358,0.734-0.358,1.146v3.441
					 c0,1.105,0.896,2,2,2h27.135c1.104,0,2-0.895,2-2v-3.842C89.297,34.947,88.402,34.053,87.297,34.053z"></path>
                                </svg>
                                Xếp theo:</h3>
                            <style>
                            .btn-quick-sort.active a {
                                color: blue;
                                font-weight: bold;
                            }
                            </style>
                            <ul>
                                <li class="btn-quick-sort">
                                    <form action="" method="post">
                                        <input type="hidden" name="sort" value="alpha-asc">
                                        <button type="submit"
                                            class="<?php echo ($sort == 'alpha-asc') ? 'active' : ''; ?>"
                                            title="Tên A-Z">
                                            <i></i> Tên A-Z
                                        </button>
                                    </form>
                                </li>
                                <li class="btn-quick-sort">
                                    <form action="" method="post">
                                        <input type="hidden" name="sort" value="alpha-desc">
                                        <button type="submit"
                                            class="<?php echo ($sort == 'alpha-desc') ? 'active' : ''; ?>"
                                            title="Tên Z-A">
                                            <i></i> Tên Z-A
                                        </button>
                                    </form>
                                </li>
                                <li class="btn-quick-sort">
                                    <form action="" method="post">
                                        <input type="hidden" name="sort" value="created-desc">
                                        <button type="submit"
                                            class="<?php echo ($sort == 'created-desc') ? 'active' : ''; ?>"
                                            title="Hàng mới">
                                            <i></i> Hàng mới
                                        </button>
                                    </form>
                                </li>
                                <li class="btn-quick-sort">
                                    <form action="" method="post">
                                        <input type="hidden" name="sort" value="price-asc">
                                        <button type="submit"
                                            class="<?php echo ($sort == 'price-asc') ? 'active' : ''; ?>"
                                            title="Giá thấp đến cao">
                                            <i></i> Giá thấp đến cao
                                        </button>
                                    </form>
                                </li>
                                <li class="btn-quick-sort">
                                    <form action="" method="post">
                                        <input type="hidden" name="sort" value="price-desc">
                                        <button type="submit"
                                            class="<?php echo ($sort == 'price-desc') ? 'active' : ''; ?>"
                                            title="Giá cao xuống thấp">
                                            <i></i> Giá cao xuống thấp
                                        </button>
                                    </form>
                                </li>
                            </ul>

                        </div>

                    </div>



                    <div class="products-view products-view-grid list_hover_pro">
                        <div class="row row-fix">
                            <?php
                  if (!$check) {
                    echo '<div style="margin-top: 20px;" class="alert alert-warning alert-warning2 alert-dismissible margin-top-15 section" role="alert">
                        Không có sản phẩm nào trong danh mục này!
                    </div>';
                } else {
                    foreach ($check as $item) { ?>
                            <div class="col-6 col-md-4 col-xl-20 col-fix">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="?modules=sanpham&action=view_sp&id=<?php echo $item['id']; ?>"
                                                title="<?php echo $item['ten_san_pham']; ?>">
                                                <img width="234" height="234" class="lazyload image1 loaded"
                                                    src="<?php echo $item['img']; ?>"
                                                    alt="<?php echo $item['ten_san_pham']; ?>">
                                            </a>
                                            <div class="tag-km">
                                                <?php if($item['moi'] == 1){ ?>
                                                <span style="background: #000f8f"><img alt="Mới" width="60" height="60"
                                                        class="lazyload loaded"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426"
                                                        data-was-processed="true">
                                                    Mới</span>

                                                <?php } if($item['noi_bat'] == 1){ ?>

                                                <span style="background: #d70018"><img alt="Nổi bật" width="60"
                                                        height="60" class="lazyload loaded"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426"
                                                        data-was-processed="true">
                                                    Nổi bật</span>

                                                <?php } if($item['ban_chay'] == 1){ ?>

                                                <span style="background: #f3bd01"><img alt="Bán chạy" width="60"
                                                        height="60" class="lazyload loaded"
                                                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_3_tag.png?1719764721426"
                                                        data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_3_tag.png?1719764721426"
                                                        data-was-processed="true"> Bán chạy</span>
                                                <?php } ?>
                                            </div>
                                            <div class="action">
                                                <button class="btn-cart btn-views" style="color: #fff;" title="Xem"
                                                    type="button"
                                                    onclick="window.location.href='?modules=view&action=view&loai=mac&id=<?php echo $item['id']; ?>'">
                                                    Xem
                                                </button>
                                            </div>
                                        </div>
                                        <span class="smart">Giảm <?php echo $item['giam'];?>%</span>
                                        <div class="product-info">
                                            <h3 class="product-name"><a
                                                    href="?modules=view&action=view&loai=mac&id=<?php echo $item['id']; ?>"
                                                    title="<?php echo $item['ten_san_pham']; ?>"><?php echo $item['ten_san_pham'];?></a>
                                            </h3>
                                            <div class="price-box">
                                                <?php echo number_format($item['gia_km'], 0, ',', '.'); ?>₫
                                                <span
                                                    class="compare-price"><?php echo number_format($item['gia_goc'], 0, ',', '.'); ?>₫</span>
                                            </div>
                                            <div class="wishlish-compare">

                                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                    data-wish="<?= $item['id']; ?>" tabindex="0" data-item="Mac"
                                                    title="Thêm vào yêu thích">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                        </path>
                                                    </svg>
                                                    Thích
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php }
                }
                ?>
                            <!-- end san pham -->

                        </div>
                    </div>




                </div>
            </div>
            <div id="open-filters" class="open-filters d-lg-none d-xl-none">
            </div>
        </div>
    </div>
    <div class="opacity_sidebar"></div>
    <script>
    var colName = "Mac";

    var colId = 3242659;

    var selectedViewData = "data";
    </script>

    <script src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/col.js?1719764721426" type="text/javascript">
    </script>
</div>
<?php home("foot")
?>