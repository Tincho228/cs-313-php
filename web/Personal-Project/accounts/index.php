<?php

/*********************************
  
    THIS IS THE ACCOUNTS CONTROLLER

**********************************/

// Create or access a Session
session_start();
//$_SESSION['loggedin'] = 0;

// Get the database connection file
/*require_once '../library/connections.php';
// Get the PHP Motors model for use as needed
require_once 'model/main-model.php';
// Get the functions library
require_once 'library/functions.php';*/


$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

// Check if the firstname cookie exists, get its value

switch ($action){
    case 'registration':
        include "../views/registration.php";
        break;
    case 'register': 
        // Filter and store the data
        $cl_firstname = filter_input(INPUT_POST, 'cl_firstname', FILTER_SANITIZE_STRING);
        $cl_lastname = filter_input(INPUT_POST, 'cl_lastname', FILTER_SANITIZE_STRING);
        $cl_email = filter_input(INPUT_POST, 'cl_email', FILTER_SANITIZE_EMAIL);
        $cl_phone = filter_input(INPUT_POST, 'cl_email', FILTER_SANITIZE_NUMBER_INT);
        $cl_password = filter_input(INPUT_POST, 'cl_password', FILTER_SANITIZE_STRING);
        echo $cl_firstname. $cl_lastname. $cl_email. $cl_password.$cl_phone;
        /*// Validating Email and Password with custom functions/
        $clientEmail = checkEmail($clientEmail);
        $checkPassword = checkPassword($clientPassword);
        // Check for existing email 
        $existingEmail = checkExistingEmail($clientEmail);
        // Check for existing email address in the table
        if($existingEmail){
            $_SESSION['message'] = '<p class="message_error">That email address already exists. Do you want to login instead?</p>';
            include '../view/login.php';
            exit;
        }
        // Check for missing data
        if (empty($clientFirstname) || empty($clientLastname) || empty($clientEmail) || empty($checkPassword)) {
            $message = '<p class="message_error">Please provide information for all empty form fields.</p>';
            include '../view/registration.php';
            exit;
        }
        // Hash the checked password
        $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);
        // Send the data to the model
        $regOutcome = regClient($clientFirstname, $clientLastname, $clientEmail, $hashedPassword);
        // Check and report the result
        if ($regOutcome === 1) {
            setcookie('firstname', $clientFirstname, strtotime('+1 year'), '/');
            $_SESSION['message'] = '<p class="message">Thanks for registering '.$clientFirstname.'. Please use your email and password to login.</p>';
            $_SESSION['clientEmail'] = $clientEmail;
            header('location:/phpmotors/accounts/index.php?action=login');
            exit;  
        } else {
            $message = '<p class="message">Sorry '.$clientFirstname.', but the registration failed. Please try again.</p>';
            include '../view/registration.php';
            exit;
        }*/
        break;
    case 'login':
        include "../views/login.php";
        break;
    case 'Login':
        echo "loggedin";
        break;
    default:
        include "../views/home.php";
        break;
 }
 ?>