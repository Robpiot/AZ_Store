<?php 
  $productsJson = file_get_contents('./Data/products.json');
  $products = json_decode($productsJson, true);





  foreach ($products as $item) {
    echo '<div class="container_store_product">';
    echo '<form class="container_store_product_form" method="post" action="index.php">';
    echo '<div class="container_store_product_photo">';
    echo '<img src="' . $item['image_url'] . '" alt="' . $item['product'] . '">';
    echo '</div>';
    echo '<div class="container_store_product_div">';
    echo '<div class="container_store_product_div_info">';
    echo '<h4>' . $item['product'] . '</h4>';
    echo '<p>' . $item['price'] . '€</p>';
    echo '</div>';
    echo '<div class="container_store_product_div">';
    echo '<form method="post" action="add_to_cart.php">';
    echo '<input type="hidden" name="productId" value="' . $item['id'] . '">';
    echo '<button class="container_store_product_button" type="submit"> Add to card </button>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
};
  





?>