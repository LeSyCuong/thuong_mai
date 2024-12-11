<?php
if (!defined("_STATUS")) {
    echo "Truy cập không hợp lệ...";
    die();
}
require_once(_WEBDIR . "/index.php");
$phi_ship = 40000;

if (isPost()) {
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        $email = $_POST['email'] ?? '';
        $name = $_POST['name'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';
        $tinh_thanh = $_POST['tinh_thanh'] ?? '';
        $note = $_POST['note'] ?? '';
        $payment_method = $_POST['van_chuyen'] ?? '';

        if (!isEmail($email)) {
            $msg['mail']['mailf'] = 'Email không đúng định dạng!';
        }
        if (!isPhone($phone)) {
            $msg['phone']['sdt'] = 'Số điện thoại không đúng định dạng!';
        }
        if($address == ''){
            $msg['address']['null'] = 'Địa chỉ không được để trống!';
        }
        $totalPrice = 0;
        $orderDetails = [];

        if (empty($msg)) {
        foreach ($_SESSION['cart'] as $table => $products) {
            if (is_array($products) && !empty($products)) {
                foreach ($products as $product) {
                    $id = $product['id'];
                    $quantity = $product['quantity'];
                    $color = $product['color'];

                    $sql = "SELECT * FROM $table WHERE id = :id";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([':id' => $id]);
                    $check = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    if ($check) {
                        foreach ($check as $item) {
                            $price = $item['gia_km'];
                            $tong_tien = $price * $quantity;
                            $totalPrice += $tong_tien;

                            $orderDetails[] = [
                                'name' => $item['ten_san_pham'],
                                'quantity' => $quantity,
                                'price' => $price,
                                'tong_tien' => $tong_tien,
                                'color' => $color,
                                'img' => $item['img'],
                            ];
                        }
                    }
                }
            }
        }

        $totalOrder = $totalPrice + $phi_ship;

        // Lưu đơn hàng
try{
        $sqlOrder = "INSERT INTO order_user (email, name, phone, address, tinh_thanh, note, phi_ship, payment_method, total_order, created_at) 
                     VALUES (:email, :name, :phone, :address, :tinh_thanh, :note, :phi_ship, :payment_method, :total_order, :created_at)";
        $stmtOrder = $conn->prepare($sqlOrder);
        $successOrder = $stmtOrder->execute([
            ':email' => $email,
            ':name' => $name,
            ':phone' => $phone,
            ':address' => $address,
            ':tinh_thanh' => $tinh_thanh,
            ':note' => $note,
            ':phi_ship' => $phi_ship,
            ':payment_method' => $payment_method,
            ':total_order' => $totalOrder,
            'created_at' => date('H:i:s d-m-Y')
        ]);

        if ($successOrder) {
            $orderId = $conn->lastInsertId(); // Lấy ID của đơn hàng vừa chèn
            $successDetails = true;

            //  Lưu sản phẩm oder
            foreach ($orderDetails as $detail) {
                $sqlDetail = "INSERT INTO order_sanpham (order_id, product_name, id_sp, loai, quantity, price, tong_tien, color, img, created_at) 
                              VALUES (:order_id, :product_name, :id_sp, :loai, :quantity, :price, :tong_tien, :color, :img, :created_at)";
                $stmtDetail = $conn->prepare($sqlDetail);
                if (!$stmtDetail->execute([
                    ':order_id' => $orderId,
                    ':product_name' => $detail['name'],
                    ':id_sp' => $id,
                    ':loai' => $table,
                    ':quantity' => $detail['quantity'],
                    ':price' => $detail['price'],
                    ':tong_tien' => $detail['tong_tien'],
                    ':color' => $detail['color'],
                    ':img' => $detail['img'],
                    'created_at' => date('H:i:s d-m-Y')
                ])) {
                    $successDetails = false;
                    break;
                }
            }

            if ($successDetails) {
           
                // Chuẩn bị dữ liệu để gửi
                $checkoutData = [
                    'user_info' => [
                        'email' => $email,
                        'name' => $name,
                        'phone' => $phone,
                        'address' => $address,
                        'tinh_thanh' => $tinh_thanh,
                        'note' => $note,
                        'phi_ship' => $phi_ship,
                        'payment_method' => $payment_method,
                        'total_order' => $totalOrder,
                    ],
                    'order_details' => $orderDetails,
                ];
            
                // Encode dữ liệu thành JSON để gửi
                $jsonData = json_encode($checkoutData);
            
                echo "<form id='checkoutForm' action='?modules=view&action=checkout' method='POST'>
                    <input type='hidden' name='checkoutData' value='" . htmlspecialchars($jsonData, ENT_QUOTES, 'UTF-8') . "'>
                </form>
                <script>
                    document.getElementById('checkoutForm').submit();
                </script>";
            
                unset($_SESSION['cart']);
            } else {
                echo "<script>
                    alert('Lưu sản phẩm đơn hàng thất bại. Vui lòng thử lại.');
                </script>";
            }
           
        } else {
            echo "<script>
                alert('Gửi đơn hàng thất bại. Vui lòng thử lại.');
            </script>";
        }
    } catch (Exception $e) {
        echo "Có lỗi xảy ra: " . $e->getMessage();
    }

    }
    } else {
        echo "<script>
            alert('Giỏ hàng rỗng!');
        </script>";
    }
}
?>
<html class="floating-labels" data-select2-id="select2-data-219-968g">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Dola Phone - Thanh toán đơn hàng">
    <title>Dola Phone - Thanh toán đơn hàng</title>

    <link rel="shortcut icon"
        href="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/checkout_favicon.ico?1719764721426"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css">
    <link rel="stylesheet" href="https://dola-phone.mysapo.net/dist/css/checkout.vendor.min.css?v=4fcd86c">
    <link rel="stylesheet" href="https://dola-phone.mysapo.net/dist/css/checkout.min.css?v=f6401e8">
    <script src="//bizweb.dktcdn.net/assets/themes_support/libphonenumber-v3.2.30.min.js?1719764721426"></script>
    <link rel="stylesheet" href=<?php _WEBDIR?>"/templates/css/style.css">
    <script src="https://dola-phone.mysapo.net/dist/js/checkout.vendor.min.js?v=11006c9"></script>

    <script src="https://dola-phone.mysapo.net/dist/js/checkout.min.js?v=4cdb0f8"></script>
    <script src="https://dola-phone.mysapo.net/dist/js/stats.min.js?v=96f2ff2"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>
    <link href=<?php _WEBDIR?>"/templates/css/pay.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body data-no-turbolink="" data-select2-id="select2-data-218-amm0">

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
    <aside>
        <button class="order-summary-toggle" data-toggle="#order-summary"
            data-toggle-class="order-summary--is-collapsed">
            <span class="wrap">
                <span class="order-summary-toggle__inner">
                    <span class="order-summary-toggle__text expandable">
                        Đơn hàng (<?php echo getTotalQuantity(); ?> sản phẩm)
                    </span>
                    <span class="order-summary-toggle__total-recap" data-bind="getTextTotalPrice()">
                        <div id="tong-price"></div>
                    </span>
                </span>
            </span>
        </button>
    </aside>
    <div data-tg-refresh="checkout" id="checkout" class="content" data-select2-id="select2-data-checkout">
        <form method="post" action="">
            <input type="hidden" name="_method" value="patch">
            <div class="wrap" data-select2-id="select2-data-217-303o">
                <main class="main">
                    <header class="main__header">
                        <div class="logo logo--center">

                            <a href="/">
                                <img class="logo__image  logo__image--medium " alt="Dola Phone"
                                    src="//bizweb.dktcdn.net/100/502/883/themes/934584/assets/checkout_logo.png?1719764721426">
                            </a>

                        </div>
                    </header>
                    <div class="main__content" data-select2-id="select2-data-216-xlvi">
                        <article class="animate-floating-labels row">
                            <div class="col col--two">
                                <section class="section" data-select2-id="select2-data-215-q5ed">
                                    <div class="section__header">
                                        <div class="layout-flex">
                                            <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                <i
                                                    class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>
                                                Thông tin nhận hàng
                                            </h2>
                                            <a
                                                href="/account/login?returnUrl=/checkout/fd2f07bda4fd4413bc76f094b11f5d1e">
                                                <i class="fa fa-user-circle-o fa-lg"></i>
                                                <span>Đăng nhập </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="section__content" data-select2-id="select2-data-214-80fx">
                                        <div class="fieldset">
                                            <div class="field">
                                                <div class="field__input-wrapper">
                                                    <label>Email</label>
                                                    <input name="email" type="email" class="field__input"
                                                        data-bind="billing.email" value="<?php if(isset($email)){  
                    echo htmlspecialchars($email);
                 }elseif(isset($_user)){ 
                    echo htmlspecialchars($_user);
                 }else{ 
                    echo '';
                 } ?>" <?php if(isset($_user)) echo 'readonly'; ?>>

                                                    <?php echo !empty($msg['mail']) ? '<div class="error">'.reset($msg['mail']).'</div>' : ''; ?>
                                                </div>

                                            </div>
                                            <div class="field">
                                                <div class="field__input-wrapper">
                                                    <label>Họ và tên</label>
                                                    <input name="name" type="text" class="field__input"
                                                        data-bind="billing.name" value="">
                                                </div>

                                            </div>

                                            <div class="field">
                                                <div class="field__input-wrapper">
                                                    <label>
                                                        Số điện thoại
                                                    </label>
                                                    <input name="phone" type="text" class="field__input" value="<?php if(isset($phone)){ 
                                                            echo htmlspecialchars($phone);
                                                            }elseif(isset($_phone)){ 
                                                                echo htmlspecialchars($_phone);
                                                                }else{ 
                                                                    echo '';
                                                                    } ?>">
                                                    <?php echo !empty($msg['phone']) ? '<div class="error">'.reset($msg['phone']).'</div>' : ''; ?>
                                                </div>

                                            </div>

                                            <div class="field">
                                                <div class="field__input-wrapper">
                                                    <label>
                                                        Địa chỉ
                                                    </label>
                                                    <input name="address" type="text" class="field__input"
                                                        data-bind="billing.address" value="<?php if(isset($address)){ 
                                                            echo htmlspecialchars($address);
                                                            }elseif(isset($_address)){ 
                                                                echo htmlspecialchars($_address);
                                                                }else{ 
                                                                    echo '';
                                                                    } ?>">
                                                    <?php echo !empty($msg['address']) ? '<div class="error">'.reset($msg['address']).'</div>' : ''; ?>
                                                </div>

                                            </div>


                                            <div class="field field--show-floating-label ">
                                                <div class="field__input-wrapper field__input-wrapper--select2"
                                                    data-select2-id="select2-data-213-bxsf">
                                                    <label for="billingProvince" class="field__label">Tỉnh thành</label>
                                                    <select name="tinh_thanh" id="billingProvince" size=""
                                                        class="field__input field__input--select select2-hidden-accessible"
                                                        data-address-type="province" data-address-zone="billing"
                                                        aria-hidden="true">
                                                        <option value="" hidden=""
                                                            data-select2-id="select2-data-220-4vg9">---</option>
                                                        <option value="Hà Nội" selected=""
                                                            data-select2-id="select2-data-210-091q">Hà Nội</option>
                                                        <option value="TP Hồ Chí Minh"
                                                            data-select2-id="select2-data-221-292x">TP Hồ Chí Minh
                                                        </option>
                                                        <option value="An Giang"
                                                            data-select2-id="select2-data-222-q0x8">An Giang</option>
                                                        <option value="Bà Rịa-Vũng Tàu"
                                                            data-select2-id="select2-data-223-aodr">Bà Rịa-Vũng Tàu
                                                        </option>
                                                        <option value="Bắc Giang"
                                                            data-select2-id="select2-data-224-okle">Bắc Giang</option>
                                                        <option value="Bắc Kạn" data-select2-id="select2-data-225-0xsf">
                                                            Bắc Kạn</option>
                                                        <option value="Bạc Liêu"
                                                            data-select2-id="select2-data-226-yqmb">Bạc Liêu</option>
                                                        <option value="Bắc Ninh"
                                                            data-select2-id="select2-data-227-pqxx">Bắc Ninh</option>
                                                        <option value="Bến Tre" data-select2-id="select2-data-228-u2sc">
                                                            Bến Tre</option>
                                                        <option value="Bình Dương"
                                                            data-select2-id="select2-data-229-duge">Bình Dương</option>
                                                        <option value="Bình Định"
                                                            data-select2-id="select2-data-230-3kbe">Bình Định</option>
                                                        <option value="Bình Phước"
                                                            data-select2-id="select2-data-231-4d9t">Bình Phước</option>
                                                        <option value="Bình Thuận"
                                                            data-select2-id="select2-data-232-odoy">Bình Thuận</option>
                                                        <option value="Cà Mau" data-select2-id="select2-data-233-n2k5">
                                                            Cà Mau</option>
                                                        <option value="Cao Bằng"
                                                            data-select2-id="select2-data-234-neh6">Cao Bằng</option>
                                                        <option value="Cần Thơ" data-select2-id="select2-data-235-z7t9">
                                                            Cần Thơ</option>
                                                        <option value="Đà Nẵng" data-select2-id="select2-data-236-9xxp">
                                                            Đà Nẵng</option>
                                                        <option value="Đắk Lắk" data-select2-id="select2-data-237-ra4s">
                                                            Đắk Lắk</option>
                                                        <option value="Đắk Nông"
                                                            data-select2-id="select2-data-238-b4ys">Đắk Nông</option>
                                                        <option value="Điện Biên"
                                                            data-select2-id="select2-data-239-20cz">Điện Biên</option>
                                                        <option value="Đồng Nai"
                                                            data-select2-id="select2-data-240-gcob">Đồng Nai</option>
                                                        <option value="Đồng Tháp"
                                                            data-select2-id="select2-data-241-c2ci">Đồng Tháp</option>
                                                        <option value="Gia Lai" data-select2-id="select2-data-242-ibuy">
                                                            Gia Lai</option>
                                                        <option value="Hà Giang"
                                                            data-select2-id="select2-data-243-83v4">Hà Giang</option>
                                                        <option value="Hà Nam" data-select2-id="select2-data-244-xz07">
                                                            Hà Nam</option>
                                                        <option value="Hà Tĩnh" data-select2-id="select2-data-245-su8h">
                                                            Hà Tĩnh</option>
                                                        <option value="Hải Dương"
                                                            data-select2-id="select2-data-246-0ypf">Hải Dương</option>
                                                        <option value="Hải Phòng"
                                                            data-select2-id="select2-data-247-7gxh">Hải Phòng</option>
                                                        <option value="Hậu Giang"
                                                            data-select2-id="select2-data-248-id5f">Hậu Giang</option>
                                                        <option value="Hòa Bình"
                                                            data-select2-id="select2-data-249-a765">Hòa Bình</option>
                                                        <option value="Hưng Yên"
                                                            data-select2-id="select2-data-250-uxoj">Hưng Yên</option>
                                                        <option value="Khánh Hòa"
                                                            data-select2-id="select2-data-251-vvbd">Khánh Hòa</option>
                                                        <option value="Kiên Giang"
                                                            data-select2-id="select2-data-252-2566">Kiên Giang</option>
                                                        <option value="Kon Tum" data-select2-id="select2-data-253-7n9n">
                                                            Kon Tum</option>
                                                        <option value="Lai Châu"
                                                            data-select2-id="select2-data-254-inps">Lai Châu</option>
                                                        <option value="Lâm Đồng"
                                                            data-select2-id="select2-data-255-c84b">Lâm Đồng</option>
                                                        <option value="Lạng Sơn"
                                                            data-select2-id="select2-data-256-h028">Lạng Sơn</option>
                                                        <option value="Lào Cai" data-select2-id="select2-data-257-hgui">
                                                            Lào Cai</option>
                                                        <option value="Long An" data-select2-id="select2-data-258-fh5x">
                                                            Long An</option>
                                                        <option value="Nam Định"
                                                            data-select2-id="select2-data-259-83tk">Nam Định</option>
                                                        <option value="Nghệ An" data-select2-id="select2-data-260-e7tn">
                                                            Nghệ An</option>
                                                        <option value="Ninh Bình"
                                                            data-select2-id="select2-data-261-uvi1">Ninh Bình</option>
                                                        <option value="Ninh Thuận"
                                                            data-select2-id="select2-data-262-rcdc">Ninh Thuận</option>
                                                        <option value="Phú Thọ" data-select2-id="select2-data-263-x761">
                                                            Phú Thọ</option>
                                                        <option value="Phú Yên" data-select2-id="select2-data-264-flqv">
                                                            Phú Yên</option>
                                                        <option value="Quảng Bình"
                                                            data-select2-id="select2-data-265-jet0">Quảng Bình</option>
                                                        <option value="Quảng Nam"
                                                            data-select2-id="select2-data-266-9zh6">Quảng Nam</option>
                                                        <option value="Quảng Ngãi"
                                                            data-select2-id="select2-data-267-3j18">Quảng Ngãi</option>
                                                        <option value="Quảng Ninh"
                                                            data-select2-id="select2-data-268-e00f">Quảng Ninh</option>
                                                        <option value="Quảng Trị"
                                                            data-select2-id="select2-data-269-dm2u">Quảng Trị</option>
                                                        <option value="Sóc Trăng"
                                                            data-select2-id="select2-data-270-yj9m">Sóc Trăng</option>
                                                        <option value="Sơn La" data-select2-id="select2-data-271-r6je">
                                                            Sơn La</option>
                                                        <option value="Tây Ninh"
                                                            data-select2-id="select2-data-272-k8lf">Tây Ninh</option>
                                                        <option value="Thái Bình"
                                                            data-select2-id="select2-data-273-wbsn">Thái Bình</option>
                                                        <option value="Thái Nguyên"
                                                            data-select2-id="select2-data-274-mfuu">Thái Nguyên</option>
                                                        <option value="Thanh Hóa"
                                                            data-select2-id="select2-data-275-k01l">Thanh Hóa</option>
                                                        <option value="Thừa Thiên Huế"
                                                            data-select2-id="select2-data-276-cbg8">Thừa Thiên Huế
                                                        </option>
                                                        <option value="Tiền Giang"
                                                            data-select2-id="select2-data-277-0fgd">Tiền Giang</option>
                                                        <option value="Trà Vinh"
                                                            data-select2-id="select2-data-278-h9od">Trà Vinh</option>
                                                        <option value="Tuyên Quang"
                                                            data-select2-id="select2-data-279-gyfs">Tuyên Quang</option>
                                                        <option value="Vĩnh Long"
                                                            data-select2-id="select2-data-280-z3ro">Vĩnh Long</option>
                                                        <option value="Vĩnh Phúc"
                                                            data-select2-id="select2-data-281-c5fb">Vĩnh Phúc</option>
                                                        <option value="Yên Bái" data-select2-id="select2-data-282-cq8v">
                                                            Yên Bái</option>
                                                    </select>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <div class="fieldset">
                                    <div class="field " data-bind-class="{'field--show-floating-label': note}">
                                        <div class="field__input-wrapper">
                                            <label>
                                                Ghi chú
                                            </label>
                                            <textarea name="note" id="note" class="field__input"
                                                data-bind="note"></textarea>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col col--two">
                                <section class="section">
                                    <div class="section__header">
                                        <div class="layout-flex">
                                            <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                <i class="fa fa-truck fa-lg section__title--icon hide-on-desktop"></i>
                                                Vận chuyển
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="section__content" data-tg-refresh="refreshShipping"
                                        id="shippingMethodList">
                                        <div class="content-box"">

                                            <div class=" content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input type="radio" class="input-radio" name="phi_ship"
                                                        value="<?php echo $phi_ship; ?>" id="shippingMethod-779463_0"
                                                        data-bind="shippingMethod" checked>

                                                </div>
                                                <label for="shippingMethod-779463_0" class="radio__label">
                                                    <span class="radio__label__primary">
                                                        <span>Giao hàng tận nơi</span>

                                                    </span>
                                                    <span class="radio__label__accessory">

                                                        <span class="content-box__emphasis price">
                                                            <?php echo number_format($phi_ship, 0, ',', '.'); ?>₫
                                                        </span>

                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="alert alert--info hide"
                                        data-bind-show="!isLoadingShippingMethod &amp;&amp; isAddressSelecting">
                                        Vui lòng nhập thông tin giao hàng
                                    </div>
                            </div>
                            <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const shippingMethod = document.getElementById('shippingMethod-779463_0');
                                if (shippingMethod) {
                                    shippingMethod.checked = true;
                                    shippingMethod.disabled = true;
                                }
                            });
                            </script>

                            </section>

                            <section class="section">
                                <div class="section__header">
                                    <div class="layout-flex">
                                        <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                            <i class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
                                            Thanh toán
                                        </h2>
                                    </div>
                                </div>
                                <div class="section__content">


                                    <div class="content-box" data-define="{paymentMethod: undefined}">


                                        <div class="content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input name="van_chuyen" id="paymentMethod-688475" type="radio"
                                                        class="input-radio" data-bind="paymentMethod"
                                                        value="Chuyển khoản (ATM)" data-provider-id="3">
                                                </div>
                                                <label for="paymentMethod-688475" class="radio__label">
                                                    <span class="radio__label__primary">Chuyển khoản</span>
                                                    <span class="radio__label__accessory">
                                                        <span class="radio__label__icon">
                                                            <i class="payment-icon payment-icon--3"></i>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>

                                        </div>

                                        <div class="content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input name="van_chuyen" id="paymentMethod-688477" type="radio"
                                                        class="input-radio" data-bind="paymentMethod"
                                                        value="Thu hộ (COD)" data-provider-id="4">
                                                </div>
                                                <label for="paymentMethod-688477" class="radio__label">
                                                    <span class="radio__label__primary">Thu hộ (COD)</span>
                                                    <span class="radio__label__accessory">
                                                        <span class="radio__label__icon">
                                                            <i class="payment-icon payment-icon--4"></i>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <script>
                                document.getElementById('paymentMethod-688477').checked = true;
                                </script>
                            </section>
                    </div>
                    </article>
                    <div class="field__input-btn-wrapper field__input-btn-wrapper--vertical hide-on-desktop">
                        <button type="submit" class="btn btn-checkout spinner">
                            <span class="spinner-label">ĐẶT HÀNG</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                <use href="#spinner"></use>
                            </svg>
                        </button>

                        <a href="?modules=cart&action=product" class="previous-link">
                            <i class="previous-link__arrow">❮</i>
                            <span class="previous-link__content">Quay về giỏ hàng</span>
                        </a>

                    </div>

                    <div id="common-alert" data-tg-refresh="refreshError">


                        <div class="alert alert--danger hide-on-desktop hide"
                            data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError"
                            data-bind="submitingCheckoutErrorMessage">Có lỗi xảy ra khi xử lý. Vui lòng thử lại
                        </div>
                    </div>
            </div>

            </main>
            <aside class="sidebar">
                <div class="sidebar__header">
                    <h2 class="sidebar__title">
                        Đơn hàng (<?php echo getTotalQuantity(); ?> sản phẩm)
                    </h2>
                </div>
                <div class="sidebar__content">
                    <div id="order-summary" class="order-summary order-summary--is-collapsed">
                        <div class="order-summary__sections">
                            <div
                                class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
                                <table class="product-table" id="product-table" data-tg-refresh="refreshDiscount">
                                    <caption class="visually-hidden">Chi tiết đơn hàng</caption>
                                    <thead class="product-table__header">
                                        <tr>
                                            <th>
                                                <span class="visually-hidden">Ảnh sản phẩm</span>
                                            </th>
                                            <th>
                                                <span class="visually-hidden">Mô tả</span>
                                            </th>
                                            <th>
                                                <span class="visually-hidden">Sổ lượng</span>
                                            </th>
                                            <th>
                                                <span class="visually-hidden">Đơn giá</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php    
if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    $totalPrice = 0; 
    foreach ($_SESSION['cart'] as $table => $products) {
        if (is_array($products) && !empty($products)) {
            $table = preg_replace('/[^a-zA-Z0-9_]/', '', $table);

            foreach ($products as $key => $product) {
                $id = $product['id'];
                $quantity = $product['quantity'];
                $color = $product['color'];

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
                        $tong_tien = $price * $quantity; 
                        $totalPrice += $tong_tien; 
?>
                                        <tr class="product">
                                            <td class="product__image">
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail__wrapper" data-tg-static="">
                                                        <img src="<?php echo $item['img']; ?>" alt=""
                                                            class="product-thumbnail__image">
                                                    </div>
                                                    <span class="product-thumbnail__quantity">
                                                        <?php echo $quantity; ?></span>
                                                </div>
                                            </td>
                                            <th class="product__description">
                                                <span class="product__description__name">
                                                    <?php echo $item['ten_san_pham']; ?>
                                                </span>

                                                <span class="product__description__property">
                                                    <?php echo htmlspecialchars($color); ?>
                                                </span>



                                            </th>
                                            <td class="product__quantity visually-hidden"><em>Số lượng:</em>
                                                <?php echo $quantity; ?></td>
                                            <td class="product__price">
                                                <?php echo number_format($item['gia_km'], 0, ',', '.'); ?>₫
                                            </td>

                                        </tr>

                                        <?php 
                    } // Kết thúc foreach ($check)
                }
            } // Kết thúc foreach ($products)
        }
    }
}
$tong = $totalPrice + $phi_ship;
?>

                                    </tbody>
                                </table>
                            </div>

                            <div class="order-summary__section order-summary__section--discount-code"
                                data-tg-refresh="refreshDiscount" id="discountCode">
                                <h3 class="visually-hidden">Mã khuyến mại</h3>
                                <div class="edit_checkout animate-floating-labels">
                                    <div class="fieldset">
                                        <div class="field ">
                                            <div class="field__input-btn-wrapper">
                                                <div class="field__input-wrapper">
                                                    <label for="reductionCode" class="field__label">Nhập mã giảm
                                                        giá</label>
                                                    <input name="reductionCode" id="reductionCode" type="text"
                                                        class="field__input" autocomplete="off">
                                                </div>
                                                <button class="field__input-btn btn spinner " id="applyDiscountBtn"
                                                    type="button">
                                                    <span class="spinner-label">Áp dụng</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                                        <use href="#spinner"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                            document.getElementById('applyDiscountBtn').addEventListener('click', function() {
                                const reductionCode = document.getElementById('reductionCode').value.trim();
                                if (!reductionCode) {
                                    alert('Vui lòng nhập mã giảm giá!');
                                    return;
                                }

                                // Thay đổi phương thức fetch từ POST sang GET và truyền mã giảm giá vào URL
                                fetch(`?modules=add&action=ma_khuyen_mai&reductionCode=${encodeURIComponent(reductionCode)}`, {
                                        method: 'GET',
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.success) {
                                            alert(data.message);

                                            // Cập nhật tổng giá trị sau khi áp dụng mã giảm giá
                                            const totalElement = document.querySelector(
                                                '.payment-due__price');
                                            const originalTotal = parseFloat(totalElement.dataset
                                                .original); // Lấy tổng gốc
                                            const discountAmount = data
                                                .discount; // Sử dụng discount từ phản hồi
                                            const newTotal = originalTotal -
                                                discountAmount; // Tính tổng mới

                                            // Cập nhật giá trị mới cho phần tử trong td
                                            totalElement.innerText = newTotal.toLocaleString() +
                                                '₫'; // Cập nhật giá trị mới

                                            // Cập nhật giá trị mới cho phần tử trong div có id "tong-price"
                                            document.getElementById("tong-price").innerText = newTotal
                                                .toLocaleString() + "₫"; // Cập nhật giá trị mới

                                        } else {
                                            alert(data.message);
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Error:', error);
                                        alert('Đã xảy ra lỗi, vui lòng thử lại!');
                                    });
                            });

                            var tong = <?php echo $tong; ?>;
                            document.getElementById("tong-price").innerText = tong.toLocaleString() + "₫";
                            </script>


                            <div
                                class="order-summary__section order-summary__section--total-lines order-summary--collapse-element">
                                <table class="total-line-table">
                                    <caption class="visually-hidden">Tổng giá trị</caption>
                                    <thead>
                                        <tr>
                                            <td><span class="visually-hidden">Mô tả</span></td>
                                            <td><span class="visually-hidden">Giá tiền</span></td>
                                        </tr>
                                    </thead>
                                    <tbody class="total-line-table__tbody">
                                        <tr class="total-line total-line--tong_tien">
                                            <th class="total-line__name">
                                                Tạm tính
                                            </th>
                                            <td class="total-line__price">
                                                <?php echo number_format($totalPrice, 0, ',', '.'); ?>₫</td>
                                        </tr>



                                        <tr class="total-line total-line--shipping-fee">
                                            <th class="total-line__name">
                                                Phí vận chuyển
                                            </th>
                                            <td class="total-line__price">
                                                <span class="origin-price"
                                                    data-bind="getTextShippingPriceOriginal()"></span>
                                                <span
                                                    data-bind="getTextShippingPriceFinal()"><?php echo number_format($phi_ship, 0, ',', '.'); ?>₫</span>
                                            </td>
                                        </tr>



                                    </tbody>
                                    <tfoot class="total-line-table__footer">
                                        <tr class="total-line payment-due">
                                            <th class="total-line__name">
                                                <span class="payment-due__label-total">
                                                    Tổng cộng
                                                </span>
                                            </th>
                                            <td class="total-line__price">
                                                <span class="payment-due__price" data-bind="getTextTotalPrice()"
                                                    data-original="<?php echo $tong; ?>">
                                                    <?php echo number_format($tong, 0, ',', '.'); ?>₫
                                                </span>
                                            </td>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div
                                class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">

                                <button type="submit" class="btn btn-checkout spinner">
                                    <span class="spinner-label">ĐẶT HÀNG</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                        <use href="#spinner"></use>
                                    </svg>
                                </button>


                                <a href="?modules=cart&action=product" class="previous-link">
                                    <i class="previous-link__arrow">❮</i>
                                    <span class="previous-link__content">Quay về giỏ hàng</span>
                                </a>

                            </div>
                            <div id="common-alert-sidebar" data-tg-refresh="refreshError">


                                <div class="alert alert--danger hide-on-mobile hide"
                                    data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError"
                                    data-bind="submitingCheckoutErrorMessage">Có lỗi xảy ra khi xử lý. Vui lòng thử
                                    lại</div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
    </div>
    </form>


    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="spinner">
            <svg viewBox="0 0 30 30">
                <circle stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="85%"
                    cx="50%" cy="50%" r="40%">
                    <animateTransform attributeName="transform" type="rotate" from="0 15 15" to="360 15 15" dur="0.7s"
                        repeatCount="indefinite"></animateTransform>
                </circle>
            </svg>
        </symbol>
    </svg>
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