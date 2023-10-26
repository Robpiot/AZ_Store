<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang = ENG>
<head>
<meta name = "title" content='AZ-Store'>
<link rel="stylesheet" href="./Assets/Styles/CSS/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>AZ-Store</title>
</head>
<body>
    <?php include './phpscripts/header.php'; ?>
<main>
    <section>
        <div>
            <h2>SHOE THE RIGHT ONE.</h2>
            <button>See our store</button>
        </div>
        <div>
            <h2>NIKE</h2>
            <img src="Ressources/shoe_one.png" alt="shoe_one">
        </div>
    </section>
    <section>
        <div><h3>Our last products</h3></div>
       
        <?php
        include './phpscripts/display_card.php';
        ?>
    </section>
    <section>
        <div>
        <img src="Ressources/shoe_two.png" alt="shoe_one">
        <h3>WE PROVIDE YOU THE BESTQUALITY</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, esse quis ab ullam magni sit corporis, quam, quibusdam illum quaerat provident vero.</p>
        </div>
    </section>
    <section>
        <div class="cardBis">
            <img src="Ressources/image-emily.jpg" alt="Emily">
            <h4>Emily from xyz</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, facere! Molestiae impedit nostrum possimus!</p>
        </div>
        <div class="cardBis">
            <img src="Ressources/image-thomas.jpg" alt="Thomas">
            <h4>Thomas from corporate</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, facere! Molestiae impedit nostrum possimus!</p>
        </div>
        <div class="cardBis">
            <img src="Ressources/image-jennie.jpg" alt="Jennie">
            <h4>Jennie from Nike</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, facere! Molestiae impedit nostrum possimus!</p>
        </div>
    </section>
    <?php include './phpscripts/cart.php'; 
    add_to_cart($item)
    ?>
</main>
<?php
include './phpscripts/footer.php';
?>
</body>