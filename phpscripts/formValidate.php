<?php

$first_name = $last_name = $email = $address = $city = $zip = "";

function validateForm($first_name, $last_name, $email, $address, $city, $zip) {
    $first_name_err = $last_name_err = $email_err = $address_err = $city_err = $zip_err = "";

    if(empty(trim($first_name))){
        $first_name_err = "First name is required.";
    } else{
        $first_name = filter_var(trim($first_name), FILTER_SANITIZE_STRING);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$first_name)){
            $first_name_err = "Only letters and white space allowed";
        }
    }
    if(empty(trim($last_name))){
        $last_name_err = "Last name is required.";
    } else{
        $last_name = filter_var(trim($last_name), FILTER_SANITIZE_STRING);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$last_name)){
            $last_name_err = "Only letters and white space allowed";
        }
    }
    if(empty(trim($email))){
        $email_err = "Email is required.";
    } else{
        $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_err = "Invalid email format";
        }
    }
    if(empty(trim($address))){
        $address_err = "Address is required.";
    } else{
        $address = filter_var(trim($address), FILTER_SANITIZE_STRING);
    }
    if(empty(trim($city))){
        $city_err = "City is required.";
    } else{
        $city = filter_var(trim($city), FILTER_SANITIZE_STRING);
    }
    if(empty(trim($zip))){
        $zip_err = "Zip code is required.";
    } else{
        $zip = filter_var(trim($zip), FILTER_SANITIZE_NUMBER_INT);
        if(!preg_match("/^[0-9]{5}$/",$zip)){
            $zip_err = "Invalid zip code format";
        }
    }

    if(empty($first_name_err) && empty($last_name_err) && empty($email_err) && empty($address_err) && empty($city_err) && empty($zip_err)){
        return "Your order has been saved.";
    } else {
        $error_message = "There was an error with your order:";
        $error_message .= "<ul>";
        if(!empty($first_name_err)){
            $error_message .= "<li>" . $first_name_err . "</li>";
        }
        if(!empty($last_name_err)){
            $error_message .= "<li>" . $last_name_err . "</li>";
        }
        if(!empty($email_err)){
            $error_message .= "<li>" . $email_err . "</li>";
        }
        if(!empty($address_err)){
            $error_message .= "<li>" . $address_err . "</li>";
        }
        if(!empty($city_err)){
            $error_message .= "<li>" . $city_err . "</li>";
        }
        if(!empty($zip_err)){
            $error_message .= "<li>" . $zip_err . "</li>";
        }
        $error_message .= "</ul>";
        return $error_message;
    }
}
?>