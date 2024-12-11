<?php 
if (!defined("_STATUS")) {
    echo "Truy cập không hợp lệ...";
    die();
}
$data = [
    "title"=> "Giỏ hàng"
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

                <li><strong><span>Giỏ hàng</span></strong></li>

            </ul>
        </div>
    </section>

    <section class="main-cart-page main-container col1-layout" style="width: 1000px;">
        <div class="main container cartpcstyle">
            <div class="wrap_background_aside margin-bottom-40" style="display: inline-block;   width: 200%;">
                <div class="header-cart d-none">
                    <div class="title-block-page">
                        <h1 class="title_cart">
                            <span>Giỏ hàng của bạn</span>
                        </h1>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-8 col-lg-8 col-12 col-cart-left">
                        <div class="cart-page d-xl-block d-none">
                            <div class="drawer__inner">
                                <div class="CartPageContainer">


                                    <div class="cart-header-info">
                                        <div>Thông tin sản phẩm</div>
                                        <div>Đơn giá</div>
                                        <div>Số lượng</div>
                                        <div>Thành tiền</div>
                                    </div>
                                    <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">

                                        <?php    

if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    $totalPrice = 0; // Biến lưu tổng tiền
    foreach ($_SESSION['cart'] as $table => $products) {
        if (is_array($products) && !empty($products)) {
            $table = preg_replace('/[^a-zA-Z0-9_]/', '', $table);

            foreach ($products as $key => $product) {
                $id = $product['id'];
                $quantity = $product['quantity'];
                $color = $product['color'];

                // Truy vấn kiểm tra (nếu cần thiết)
                $sql = "SELECT * FROM `$table` WHERE id = $id";
                $check = lay_table($sql);
                if (!is_array($check)) {
                    $check = [];
                }

                if (!$check) {
                    echo '<div style="margin-top: 20px;" class="alert alert-warning alert-warning2 alert-dismissible margin-top-15 section" role="alert">
                            Không có sản phẩm nào trong danh mục này!
                          </div>';
                } else {
                    foreach ($check as $item) { 
                        $price = $item['gia_km'];
                        $subtotal = $price * $quantity; // Tính tiền tạm
                        $totalPrice += $subtotal; // Cộng tổng tiền
?>
                                        <div class="ajaxcart__row">
                                            <div class="ajaxcart__product cart_product" data-key="<?php echo $key; ?>"
                                                data-item-type="<?php echo $table; ?>"
                                                data-color="<?php echo htmlspecialchars($color); ?>">
                                                <a href="?modules=view&action=view&loai=<?php echo $table;?>&id=<?php echo $id;?>"
                                                    class="ajaxcart__product-image cart_image"
                                                    title="<?php echo $item['ten_san_pham']; ?>">
                                                    <img src="<?php echo $item['img']; ?>"
                                                        alt="<?php echo $item['ten_san_pham']; ?>">
                                                </a>
                                                <div class="grid__item cart_info">
                                                    <div class="ajaxcart__product-name-wrapper cart_name">
                                                        <a href="?modules=view&action=view&loai=<?php echo $table;?>&id=<?php echo $id;?>"
                                                            class="ajaxcart__product-name h4"
                                                            title="<?php echo $item['ten_san_pham']; ?>">
                                                            <?php echo $item['ten_san_pham']; ?>
                                                        </a>
                                                        <span class="ajaxcart__product-meta variant-title">
                                                            Màu: <?php echo htmlspecialchars($color); ?>
                                                        </span>
                                                    </div>
                                                    <div class="grid__item one-half text-right cart_prices"
                                                        style="margin-left:15px;">
                                                        <span>
                                                            <?php echo number_format($item['gia_km'], 0, ',', '.'); ?>₫
                                                        </span>
                                                    </div>
                                                    <div class="grid__item one-half cart_select"
                                                        style="margin: 0px 120px;">
                                                        <div class="ajaxcart__qty input-group-btn">
                                                            <button type="button"
                                                                class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count"
                                                                data-id="<?php echo $id; ?>"
                                                                data-key="<?php echo $key; ?>"
                                                                data-price="<?php echo $price; ?>">
                                                                -
                                                            </button>
                                                            <input type="text" name="updates[]"
                                                                class="ajaxcart__qty-num number-sidebar" maxlength="3"
                                                                value="<?php echo $quantity; ?>" min="0"
                                                                data-id="<?php echo $id; ?>"
                                                                data-key="<?php echo $key; ?>" readonly>
                                                            <button type="button"
                                                                class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count"
                                                                data-id="<?php echo $id; ?>"
                                                                data-key="<?php echo $key; ?>"
                                                                data-price="<?php echo $price; ?>">
                                                                +
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="grid__item one-half text-right cart_prices" style="">
                                                        <span class="cart-price subtotal"
                                                            id="cart-subtotal-<?php echo $key; ?>">
                                                            <?php echo number_format($subtotal, 0, ',', '.'); ?>₫
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php 
                    } // Kết thúc foreach ($check)
                }
            } // Kết thúc foreach ($products)
        }
    }
}
?>
                                        <script>
                                        document.querySelectorAll('.ajaxcart__qty-adjust').forEach(button => {
                                            button.addEventListener('click', function() {
                                                const isPlus = this.classList.contains(
                                                    'ajaxcart__qty--plus');
                                                const key = this.getAttribute('data-key');
                                                const price = parseFloat(this.getAttribute(
                                                    'data-price'));
                                                const quantityInput = document.querySelector(
                                                    `input[data-key="${key}"]`);
                                                const subtotalElement = document.getElementById(
                                                    `cart-subtotal-${key}`);
                                                const totalPriceElement = document.getElementById(
                                                    'cart-total-price');

                                                let quantity = parseInt(quantityInput.value);
                                                quantity = isPlus ? quantity + 1 : Math.max(0,
                                                    quantity - 1
                                                ); // Ensure quantity doesn't go below 0
                                                quantityInput.value = quantity;

                                                const newSubtotal = quantity * price;
                                                subtotalElement.innerText = newSubtotal
                                                    .toLocaleString() + '₫';

                                                // Update total price
                                                let totalPrice = 0;
                                                document.querySelectorAll('.subtotal').forEach(
                                                    sub => {
                                                        totalPrice += parseFloat(sub.innerText
                                                            .replace(/\./g, '').replace('₫',
                                                                ''));
                                                    });
                                                totalPriceElement.innerText = totalPrice
                                                    .toLocaleString() + '₫';

                                                // If quantity is 0, remove the item
                                                if (quantity === 0) {
                                                    const productId = quantityInput.getAttribute(
                                                        'data-id');
                                                    const itemType = this.closest(
                                                        '.ajaxcart__product').getAttribute(
                                                        'data-item-type');
                                                    const color = this.closest('.ajaxcart__product')
                                                        .getAttribute('data-color');

                                                    fetch(
                                                            `?modules=add&action=cart&action2=remove_from_Cartlist&product_id=${productId}&item_type=${itemType}&color=${color}`
                                                        )
                                                        .then(response => response.json())
                                                        .then(data => {
                                                            if (data.success) {
                                                                console.log(
                                                                    'Product removed from cart.'
                                                                );
                                                                // Remove product from DOM
                                                                this.closest('.ajaxcart__row')
                                                                    .remove();
                                                            } else {
                                                                console.error(
                                                                    'Error removing product from cart.'
                                                                );
                                                            }
                                                        })
                                                        .catch(error => {
                                                            console.error('Error:', error);
                                                        });
                                                } else {
                                                    // Send AJAX request to update quantity in session
                                                    const productId = quantityInput.getAttribute(
                                                        'data-id');
                                                    const itemType = this.closest(
                                                        '.ajaxcart__product').getAttribute(
                                                        'data-item-type');
                                                    const color = this.closest('.ajaxcart__product')
                                                        .getAttribute('data-color');

                                                    fetch(
                                                            `?modules=add&action=cart&action2=update_quantity&product_id=${productId}&item_type=${itemType}&color=${color}&quantity=${quantity}`
                                                        )
                                                        .then(response => response.json())
                                                        .then(data => {
                                                            if (data.success) {
                                                                console.log(
                                                                    'Product quantity updated in session.'
                                                                );
                                                            } else {
                                                                console.error(
                                                                    'Error updating product quantity in session.'
                                                                );
                                                            }
                                                        })
                                                        .catch(error => {
                                                            console.error('Error:', error);
                                                        });
                                                }
                                            });
                                        });
                                        </script>



                                    </div>
                                    <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                                        <div class="row justify-content-center">
                                            <!-- Thêm class justify-content-center -->
                                            <div class="col-lg-4 col-12">
                                                <div class="ajaxcart__subtotal">
                                                    <div class="cart__subtotal cart-total">
                                                        <div class="cart__col-6">Tổng tiền:</div>
                                                        <div class="text-right cart__totle">
                                                            <span id="cart-total-price" class="total-price">
                                                                <?php echo number_format($totalPrice, 0, ',', '.'); ?>₫
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart__btn-proceed-checkout-dt">
                                                    <a href="?modules=view&action=pay">
                                                        <button
                                                            class="button btn btn-default cart__btn-proceed-checkout"
                                                            title="Thanh toán">Thanh
                                                            toán</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="cart-mobile-page d-block d-xl-none">
                            <div class="CartMobileContainer"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <script src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/sweetalert-min.js?1719764721426"></script>
    <link rel="preload" as="script"
        href="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/bootstrap-datepicker.js?1719764721426">
    <script src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/bootstrap-datepicker.js?1719764721426"
        type="text/javascript"></script>

    <script src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/cookie.js?1719764721426" type="text/javascript">
    </script>
</div>
<?php home("foot")
?>