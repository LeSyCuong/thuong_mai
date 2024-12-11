<?php
require_once(_WEBDIR . "/index.php");
$response = ['success' => false, 'message' => '', 'total' => 0];

try {
    if (isset($_GET['reductionCode']) && !empty($_GET['reductionCode'])) {
        $reductionCode = htmlspecialchars(trim($_GET['reductionCode'])); // Thêm trim() để loại bỏ khoảng trắng

        // Truy vấn mã giảm giá từ cơ sở dữ liệu
        $sql = "SELECT * FROM ma_khuyen_mai WHERE code = ? AND is_active = 1";
        $stmt = $conn->prepare($sql);  
        $stmt->execute([$reductionCode]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Kiểm tra mã giảm giá có hợp lệ không
        if ($result && count($result) > 0) {
            $discountValue = $result[0]['gia_tri_giam'];
            $_SESSION['discount'] = $discountValue; // Lưu giá trị giảm giá vào session

            // Giả sử $tong là tổng ban đầu, bạn sẽ tính lại tổng sau khi áp dụng giảm giá
            $tong = isset($tong) ? $tong : 0; // Đảm bảo $tong có giá trị
            $totalAfterDiscount = $tong - $discountValue; // Tính tổng sau giảm giá (giảm trực tiếp từ tổng)

            // Đảm bảo tổng không nhỏ hơn 0
            $totalAfterDiscount = max($totalAfterDiscount, 0);

            $response['success'] = true;
            $response['discount'] = $discountValue;
            $response['total'] = $totalAfterDiscount;
            $response['message'] = 'Mã giảm giá áp dụng thành công!';
        } else {
            $response['message'] = 'Mã giảm giá không hợp lệ hoặc đã hết hạn!';
        }
    } else {
        $response['message'] = 'Vui lòng nhập mã giảm giá!';
    }
} catch (PDOException $e) {
    // Xử lý lỗi PDO
    $response['message'] = 'Lỗi truy vấn cơ sở dữ liệu: ' . $e->getMessage();
} catch (Exception $e) {
    // Xử lý lỗi chung
    $response['message'] = 'Đã xảy ra lỗi: ' . $e->getMessage();
}

// Trả về kết quả dưới dạng JSON
header('Content-Type: application/json');
echo json_encode($response);
?>