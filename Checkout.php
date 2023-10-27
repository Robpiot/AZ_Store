



<!DOCTYPE html>
<html lang = ENG>
<head>
<meta name = "title" content='AZ-Store'>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>AZ-Store</title>
</head>

<?php include './phpscripts/header.php'; ?>



<body>
<section>
<div>
<h2>Checkout</h2>
</div>
<div class="items">
    <?php
    include './phpscripts/import_cart.php';
    ?>

</div>
</div>
</section>
<section class="form">


<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    
<input type="text" name ="first_name" placeholder="First name" id="first_name" autocomplete="off" required>

<input type="text" name="last_name" placeholder="Last name" id="last_name" autocomplete="off" required>

<input type="email" name="email" placeholder="Email" id="email" autocomplete="off" required>

<input type="text" name="address" placeholder="Address" id="address" autocomplete="off"required>

<input type="text" name="city" placeholder="City" id="city" autocomplete="off" required>

<input type="number" name="zip" placeholder="Zip" id="zip" autocomplete="off" required>

<input type="text" name="country" placeholder="Country" id="country" autocomplete="off" required>

<input input name="submit" value="Submit" type="submit" class="form__button" >
</form>
<?php
include './phpscripts/formValidate.php';

validateForm($_POST);

if (isset($_POST['submit'])) {

    $cartContent = file_get_contents('./Data/cart.json');
 $cartItems = json_decode($cartContent, true);
 file_put_contents("./Data/cart.json", json_encode([]));
}

?>

    
    </section>
    
    </body>
    <?php include './phpscripts/footer.php'; ?>
    </html>