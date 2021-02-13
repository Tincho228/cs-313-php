<?php

/*********************************
  
    THIS IS THE PRODUCTS CONTROLLER

**********************************/

// Create or access a Session
session_start();
//$_SESSION['loggedin'] = 0;

// Get the database connection file
//require_once '../library/connections.php';
//require_once '../library/functions.php';
//require_once '../model/accounts-model.php';
//require_once '../model/products-model.php';

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

// Check if the firstname cookie exists, get its value
switch ($action){
case 'addtoCart':
    echo "add to  session cart";
break;
default:
    echo "defualt";
break;
}
?>