<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function add_to_cart($item) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $productId = $_POST['productId'];

    $cartContent = file_get_contents('./Data/cart.json');
    $cartItems = json_decode($cartContent, true);

    if (isset($cartItems[$productId])) {
        $cartItems[$productId]['number'] = $cartItems[$productId]['number'] + 1;
    } else {
        $cartItems[$productId] = [
            'product' => $item['product'],
            'price' => $item['price'],
            'image_url' => $item['image_url'],
            'number' => 1
        ];
    }

    $jsonContent = json_encode($cartItems);
    file_put_contents('./Data/cart.json', $jsonContent);
    }
}

?>