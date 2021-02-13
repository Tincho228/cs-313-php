<?php

/*********************************
  
    THIS IS THE PRODUCTS CONTROLLER

**********************************/

// Create or access a Session
session_start();

// Get the database connection file
require_once '../library/connections.php';
//require_once '../library/functions.php';
//require_once '../model/accounts-model.php';
//require_once '../model/products-model.php';
require_once '../model/orders-model.php';

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

// Check if the firstname cookie exists, get its value
switch ($action){
case 'addtoCart':
    echo "add to  session cart";
    if(isset($_SESSION['shopping_cart'])){
        $item_array_id = array_column($_SESSION['shopping_cart'],"pr_id");
        if(!in_array($_POST['pr_id'], $item_array_id)){
            $count = count($_SESSION['shopping_cart']);
            $item_array = array(
                'pr_name' => filter_input(INPUT_POST, 'pr_name', FILTER_SANITIZE_STRING),
                'pr_price' => filter_input(INPUT_POST, 'pr_price', FILTER_SANITIZE_NUMBER_INT),
                'pr_comment' => filter_input(INPUT_POST, 'pr_comment', FILTER_SANITIZE_STRING),
                'pr_id' => filter_input(INPUT_POST, 'pr_id', FILTER_SANITIZE_NUMBER_INT),
                'cl_id' => filter_input(INPUT_POST, 'cl_id', FILTER_SANITIZE_NUMBER_INT)
            );
        $_SESSION['shopping_cart'][$count] = $item_array;
        }
        else {
            $_SESSION['message'] = "item already added";
        }
    }
    else{
        $item_array = array(
            'pr_name' => filter_input(INPUT_POST, 'pr_name', FILTER_SANITIZE_STRING),
            'pr_price' => filter_input(INPUT_POST, 'pr_price', FILTER_SANITIZE_NUMBER_INT),
            'pr_comment' => filter_input(INPUT_POST, 'pr_comment', FILTER_SANITIZE_STRING),
            'pr_id' => filter_input(INPUT_POST, 'pr_id', FILTER_SANITIZE_NUMBER_INT),
            'cl_id' => filter_input(INPUT_POST, 'cl_id', FILTER_SANITIZE_NUMBER_INT)
        );
        $_SESSION['shopping_cart'][0] = $item_array;
    }
    header('location:../index.php');
break;
case 'delete':
    foreach($_SESSION['shopping_cart'] as $key => $values){
        if($values['pr_id'] === $_GET["pr_id"]){
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    include "../views/cart.php";
    break;
case 'checkout':
    include "../views/checkout.php";
    break;
case 'confirmation':
    $shopping_cart = $_SESSION['shopping_cart']; 
    regShoppingCart($shopping_cart);
    unset($_SESSION['shopping_cart']); 
    include "../views/confirmation.php";
    break;
default:
    include "../views/cart.php";
break;
}
?>