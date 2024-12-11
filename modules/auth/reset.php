<?php
if (!defined("_STATUS")) {
    echo "Truy cập không hợp lệ...";
    die();
}
$data = [
    "title"=> "Vietcod - Đổi mật khẩu"
];

if (!empty($_GET["token"]) ) {
    $token = htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8');
    $check = oneRow("SELECT * FROM account WHERE forgotToken = '$token'");
    if($check){
        $check_id = $check['id'];
    }else{
        echo "Truy cập không hợp lệ...";
    die();
    }
    
}else{
    echo "Truy cập không hợp lệ...";
    die();
}
home("head", $data);
$msg = [];
$ms ='';
$ms_type = '';

if (isPost()) {
    $filter = filter($_POST);
    $pass = $filter['pass'];
    $repass = $filter['repass'];

    // Kiểm tra các điều kiện

    if ($repass != $pass) {
        $msg['repass']['mkk'] = 'Mật khẩu nhập lại không khớp!';
    }
    if (strlen($pass) < 5) {
        $msg['pass']['5'] = 'Mật khẩu ít nhất 5 ký tự!';
    }

    if(empty($msg)) {
        $hashPassword = password_hash($pass, PASSWORD_DEFAULT);
        $forgotNew = null;
        $update = date('Y-m-d H:i:s');
        
        // Thực hiện câu lệnh SQL với PDO
        $sql = "UPDATE account SET pass = :pass, forgotToken = :forgotToken, update_pass = :update_pass WHERE id = :id";
        $stmt = $conn->prepare($sql);
        
        // Gắn giá trị vào các tham số
        $stmt->bindParam(':pass', $hashPassword, PDO::PARAM_STR);
        $stmt->bindParam(':forgotToken', $forgotNew, PDO::PARAM_STR);
        $stmt->bindParam(':update_pass', $update, PDO::PARAM_STR);
        $stmt->bindParam(':id', $check_id, PDO::PARAM_INT);
        
        // Thực thi câu lệnh
        $suc = $stmt->execute();
        
        if ($suc) {
            setFlashdata('tb', 'Đổi mật khẩu thành công!');
            setFlashdata('tb_type', 'success');
        } else {
            setFlashdata('tb', 'Có lỗi xảy ra!');
            setFlashdata('tb_type', 'danger');
        }
    }
    else {    
        
        setFlashdata('tb', 'Có lỗi xảy ra, hãy kiểm tra lại thông tin!') ;
        setFlashdata('tb_type', 'danger') ;
    }
    $ms = getFlashdata('tb');
    $ms_type = getFlashdata('tb_type');
}
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

                <li><strong><span>Đổi mật khẩu</span></strong></li>

            </ul>
        </div>
    </section>
    <section class="section">
        <div class="container ">
            <div class="wrap_background_aside  page_login">
                <div class="wrap_background_aside">
                    <div class="row">
                        <div style="    margin: auto;"
                            class="col-lg-4 col-md-6 col-sm-12 col-12 col-xl-4 offset-xl-4 offset-lg-4 offset-md-3 offset-xl-3">
                            <div class="row no-margin align-items-center block-background">
                                <div class=" page-login pagecustome clearfix no-padding">
                                    <div class="wpx">

                                        <ul class="auth-block__menu-list">

                                            <li class="active">
                                                <a href="#" title="Đổi mật khẩu">Đổi mật khẩu</a>
                                            </li>
                                        </ul>
                                        <h1 class="title_heads a-center"><span>Đổi mật khẩu</span></h1><br>
                                        <?php
        msg($ms, $ms_type);
        ?>
                                        <div id="login" class="section">

                                            <form method="post" action="" id="customer_register" accept-charset="UTF-8">
                                                <input name="FormType" type="hidden" value="customer_register"><input
                                                    name="utf8" type="hidden" value="true"><input type="hidden"
                                                    id="Token-06965105e5494966b4f8c72eb87b99c2" name="Token"
                                                    value="03AFcWeA4L96piuXIgmvcH7Vh3_CADM4IuclnAYyVPeDKZ7m-Oy_X4rj52Bw0c05NuVc7Ea4k_VgoWpkXqceslus3dmhQNjdb-YhAyglOSjB5NBlhRwXDx6FJOc41YWmma7gvD76EQRVLE4vPwihT1LUku7r7JozI6Cw258mzYk_cNKdDo1U1irpSQR4mSYTGQTaKEumvgxFRwXyWIwMjr2ferVxShrXiG2ZErUBxz35wMJLg9BkEf_vwdb2FwFU3xOxRoujztbdcCIwCucntGuK0BTW00mJ_mSHWYgdBfEsC2xO_Qh3clFESHg7Jh8jUHsoLG6ldFFjOsusFCKP7i-dI01h8NjItjgrPMcJ2u1RQGW_0xQTil9PwWDXnknmIo1myHRnHYvnaMoVTiehFBRRNya4Zh-pDNs5WBFhqRjZ6y3w4bTHOXfv47XKmoiLgp_3vgMHGLnjT_Bb2LOOxER7bFMKjEwha9j9AEWsxVBCvnoU85i8ceMPxx6QiELy4dmomQXBbIvhNCI5L9Zc7CKluAow8Jz_awhI2diEojpIV6bsEMiF14bACGsUa3c_xjUJTeEPKue71am2w7RvuSNmX4v2EZx5aGqba1u1Io9xGG9Ga69jHyJt-L1BHsKAQEJj_absi6tI0mQjJU47ThStlOyxYQVaRexZJ9uA_IArSKsBtpaZ_JhWdDHCvJlY4tRa7QiAUvL9wZbHCi5PbTmo4cudEi5vcy1e0q_5YfULTaAuQHdQoL6MO8nWckQcQRaeUEZQrwN9JR8hSrBQyJcWl6yv5RYXpNGNsjG2-9SNR9-P8yQmlFOHZ2Cx9tG_9-XmuyP65FbLTzaNN90Bru6APOTON7DhT4COcynu9BsfG8oJlGNm3QT3w">
                                                <script
                                                    src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK">
                                                </script>
                                                <script>
                                                grecaptcha.ready(function() {
                                                    grecaptcha.execute(
                                                        "6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {
                                                            action: "customer_register"
                                                        }).then(function(token) {
                                                        document.getElementById(
                                                            "Token-06965105e5494966b4f8c72eb87b99c2"
                                                        ).value = token
                                                    });
                                                });
                                                </script>
                                                <div class="form-signup " style="color:red;">

                                                </div>
                                                <div class="form-signup clearfix">

                                                    <div class="row">

                                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                            <fieldset class="form-group">
                                                                <input type="password"
                                                                    class="form-control form-control-lg"
                                                                    value="<?php echo !empty($pass) ? htmlspecialchars($pass) : ''; ?>"
                                                                    name="pass" id="password" placeholder="Mật khẩu mới"
                                                                    required="">
                                                                <?php echo !empty($msg['pass']) ? '<div class="error">'.reset($msg['pass']).'</div>' : ''; ?>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                            <fieldset class="form-group">
                                                                <input type="password"
                                                                    class="form-control form-control-lg"
                                                                    value="<?php echo !empty($repass) ? htmlspecialchars($repass) : ''; ?>"
                                                                    name="repass" id="password"
                                                                    placeholder="Nhập lại mật khẩu" required="">
                                                                <?php echo !empty($msg['repass']) ? '<div class="error">'.reset($msg['repass']).'</div>' : ''; ?>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="section">
                                                        <button type="submit" value="Đổi mật khẩu"
                                                            class="btn  btn-style btn_50">Đổi mật khẩu</button>
                                                    </div>
                                                    <a href="?modules=auth&action=login">
                                                        <span class="block a-center quenmk">Đăng nhập</span></a>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
home("foot");
?>