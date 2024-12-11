<?php
if (!defined("_STATUS")) {
    echo "Truy cập không hợp lệ...";
    die();
}
$data = [
    "title"=> "Vietcod - Đăng nhập tài khoản"
];
home("head", $data);
$msg = [];
$ms = '';
$ms_type = '';
if (isset($_SESSION['user'] )) {
    loadPage('?modules=home&action=home');
    exit();
}
if (isPost()) {
    $filter = filter($_POST);
    if(!empty($_POST['email_forgot'])){
        $email_forgot = $filter['email_forgot'];
      
        if(exists('account', ['email'=> $email_forgot ])) {
            $sql = "SELECT * FROM account WHERE email = :email";
            $params = ['email' => $email_forgot ];
            $check = oneRow($sql, $params);
        
            if ($check) {
                $check_id = $check['id'];
                if (!empty($check_id)) {
                    $forgotToken = sha1(uniqid() . time());
                    $linkToken = _WEBHOST . '?modules=auth&action=reset&token=' . $forgotToken;
                    $subject = 'Yêu cầu quên mật khẩu!';
                    $body = 'Hãy ấn vào liên kết bên dưới để đổi lại mật khẩu nhé. <br><br>';
                    $body .= 'Liên kết: <br>' . $linkToken . '<br>';
                    $body .= '<br>Chúc bạn một ngày tốt lành. <br>Trân trọng cảm ơn.';
                    $stmt = $conn->prepare("UPDATE account SET forgotToken = '$forgotToken' WHERE id = '$check_id' ");
                    $suc = $stmt->execute();
                    $sucmail = sendMail($email_forgot , $subject, $body);
        
                    if ($sucmail && $suc) {
                        setFlashdata('tb', 'Gửi yêu cầu quên mật khẩu thành công, hãy kiểm tra email để xem hướng dẫn!');
                        setFlashdata('tb_type', 'success');
                    } else {
                        setFlashdata('tb', 'Có lỗi xảy ra!');
                        setFlashdata('tb_type', 'danger');
                    }
                } else {
                    $msg['forgot']['id'] = 'id không tồn tại!';
                }
            } else {
                $msg['forgot']['mailt'] = 'Email không tồn tại!';
            }
        }
        
        
    }else{
    if(isset($filter['pass']) && isset($filter['pass'])){
    $pass = $filter['pass'];
    $email = $filter['email'];
    }else{
        $msg['mail']['mail_empty'] = 'Vui lòng điền đầy đủ thông tin!';
    }
    if(exists('account', ['email'=> $email])) {
       
    $check = oneRow("SELECT * FROM account WHERE email = '$email'");
    if($check){
    if ($check && password_verify($pass, $check['pass'])) {
        
    if(empty($msg)) {
        $loginToken = sha1(uniqid() . time());
        
        // $check_login = oneRow("SELECT * FROM logintoken WHERE email = '$email' ");
        // if($check_login){
        //     setFlashdata('tb', 'Tài khoản đang đăng nhập ở 1 nơi khác!') ;
        //     setFlashdata('tb_type', 'danger') ;
        // }

        $data = [
            'email' => $email,
            'token' => $loginToken,
            'create_time' => date("Y-m-d H:i:s")
        ];
        $suc = insert('logintoken', $data);
        if($suc){
            $_SESSION['user'] = $email;
            loadPage('?modules=home&action=home');
           exit();
        }else{  
            setFlashdata('tb', 'Có lỗi ở phương thức Success!') ;
            setFlashdata('tb_type', 'danger') ;
        }
    
    } 
} else {
    $msg['pass']['sai'] = 'Sai mật khẩu!';
}
}else{
    $msg['raw']['1'] = 'Không thể check email !';
}
}else{
    $msg['mail']['mailt'] = 'Email không tồn tại!';
}
}

if(!empty($msg)){    
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

                <li><strong><span>Đăng nhập tài khoản</span></strong></li>

            </ul>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="wrap_background_aside page_login">
                <div class="row">
                    <div style="margin: auto;"
                        class="col-lg-4 col-md-6 col-sm-12 col-12 col-xl-4 offset-xl-4 offset-lg-4 offset-md-3 offset-xl-3 ">
                        <div class="row no-margin align-items-center block-background">
                            <div class="page-login pagecustome clearfix no-padding">
                                <div class="wpx">
                                    <ul class="auth-block__menu-list">
                                        <li class="active">
                                            <a href="#" title="Đăng nhập">Đăng nhập</a>
                                        </li>
                                        <li>
                                            <a href="?modules=auth&action=register" title="Đăng ký">Đăng ký</a>
                                        </li>
                                    </ul>
                                    <h1 class="title_heads a-center"><span>Đăng nhập</span></h1><br>
                                    <?php
msg($ms, $ms_type);
?>
                                    <div id="login" class="section">
                                        <form method="post" action="" id="customer_login" accept-charset="UTF-8"><input
                                                name="FormType" type="hidden" value="customer_login"><input name="utf8"
                                                type="hidden" value="true">
                                            <span class="form-signup" style="color:red;">

                                            </span>
                                            <div class="form-signup clearfix">
                                                <fieldset class="form-group">
                                                    <input type="email"
                                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                        class="form-control form-control-lg"
                                                        value="<?php echo !empty($email) ? htmlspecialchars($email) : ''; ?>"
                                                        name="email" id="customer_email" placeholder="Email"
                                                        required="">
                                                    <?php echo !empty($msg['email']) ? '<div class="error">'.reset($msg['email']).'</div>' : ''; ?>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <input type="password" class="form-control form-control-lg"
                                                        value="<?php echo !empty($pass) ? htmlspecialchars($pass) : ''; ?>"
                                                        name="pass" id="customer_password" placeholder="Mật khẩu"
                                                        required="">
                                                    <?php echo !empty($msg['pass']) ? '<div class="error">'.reset($msg['pass']).'</div>' : ''; ?>
                                                </fieldset>
                                                <div class="pull-xs-left">
                                                    <input class="btn btn-style btn_50" type="submit" value="Đăng nhập">
                                                    <span class="block a-center quenmk">Quên mật khẩu</span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="h_recover" style="display:none;">
                                        <div id="recover-password" class="form-signup page-login">
                                            <form method="post" action="" id="recover_customer_password"
                                                accept-charset="UTF-8"><input name="FormType" type="hidden"
                                                    value="recover_customer_password"><input name="utf8" type="hidden"
                                                    value="true">
                                                <div class="form-signup" style="color: red;">

                                                </div>
                                                <div class="form-signup clearfix">
                                                    <fieldset class="form-group">
                                                        <input type="email"
                                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                            class="form-control form-control-lg" value=""
                                                            name="email_forgot" id="recover-email" placeholder="Email"
                                                            required="">
                                                        <?php echo !empty($msg['forgot']) ? '<div class="error">'.reset($msg['forgot']).'</div>' : ''; ?>
                                                    </fieldset>
                                                </div>
                                                <div class="action_bottom">
                                                    <input class="btn btn-style btn_50" style="margin-top: 0px;"
                                                        type="submit" value="Lấy lại mật khẩu">

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


    <script type="text/javascript">
    function showRecoverPasswordForm() {
        document.getElementById('recover-password').style.display = 'block';
        document.getElementById('login').style.display = 'none';
    }

    function hideRecoverPasswordForm() {
        document.getElementById('recover-password').style.display = 'none';
        document.getElementById('login').style.display = 'block';
    }

    $('.quenmk').on('click', function() {
        $('#login').toggleClass('hidden');
        $('.h_recover').slideToggle();
    });
    </script>
</div>
<?php
home("foot");
?>