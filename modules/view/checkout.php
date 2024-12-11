<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkoutData'])) {
    $checkoutData = json_decode($_POST['checkoutData'], true);

    if ($checkoutData) {
        $userInfo = $checkoutData['user_info'];
        $orderDetails = $checkoutData['order_details'];
        $tam_tinh = $userInfo['total_order'] - $userInfo['phi_ship'];

        $subject = 'Xin chào '.$userInfo['name'].', cảm ơn Anh/chị đã đặt hàng tại Dola Phone!';
$body = 'Xin chào '.$userInfo['name'].'<br><br>';
$body .= 'Cảm ơn Anh/chị đã đặt hàng tại Dola Phone!<br><br>';
$body .= 'Đơn hàng của Anh/chị đã được tiếp nhận, chúng tôi sẽ nhanh chóng liên hệ với Anh/chị.<br><br>';
$body .= '<strong>Thông tin mua hàng</strong><br>';
$body .= 'Địa chỉ nhận hàng:<br>';
$body .= $userInfo['name'].'<br>';
$body .= $userInfo['email'].'<br>';
$body .= $userInfo['phone'].'<br>';
$body .= $userInfo['name'].'<br>';
$body .= $userInfo['address'].'<br>';
$body .= $userInfo['phone'].'<br><br>';
$body .= '<strong>Phương thức thanh toán: </strong>'.$userInfo['payment_method'].'<br>';
$body .= '<strong>Phương thức vận chuyển:</strong> Giao hàng tận nơi<br><br>';
$body .= '<strong>Thông tin đơn hàng</strong><br>';
$body .= 'Mã đơn hàng: #1022<br>';
$body .= 'Ngày đặt hàng: '.date('Y-m-d H:i:s').'<br><br>';
foreach ($orderDetails as $detail) { 
    $gia = $detail['quantity'] * $detail['price'];
$body .= $detail['name'].'<br>';
$body .= 'SKU:<br>';
$body .= number_format($detail['price'], 0, ',', '.').' VND x '.$detail['quantity'].'<br>';
$body .= number_format($gia, 0, ',', '.').' VND<br>';
$body .=  '------------------------------------<br>';
}
$body .= 'Giảm giá: 0 VND<br>';
$body .= 'Giá trừ khuyến mãi: '.number_format($tam_tinh, 0, ',', '.').' VND<br>';
$body .= 'Phí vận chuyển: '.number_format($userInfo['phi_ship'], 0, ',', '.').' VND<br>';
$body .= '<strong>Thành tiền:</strong> '.number_format($userInfo['total_order'], 0, ',', '.').' VND<br><br>';
$body .= 'Để kiểm tra trạng thái đơn hàng, Anh/chị vui lòng: Đăng nhập vào tài khoản.<br><br>';
$body .= 'Nếu Anh/chị có bất kỳ câu hỏi nào, xin liên hệ với chúng tôi tại vietcod@gmail.com.<br><br>';
$body .= 'Trân trọng,<br>';
$body .= 'Ban quản trị cửa hàng Dola Phone.<br>';

$sucmail = sendMail($userInfo['email'], $subject, $body);
if(!$sucmail){
    echo "Gặp lỗi khi gửi mail!";
}
    } else {
        die("Dữ liệu không hợp lệ!");
    }
} else {
    die("Truy cập không hợp lệ!");
}
?>
<html class="thankyou-page">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Dola Phone - Cảm ơn">
    <title>Dola Phone - Cảm ơn</title>

    <script>
    (function() {
        function asyncLoad() {
            var urls = [] || [];
            for (var i = 0; i < urls.length; i++) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = urls[i];
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
        };
        window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad,
            false);
    })();
    </script>
    <link rel="shortcut icon"
        href="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/checkout_favicon.ico?1719764721426"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css">
    <link rel="stylesheet" href="https://dola-phone.mysapo.net/dist/css/checkout.vendor.min.css?v=4fcd86c">
    <link rel="stylesheet" href="https://dola-phone.mysapo.net/dist/css/checkout.min.css?v=f6401e8">
    <script src="//bizweb.dktcdn.net/assets/themes_support/libphonenumber-v3.2.30.min.js?1719764721426"></script>
    <script src="https://dola-phone.mysapo.net/dist/js/checkout.vendor.min.js?v=11006c9"></script>
    <script src="https://dola-phone.mysapo.net/dist/js/checkout.min.js?v=4cdb0f8"></script>
    <link href=<?php _WEBDIR?>"/templates/css/checkout.css" rel="stylesheet" type="text/css" media="all" />


    <script src="https://dola-phone.mysapo.net/dist/js/stats.min.js?v=96f2ff2"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>

</head>

<body data-no-turbolink="">

    <header class="banner">
        <div class="wrap">
            <div class="logo logo--center">

                <a href="/">
                    <img class="logo__image  logo__image--medium " alt="Dola Phone"
                        src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/checkout_logo.png?1719764721426">
                </a>

            </div>
        </div>
    </header>
    <div class="content">
        <form>
            <div class="wrap wrap--mobile-fluid">
                <main class="main main--nosidebar">
                    <header class="main__header">
                        <div class="logo logo--center">

                            <a href="/">
                                <img class="logo__image  logo__image--medium " alt="Dola Phone"
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/checkout_logo.png?1719764721426">
                            </a>

                        </div>
                    </header>
                    <div class="main__content">
                        <article class="row">
                            <div class="col col--primary">
                                <section class="section section--icon-heading">
                                    <div class="section__icon unprintable">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                                            <g fill="none" stroke="#8EC343" stroke-width="2">
                                                <circle cx="36" cy="36" r="35"
                                                    style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;">
                                                </circle>
                                                <path d="M17.417,37.778l9.93,9.909l25.444-25.393"
                                                    style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="thankyou-message-container">
                                        <h2 class="section__title">Cảm ơn bạn đã đặt hàng</h2>

                                        <p class="section__text">
                                            Một email xác nhận đã được gửi tới
                                            <?php  echo htmlspecialchars($userInfo['email']);?> <br>
                                            Xin vui lòng kiểm tra email của bạn
                                        </p>


                                    </div>
                                </section>
                            </div>
                            <div class="col col--secondary">
                                <aside class="order-summary order-summary--bordered order-summary--is-collapsed"
                                    id="order-summary">
                                    <div class="order-summary__header">
                                        <div class="order-summary__title">
                                            Đơn hàng #1026
                                            <span class="unprintable">(<?php echo getTotalQuantity(); ?>)</span>
                                        </div>
                                        <div class="order-summary__action hide-on-desktop unprintable">
                                            <a data-toggle="#order-summary"
                                                data-toggle-class="order-summary--is-collapsed" class="expandable">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                    </div>
                                    <div class="order-summary__sections">
                                        <div
                                            class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
                                            <table class="product-table">
                                                <tbody>
                                                    <?php
     foreach ($orderDetails as $detail) { 
        $gia = $detail['quantity'] * $detail['price'];
    ?>
                                                    <tr class="product">
                                                        <td class="product__image">
                                                            <div class="product-thumbnail">
                                                                <div class="product-thumbnail__wrapper">
                                                                    <img src="<?php echo htmlspecialchars($detail['img']) ; ?>"
                                                                        alt="" class="product-thumbnail__image">
                                                                </div>
                                                                <span
                                                                    class="product-thumbnail__quantity unprintable"><?php echo htmlspecialchars($detail['quantity']) ; ?></span>
                                                            </div>
                                                        </td>
                                                        <th class="product__description">
                                                            <span
                                                                class="product__description__name"><?php echo htmlspecialchars($detail['name']) ; ?></span>

                                                            <span
                                                                class="product__description__property"><?php echo htmlspecialchars($detail['color']) ; ?></span>



                                                        </th>
                                                        <td class="product__quantity printable-only">
                                                            x <?php echo htmlspecialchars($detail['quantity']) ; ?>
                                                        </td>
                                                        <td class="product__price">

                                                            <?php echo number_format($gia, 0, ',', '.'); ?>₫
                                                        </td>
                                                    </tr>
                                                    <?php     } ?>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="order-summary__section">
                                            <table class="total-line-table">
                                                <tbody class="total-line-table__tbody">



                                                    <tr class="total-line total-line--subtotal">
                                                        <th class="total-line__name">Tạm tính</th>
                                                        <td class="total-line__price">
                                                            <?php echo number_format(htmlspecialchars($tam_tinh), 0, ',', '.'); ?>₫
                                                        </td>
                                                    </tr>

                                                    <tr class="total-line total-line--shipping-fee">
                                                        <th class="total-line__name">Phí vận chuyển</th>
                                                        <td class="total-line__price">




                                                            <span>
                                                                <?php echo number_format(htmlspecialchars($userInfo['phi_ship']), 0, ',', '.'); ?>₫
                                                            </span>

                                                        </td>
                                                    </tr>



                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="order-summary__section">
                                            <table class="total-line-table">
                                                <tbody class="total-line-table__tbody">
                                                    <tr class="total-line payment-due">
                                                        <th class="total-line__name">
                                                            <span class="payment-due__label-total">Tổng cộng</span>
                                                        </th>
                                                        <td class="total-line__price">
                                                            <span class="payment-due__price">
                                                                <?php echo number_format(htmlspecialchars($userInfo['total_order']), 0, ',', '.'); ?>₫
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col col--primary">
                                <section class="section">
                                    <div class="section__content section__content--bordered">

                                        <div class="row">

                                            <div class="col col--md-two">
                                                <h2>Thông tin mua hàng</h2>
                                                <p><?php echo htmlspecialchars($userInfo['name']); ?></p>

                                                <p><?php echo htmlspecialchars($userInfo['email']); ?></p>


                                                <p><?php echo htmlspecialchars($userInfo['phone']); ?></p>

                                            </div>

                                            <div class="col col--md-two">
                                                <h2>Địa chỉ nhận hàng</h2>
                                                <p><?php echo htmlspecialchars($userInfo['name']); ?></p>
                                                <p><?php echo htmlspecialchars($userInfo['address']); ?></p>


                                                <p><?php echo htmlspecialchars($userInfo['phone']); ?></p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col--md-two">
                                                <h2>Phương thức thanh toán</h2>
                                                <p><?php echo htmlspecialchars($userInfo['payment_method']); ?></p>
                                            </div>
                                            <div class="col col--md-two">
                                                <h2>Phương thức vận chuyển</h2>
                                                <p>Giao hàng tận nơi</p>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                                <section class="section unprintable">
                                    <div class="field__input-btn-wrapper field__input-btn-wrapper--floating">
                                        <a href="/" class="btn btn--large">Tiếp tục mua hàng</a>

                                    </div>
                                </section>
                            </div>
                        </article>
                    </div>

                </main>
            </div>
        </form>
    </div>

    <div id="shimeji-workArea"
        style="position: fixed; background: transparent; z-index: 2147483643; width: 100vw; height: 100vh; left: 0px; top: 0px; transform: translate(0px, 0px); pointer-events: none;">
    </div>
</body>
<savior-host
    style="all: unset; position: absolute; top: 0; z-index: 99999999999999; display: block !important; overflow: unset">
</savior-host>
<en2vi-host class="corom-element" version="3"
    style="all: initial; position: absolute; top: 0; left: 0; right: 0; height: 0; margin: 0; text-align: left; z-index: 10000000000; pointer-events: none; border: none; display: block">
</en2vi-host>

</html>