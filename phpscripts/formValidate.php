<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);







function validateForm($_post) {
   




if (isset($_POST['submit'])) {
    
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = $_POST['email'];
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $zip = $_POST['zip'];
    $country = htmlspecialchars($_POST['country']);
    
    $filterFirstname = filter_var($first_name);
    $filterLastname = filter_var($last_name);
    $filterEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $filterAddress = filter_var($address);
    $filterCity = filter_var($city,);
    $filterZipCode = filter_var($zip, FILTER_SANITIZE_NUMBER_INT);
    $filterCountry = filter_var($country,);
    
    $errors = [];
    
    if (empty($filterFirstname)) {
        $errors[] = 'Firstname is required';
    }
    if (empty($filterLastname)) {
        $errors[] = 'Lastname is required';
    }
    if (empty($filterEmail)) {
        $errors[] = 'Email is required';
    }
    if (empty($filterAddress)) {
        $errors[] = 'The address is required';
    }
    if (empty($filterCity)) {
        $errors[] = 'City is required';
    }
    if (empty($filterZipCode)) {
        $errors[] = 'ZipCode is required';
    }
    if (empty($filterCountry)) {
        $errors[] = 'Country is required';
    }
    
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<span class="error">' . $error . '</span>';
        }
    } else {
        
        
        
        echo "<h2>Thank you for your order!</h2>";
        header('Location: Checkout.php');
        

       
    
    }}
        
        
       
    }
    
    ?>