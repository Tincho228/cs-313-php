<?php

/*********************************
  
    THIS IS THE MAILS CONTROLLER

**********************************/

// Create or access a Session
session_start();

// Get the database connection file
require_once '../library/connections.php';
require_once '../library/functions.php';
require_once '../model/mails-model.php';

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

// Check if the firstname cookie exists, get its value
switch ($action){
case 'contactus':
    $cus_name = filter_input(INPUT_POST, 'cus_name', FILTER_SANITIZE_STRING);
    $cus_phone = filter_input(INPUT_POST, 'cus_phone', FILTER_SANITIZE_STRING);
    $cus_mail = filter_input(INPUT_POST, 'cus_mail', FILTER_SANITIZE_EMAIL);
    $cus_body = filter_input(INPUT_POST, 'cus_body', FILTER_SANITIZE_STRING);
    if (empty($cus_name) || empty($cus_phone) || empty($cus_mail) || empty($cus_body)) {
        $_SESSION['message'] = '<p>Please provide information for all empty form fields.</p>';
        include '../views/home.php';
        exit;
        }
    $outcome = regContactUs($cus_name, $cus_phone, $cus_mail, $cus_body);
    if ($regOutcome === 1) {
        $_SESSION['message'] = '<p>Thank you for your message '.$cus_name.'. We will be answer you back shortly.</p>';
        header('location:../index.php');
        exit;  
    } else {
        $_SESSION['message'] = '<p>Sorry '.$cus_name.', but the operation failed. Please try again.</p>';
        header('location:../index.php'); 
        exit;
    }
    break;
case 'eliminate':
   
    break;
case 'receive':
   
    break;
default:
    $dataMails = getMails();
    $mails =buildMails($dataMails);
    include "../views/mails.php";
break;
}
?>