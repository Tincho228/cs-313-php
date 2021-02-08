<?php

/*********************************
  
    THIS IS THE ACCOUNTS CONTROLLER

**********************************/

// Create or access a Session
session_start();
//$_SESSION['loggedin'] = 0;

// Get the database connection file
require_once '../library/connections.php';
//require_once '../library/functions.php';
require_once '../model/accounts-model.php';

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
        }*/
        // Check for missing data
        if (empty($cl_firstname) || empty($cl_lastname) || empty($cl_email) || empty($cl_password) || empty($cl_phone)) {
            $_SESSION['message'] = '<p>Please provide information for all empty form fields.</p>';
            include '../views/registration.php';
            exit;
        }/*
        // Hash the checked password
        $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);
        // Send the data to the model*/
        $regOutcome = regClient($cl_firstname, $cl_lastname, $cl_email, $cl_password, $_phone);
        // Check and report the result
        if ($regOutcome === 1) {
            setcookie('firstname', $clientFirstname, strtotime('+1 year'), '/');
            $_SESSION['message'] = '<p class="message">Thanks for registering '.$cl_firstname.'. Please use your email and password to login.</p>';
            $_SESSION['clientEmail'] = $cl_email;
            header('location:index.php?action=login');
            exit;  
        } else {
            $_SESSION['message'] = '<p class="message">Sorry '.$cl_firstname.', but the registration failed. Please try again.</p>';
            include '../view/registration.php';
            exit;
        }
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