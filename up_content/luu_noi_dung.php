<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = new mysqli("localhost", "root", "", "test");
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    $ten_san_pham = htmlspecialchars(trim($_POST['ten_san_pham'] ?? ''), ENT_QUOTES, 'UTF-8');
    $noi_dung_san_pham = htmlspecialchars(trim($_POST['noi_dung_san_pham'] ?? ''), ENT_QUOTES, 'UTF-8');

    if (empty($ten_san_pham) || empty($noi_dung_san_pham)) {
        die("<h3>Tên sản phẩm và nội dung không được để trống.</h3><a href='/up_content'>Quay lại</a>");
    }

    $sql = "INSERT INTO ipad (ten_san_pham, noi_dung) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $ten_san_pham, $noi_dung_san_pham);
        if ($stmt->execute()) {
            echo "<h3>Nội dung sản phẩm đã được lưu thành công.</h3>";
            echo "<a href='/up_content'>Thêm sản phẩm mới</a>";
        } else {
            error_log("Execute error: " . $stmt->error);
            echo "<h3>Đã xảy ra lỗi. Vui lòng thử lại.</h3>";
        }
        $stmt->close();
    } else {
        error_log("Prepare error: " . $conn->error);
        echo "<h3>Đã xảy ra lỗi khi chuẩn bị câu lệnh.</h3>";
    }

    $conn->close();
}

?>