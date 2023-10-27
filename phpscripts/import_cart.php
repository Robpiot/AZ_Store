<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$cartContent = file_get_contents('./Data/cart.json');
    $cartItems = json_decode($cartContent, true);


    foreach ($cartItems as $item) {
        echo '<div class="container_store_product">';
        echo '<form class="container_store_product_form" method="post" action="index.php">';
        echo '<div class="container_store_product_photo">';
        echo '<img src="' . $item['image_url'] . '" alt="' . $item['product'] . '">';
        echo '</div>';
        echo '<div class="container_store_product_div">';
        echo '<div class="container_store_product_div_info">';
        echo '<h4>' . $item['product'] . '</h4>';
        echo '<p>' . $item['price'] . '€</p>';
        echo '<p> Quantity : ' . $item['number'] . '</p>';
        echo '</div>';
        echo '<div class="container_store_product_div">';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }


?>