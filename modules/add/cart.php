<?php
if (isset($_GET['action2']) && isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $action = $_GET['action2'];
    $item_type = isset($_GET['item_type']) ? $_GET['item_type'] : null;
    $color = isset($_GET['color']) ? $_GET['color'] : null;
    $quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;

    if (!isset($_SESSION['cart'][$item_type])) {
        $_SESSION['cart'][$item_type] = [];
    }

    switch ($action) {
        case 'add_to_Cartlist':
            $product_exists = false;

            foreach ($_SESSION['cart'][$item_type] as &$cart_item) {
                if ($cart_item['id'] == $product_id && $cart_item['color'] == $color) {
                    $cart_item['quantity'] += $quantity;
                    $product_exists = true;
                    break;
                }
            }

            if (!$product_exists) {
                $_SESSION['cart'][$item_type][] = [
                    'id' => $product_id,
                    'quantity' => $quantity,
                    'color' => $color
                ];
            }
            break;

            case 'remove_from_Cartlist':
                if (isset($_GET['product_id'])) {
                    $product_id = $_GET['product_id'];
                    $item_type = isset($_GET['item_type']) ? $_GET['item_type'] : null;
                    $color = isset($_GET['color']) ? $_GET['color'] : null;
            
                    if (isset($_SESSION['cart'][$item_type])) {
                        $_SESSION['cart'][$item_type] = array_filter(
                            $_SESSION['cart'][$item_type],
                            function ($cart_item) use ($product_id, $color) {
                                return !($cart_item['id'] == $product_id && $cart_item['color'] == $color);
                            }
                        );
                        echo json_encode(['success' => true]);
                        exit;
                    }
                }
                echo json_encode(['success' => false]);
                break;
            
        case 'check_in_cart':
            $product_exists = false;
            $product_quantity = 0;

            foreach ($_SESSION['cart'][$item_type] as $cart_item) {
                if ($cart_item['id'] == $product_id && $cart_item['color'] == $color) {
                    $product_exists = true;
                    $product_quantity = $cart_item['quantity'];
                    break;
                }
            }

            echo json_encode(['exists' => $product_exists, 'quantity' => $product_quantity]);
            exit;

            case 'update_quantity':
                if (isset($_GET['quantity']) && $_GET['quantity'] > 0) {
                    $quantity = $_GET['quantity'];
                    foreach ($_SESSION['cart'][$item_type] as &$cart_item) {
                        // Kiểm tra sản phẩm dựa trên ID và màu
                        if ($cart_item['id'] == $product_id && $cart_item['color'] == $color) {
                            $cart_item['quantity'] = $quantity;
                            echo json_encode(['success' => true]);
                            exit;
                        }
                    }
                } else {
                    echo json_encode(['success' => false, 'message' => 'Quantity must be greater than zero']);
                }
                break;
            
            
    }
}
?>