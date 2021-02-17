<?php

/*********************************
  
    THIS IS THE MEMBERSHIPS CONTROLLER

**********************************/

// Create or access a Session
session_start();

// Get the database connection file
require_once '../library/connections.php';
require_once '../library/functions.php';
//require_once '../model/accounts-model.php';
require_once '../model/products-model.php';
require_once '../model/memberships-model.php';

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

// Check if the firstname cookie exists, get its value
switch ($action){
case 'activate':
    $mem_id = filter_input(INPUT_GET, 'mem_id', FILTER_SANITIZE_NUMBER_INT);
    // send data to model
    $outcome = activateMem($mem_id);
    if ($outcome === 1) {
        $_SESSION['message'] = '<p>Membership activated.</p>';
        header('location:index.php');
        exit;  
    } else {
        $_SESSION['message'] = '<p>Sorry, the operation failed. Please try again.</p>';
        header('location:index.php');
        exit;
    }
    break;
case 'deactivate':
    $mem_id = filter_input(INPUT_GET, 'mem_id', FILTER_SANITIZE_NUMBER_INT);
    $outcome = deactivateMem($mem_id);
    if ($outcome === 1) {
        $_SESSION['message'] = '<p>Membership deactivated.</p>';
        header('location:index.php');
        exit;  
    } else {
        $_SESSION['message'] = '<p>Sorry, the operation failed. Please try again.</p>';
        header('location:index.php');
        exit;
    }
    break;
case 'eliminate':
    
    break;
default:
    $dataProd = getAllproducts();
    $dataMem = getMemData();
    $memList = buildMemList($dataMem,$dataProd);
    include "../views/memberships.php";
break;
}
?>