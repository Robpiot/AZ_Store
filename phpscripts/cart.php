<?php
function addToCart($item) {
    session_start();
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
        $cart[] = $item;
        $_SESSION['cart'] = $cart;
    } else {
        $cart = array();
        $cart[] = $item;
        $_SESSION['cart'] = $cart;
    }
}

?>