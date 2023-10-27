<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function validateForm($_get) {


if (isset($_GET['submit'])) {
    $first_name = htmlspecialchars($_GET['first_name']);
    $last_name = htmlspecialchars($_GET['last_name']);
    $email = $_GET['email'];
    $address = htmlspecialchars($_GET['address']);
    $city = htmlspecialchars($_GET['city']);
    $zip = $_GET['zip'];
    $country = htmlspecialchars($_GET['country']);
    
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
        unset($_SESSION['shopping-cart']);
        
        
        echo '
        <div class="result">
        <h2>Informations</h2>
        <ul class="result_info">
        <li><strong>Firstname : </strong> <span class="result-user">' . $filterFirstname . '</span></li>
        <li><strong>Lastname : </strong> <span class="result-user">' . $filterLastname . '</span></li>
        <li><strong>Email : </strong> <span class="result-user">' . $filterEmail . '</span></li>
        <li><strong>Address : </strong> <span class="result-user">' . $filterAddress . '</span></li>
        <li><strong>City : </strong> <span class="result-user">' . $filterCity . '</span></li>
        <li><strong>ZipCode :</strong> <span class="result-user">' . $filterZipCode . '</span></li>
        <li><strong>Country :</strong> <span class="result-user">' . $filterCountry . '</span></li>
        </ul>
        </div>';
        include './phpscripts/empty_cart.php';


        
       
    
        
        
        
       
    }}}

    ?>