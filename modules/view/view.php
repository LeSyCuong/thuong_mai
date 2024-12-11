<?php
if (!defined("_STATUS")) {
    echo "Truy cập không hợp lệ...";
    die();
}

if(!empty($_GET['id']) && !empty($_GET['loai'])){
    $id = $_GET['id'];
    $table = $_GET['loai'];
    function check($table, $id) {
        global $conn;
        // Đảm bảo tên bảng chỉ chứa các ký tự hợp lệ
        $table = preg_replace('/[^a-zA-Z0-9_]/', '', $table);
    
        try {
            $sql = "SELECT * FROM `$table` WHERE id = '$id' ORDER BY `id` DESC LIMIT 1";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result ?? null;
        } catch (PDOException $e) {
            error_log("Lỗi: " . $e->getMessage());
            return null;
        }
    }
    $check = check($table, $id);

    if (!$check) {
        die('Không tìm thấy sản phẩm!');
    } 
}else{
    die('Liên kết không đúng định dạng!');
}
$data = [
    "title"=> $check['ten_san_pham']
];

home("head", $data);
?>
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


                <li>
                    <a class="changeurl" href="/san-pham-noi-bat"><span>Sản phẩm nổi bật</span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>&nbsp;</span>
                </li>

                <li><strong><span><?php echo htmlspecialchars($check['ten_san_pham']); ?></span></strong>
                <li>

            </ul>
        </div>
    </section>
    <section class="product layout-product" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="category" content="Sản phẩm nổi bật">
        <meta itemprop="url" content="//dola-phone.mysapo.net/iphone-15-plus-512gb-chinh-hang-vn-a">
        <meta itemprop="name" content="<?php echo htmlspecialchars($check['ten_san_pham']); ?>">
        <meta itemprop="image"
            content="http://bizweb.dktcdn.net/thumb/grande/100/502/883/products/230913051319-iphone-15-plus-gree-3891c830-4f86-46bf-a147-d1e5d001f700-69fc9483-629c-4dd3-a9eb-7603c2a2a135.png?v=1700194426930">
        <meta itemprop="description" content="✔️ Hỗ trợ trả góp 0% chỉ cần CCCD gắn chip hoặc 0% qua thẻ tín dụng
✔️ Nhập mã&nbsp;ZALOPAYMT&nbsp;giảm ngay 1% tối đa&nbsp;200.000đ&nbsp;khi thanh toán qua Zalo Pay
✔️ Giảm 50% tối đa&nbsp;100.000đ&nbsp;cho thành viên mới của Kredivo
✔️&nbsp;Giảm 5% tối đa&nbsp;200.000đ, áp dụng kỳ hạn 6/12 tháng khi thanh toán qua Kredivo
✔️ Giảm 50% tối đa&nbsp;100.000đ,&nbsp;áp dụng cho đơn hàng từ&nbsp;200.000đ&nbsp;cho người dùng&nbsp;mới của Home Pay Later
✔️ Giảm 5% tối đa&nbsp;200.000đ&nbsp;cho đơn từ&nbsp;200.000đ&nbsp;khi thanh toán qua Home PayLater">
        <div class="d-none" itemprop="brand" itemtype="https://schema.org/Brand" itemscope>
            <meta itemprop="name" content="Apple" />
        </div>
        <meta itemprop="model" content="">
        <div class="d-none hidden" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <div class="inventory_quantity hidden" itemscope itemtype="http://schema.org/ItemAvailability">
                <span class="a-stock" itemprop="supersededBy">
                    Còn hàng
                </span>
            </div>
            <link itemprop="availability" href="http://schema.org/InStock">
            <meta itemprop="priceCurrency" content="VND">
            <meta itemprop="price" content="32790000">
            <meta itemprop="url" content="https://dola-phone.mysapo.net/iphone-15-plus-512gb-chinh-hang-vn-a">
            <span itemprop="UnitPriceSpecification" itemscope itemtype="https://schema.org/Downpayment">
                <meta itemprop="priceType" content="32790000">
            </span>
            <span itemprop="UnitPriceSpecification" itemscope itemtype="https://schema.org/Downpayment">
                <meta itemprop="priceSpecification" content="36990000">
            </span>
            <meta itemprop="priceValidUntil" content="2099-01-01">
        </div>
        <div class="d-none hidden" id="https://dola-phone.mysapo.net" itemprop="seller"
            itemtype="http://schema.org/Organization" itemscope>
            <meta itemprop="name" content="Dola Phone" />
            <meta itemprop="url" content="https://dola-phone.mysapo.net" />
            <meta itemprop="logo"
                content="http://bizweb.dktcdn.net/100/502/883/themes/934584/assets/logo.png?1719764721426" />
        </div>

        <div class="container">
            <div class="block-background">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title-product"><?php echo htmlspecialchars($check['ten_san_pham']); ?></h1>
                    </div>
                    <div class="product-detail-left product-images col-12 col-md-12 col-lg-6 col-xl-4">
                        <div class="product-image-block">

                            <div class="swiper-container gallery-top p-5">
                                <div class="swiper-wrapper" id="lightgallery">

                                    <a class="swiper-slide" data-hash="0"
                                        href="//bizweb.dktcdn.net/thumb/1024x1024/100/502/883/products/230913051319-iphone-15-plus-gree-3891c830-4f86-46bf-a147-d1e5d001f700-69fc9483-629c-4dd3-a9eb-7603c2a2a135.png?v=1700194426930"
                                        title="Click để xem">
                                        <img height="400" width="400"
                                            src="<?php echo htmlspecialchars($check['img']); ?>"
                                            alt="iPhone 15 Plus 512GB - Ch&#237;nh h&#227;ng VN/A"
                                            data-image="<?php echo htmlspecialchars($check['img']); ?>"
                                            class="img-responsive mx-auto d-block swiper-lazy" />
                                    </a>



                                </div>
                                <div class="tag-km">
                                    <?php if($check['moi'] == 1){?>
                                    <span><img alt="Mới"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_1_tag.png?1719764721426">
                                        Mới</span>
                                    <?php } if($check['noi_bat'] == 1){?>
                                    <span><img alt="Nổi bật"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                        Nổi bật</span>
                                    <?php } if($check['ban_chay'] == 1){?>
                                    <span><img alt="Bán chạy"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_3_tag.png?1719764721426">
                                        Bán chạy</span>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs p-5">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide" data-hash="0">
                                        <div class="p-100">
                                            <img height="80" width="80"
                                                src="<?php echo htmlspecialchars($check['img']); ?>"
                                                alt="iPhone 15 Plus 512GB - Ch&#237;nh h&#227;ng VN/A"
                                                data-image="<?php echo htmlspecialchars($check['img']); ?>"
                                                class="swiper-lazy" />
                                        </div>
                                    </div>



                                </div>

                            </div>


                        </div>



                    </div>

                    <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                        <div class="details-pro">



                            <div class="inventory_quantity">
                                <div class="thump-break row">

                                    <div class="mb-break type col-lg-6">
                                        <span class="stock-brand-title">Loại:</span>
                                        <span class="a-vendor">

                                            <?php echo htmlspecialchars($check['loai']); ?>

                                        </span>
                                    </div>
                                    <div class="mb-break type col-lg-6">
                                        <span class="stock-brand-title">Thương hiệu:</span>
                                        <span class="a-vendor">

                                            <?php echo htmlspecialchars($check['thuong_hieu']); ?>

                                        </span>
                                    </div>
                                    <div class="mb-break inventory col-lg-6">
                                        <span class="stock-brand-title">Tình trạng:</span>


                                        <span class="a-stock">
                                            <?php  if($check['so_luong'] > 0){
                                                echo 'Còn hàng';
                                            }else{
                                                echo 'Hết hàng';
                                            } ?>
                                        </span>


                                    </div>
                                    <div class="mb-break sku-product clearfix col-lg-6">
                                        <span class="stock-brand-title">Mã sản phẩm:</span>
                                        <span class="variant-sku" itemprop="sku" content="Đang cập nhật"><span
                                                class="a-sku">Đang cập nhật</span></span>
                                        <br>
                                    </div>
                                </div>

                            </div>

                            <form enctype="multipart/form-data" data-cart-form id="add-to-cart-form" action="/cart/add"
                                method="post" class="form-inline">

                                <div class="price-box clearfix">
                                    <span class="title-price">Giá bán:</span>

                                    <span class="special-price">
                                        <span
                                            class="price product-price"><?php echo number_format($check['gia_km'], 0, ',', '.'); ?>₫</span>
                                        <meta itemprop="price"
                                            content="<?php echo htmlspecialchars($check['gia_km']); ?>">
                                        <meta itemprop="priceCurrency" content="VND">
                                    </span>
                                    <span class="old-price" itemprop="priceSpecification" itemscope=""
                                        itemtype="http://schema.org/priceSpecification">

                                        <span class="price product-price-old">
                                            <?php echo number_format($check['gia_goc'], 0, ',', '.'); ?>₫
                                        </span>
                                        <meta itemprop="price"
                                            content="<?php echo htmlspecialchars($check['gia_goc']); ?>">
                                        <meta itemprop="priceCurrency" content="VND">
                                    </span>

                                </div>

                                <div class="form-product">

                                    <div class="phienban">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-3 col-4">
                                                <a class="thumb-phienban active">
                                                    <span class="line-clamp line-clamp-1">
                                                        <?php echo htmlspecialchars($check['bo_nho']); ?>GB

                                                    </span>
                                                    <span
                                                        class="price-phienban"><?php echo number_format($check['gia_km'], 0, ',', '.'); ?>₫</span>
                                                </a>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="select-swatch">
                                        <script>
                                        $(window).on('load', function() {
                                            $('.selector-wrapper:eq(0)').hide();

                                            // Tự động chọn màu đầu tiên
                                            const firstColorInput = $('input[name="option-0"]').first();
                                            if (firstColorInput.length) {
                                                firstColorInput.prop('checked', true); // Chọn màu đầu tiên
                                                $('.value-roperties').text(firstColorInput
                                                    .val()); // Hiển thị màu đầu tiên
                                                $('.add_to_cart').attr('data-color', firstColorInput
                                                    .val()); // Cập nhật giá trị màu vào nút giỏ hàng
                                            }
                                        });
                                        </script>
                                        <div class="swatch clearfix" data-option-index="0">

                                            <div class="header">Màu sắc: <span class="value-roperties"></span></div>
                                            <div class="thump-swatch">


                                                <?php
                                                $colors = explode(',', $check['mau_sac']);
                                                 foreach ($colors as $color): 
                                                    $color = trim($color);
                                                    $slug = strtolower(str_replace(' ', '', $color)); 
                                                ?>
                                                <div data-value="<?= htmlspecialchars($color, ENT_QUOTES, 'UTF-8') ?>"
                                                    class="swatch-element color <?= htmlspecialchars($slug, ENT_QUOTES, 'UTF-8') ?> available">
                                                    <div class="tooltip">
                                                        <?= htmlspecialchars($color, ENT_QUOTES, 'UTF-8') ?></div>
                                                    <input
                                                        id="swatch-0-<?= htmlspecialchars($slug, ENT_QUOTES, 'UTF-8') ?>"
                                                        type="radio" name="option-0"
                                                        value="<?= htmlspecialchars($color, ENT_QUOTES, 'UTF-8') ?>" />
                                                    <label
                                                        for="swatch-0-<?= htmlspecialchars($slug, ENT_QUOTES, 'UTF-8') ?>">
                                                        <span
                                                            style="margin-left:-10px;"><?= htmlspecialchars($color, ENT_QUOTES, 'UTF-8') ?></span>
                                                    </label>
                                                </div>
                                                <script>
                                                jQuery(
                                                        '.swatch[data-option-index="0"] .<?= htmlspecialchars($slug, ENT_QUOTES, 'UTF-8') ?>'
                                                    )
                                                    .removeClass('soldout')
                                                    .addClass('available')
                                                    .find(':radio')
                                                    .removeAttr('disabled');
                                                </script>
                                                <?php endforeach; ?>


                                            </div>
                                        </div>



                                    </div>


                                    <div class="clearfix form-group ">
                                        <div class="flex-quantity">
                                            <div class="custom custom-btn-number show">
                                                <label class="sl section">Số lượng:</label>
                                                <div class="input_number_product form-control">
                                                    <button class="btn_num num_1 button button_qty" type="button"
                                                        id="decrease-qty">-</button>
                                                    <input type="text" id="qtym-1" name="quantity" value="1"
                                                        maxlength="3" class="form-control prd_quantity">
                                                    <button class="btn_num num_2 button button_qty" type="button"
                                                        id="increase-qty">+</button>
                                                </div>
                                            </div>

                                            <div class="btn-mua button_actions clearfix">
                                                <?php if ($check['so_luong'] > 0) { ?>
                                                <a href="javascript:void(1)" type="submit" title="Thêm vào giỏ hàng"
                                                    class="setCartlist btn btn_base normal_button btn_add_cart add_to_cart btn-cart"
                                                    data-cart="<?= $check['id']; ?>" data-item="<?= $table; ?>"
                                                    data-name="<?php echo $check['ten_san_pham'];?>" data-quantity="1"
                                                    data-price="<?php echo number_format($check['gia_km'], 0, ',', '.'); ?>₫"
                                                    data-color="Đen" data-img="<?php echo $check['img'];?>">
                                                    <span class="txt-main text_1">Thêm vào giỏ hàng</span>
                                                    <span class="text_2">Giao hàng tận nơi miễn phí</span>
                                                </a>
                                                <?php } else { ?>
                                                <a href="javascript:void(1)" type="submit" title="Thêm vào giỏ hàng"
                                                    class="setCartlist btn btn_base normal_button btn_add_cart add_to_cart btn-cart"
                                                    data-cart="<?= $check['id']; ?>" data-item="<?= $table; ?>"
                                                    onclick="return false;"
                                                    style=" pointer-events: none; cursor: not-allowed;"
                                                    data-name="<?php echo $check['ten_san_pham'];?>" data-quantity="1"
                                                    data-price="<?php echo number_format($check['gia_km'], 0, ',', '.'); ?>₫"
                                                    data-color="Đen" data-img="<?php echo $check['img'];?>">
                                                    <span class="txt-main text_1">Hết hàng</span>
                                                </a>
                                                <?php } ?>
                                                <script>
                                                $(document).ready(function() {
                                                    // Lắng nghe sự thay đổi màu sắc khi người dùng chọn
                                                    $('input[name="option-0"]').on('change', function() {
                                                        var selectedColor = $(
                                                                'input[name="option-0"]:checked')
                                                            .val(); // Lấy màu sắc được chọn
                                                        $('.value-roperties').text(
                                                            selectedColor); // Hiển thị màu sắc đã chọn

                                                        // Cập nhật giá trị trong thẻ <a> khi người dùng chọn màu sắc
                                                        $('.add_to_cart').attr('data-color',
                                                            selectedColor);
                                                    });

                                                    // Xử lý sự kiện tăng số lượng
                                                    $('#increase-qty').click(function() {
                                                        var qty = parseInt($('#qtym-1')
                                                            .val()); // Lấy giá trị số lượng hiện tại
                                                        if (!isNaN(qty)) {
                                                            $('#qtym-1').val(qty +
                                                                1); // Tăng giá trị lên 1
                                                            updateQuantityInCart(qty +
                                                                1); // Cập nhật số lượng trong giỏ hàng
                                                        }
                                                    });

                                                    // Xử lý sự kiện giảm số lượng
                                                    $('#decrease-qty').click(function() {
                                                        var qty = parseInt($('#qtym-1')
                                                            .val()); // Lấy giá trị số lượng hiện tại
                                                        if (!isNaN(qty) && qty >
                                                            1) { // Đảm bảo số lượng không nhỏ hơn 1
                                                            $('#qtym-1').val(qty -
                                                                1); // Giảm giá trị xuống 1
                                                            updateQuantityInCart(qty -
                                                                1); // Cập nhật số lượng trong giỏ hàng
                                                        }
                                                    });

                                                    // Kiểm tra và điều chỉnh giá trị số lượng khi người dùng thay đổi trực tiếp
                                                    $('#qtym-1').on('input', function() {
                                                        var qty = parseInt($(this).val());
                                                        if (isNaN(qty) || qty < 1) {
                                                            $(this).val(
                                                                1
                                                            ); // Nếu giá trị không hợp lệ, đặt lại thành 1
                                                        }
                                                        updateQuantityInCart($(this)
                                                            .val()); // Cập nhật số lượng trong giỏ hàng
                                                    });

                                                    // Hàm cập nhật số lượng trong thẻ <a> khi số lượng thay đổi
                                                    function updateQuantityInCart(qty) {
                                                        // Cập nhật số lượng vào data-quantity của thẻ <a>
                                                        $('.add_to_cart').attr('data-quantity', qty);
                                                    }

                                                    // Thêm sự kiện xử lý "Thêm vào giỏ" để sử dụng số lượng đúng
                                                    $('.add_to_cart').on('click', function() {
                                                        var qty = $('#qtym-1')
                                                            .val(); // Lấy giá trị số lượng từ input
                                                        $(this).attr('data-quantity',
                                                            qty
                                                        ); // Đảm bảo data-quantity được cập nhật với giá trị đúng
                                                    });
                                                });
                                                </script>
                                            </div>

                                            <div class="group-button">


                                                <a href="?modules=view&action=pay" title="Thanh toán"
                                                    class="btn-buyNow">
                                                    Thanh toán
                                                </a>

                                                <a class="button-phone" title="1900 6750" href="tel:19006750">
                                                    <span>Liên hệ <b>1900 6750</b></span>
                                                    Để được tư vấn và hỗ trợ ngay!!!
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>



                                <div class="khuyen-mai">
                                    <h3 class="title">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M190.5 68.8L225.3 128H224 152c-22.1 0-40-17.9-40-40s17.9-40 40-40h2.2c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H438.4c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88h-2.2c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0H152C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40H288h-1.3l34.8-59.2C329.1 55.9 342.9 48 357.8 48H360c22.1 0 40 17.9 40 40zM32 288V464c0 26.5 21.5 48 48 48H224V288H32zM288 512H432c26.5 0 48-21.5 48-48V288H288V512z" />
                                        </svg>
                                        Ưu đãi khi mua hàng
                                    </h3>
                                    <div class="content">
                                        <div class="rte">
                                            <p>✔️ Hỗ trợ trả góp 0% chỉ cần CCCD gắn chip hoặc 0% qua thẻ tín dụng
                                            </p>
                                            <p>✔️ Nhập mã&nbsp;<strong>ZALOPAYMT&nbsp;</strong>giảm ngay 1% tối
                                                đa<strong>&nbsp;200.000đ&nbsp;</strong>khi thanh toán qua Zalo Pay
                                            </p>
                                            <p>✔️ Giảm 50% tối đa&nbsp;<strong>100.000đ</strong>&nbsp;cho thành viên
                                                mới của Kredivo</p>
                                            <p>✔️&nbsp;Giảm 5% tối đa<strong>&nbsp;200.000đ</strong>, áp dụng kỳ hạn
                                                6/12 tháng khi thanh toán qua Kredivo</p>
                                            <p>✔️ Giảm 50% tối đa&nbsp;<strong>100.000đ,&nbsp;</strong>áp dụng cho
                                                đơn hàng từ<strong>&nbsp;200.000đ&nbsp;</strong>cho người
                                                dùng&nbsp;mới của Home Pay Later</p>
                                            <p>✔️ Giảm 5% tối đa&nbsp;<strong>200.000đ&nbsp;</strong>cho đơn
                                                từ&nbsp;<strong>200.000đ</strong>&nbsp;khi thanh toán qua Home
                                                PayLater</p>
                                        </div>
                                    </div>
                                </div>


                            </form>



                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-12 col-md-12 col-12 content-pro">
                        <div class="row">

                            <div class="col-12 col-md-12 col-lg-4 col-xl-12">
                                <div class="product-hethong">

                                    <h3 class="title-index-pro">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                                        </svg>
                                        Hệ thống cửa hàng
                                    </h3>
                                    <div class="option-chos">

                                        <div class="group-option">
                                            <div class="group-city group">
                                                <select id="city" class="select">
                                                    <option value="ALL" selected>Chọn tỉnh thành</option>


                                                    <option value="Hà Nội">Hà Nội</option>

                                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>

                                                    <option value="Đà Nẵng">Đà Nẵng</option>

                                                    <option value="Bình Dương">Bình Dương</option>

                                                    <option value="Cần Thơ">Cần Thơ</option>

                                                </select>
                                            </div>
                                            <div class="group-district group">
                                                <select id="district" class="select" disabled>
                                                    <option value="ALL">Chọn quận/huyện</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="info-store info-block">

                                        </div>
                                    </div>
                                </div>
                                <script
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/tabletop.js?1719764721426"
                                    type="text/javascript"></script>
                                <script>
                                $(document).ready(function() {
                                    var public_spreadsheet_url =
                                        "https://docs.google.com/spreadsheets/d/e/2PACX-1vRPNCj5me4-UQdDlH9jYnvjMRzy_e_ivxr72s1WE_ATxkSHAc8r7_MA_BmocldULJasQjxRe1-oFRBG/pub?output=csv";
                                    var data;
                                    Papa.parse(public_spreadsheet_url, {
                                        header: true,
                                        download: true,
                                        dynamicTyping: true,
                                        complete: function(results) {
                                            var result = results.data;
                                            var dataFix = result;
                                            showlocation();
                                            $('.store-list span').click(function() {
                                                var urls = $(this).attr('data-url');
                                                $('.wrapcontact').addClass('d-none');
                                                $('.pagebody').removeClass('d-none');
                                                $('.pagebody iframe').attr('src', urls);
                                            });



                                            /*Theo thành phố*/
                                            var citytarget = '';

                                            $('.group-city select').on('change', function(e) {


                                                var optionSelected = $(
                                                    "option:selected", this);
                                                var valueSelected = this.value;
                                                citytarget = this.value;
                                                if (valueSelected != 'ALL') {
                                                    $('.store-list').addClass('d-none');
                                                    $('.store-list').each(function() {
                                                        if (valueSelected === $(
                                                                this).attr(
                                                                'data-local')) {
                                                            $(this).removeClass(
                                                                'd-none');
                                                        }
                                                    });
                                                    $('#district').removeAttr(
                                                        'disabled');
                                                    showDistrict();
                                                    removeDuplicate3();
                                                } else {
                                                    $('#district').attr('disabled',
                                                        'disabled');
                                                    $('.store-list').removeClass(
                                                        'd-none');
                                                    $('.group-district select').html(
                                                        '<option value="ALL">Chọn quận/huyện</option>'
                                                    );

                                                }

                                            });


                                            /*Theo quận huyện*/
                                            $('.group-district select').on('change', function(
                                                e) {
                                                var oSelected = $("option:selected",
                                                    this);
                                                var oSelectedCity = $("option:selected",
                                                    '.group-city select');
                                                var oSelectedProduct = $(
                                                    "option:selected",
                                                    '.group-product select');
                                                var oSelectedStore = $(
                                                    "option:selected",
                                                    '.group-store select');
                                                $(this).attr("selected", "selected");
                                                var valSelected = oSelected.data(
                                                    'district');
                                                var valueSelected = oSelected.val();
                                                var valCity = oSelected.data('local');
                                                var valProduct = oSelected.data(
                                                    'product');
                                                var valStore = oSelected.data('store');
                                                var valSelectedProduct = oSelectedCity
                                                    .data('product');
                                                var valSelectedCity = oSelectedCity
                                                    .val();
                                                var valSelectedStore = oSelectedStore
                                                    .val();

                                                if (valueSelected != 'ALL') {
                                                    $('.store-list').addClass('d-none');

                                                    $('.store-list').each(function() {
                                                        console.log('test' +
                                                            valCity)
                                                        if (valSelected === $(
                                                                this).attr(
                                                                'data-district'
                                                            ) && valCity ===
                                                            $(this).attr(
                                                                'data-local')) {
                                                            $(this).removeClass(
                                                                'd-none');
                                                        }
                                                    });
                                                    $('#district').removeAttr(
                                                        'disabled');
                                                } else {
                                                    console.log('check' +
                                                        valSelectedCity);
                                                    $('.store-list').each(function() {
                                                        if (valSelectedCity ===
                                                            $(this).attr(
                                                                'data-local')) {
                                                            $(this).removeClass(
                                                                'd-none');
                                                        }
                                                    });
                                                }
                                            });

                                            function showlocation(local) {
                                                var cityString = "";
                                                dataFix.forEach(function(data) {
                                                    let datasdt = data.sdt.toString();
                                                    let result = datasdt.replace('#',
                                                        '');
                                                    cityString += '<div data-local="' +
                                                        data.city +
                                                        '" data-district="' + data
                                                        .district +
                                                        '" class="store-list">' +
                                                        '<span class="name-cuahang">' +
                                                        data.name + '</span>' +
                                                        '<span class="store-name"><b>Địa chỉ:</b> ' +
                                                        data.address + '</span>' +
                                                        '</div>	';
                                                })
                                                $('.info-store').html(cityString);
                                            }


                                            function showDistrict(local) {
                                                var district = "";
                                                var citys = citytarget;
                                                dataFix.forEach(function(data) {

                                                    if (data.city === citys) {

                                                        district +=
                                                            '<option data-local="' +
                                                            data.city +
                                                            '"data-district="' + data
                                                            .district + '" value="' +
                                                            data.city +
                                                            '" class="district-list">' +
                                                            '<span class="district-name">' +
                                                            data.district + '</span>' +
                                                            '</option>';
                                                    }
                                                })
                                                $('#district').html(
                                                    '<option value="ALL">Chọn quận/huyện</option>' +
                                                    district);
                                            }

                                            function removeDuplicate() {
                                                var map = {};
                                                $('#product option').each(function() {
                                                    if (map[$(this).attr(
                                                            'data-product')]) {
                                                        $(this).remove()
                                                    }
                                                    map[$(this).attr('data-product')] =
                                                        true;
                                                })
                                            }

                                            function removeDuplicate2() {
                                                var map = {};
                                                $('#city option').each(function() {
                                                    if (map[$(this).attr(
                                                            'data-local')]) {
                                                        $(this).remove()
                                                    }
                                                    map[$(this).attr('data-local')] =
                                                        true;
                                                })
                                            }

                                            function removeDuplicate3() {
                                                var map = {};
                                                $('#district option').each(function() {
                                                    if (map[$(this).attr(
                                                            'data-district')]) {
                                                        $(this).remove()
                                                    }
                                                    map[$(this).attr('data-district')] =
                                                        true;
                                                })
                                            }

                                            function awe_convertVietnamese(str) {
                                                str = str.toUpperCase();
                                                str = str.replace(
                                                    /à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,
                                                    "a");
                                                str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,
                                                    "e");
                                                str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
                                                str = str.replace(
                                                    /ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,
                                                    "o");
                                                str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,
                                                    "u");
                                                str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
                                                str = str.replace(/đ/g, "d");
                                                str = str.replace(
                                                    /!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,
                                                    "-");
                                                str = str.replace(/-+-/g, "-");
                                                str = str.replace(/^\-+|\-+$/g, "");
                                                return str;
                                            }
                                        }
                                    });
                                });
                                </script>
                            </div>


                            <div class="col-12 col-md-6 col-lg-4 col-xl-12">


                                <div class="khuyen-mai">
                                    <h3 class="title">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z" />
                                            <path
                                                d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z" />
                                        </svg> Cam kết bán hàng
                                    </h3>
                                    <div class="content">
                                        <ul>


                                            <li><img width="20" height="20"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/camket_1.png?1719764721426"
                                                    alt="Hàng chính hãng. Nguồn gốc rõ ràng">
                                                Hàng chính hãng. Nguồn gốc rõ ràng
                                            </li>




                                            <li><img width="20" height="20"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/camket_2.png?1719764721426"
                                                    alt="Tặng máy nếu phát hiện máy sửa chữa">
                                                Tặng máy nếu phát hiện máy sửa chữa
                                            </li>




                                            <li><img width="20" height="20"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/camket_3.png?1719764721426"
                                                    alt="Giao hàng ngay (nội thành TPHCM)">
                                                Giao hàng ngay (nội thành TPHCM)
                                            </li>




                                            <li><img width="20" height="20"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/camket_4.png?1719764721426"
                                                    alt="Dùng thử 7 ngày miễn phí">
                                                Dùng thử 7 ngày miễn phí
                                            </li>







                                        </ul>
                                    </div>
                                </div>

                            </div>


                            <div class="col-12 col-md-6 col-lg-4 col-xl-12">

                                <div class="khuyen-mai">
                                    <h3 class="title">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z" />
                                        </svg>
                                        Danh sách khuyến mãi
                                    </h3>
                                    <div class="content">
                                        <ul>


                                            <li><img width="20" height="20"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/km_product1.png?1719764721426"
                                                    alt="Áp dụng Phiếu quà tặng/ Mã giảm giá theo sản phẩm.">Áp dụng
                                                Phiếu quà tặng/ Mã giảm giá theo sản phẩm.</li>



                                            <li><img width="20" height="20"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/km_product2.png?1719764721426"
                                                    alt="Giảm giá 10% khi mua từ 5 sản phẩm trở lên.">Giảm giá 10%
                                                khi mua từ 5 sản phẩm trở lên.</li>



                                            <li><img width="20" height="20"
                                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/km_product3.png?1719764721426"
                                                    alt="Tặng 100.000₫ mua hàng tại website thành viên Dola Phone, áp dụng khi mua Online tại Hồ Chí Minh và 1 số khu vực khác.">Tặng
                                                100.000₫ mua hàng tại website thành viên Dola Phone, áp dụng khi mua
                                                Online tại Hồ Chí Minh và 1 số khu vực khác.</li>

                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="mid-product">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 ">
                    <div class="block-background" style="    margin-bottom: 20px;">

                        <div class="product-tab e-tabs not-dqtab" id="tab-product">
                            <ul class="tabs tabs-title clearfix">

                                <li class="tab-link active" data-tab="#tab-1">
                                    <h3>Mô tả sản phẩm</h3>
                                </li>


                                <li class="tab-link" data-tab="#tab-2">
                                    <h3>Hướng dẫn mua hàng</h3>
                                </li>


                                <li class="tab-link" data-tab="#tab-3">
                                    <h3>Đánh giá sản phẩm</h3>
                                </li>

                            </ul>
                            <div class="tab-float">

                                <div id="tab-1" class="tab-content active content_extab">
                                    <div class="rte product_getcontent">

                                        <div class="ba-text-fpt">
                                            <?php echo htmlspecialchars_decode($check['noi_dung']); ?>
                                            <p>---</p>
                                            <table border="0" cellpadding="5px" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td width="40%">RAM</td>
                                                        <td><?php echo htmlspecialchars($check['ram']); ?>GB</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="40%">Kích thước màn hình</td>
                                                        <td><?php echo htmlspecialchars($check['man_hinh']); ?>"</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="40%">Tần số quét</td>
                                                        <td><?php echo htmlspecialchars($check['tan_so']); ?>Hz</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="40%">Độ phân giải</td>
                                                        <td><?php echo htmlspecialchars($check['do_phan_giai']); ?>
                                                            Pixels</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="40%">Bộ nhớ trong</td>
                                                        <td><?php echo htmlspecialchars($check['bo_nho']); ?>GB</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="40%">Độ phân giải camera sau</td>
                                                        <td><?php echo htmlspecialchars($check['camera_sau']); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="40%">Độ phân giải camera trước</td>
                                                        <td><?php echo htmlspecialchars($check['camera_truoc']); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="40%">Hệ điều hành</td>
                                                        <td><?php echo htmlspecialchars($check['he_dieu_hanh']); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="40%">Chip xử lý</td>
                                                        <td><?php echo htmlspecialchars($check['chip']); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="40%">Dung lượng pin</td>
                                                        <td><?php echo htmlspecialchars($check['dung_luong_pin']); ?>
                                                            mAh</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="40%">Loại pin</td>
                                                        <td><?php echo htmlspecialchars($check['pin']); ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="show-more d-none">
                                            <div class="btn btn-default btn--view-more see-more">
                                                <a href="javascript:void(0)" class="more-text see-more">Xem thêm</a>
                                                <a href="javascript:void(0)" class="less-text see-more">Thu gọn </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <div id="tab-2" class="tab-content content_extab">
                                    <div class="rte">

                                        <p><strong>Bước 1:</strong> Truy cập website và lựa chọn sản phẩm cần mua
                                        </p>
                                        <p><strong>Bước 2:</strong> Click và sản phẩm muốn mua, màn hình hiển thị ra
                                            pop up với các lựa chọn sau</p>
                                        <p>Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để lựa
                                            chọn thêm sản phẩm vào giỏ hàng</p>
                                        <p>Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ hàng</p>
                                        <p>Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm vào:
                                            Đặt hàng và thanh toán</p>
                                        <p><strong>Bước 3:</strong> Lựa chọn thông tin tài khoản thanh toán</p>
                                        <p>Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là email và
                                            mật khẩu vào mục đã có tài khoản trên hệ thống</p>
                                        <p>Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền các
                                            thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài khoản bạn sẽ
                                            dễ dàng theo dõi được đơn hàng của mình</p>
                                        <p>Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột vào mục
                                            đặt hàng không cần tài khoản</p>
                                        <p><strong>Bước 4:</strong> Điền các thông tin của bạn để nhận đơn hàng, lựa
                                            chọn hình thức thanh toán và vận chuyển cho đơn hàng của mình</p>
                                        <p><strong>Bước 5:</strong> Xem lại thông tin đặt hàng, điền chú thích và
                                            gửi đơn hàng</p>
                                        <p>Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách gọi
                                            điện lại để xác nhận lại đơn hàng và địa chỉ của bạn.</p>
                                        <p>Trân trọng cảm ơn.</p>

                                    </div>
                                </div>


                                <div id="tab-3" class="tab-content content_extab">
                                    <div class="rte">
                                        <div class="alert alert-info alert-dismissible margin-top-15 section"
                                            role="alert" style="max-width: 100% !important;">
                                            Bạn tiến hàng mua và cài app <a style="color: red" target="_blank"
                                                href="https://apps.sapo.vn/danh-gia-san-pham-v2"
                                                title="Đánh giá sản phẩm">Đánh giá sản phẩm</a> mới sử dụng được
                                            tính năng này!
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row row-fix">


                        <div class="col-12 col-md-12 col-lg-12 col-fix">
                            <div class="thong-so block-background">
                                <h3 class="title">

                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                        </svg>
                                        Thông số kỹ thuật
                                    </span>
                                </h3>
                                <div class="content">


                                    <table border="0" cellpadding="5px" width="100%">
                                        <tbody>
                                            <tr>
                                                <td width="40%">RAM</td>
                                                <td><?php echo htmlspecialchars($check['ram']); ?>GB</td>
                                            </tr>
                                            <tr>
                                                <td width="40%">Kích thước màn hình</td>
                                                <td><?php echo htmlspecialchars($check['man_hinh']); ?>"</td>
                                            </tr>
                                            <tr>
                                                <td width="40%">Tần số quét</td>
                                                <td><?php echo htmlspecialchars($check['tan_so']); ?>Hz</td>
                                            </tr>
                                            <tr>
                                                <td width="40%">Độ phân giải</td>
                                                <td><?php echo htmlspecialchars($check['do_phan_giai']); ?>
                                                    Pixels</td>
                                            </tr>
                                            <tr>
                                                <td width="40%">Bộ nhớ trong</td>
                                                <td><?php echo htmlspecialchars($check['bo_nho']); ?>GB</td>
                                            </tr>
                                            <tr>
                                                <td width="40%">Độ phân giải camera sau</td>
                                                <td><?php echo htmlspecialchars($check['camera_sau']); ?></td>
                                            </tr>
                                            <tr>
                                                <td width="40%">Độ phân giải camera trước</td>
                                                <td><?php echo htmlspecialchars($check['camera_truoc']); ?></td>
                                            </tr>
                                            <tr>
                                                <td width="40%">Hệ điều hành</td>
                                                <td><?php echo htmlspecialchars($check['he_dieu_hanh']); ?></td>
                                            </tr>
                                            <tr>
                                                <td width="40%">Chip xử lý</td>
                                                <td><?php echo htmlspecialchars($check['chip']); ?></td>
                                            </tr>
                                            <tr>
                                                <td width="40%">Dung lượng pin</td>
                                                <td><?php echo htmlspecialchars($check['dung_luong_pin']); ?>
                                                    mAh</td>
                                            </tr>
                                            <tr>
                                                <td width="40%">Loại pin</td>
                                                <td><?php echo htmlspecialchars($check['pin']); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center no-padding">
                                    <a class="button-thongso see-more" href="javascript:void(0)" title="Xem tất cả">Xem
                                        tất cả</a>
                                </div>

                            </div>
                        </div>



                        <div class="col-12 col-md-12 col-lg-12 col-fix">
                            <div class="product-like block-background">
                                <h3 class="title">

                                    <a class="title-name" href="san-pham-noi-bat" title="Có thể bạn thích">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        Có thể bạn thích
                                    </a>

                                </h3>

                                <div class="product1-swiper swiper-container p-5">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <form action="/cart/add" method="post" class="variants product-action"
                                                data-cart-form data-id="product-actions-33489884"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail">
                                                    <a class="image_thumb scale_hover"
                                                        href="/iphone-14-128gb-chinh-hang-vn-a"
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


                                                    <input class="hidden" type="hidden" name="variantId"
                                                        value="102972999" />
                                                    <div class="action">
                                                        <button class="btn-cart btn-views" title="Xem chi tiết"
                                                            type="button"
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
                                                            title="iPhone 14 128GB - Chính hãng VN/A">iPhone 14
                                                            128GB - Chính hãng VN/A</a></h3>
                                                    <div class="price-box">
                                                        18.490.000₫
                                                        <span class="compare-price">24.990.000₫</span>

                                                    </div>


                                                    <div class="pro-promo ">
                                                        <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple
                                                            12 tháng</p>
                                                    </div>

                                                    <div class="wishlish-compare">

                                                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                            data-wish="iphone-14-128gb-chinh-hang-vn-a" tabindex="0"
                                                            title="Thêm vào yêu thích">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 512 512">
                                                                <path
                                                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                                </path>
                                                            </svg>
                                                            Thích
                                                        </a>


                                                        <a href="javascript:void(0)" class="setCompare"
                                                            data-compare="iphone-14-128gb-chinh-hang-vn-a"
                                                            data-type="Điện thoại" tabindex="0"
                                                            title="Thêm vào so sánh">

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

                                </div>
                                <div class="text-center no-padding">
                                    <a class="see-more" title="Xem toàn bộ sản phẩm" href="san-pham-noi-bat">Xem
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
        </div>
    </div>
    <div class="productRelate product-lq">
        <div class="container ">
            <div class="block-product block-background">
                <h3 class="title-index">
                    <a class="title-name" href="/san-pham-noi-bat" title="Sản phẩm liên quan">Sản phẩm liên quan
                    </a>


                </h3>
                <div class="product-relate-swiper swiper-container p-5">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide swiper-slide-pro">
                            <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                data-id="product-actions-33489884" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover" href="/iphone-14-128gb-chinh-hang-vn-a"
                                        title="iPhone 14 128GB - Chính hãng VN/A">
                                        <img width="234" height="234" class="lazyload image1"
                                            src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/502/883/products/230623042710-iphone-14-128g-blue.png?v=1700192127930"
                                            alt="iPhone 14 128GB - Chính hãng VN/A">


                                    </a>
                                    <div class="tag-km">



                                        <span style="background: #d70018"><img alt="Nổi bật" width="60" height="60"
                                                class="lazyload"
                                                src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/lazy.png?1719764721426"
                                                data-src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/title_image_2_tag.png?1719764721426">
                                            Nổi bật</span>



                                        <span style="background: #f3bd01"><img alt="Bán chạy" width="60" height="60"
                                                class="lazyload"
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
                                            title="iPhone 14 128GB - Chính hãng VN/A">iPhone 14 128GB - Chính hãng
                                            VN/A</a></h3>
                                    <div class="price-box">
                                        18.490.000₫
                                        <span class="compare-price">24.990.000₫</span>

                                    </div>


                                    <div class="pro-promo ">
                                        <p class="line-clamp line-clamp-2">Bảo hành chính hãng Apple 12 tháng</p>
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
                                            data-compare="iphone-14-128gb-chinh-hang-vn-a" data-type="Điện thoại"
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
                </div>
                <div class="text-center no-padding">
                    <a class="see-more" title="Xem toàn bộ sản phẩm" href="/san-pham-noi-bat">Xem toàn bộ sản phẩm
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>




    <div class="productRelate productcompareprice">

    </div>

    <script>
    $(document).ready(function($) {

        var dfprice = '32.790.000₫';
        var pricefirst = '31790000';
        var totalmax = '33790000';
        var researchurl = '/search?query=price_min:(>' + pricefirst + ')%20AND%20price_max:(<=' + totalmax +
            ')&view=productsame';

        $.ajax({
            type: 'GET',
            url: researchurl,
            success: function(data) {
                if (data && data.trim() === '') {} else {
                    setTimeout(function() {
                        $('.productcompareprice').html(data);
                        $('.product_sameprice_title_detail span').html(dfprice);
                        $('.btnxemngay').attr('href', '/search?query=price_min:(>' +
                            pricefirst + ')%20AND%20price_max:(<=' + totalmax + ')');
                    }, 500);
                    $('.productcompareprice').removeClass('d-none');

                }


            }
        });

    });
    </script>



    <div class="section-recenview-product productRelate">
        <div class="container ">
            <div class="block-product block-background">
                <h3 class="title-index">

                    <span class="title-name">Sản phẩm đã xem</span>
                </h3>
                <div class="products product_related recent-viewed  swiper-container p-5">
                    <div class="swiper-wrapper">
                    </div>
                    <div class="swiper-button-next">

                    </div>
                    <div class="swiper-button-prev">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    if (localStorage.last_viewed_products != undefined) {
        jQuery('.recent-page-viewed').removeClass('d-none');
        var last_viewd_pro_array = JSON.parse(localStorage.last_viewed_products);
        var recentview_promises = [];
        var size_pro_review = last_viewd_pro_array.length;
        if (size_pro_review >= 14) {
            size_pro_review = 14;
        } else {
            size_pro_review = last_viewd_pro_array.length;
        }
        if (size_pro_review < 1) {
            jQuery('.recent-page-viewed').addClass('d-none');
        } else {
            jQuery('.recent-page-viewed').removeClass('d-none');
        }
        if (size_pro_review > 0) {
            for (i = 0; i < size_pro_review; i++) {
                var alias_product = last_viewd_pro_array[i];
                if (!!alias_product.alias) {
                    var promise = new Promise(function(resolve, reject) {
                        $.ajax({
                            url: '/' + alias_product.alias + '?view=viewed',
                            success: function(product) {
                                resolve(product);

                                $(document).ready(function() {

                                    var modal = $('.quickview-product');
                                    var btn = $('.quick-view');
                                    var span = $('.quickview-close');
                                    favoriBean.Wishlist.wishlistProduct();
                                    btn.click(function() {
                                        modal.show();
                                    });

                                    span.click(function() {
                                        modal.hide();
                                    });

                                    $(window).on('click', function(e) {
                                        if ($(e.target).is('.modal')) {
                                            modal.hide();
                                        }
                                    });
                                });
                            },
                            error: function(err) {
                                resolve('');
                            }
                        })
                    });
                    recentview_promises.push(promise);
                }
            }
            Promise.all(recentview_promises).then(function(values) {
                    $.each(values, function(i, v) {
                        if (v != '') {
                            $('.recent-viewed .swiper-wrapper').append(v);
                        } else {
                            last_viewd_pro_array.splice(i, 1);
                        }
                    });
                    console.log('listLocalStorage', last_viewd_pro_array);

                    var swiper = new Swiper('.recent-viewed', {
                        slidesPerColumnFill: 'row',
                        direction: 'horizontal',
                        slidesPerView: 4,
                        spaceBetween: 20,
                        slidesPerGroup: 1,
                        slidesPerColumn: 1,

                        navigation: {
                            nextEl: '.section-recenview-product .swiper-button-next',
                            prevEl: '.section-recenview-product .swiper-button-prev',
                        },
                        breakpoints: {
                            280: {
                                slidesPerView: 2,
                                spaceBetween: 15
                            },
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 15
                            },
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 15
                            },
                            992: {
                                slidesPerView: 4,
                                spaceBetween: 15
                            },
                            1024: {
                                slidesPerView: 5,
                                spaceBetween: 20
                            }
                        }
                    });
                    awe_lazyloadImage();


                    localStorage.setItem('last_viewed_products', JSON.stringify(last_viewd_pro_array));
                    awe_lazyloadImage();

                })
                .catch(function(productId) {
                    const listLocalStorage = (JSON.parse(localStorage.getItem('last_viewed_products')));
                    for (let i = 0; i < listLocalStorage.length; ++i) {
                        if (listLocalStorage[i].id == productId) {
                            listLocalStorage.splice(i, 1);
                        }
                    }
                    console.log('listLocalStorage', listLocalStorage);
                    localStorage.setItem('last_viewed_products', JSON.stringify(listLocalStorage));
                });

        }
    } else {
        jQuery('.section-recenview-product').addClass('d-none');
    }
    </script>


    <div class="thong-so-popup">
        <div class="thong-so">
            <h3 class="title">

                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path
                            d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                    </svg>
                    Thông số kỹ thuật
                </span>
            </h3>
            <div class="content">


                <table border="0" cellpadding="5px" width="100%">
                    <tbody>
                        <tr>
                            <td width="40%">RAM</td>
                            <td><?php echo htmlspecialchars($check['ram']); ?>GB</td>
                        </tr>
                        <tr>
                            <td width="40%">Kích thước màn hình</td>
                            <td><?php echo htmlspecialchars($check['man_hinh']); ?>"</td>
                        </tr>
                        <tr>
                            <td width="40%">Tần số quét</td>
                            <td><?php echo htmlspecialchars($check['tan_so']); ?>Hz</td>
                        </tr>
                        <tr>
                            <td width="40%">Độ phân giải</td>
                            <td><?php echo htmlspecialchars($check['do_phan_giai']); ?>
                                Pixels</td>
                        </tr>
                        <tr>
                            <td width="40%">Bộ nhớ trong</td>
                            <td><?php echo htmlspecialchars($check['bo_nho']); ?>GB</td>
                        </tr>
                        <tr>
                            <td width="40%">Độ phân giải camera sau</td>
                            <td><?php echo htmlspecialchars($check['camera_sau']); ?></td>
                        </tr>
                        <tr>
                            <td width="40%">Độ phân giải camera trước</td>
                            <td><?php echo htmlspecialchars($check['camera_truoc']); ?></td>
                        </tr>
                        <tr>
                            <td width="40%">Hệ điều hành</td>
                            <td><?php echo htmlspecialchars($check['he_dieu_hanh']); ?></td>
                        </tr>
                        <tr>
                            <td width="40%">Chip xử lý</td>
                            <td><?php echo htmlspecialchars($check['chip']); ?></td>
                        </tr>
                        <tr>
                            <td width="40%">Dung lượng pin</td>
                            <td><?php echo htmlspecialchars($check['dung_luong_pin']); ?>
                                mAh</td>
                        </tr>
                        <tr>
                            <td width="40%">Loại pin</td>
                            <td><?php echo htmlspecialchars($check['pin']); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $(document).on('click', '.btn-buyNow', function() {
            var _variantID = $('#product-selectors').val();
            var _Qty = parseInt($('#qtym').val());;
            if (_variantID == null) {
                _variantID = $('#one_variant').val();
            }
            jQuery.ajax({
                type: "POST",
                url: "/cart/add.js",
                data: "quantity=" + _Qty + "&VariantId=" + _variantID,
                dataType: "json",
                success: function(e) {
                    window.location = '/checkout';
                },
                error: function(e, t) {
                    Bizweb.onError(e, t);
                }
            });
        })
    });

    function activeTab(obj) {
        $('.product-tab>ul>li').removeClass('active');
        $(obj).addClass('active');
        var id = $(obj).attr('data-tab');
        $('.tab-content').removeClass('active');
        $(id).addClass('active');
    }
    $('.button-thongso').click(function() {
        $('.thong-so-popup, .backdrop__body-backdrop___1rvky').addClass('active');

    });
    $('.product-tab>ul>li').click(function() {
        activeTab(this);
        return false;
    });
    var swiperflash = new Swiper('.product1-swiper', {
        slidesPerView: 3,
        loop: false,
        grabCursor: true,
        roundLengths: true,
        slideToClickedSlide: false,
        spaceBetween: 20,
        autoplay: false,
        slidesPerColumn: 2,
        slidesPerColumnFill: "row",
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
                spaceBetween: 20
            },
            767: {
                slidesPerView: 3,
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

    var variantsize = false;
    var ww = $(window).width();


    jQuery('.swatch :radio').change(function() {
        var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
        var optionValue = jQuery(this).val();
        jQuery(this)
            .closest('form')
            .find('.single-option-selector')
            .eq(optionIndex)
            .val(optionValue)
            .trigger('change');
        $(this).closest('.swatch').find('.header .value-roperties').html(optionValue);
    });

    setTimeout(function() {
        $('.swatch .swatch-element').each(function() {
            $(this).closest('.swatch').find('.header .value-roperties').html($(this).closest(
                '.swatch').find('input:checked').val());
        });
    }, 500);
    setTimeout(function() {
        var ch = $('.product_getcontent').height(),
            smore = $('.show-more');
        console.log(ch);
        if (ch > 1451) {
            $('.ba-text-fpt').addClass('has-height');
            smore.removeClass('d-none');
        }
    }, 200);
    $('.btn--view-more').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.product_getcontent').toggleClass('expanded');
        $('html, body').animate({
            scrollTop: $('.product_getcontent').offset().top - 110
        }, 'slow');
        $(this).toggleClass('active');

    });




    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 5,
        slidesPerView: 20,
        freeMode: true,
        lazy: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        hashNavigation: true,
        slideToClickedSlide: true,
        breakpoints: {
            300: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            500: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            1199: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
        },
        navigation: {
            nextEl: '.gallery-thumbs .swiper-button-next',
            prevEl: '.gallery-thumbs .swiper-button-prev',
        },
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 0,
        lazy: true,
        hashNavigation: true,
        effect: 'fade',
        thumbs: {
            swiper: galleryThumbs
        }
    });
    var swiper = new Swiper('.product-relate-swiper', {
        slidesPerColumnFill: 'row',
        direction: 'horizontal',
        slidesPerView: 4,
        spaceBetween: 20,
        slidesPerGroup: 1,
        slidesPerColumn: 1,
        navigation: {
            nextEl: '.product-relate-swiper .swiper-button-next',
            prevEl: '.product-relate-swiper .swiper-button-prev',
        },
        breakpoints: {
            280: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 15
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 20
            }
        }
    });

    $(document).ready(function() {
        $("#lightgallery").lightGallery({
            thumbnail: false
        });
    });
    </script>
    <script>
    $(document).on('click', '.js-copy', function(e) {
        e.preventDefault();
        var copyText = $(this).attr('data-copy');
        var copyTextarea = document.createElement("textarea");
        copyTextarea.textContent = copyText;
        copyTextarea.style.position = "fixed";
        document.body.appendChild(copyTextarea);
        copyTextarea.select();
        document.execCommand("copy");
        document.body.removeChild(copyTextarea);
        var cur_text = $(this).text();
        var $cur_btn = $(this);
        $(this).addClass("iscopied");
        $(this).text("Đã lưu");
        setTimeout(function() {
            $cur_btn.removeClass("iscopied");
            $cur_btn.text(cur_text);
        }, 1500)
    })
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
                        undefined && $.ajaxChimp.translations && $.ajaxChimp.translations[
                            settings.language] && $.ajaxChimp.translations[settings
                            .language][$.ajaxChimp.responses[msg]]) {
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
                if (settings.language !== "en" && $.ajaxChimp.translations && $.ajaxChimp
                    .translations[settings.language] && $.ajaxChimp.translations[settings
                        .language]["submit"]) {
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
<?php home("foot")
?>