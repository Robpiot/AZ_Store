<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang = ENG>
<head>
<meta name = "title" content='AZ-Store'>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>AZ-Store</title>
</head>



<body>
<section>
<div>
<h2>Checkout</h2>
</div>
<div class="items">

</div>
</div>
</section>
<section class="form">


<form method="GET" action="checkout.php">
    
<input type="text" name ="first_name" placeholder="First name" id="first_name" autocomplete="off" required>

<input type="text" name="last_name" placeholder="Last name" id="last_name" autocomplete="off" required>

<input type="email" name="email" placeholder="Email" id="email" autocomplete="off" required>

<input type="text" name="address" placeholder="Address" id="address" autocomplete="off"required>

<input type="text" name="city" placeholder="City" id="city" autocomplete="off" required>

<input type="number" name="zip" placeholder="Zip" id="zip" autocomplete="off" required>

<input type="text" name="country" placeholder="Country" id="country" autocomplete="off" required>

<input input name="submit" value="Submit" type="submit" class="form__button" required>
</form>
<?php
include './phpscripts/formValidate.php';
validateForm($_GET);
    
    
    
    ?>
    
    </section>
    </body>