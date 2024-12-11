<?php
if (isset($_GET['action2']) && isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $action = $_GET['action2'];
    $item_type = isset($_GET['item_type']) ? $_GET['item_type'] : null;

    if (!isset($_SESSION['yeuthich'][$item_type])) {
        $_SESSION['yeuthich'][$item_type] = [];
    }

    switch ($action) {
        case 'add_to_wishlist':
            if (!in_array($product_id, $_SESSION['yeuthich'][$item_type])) {
                $_SESSION['yeuthich'][$item_type][] = $product_id; 
            }
            break;

        case 'remove_from_wishlist':
            if (($key = array_search($product_id, $_SESSION['yeuthich'][$item_type])) !== false) {
                unset($_SESSION['yeuthich'][$item_type][$key]); 
            }
            break;
    }

}
?>