<?php
if (!defined("_STATUS")) {
    echo "Truy cập không hợp lệ...";
    die();
}
$data = [
    "title" => "Vietcod - Đăng ký tài khoản"
];
if (isset($_SESSION['user'] )) {
    loadPage('?modules=home&action=home');
}
home("head", $data);
$msg = [];
$ms = '';
$ms_type = '';

if (isPost()) {
    $filter = filter($_POST);
    $lastName = trim($filter['lastName']);  // Thay 'ho' thành 'lastName'
    $firstName = trim($filter['firstName']); // Thay 'ten' thành 'firstName'
    $pass = $filter['pass'];
    $repass = $filter['repass'];
    $email = $filter['email'];
    $phone = $filter['phone'];

    if (empty($lastName)) {
        $msg['lastName']['empty'] = 'Họ không được để trống!';
    }
    if (empty($firstName)) {
        $msg['firstName']['empty'] = 'Tên không được để trống!';
    }
    if ($repass != $pass) {
        $msg['repass']['mkk'] = 'Mật khẩu nhập lại không khớp!';
    }
    if (strlen($pass) < 5) {
        $msg['pass']['5'] = 'Mật khẩu ít nhất 5 ký tự!';
    }
    if (!isEmail($email)) {
        $msg['mail']['mailf'] = 'Email không đúng định dạng!';
    }
    if (exists('account', ['email' => $email])) {
        $msg['mail']['mailt'] = 'Email đã tồn tại!';
    }
    if (!isPhone($phone)) {
        $msg['phone']['sdt'] = 'Số điện thoại không đúng định dạng!';
    }

    if (empty($msg)) {
        $hashPassword = password_hash($pass, PASSWORD_DEFAULT);
        $status = 0;
        $activeToken = sha1(uniqid() . time());
        $data = [
            'lastName' => $lastName,
            'firstName' => $firstName,
            'pass' => $hashPassword,
            'email' => $email,
            'phone' => $phone,
            'status' => $status,
            'activeToken' => $activeToken,
            'create_time' => date("Y-m-d H:i:s")
        ];
        
        $loginToken = sha1(uniqid() . time());
        $data1 = [
            'email' => $email,
            'token' => $loginToken,
            'create_time' => date("Y-m-d H:i:s")
        ];
        
        try {
            $conn->beginTransaction();
            $accountId = insert('account', $data);
            $data1['email'] = $email;
            insert('logintoken', $data1);
            $conn->commit();

            $linkToken = _WEBHOST . '?modules=auth&action=active&token=' . $activeToken;
            $subject = 'Xin chào ' . $firstName . ' ' . $lastName . ' hãy kích hoạt tài khoản để có trải nghiệm tốt nhất.';
            $body = 'Hãy ấn vào liên kết bên dưới để kích hoạt tài khoản nhé. <br><br>';
            $body .= 'Liên kết: <br>' . $linkToken . '<br>';
            $body .= '<br>Chúc bạn một ngày tốt lành. <br>Trân trọng cảm ơn.';

            $sucmail = sendMail($email, $subject, $body);

            if ($sucmail) {
                setFlashdata('tb', 'Đăng ký tài khoản thành công, hãy kiểm tra email để kích hoạt tài khoản!');
                setFlashdata('tb_type', 'success');
                $_SESSION['user'] = $email;
                loadPage('?modules=auth&action=profile');
                exit();
            } else {
                setFlashdata('tb', 'Có lỗi xảy ra khi gửi email!');
                setFlashdata('tb_type', 'danger');
            }
        } catch (Exception $e) {
            $conn->rollBack();
            setFlashdata('tb', 'Có lỗi xảy ra!');
            setFlashdata('tb_type', 'danger');
        }
    } else {
        setFlashdata('tb', 'Có lỗi xảy ra, hãy kiểm tra lại thông tin!');
        setFlashdata('tb_type', 'danger');
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

                <li><strong><span>Đăng ký tài khoản</span></strong></li>

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
                                            <li>
                                                <a href="?modules=auth&action=login" title="Đăng nhập">Đăng nhập</a>
                                            </li>
                                            <li class="active">
                                                <a href="#" title="Đăng ký">Đăng ký</a>
                                            </li>
                                        </ul>
                                        <h1 class="title_heads a-center"><span>Đăng ký</span></h1><br>
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
                                                                <input type="text" class="form-control form-control-lg"
                                                                    value="<?php echo !empty($lastName) ?  htmlspecialchars($lastName) : ''; ?>"
                                                                    name="lastName" id="lastName" placeholder="Họ"
                                                                    required="">
                                                                <?php echo !empty($msg['lastName']) ? '<div class="error">'.reset($msg['lastName']).'</div>' : ''; ?>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                            <fieldset class="form-group">
                                                                <input type="text" class="form-control form-control-lg"
                                                                    value="<?php echo !empty($firstName) ?  htmlspecialchars($firstName) : ''; ?>"
                                                                    name="firstName" id="firstName" placeholder="Tên"
                                                                    required="">
                                                                <?php echo !empty($msg['firstName']) ? '<div class="error">'.reset($msg['firstName']).'</div>' : ''; ?>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                            <fieldset class="form-group">
                                                                <input type="email"
                                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                                    class="form-control form-control-lg"
                                                                    value="<?php echo !empty($email) ? htmlspecialchars($email) : ''; ?>"
                                                                    name="email" id="email" placeholder="Email"
                                                                    required="">

                                                                <?php echo !empty($msg['mail']) ? '<div class="error">'.reset($msg['mail']).'</div>' : ''; ?>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                            <fieldset class="form-group">
                                                                <input placeholder="Số điện thoại" type="text"
                                                                    pattern="\d+"
                                                                    value="<?php echo !empty($phone) ? htmlspecialchars($phone) : ''; ?>"
                                                                    class="form-control form-control-comment form-control-lg"
                                                                    name="phone" required="">
                                                                <?php echo !empty($msg['phone']) ? '<div class="error">'.reset($msg['phone']).'</div>' : ''; ?>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                            <fieldset class="form-group">
                                                                <input type="password"
                                                                    class="form-control form-control-lg"
                                                                    value="<?php echo !empty($pass) ? htmlspecialchars($pass) : ''; ?>"
                                                                    name="pass" id="password" placeholder="Mật khẩu"
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
                                                        <button type="submit" value="Đăng ký"
                                                            class="btn  btn-style btn_50">Đăng ký</button>
                                                    </div>
                                                </div>
                                            </form><br>
                                            <!--
                                            <div class="block social-login--facebooks margin-top-15">
                                                <p class="a-center">
                                                    Hoặc đăng nhập bằng
                                                </p>
                                                <script>
                                                function loginFacebook() {
                                                    var a = {
                                                            client_id: "947410958642584",
                                                            redirect_uri: "https://store.mysapo.net/account/facebook_account_callback",
                                                            state: JSON.stringify({
                                                                redirect_url: window.location.href
                                                            }),
                                                            scope: "email",
                                                            response_type: "code"
                                                        },
                                                        b = "https://www.facebook.com/v3.2/dialog/oauth" +
                                                        encodeURIParams(a, !0);
                                                    window.location.href = b
                                                }

                                                function loginGoogle() {
                                                    var a = {
                                                            client_id: "997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",
                                                            redirect_uri: "https://store.mysapo.net/account/google_account_callback",
                                                            scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
                                                            access_type: "online",
                                                            state: JSON.stringify({
                                                                redirect_url: window.location.href
                                                            }),
                                                            response_type: "code"
                                                        },
                                                        b = "https://accounts.google.com/o/oauth2/v2/auth" +
                                                        encodeURIParams(a, !0);
                                                    window.location.href = b
                                                }

                                                function encodeURIParams(a, b) {
                                                    var c = [];
                                                    for (var d in a)
                                                        if (a.hasOwnProperty(d)) {
                                                            var e = a[d];
                                                            null != e && c.push(encodeURIComponent(d) + "=" +
                                                                encodeURIComponent(e))
                                                        } return 0 == c.length ? "" : (b ? "?" : "") + c.join("&")
                                                }
                                                </script>
                                                <a href="javascript:void(0)" class="social-login--facebook"
                                                    onclick="loginFacebook()"><img width="129px" height="37px"
                                                        alt="facebook-login-button"
                                                        src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
                                                <a href="javascript:void(0)" class="social-login--google"
                                                    onclick="loginGoogle()"><img width="129px" height="37px"
                                                        alt="google-login-button"
                                                        src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
                                            </div>
                                            -->
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