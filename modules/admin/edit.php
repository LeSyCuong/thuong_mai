<?php
if (!defined("_STATUS")) {
    echo "Truy cập không hợp lệ...";
    die();
}   

$data = [
    "title" => "Vietcod - Sửa thông tin tài khoản"
];

if (!$_SESSION['admin']) {
    loadPage('?modules=admin&action=login');
    exit();
}

if ($_admin_ad != 1) {
    unset($_SESSION['admin']);
    loadPage('?modules=admin&action=login');
}

home("head-admin", $data);
$msg = [];
$ms = '';
$ms_type = '';

if (isset($_GET['id'])) {
    $id_get = $_GET['id'];

    // Kiểm tra tài khoản
    $stmt = $conn->prepare("SELECT * FROM account WHERE id = :id");
    $stmt->execute(['id' => $id_get]);
    $check = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($check) {
        $u_email = $check['email'];
        $u_status = $check['status'];
        $u_firstName = $check['firstName'];
        $u_lastName = $check['lastName'];

        if (isPost()) {
            $filter = filter($_POST);
            $email = $filter['email'];
            $pass = $filter['pass'];
            $repass = $filter['repass'];
            $status = $filter['status'];
            $firstName = $filter['firstName'];
            $lastName = $filter['lastName'];

            if (!empty($pass) || !empty($repass)) {
                if ($repass != $pass) {
                    $msg['pass2']['mkk'] = 'Mật khẩu nhập lại không khớp!';
                }
                if (strlen($pass) < 5) {
                    $msg['pass']['5'] = 'Mật khẩu ít nhất 5 ký tự!';
                }
            }

            if (!isEmail($email)) {
                $msg['mail']['mailf'] = 'Email không đúng định dạng!';
            }

            if (empty($msg)) {
               
                try{
                    if($status == 0) {
                        $activeToken = sha1(uniqid() . time());
                        $linkToken = _WEBHOST.'?modules=auth&action=active&token='.$activeToken;
                        $subject = 'Xin chào '.$firstName.' '.$lastName.' hãy kích hoạt tài khoản để có trải nghiệm tốt nhất.';
                        $body = 'Hãy ấn vào liên kết bên dưới để kích hoạt tài khoản nhé. <br><br>';
                        $body .= 'Liên kết: <br>'.$linkToken.'<br>';
                        $body .= '<br>Chúc bạn một ngày tốt lành. <br>Trân trọng cảm ơn.';
                        $sucmail = sendMail($email, $subject, $body);
                        } else {
                            $activeToken = null;
                        }
                        if (!empty($pass)) {
                            $hashPassword = password_hash($pass, PASSWORD_DEFAULT);
                        }
                        $updateData = [
                            'firstName' => $firstName,
                            'lastName' => $lastName,
                            'email' => $email,
                            'pass' => $hashPassword,
                            'status' => $status,
                            'activeToken' => $activeToken,
                            'update_time' => date("Y-m-d H:i:s")
                        ];
                        $setClause = [];
                        foreach ($updateData as $key => $value) {
                            $setClause[] = "$key = :$key";
                        }
                        $setClauseString = implode(', ', $setClause);
                        
                $sql = "UPDATE account SET $setClauseString WHERE id = :id";
                $stmt = $conn->prepare($sql);

                $updateData['id'] = $id_get; // Thêm `id` vào mảng tham số
                $suc = $stmt->execute($updateData);

                if ($suc) {
                    setFlashdata('tb', 'Sửa khoản thành công!');
                    setFlashdata('tb_type', 'success');
                    loadPage('?modules=admin&action=edit&id='.$id_get);
                    exit();
                } else {
                    setFlashdata('tb', 'Có lỗi xảy ra!');
                    setFlashdata('tb_type', 'danger');
                }
            } catch (PDOException $e) {
                die("Kết nối thất bại: " . $e->getMessage());
            }
            } else {
                setFlashdata('tb', 'Có lỗi xảy ra, hãy kiểm tra lại thông tin!');
                setFlashdata('tb_type', 'danger');
            }
        }
    } else {
        echo "id không tồn tại...";
        die();
    }
} else {
    echo "id không hợp lệ...";
    die();
}

$ms = getFlashdata('tb');
$ms_type = getFlashdata('tb_type');
?>

<div class="container">
    <div class="regis2">
        <form action="" method="post">
            <h2>Sửa thông tin tài khoản</h2>
            <?php msg($ms, $ms_type); ?>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Họ: </label>
                        <input name="firstName" type="text" class="form-control" placeholder="Họ:"
                            value="<?php echo !empty($u_firstName) ? htmlspecialchars($u_firstName) : ''; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Mật khẩu: </label>
                        <input name="pass" type="password" class="form-control" id="pass"
                            placeholder="Mật khẩu(không nhập nếu không đổi):"
                            value="<?php echo !empty($pass) ? htmlspecialchars($pass) : ''; ?>">
                    </div>
                    <?php echo !empty($msg['pass']) ? '<div class="error">'.reset($msg['pass']).'</div>' : ''; ?>
                    <div class="mb-3">
                        <label for="repass" class="form-label">Nhập lại mật khẩu mới: </label>
                        <input name="repass" type="password" class="form-control" id="repass"
                            placeholder="Nhập lại mật khẩu(không nhập nếu không đổi):"
                            value="<?php echo !empty($repass) ? htmlspecialchars($repass) : ''; ?>">
                        <?php echo !empty($msg['pass2']) ? '<div class="error">'.reset($msg['pass2']).'</div>' : ''; ?>
                    </div>

                </div>

                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Tên: </label>
                        <input name="lastName" type="text" class="form-control" placeholder="Tên:"
                            value="<?php echo !empty($u_lastName) ? htmlspecialchars($u_lastName) : ''; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email: </label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Name@gmail.com"
                            value="<?php echo !empty($email) ? htmlspecialchars($email) : htmlspecialchars($u_email); ?>"
                            required>
                        <?php echo !empty($msg['mail']) ? '<div class="error">'.reset($msg['mail']).'</div>' : ''; ?>
                    </div>

                    <div class="mb-3 form-group">
                        <label for="status" class="form-label">Trạng thái: </label>
                        <select name="status" class="form-control">
                            <option value="1" <?php echo $u_status == 1 ? 'selected' : ''; ?>>Kích hoạt</option>
                            <option value="0" <?php echo $u_status == 0 ? 'selected' : ''; ?>>Chưa kích hoạt
                            </option>
                        </select>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Sửa tài khoản</button>

            <a href="<?php echo _WEBHOST; ?>?modules=admin&action=listuser">
                <button class="btn btn-success" type="button">Quay lại</button> </a>

        </form>
    </div>
</div>
<?php
home("foot-admin");
?>