<?php 
if (isset($_POST['submit'])) {

    $cartContent = file_get_contents('./Data/cart.json');
 $cartItems = json_decode($cartContent, true);
 file_put_contents("./Data/cart.json", json_encode([]));
}
