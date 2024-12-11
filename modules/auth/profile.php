<?php
if (!defined("_STATUS")) {
    echo "Truy cập không hợp lệ...";
    die();
}
$data = [
    "title"=> "Vietcod - Thông tin tài khoản admin"
];
if(empty($_user)){
    loadPage('?modules=auth&action=register');
}
home("head", $data);
$check = oneRow("SELECT * FROM account WHERE id = '$_id' ");
$check_don = getRow("SELECT * FROM order_user WHERE email = '$_user' " );
$name = $check['firstName'].' '.$check['lastName'];

$thong_tin = '';
$don_hang = '';
$change_pass = '';
$address = '';
if(!isset($_GET['menu'])){
    $thong_tin = 'active';
}elseif($_GET['menu'] == 'don_hang' || $_GET['menu'] == 'chi_tiet'){
    $don_hang = 'active';
}elseif($_GET['menu'] == 'change_pass'){
    $change_pass = 'active';
}elseif($_GET['menu'] == 'address'){
    $address = 'active';
}

$ms = getFlashdata('tb');
$ms_type = getFlashdata('tb_type');
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
                <li><strong><span>Trang khách hàng</span></strong></li>
            </ul>
        </div>
    </section>

    <section class="signup page_customer_account">
        <div class="container">
            <div class="block-background">


                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
                        <?php if (!empty($ms)): ?>
                        <div class="alert alert-<?php echo $ms_type; ?>">
                            <?php echo $ms; ?>
                        </div>
                        <?php endif; ?>
                        <div class="block-account">
                            <h5 class="title-account">Trang tài khoản</h5>

                            <p>Xin chào, <span style="color:#ef4339;"><?php echo $name;  ?></span>&nbsp;!</p>
                            <ul>
                                <li>
                                    <a disabled="disabled" class="title-info <?php echo $thong_tin;?>"
                                        href="?modules=auth&action=profile">Thông
                                        tin tài khoản</a>
                                </li>
                                <li>
                                    <a class="title-info <?php echo $don_hang;?>"
                                        href="?modules=auth&action=profile&menu=don_hang">Đơn hàng của
                                        bạn</a>
                                </li>


                                <li>
                                    <a class="title-info <?php echo $change_pass;?>" href="/account/changepassword">Đổi
                                        mật khẩu</a>
                                </li>
                                <li>
                                    <a class="title-info <?php echo $address;?>" href="/account/addresses">Sổ địa chỉ
                                        (0)</a>
                                </li>
                                <?php if($_admin == 1){ ?>
                                <li>
                                    <a class="title-info" href="?modules=admin&action=login">Trang Admin</a>
                                </li>
                                <?php     }?>
                            </ul>
                        </div>
                    </div>
                    <?php if(!isset($_GET['menu'])){?>
                    <div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
                        <h1 class="title-head margin-top-0">Thông tin tài khoản</h1>
                        <div class="form-signup name-account m992">
                            <p><strong>Họ tên:</strong> <?php echo $name; ?></p>
                            <p> <strong>Email:</strong> <?php echo $_user; ?></p>
                            <p> <strong>Số điện thoại:</strong> <?php echo $check['phone']; ?></p>
                            <p> <strong>Trạng thái:</strong>
                                <?php if($check['status'] == 1){echo '<span style="color:green;">Đã kích hoạt</span>';}else{echo '<span style="color:red;">Chưa kích hoạt</span>';}; ?>
                            </p>
                        </div>
                    </div>
                    <?php }elseif($_GET['menu'] == 'don_hang'){ ?>
                    <div class="col-lg-9 col-12 col-right-ac">
                        <h1 class="title-head margin-top-0">Đơn hàng của bạn</h1>

                        <div class="my-account">
                            <div class="dashboard">

                                <div class="recent-orders">
                                    <div class="table-responsive-block tab-all" style="overflow-x:auto;">
                                        <table class="table table-cart table-order" id="my-orders-table">
                                            <thead class="thead-default">
                                                <tr>
                                                    <th>Đơn hàng</th>
                                                    <th>Ngày</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Giá trị đơn hàng</th>
                                                    <th>TT thanh toán</th>
                                                    <th>TT vận chuyển</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($check_don as $item){ ?>
                                                <tr class="first odd">
                                                    <td>#<?php echo htmlspecialchars($item['id']);?><br><a
                                                            href="?modules=auth&action=profile&menu=chi_tiet&id=<?php echo htmlspecialchars($item['id']);?>"
                                                            title="">Xem</a>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($item['created_at']);?></td>
                                                    <td><?php echo htmlspecialchars($item['address']);?>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="price"><?php echo number_format($item['total_order'], 0, ',', '.'); ?>₫</span>
                                                    </td>
                                                    <td>
                                                        <?php if($item['thanh_toan'] == 0){?>
                                                        <b class="span_pending"
                                                            style="color: #E49C06; font-weight: 600;">Chưa thanh
                                                            toán</b>
                                                        <?php }else{ ?>
                                                        <b class="span_pending"
                                                            style="color: green; font-weight: 600;">Đã thanh
                                                            toán</b>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($item['van_chuyen'] == 0){?>
                                                        <span class="span_">Chưa chuyển</span>
                                                        <?php }elseif($item['van_chuyen'] == 1){?>
                                                        <span class="span_" style="color:blue;">Đang vận chuyển</span>
                                                        <?php }elseif($item['van_chuyen'] == 2){?>
                                                        <span class="span_" style="color:red;">Đã hủy</span>
                                                        <?php }elseif($item['van_chuyen'] == 3){?>
                                                        <span class="span_" style="color:red;">Hoàn tiền</span>
                                                        <?php }else{ ?>
                                                        <span class="span_" style="color:green;">Đã nhận</span>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="margin-top: 20px;"
                                        class="paginate-pages pull-right page-account text-right col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }elseif($_GET['menu'] == 'chi_tiet' && !empty($_GET['id'])){ 
                        $id_sp = $_GET['id'];
                        $check_chi_tiet = getRow("SELECT * FROM order_sanpham WHERE order_id = '$id_sp' ");
                        $check_user = oneRow(" SELECT * FROM order_user WHERE id = '$id_sp' ");
                        ?>

                    <div class="col-12 col-xl-9">
                        <div class="head-title clearfix">
                            <h1>Chi tiết đơn hàng #<?php echo htmlspecialchars($id_sp);?></h1>
                            <span class="note order_date">Ngày tạo:
                                <?php echo htmlspecialchars($check_user['created_at']);?>
                            </span>
                        </div>
                        <div class="payment_status">
                            <span class="note">Trạng thái thanh toán:</span>
                            <?php if($check_user['thanh_toan'] == 0){?>
                            <b class="span_pending" style="color: #E49C06; font-weight: 600;">Chưa thanh
                                toán</b>
                            <?php }else{ ?>
                            <b class="span_pending" style="color: green; font-weight: 600;">Đã thanh
                                toán</b>
                            <?php } ?>
                        </div>

                        <div class="shipping_status">
                            <span class="note">Trạng thái vận chuyển:</span>
                            <?php if($check_user['van_chuyen'] == 0){?>
                            <span class="span_">Chưa chuyển</span>
                            <?php }elseif($check_user['van_chuyen'] == 1){?>
                            <span class="span_" style="color:blue;">Đang vận chuyển</span>
                            <?php }elseif($check_user['van_chuyen'] == 2){?>
                            <span class="span_" style="color:red;">Đã hủy</span>
                            <?php }elseif($check_user['van_chuyen'] == 3){?>
                            <span class="span_" style="color:red;">Hoàn tiền</span>
                            <?php }else{ ?>
                            <span class="span_" style="color:green;">Đã nhận</span>
                            <?php } ?>
                        </div>

                        <div class="code_order order-stt">
                            <span class="note">Mã vận đơn:</span>
                            <a style="color:#FBBF22;font-weight:bold;text-transform: uppercase;" target="_blank"
                                href=""><?php if(!empty($check_user['code_shipping'])){ echo htmlspecialchars($check_user['code_shipping']); }else{ echo ''; }?></a>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 body_order">

                                <div class="box-address">
                                    <h2 class="title-head">Địa chỉ giao hàng</h2>

                                    <div class="address box-des">
                                        <p> <strong><?php echo htmlspecialchars($check_user['name']);?></strong></p>
                                        <p>Địa chỉ:


                                            <?php echo htmlspecialchars($check_user['address']);?>

                                        </p>

                                        <p>Số điện thoại: <?php echo htmlspecialchars($check_user['phone']);?></p>

                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-lg-3 body_order">
                                <div class="box-address">
                                    <h2 class="title-head">
                                        Thanh toán
                                    </h2>
                                    <div class="box-des">
                                        <p>
                                            <?php echo htmlspecialchars($check_user['payment_method']);?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 body_order">
                                <div class="box-address">
                                    <h2 class="title-head">
                                        Ghi chú
                                    </h2>
                                    <div class="box-des">
                                        <p>

                                            Không có ghi chú

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="table-order">
                                    <div class="table-responsive-block table_mobile">
                                        <table id="order_details" class="table table-cart">
                                            <thead class="thead-default theborder">
                                                <tr>
                                                    <th>Sản phẩm</th>
                                                    <th>Đơn giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Tổng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($check_chi_tiet as $item){ 
                                                    ?>

                                                <tr>
                                                    <td class="link" data-title="Tên" style="display:flex;">
                                                        <div class="image_order">
                                                            <a title="<?php echo htmlspecialchars($item['product_name']);?>"
                                                                href="?modules=view&action=view&loai=<?php echo htmlspecialchars($item['loai']);?>&id=<?php echo htmlspecialchars($item['id_sp']);?>">
                                                                <img src="<?php echo htmlspecialchars($item['img']);?>"
                                                                    style="height:80px;" alt=""></a>
                                                        </div>
                                                        <div class="content_right">
                                                            <a class="title_order"
                                                                href="?modules=view&action=view&loai=<?php echo htmlspecialchars($item['loai']);?>&id=<?php echo htmlspecialchars($item['id_sp']);?>"
                                                                title="<?php echo htmlspecialchars($item['product_name']);?>"><?php echo htmlspecialchars($item['product_name']);?></a>

                                                            <p style="color:#828282;font-size:12px;">
                                                                <?php echo htmlspecialchars($item['color']);?>
                                                            </p>


                                                            <div class="bottom_mb">
                                                                <div class="quantity_mb">
                                                                    x<?php echo htmlspecialchars($item['quantity']);?>
                                                                </div>
                                                                <div class="sum_mb">
                                                                    <?php echo number_format($item['price'], 0, ',', '.'); ?>₫
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td data-title="Giá" class="numeric">
                                                        <?php echo number_format($item['price'], 0, ',', '.'); ?>₫</td>
                                                    <td data-title="Số lượng" class="numeric">
                                                        <?php echo htmlspecialchars($item['quantity']);?></td>
                                                    <td data-title="Tổng" class="numeric">
                                                        <?php echo number_format($item['tong_tien'], 0, ',', '.'); ?>₫
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <table class="table totalorders">
                                        <tfoot>
                                            <tr class="order_summary discount">
                                                <td>Khuyến mại </td>

                                                <td class="total money right">0₫</td>
                                            </tr>

                                            <tr class="order_summary ">
                                                <td colspan="">Phí vận chuyển</td>
                                                <td class="total money right">

                                                    <?php echo number_format($check_user['phi_ship'], 0, ',', '.'); ?>₫


                                                    (Giao hàng tận nơi)

                                                </td>

                                            </tr>

                                            <tr class="order_summary order_total">
                                                <td>Tổng tiền</td>
                                                <td class="right"><strong
                                                        style="color:#CA170E;font-size:19px;"><?php echo number_format($check_user['total_order'], 0, ',', '.'); ?>₫</strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
home("foot");
?>