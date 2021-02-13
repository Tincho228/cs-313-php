<?php

/*********************************
  
    THIS IS THE ACCOUNTS CONTROLLER

**********************************/

// Create or access a Session
session_start();
//$_SESSION['loggedin'] = 0;

// Get the database connection file
require_once '../library/connections.php';
require_once '../library/functions.php';
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
        $cl_phone = filter_input(INPUT_POST, 'cl_phone', FILTER_SANITIZE_STRING);
        $cl_password = filter_input(INPUT_POST, 'cl_password', FILTER_SANITIZE_STRING);
        
        $cl_email = checkEmail($cl_email);
        $checkPassword = checkPassword($cl_password);
        // Check for existing email 
        $existingEmail = checkExistingEmail($cl_email);
        // Check for existing email address in the table
        
        if($existingEmail){
            $_SESSION['message'] = '<p>That email address already exists. Do you want to login instead?</p>';
            include '../views/registration.php';
            exit;
        }
        // Check for missing data
        if (empty($cl_firstname) || empty($cl_lastname) || empty($cl_email) || empty($cl_password) || empty($cl_phone)) {
            $_SESSION['message'] = '<p>Please provide information for all empty form fields.</p>';
            include '../views/registration.php';
            exit;
        }
        // Hash the checked password
        $hashedPassword = password_hash($cl_password, PASSWORD_DEFAULT);
        // Send the data to the model
        $regOutcome = regClient($cl_firstname, $cl_lastname, $cl_email, $cl_phone, $hashedPassword );
    
        // Check and report the result
        if ($regOutcome === 1) {
            setcookie('firstname', $cl_firstname, strtotime('+1 year'), '/');
            $_SESSION['message'] = '<p>Thanks for registering '.$cl_firstname.'. Please use your email and password to login.</p>';
            $_SESSION['cl_email'] = $cl_email;
            header('location:index.php?action=login');
            exit;  
        } else {
            $_SESSION['message'] = '<p>Sorry '.$cl_firstname.', but the registration failed. Please try again.</p>';
            include '../view/registration.php';
            exit;
        }
        break;
    case 'login':
        include "../views/login.php";
        break;
    case 'Login':
        // Filter and store the data
        $cl_email = filter_input(INPUT_POST, 'cl_email', FILTER_SANITIZE_EMAIL);
        $existingEmail = checkExistingEmail($cl_email);
        // Validating email
        $cl_email = checkEmail($cl_email);
        
        $cl_password = filter_input(INPUT_POST, 'cl_password', FILTER_SANITIZE_STRING);
        //Validating password
        $checkPassword = checkPassword($cl_password);

        // Check for missing data
        if (empty($cl_email) || empty($checkPassword)) {
            $_SESSION['message'] = '<p>Please provide information for all empty form fields.</p>';
            include '../views/login.php';
            exit;
        }
        // A valid password exists, proceed with the login process
        // Query the client data based on the email address
        $clientData = getClient($cl_email);
        
        
        // Compare the password just submitted against
        // the hashed password for the matching client if email exists.
        if(!$existingEmail){
                $_SESSION['message'] = '<p class="message_error">The email does not exist. PLlease try again<br>If you are not a member click the link below</p>';
                include '../views/login.php';
                exit;
            }
            else {
                $hashCheck = password_verify($cl_password, $clientData['cl_password']);
            }
        // If the hashes don't match create an error
        // and return to the login view
        if (!$hashCheck) {
                $_SESSION['message'] = '<p>Please check your password and try again.</p>';
                include '../views/login.php';
                exit;
        }else {
        // A valid user exists, log them in
        $_SESSION['loggedin'] = TRUE;
        // Remove the password from the array
        // the array_pop function removes the last
        // element from an array
        array_pop($clientData);
        // Store the array into the session
        $_SESSION['clientData'] = $clientData;
        
        // Send them to the admin view
        
        include "../views/home.php";
        exit;
        }
        break;
    case 'Logout':
        session_destroy();
        header('location:../index.php');
        break;
    case 'updateClient':
        include '../views/client-update.php';
        break;
    case 'modifyAccount':
        $cl_firstname = filter_input(INPUT_POST, 'cl_firstname', FILTER_SANITIZE_STRING);
        $cl_lastname = filter_input(INPUT_POST, 'cl_lastname', FILTER_SANITIZE_STRING);
        $cl_email = filter_input(INPUT_POST, 'cl_email', FILTER_SANITIZE_EMAIL);
        $cl_id = filter_input(INPUT_POST, 'cl_id', FILTER_SANITIZE_NUMBER_INT);
        $cl_phone = filter_input(INPUT_POST, 'cl_phone', FILTER_SANITIZE_STRING);
        // Validating Email and Password with custom functions
        $cl_email = checkEmail($cl_email);
        // Check for existing email 
        $existingEmail = checkExistingEmail($cl_email);
        // Check for missing data
        if (empty($cl_firstname) || empty($cl_lastname) || empty($cl_email) || empty($cl_phone)) {
            $_SESSION['message'] = '<p>Please provide information for all empty form fields.</p>';
            include '../views/client-update.php';
            exit;
        }
        // Check if the new email is available
        if($_SESSION['clientData']['cl_email'] != $cl_email) {
                if($existingEmail){
                    $_SESSION['message'] = '<p>Sorry, ' .$cl_email. ' is not available. Try again</p>';
                    include '../views/client-update.php';  
                    exit;
                }else {
                        // Send the data to the model
                        $updateResult = updateAccount($cl_id, $cl_firstname, $cl_lastname, $cl_email, $cl_phone);
                        // Check and report the result
                        if ($updateResult) {
                                $_SESSION['message'] = "<p>Congratulations, your Account was successfully updated.</p>";
                                $clientData = getClientModified($cl_id);
                                // A valid user exists, log them in
                                $_SESSION['loggedin'] = TRUE;
                                array_pop($clientData);
                                $_SESSION['clientData'] = $clientData;
                                // Send them to the admin view
                                header('location:index.php');
                                exit;
                        } else {
                        $_SESSION['message'] = '<p>Sorry, your Account could not be updated.</p>';
                        include "../views/client-update.php";
                        exit;
                        }           
                        }
        } else {
                 // Send the data to the model
                 $updateResult = updateAccount($cl_id, $cl_firstname, $cl_lastname, $cl_email, $cl_phone);
                 // Check and report the result
                 if ($updateResult) {
                    $_SESSION['message'] = "<p>Congratulations, your Account was successfully updated.</p>";
                    $clientData = getClientModified($cl_id);
                    // A valid user exists, log them in
                    $_SESSION['loggedin'] = TRUE;
                    array_pop($clientData);
                    $_SESSION['clientData'] = $clientData;
                    // Send them to the admin view
                    header('location:index.php');
                    exit;
                 } else {
                    $_SESSION['message'] = '<p>Sorry, your Account could not be updated.</p>';
                    include "../view/client-update.php";
                    exit;
                 }           
            }
            break;
    case 'updatePassword':
            $cl_password = filter_input(INPUT_POST, 'cl_password', FILTER_SANITIZE_STRING);
            $cl_id = filter_input(INPUT_POST, 'cl_id', FILTER_SANITIZE_NUMBER_INT);
            //Validating password
            $checkPassword = checkPassword($cl_password);
            $clientData = getClientModified($cl_id);
            // Check for missing data
            if (empty($cl_id) || empty($checkPassword)) {
                $_SESSION['message'] = '<p>Please provide information for all empty form fields.</p>';
                include "../views/client-update.php";
                exit;
            }
            // Hash the checked password
            $hashCheck = password_verify($cl_password, $clientData['cl_password']);
            // If the hashes match create an error
            // and return to the login view
            if ($hashCheck) {
                $_SESSION['message'] = '<p>Notice: It cannot be the same password</p>';
                include "../views/client-update.php";
                exit;
            }
            // Store the array into the session
            array_pop($clientData);
            $_SESSION['clientData'] = $clientData;
    
            $hashedPassword = password_hash($cl_password, PASSWORD_DEFAULT);
            // Send the data to the model
            $updateResult = updatePassword($hashedPassword, $cl_id);
            // Clear the password from dataClient and store it into the SESSION
            
            // Check and report the result
            if ($updateResult === 1) {
                $_SESSION['message'] = '<p>Congratulations! Your password has been updated.</p>';
                header('location:index.php');
                exit;  
            } else {
                $_SESSION['message'] = '<p>Sorry, your Password could not be changed. Please try again.</p>';
                include "../views/client-update.php";
                exit;
            }
            break;
    default:
            
        include "../views/admin.php";
        break;
 }
 ?>