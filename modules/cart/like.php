<?php 
if (!defined("_STATUS")) {
    echo "Truy cập không hợp lệ...";
    die();
}
$data = [
    "title"=> "Sản phẩm đã thích"
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

                <li><strong><span>Sản phẩm yêu thích</span></strong></li>

            </ul>
        </div>
    </section>
    <section class="page">
        <div class="container container--wishlist">

            <div class="content-page rte ">
                <h1 class="title-page d-none">

                    <span>Sản phẩm yêu thích</span>
                </h1>

                <div id="list-favorite">
                    <div class="block-background">
                        <div class="list-favorite-right" data-type="wishlist">
                            <div class="list-favorite-main">
                                <div class="list-favorite-list row row-fix">


                                    <?php   
                                if (isset($_SESSION['yeuthich']) && is_array($_SESSION['yeuthich'])) {
                                    foreach ($_SESSION['yeuthich'] as $table => $products) {
                                        if (is_array($products) && !empty($products)) {
                                          
                                            $table = preg_replace('/[^a-zA-Z0-9_]/', '', $table);
                                            $ids = array_map('intval', $products); 
                                            $idList = implode(',', $ids); 
                                            
                                            $sql = "SELECT * FROM `$table` WHERE id IN ($idList)";
                                            $check = lay_table($sql);
                                             if (!is_array($check)) {
                $check = []; 
            }
                                            if (!$check) {
                                                echo '<div style="margin-top: 20px;" class="alert alert-warning alert-warning2 alert-dismissible margin-top-15 section" role="alert">
                                                        Không có sản phẩm nào trong danh mục này!
                                                      </div>';
                                            } else{
                                                foreach ($check as $item) { 
                                                    
                                                    ?>
                                    <div class="col-6 col-md-4 col-xl-20 col-fix">
                                        <div class="item_product_main">
                                            <form action="" method="post" class="variants product-action"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail">
                                                    <a class="image_thumb scale_hover"
                                                        href="?modules=view&action=view&loai=<?php echo $table;?>&id=<?php echo $item['id'];?>"
                                                        title="<?php echo $item['ten_san_pham']; ?>">
                                                        <img width="234" height="234" class="lazyload image1 loaded"
                                                            src="<?php echo $item['img']; ?>"
                                                            alt="<?php echo $item['ten_san_pham']; ?>">
                                                    </a>
                                                    <div class="action">
                                                        <button class="btn-cart btn-views" style="color: #fff;"
                                                            title="Xem" type="button"
                                                            onclick="window.location.href='?modules=view&action=view&loai=<?php echo $table;?>&id=<?php echo $item['id'];?>'">Xem</button>
                                                    </div>
                                                </div>
                                                <span class="smart">Giảm <?php echo $item['giam'];?>%</span>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="?modules=view&action=view&loai=<?php echo $table;?>&id=<?php echo $item['id'];?>"
                                                            title="<?php echo $item['ten_san_pham']; ?>">
                                                            <?php echo $item['ten_san_pham'];?>
                                                        </a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <?php echo number_format($item['gia_km'], 0, ',', '.'); ?>₫
                                                        <span
                                                            class="compare-price"><?php echo number_format($item['gia_goc'], 0, ',', '.'); ?>₫</span>
                                                    </div>
                                                    <div class="pro-promo ">
                                                        <p class="line-clamp line-clamp-2">
                                                            <?php echo $item['bao_hanh']; ?></p>
                                                    </div>
                                                    <div class="wishlish-compare">

                                                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                            data-wish="<?= $item['id']; ?>" tabindex="0"
                                                            data-item="<?php if($item['loai'] == 'Điện thoại'){ ?>iphone<?php }else{?>ipad<?php } ?>"
                                                            title="Thêm vào yêu thích">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 512 512">
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
                                           
                                        }
                                    }
                                }
?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<?php home("foot")
?>