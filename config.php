<?php
ob_start();
const _HOST = "localhost";
const _USER = "root";
const _PASS = "";
const _DB = "test";

try {
    $conn = new PDO("mysql:host=" . _HOST . ";dbname=" . _DB, _USER, _PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES utf8mb4");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit(1);
}

date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (!isset($_SESSION['yeuthich'])) {
    $_SESSION['yeuthich'] = [];
}
function _fetch($sql, $params = []) {
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

$_ad = isset($_SESSION['admin']) ? $_SESSION['admin'] : null;

if ($_ad != null) {
    $ad_arr = _fetch("SELECT * FROM account WHERE email = ?", [$_ad]);

    if ($ad_arr) {
        $_id_ad = htmlspecialchars($ad_arr['id']);
        $_pass_ad = htmlspecialchars($ad_arr['pass']);
        $_admin_ad = htmlspecialchars($ad_arr['admin']);
        if (isset($_GET['out_ad'])) {
            unset($_SESSION['admin']);
            header("Location: ?modules=admin&action=login");
            exit;
        }
    }
}

$_user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

if ($_user != null) {
    $user_arr = _fetch("SELECT * FROM account WHERE email = ?", [$_user]);

    if ($user_arr) {
        $_id = htmlspecialchars($user_arr['id']);
        $_user = htmlspecialchars($user_arr['email']);
        $_pass = htmlspecialchars($user_arr['pass']);
        $_admin = htmlspecialchars($user_arr['admin']);
        $_phone = htmlspecialchars($user_arr['phone']);
        $_address = htmlspecialchars($user_arr['address']);
        if (isset($_GET['out'])) {
            // Xóa token đăng nhập của người dùng
            $table = 'logintoken';
            $sql = "DELETE FROM $table WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$_user]);
            unset($_SESSION['user']);
            header("Location: ?modules=home&action=home");
            exit;
        }
    }
}
define("_WEBHOST", 'http://' . $_SERVER['HTTP_HOST'] . '/');
define("_WEBDIR", __DIR__);
?>