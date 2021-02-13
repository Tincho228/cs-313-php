<?php

/*********************************
  
    THIS IS THE MAIN CONTROLLER

**********************************/

// Create or access a Session
session_start();
//$_SESSION['loggedin'] = 0;

// Get the database connection file
// Get the database connection file
require_once 'library/connections.php';
require_once 'library/functions.php';
require_once 'model/products-model.php';


$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

// Check if the firstname cookie exists, get its value

switch ($action){
    case 'template':
     include "views/template.php";
    break;
     
    default:
    $product_data = getProductList();
    print_r($product_data);
    $product_cards = buildCarProducts($product_data);
    echo $product_cards;
    //require $_SERVER["DOCUMENT_ROOT"]."/Personal-Project/views/home.php";
     break;
 }
 ?>