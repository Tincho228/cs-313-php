<?php

/*********************************
  
    THIS IS THE PRODUCTS CONTROLLER

**********************************/

// Create or access a Session
session_start();
//$_SESSION['loggedin'] = 0;

// Get the database connection file
require_once '../library/connections.php';
require_once '../library/functions.php';
require_once '../model/accounts-model.php';
require_once '../model/products-model.php';

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

// Check if the firstname cookie exists, get its value
switch ($action){
case 'addProduct':
    $pr_name = filter_input(INPUT_POST, 'pr_id', FILTER_SANITIZE_STRING);
    $pr_price = filter_input(INPUT_POST, 'pr_price', FILTER_SANITIZE_NUMBER_INT);
    $pr_comment = filter_input(INPUT_POST, 'pr_comment', FILTER_SANITIZE_STRING);
    // Check for missing data
    if (empty($pr_name) || empty($pr_price) || empty($pr_comment)) {
            $_SESSION['message'] = '<p>Please provide information for all empty form fields.</p>';
            include '../views/product-add.php';
            exit;
        }
    $regOutcome = addProduct($pr_name, $pr_price, $pr_comment);
    // Check and report the result
    if ($regOutcome === 1) {
        $_SESSION['message'] = '<p>Product successfuly added</p>';
        header("location:index.php");
        exit;  
    } else {
        $_SESSION['message'] = '<p>Sorry, the product could not be added. Please try again.</p>';
        include '../view/product-add.php';
        exit;
    }
    break;
case 'add-page':
    include "../views/product-add.php";
    break;
case 'delete':
    $pr_id = filter_input(INPUT_GET, 'pr_id', FILTER_SANITIZE_NUMBER_INT);
    $deleteInfo = deleteProduct($pr_id);
        if(count($deleteInfo)<1){
            $_SESSION['message'] = 'Sorry, the product could not be deleted.';
            include "../views/products.php";
            }
        $_SESSION['message'] = 'The product was deleted.';
        header("location:index.php");
    break;
case 'modify':
    echo "modifying";
    break;
default:
$product_data = getProductList();
$product_list = buildProductList($product_data);
include "../views/products.php";
break;

}