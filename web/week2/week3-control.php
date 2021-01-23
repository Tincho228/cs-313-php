<?php
session_start();

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

 function searchForId($id, $array) {
    foreach ($array as $key => $val) {
        if ($val['itemId'] === $id) {
            return $key;
        }
    }
    return null;
 }
// Check if the firstname cookie exists, get its value

switch ($action){
    case 'addtocart':
        if(isset($_SESSION['shopping_cart'])){
            $item_array_id = array_column($_SESSION['shopping_cart'],"itemId");
            if(!in_array($_POST['itemId'], $item_array_id)){
                $count = count($_SESSION['shopping_cart']);
                $item_array = array(
                    'itemId' => $_POST['itemId'],
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'quantity' => $_POST['quantity']
                );
                $_SESSION['shopping_cart'][$count] = $item_array;
            }
            else {
                echo "item already added";
                $key = searchForId($_POST['itemId'],$_SESSION['shopping_cart']);
                $_SESSION['shopping_cart'][$key]['quantity'] += $_POST['quantity'];
            }
        }
        else{
            $item_array = array(
                'itemId' => $_POST['itemId'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity']
            );
            $_SESSION['shopping_cart'][0] = $item_array;
        }
        include "week3-items.php";
        break;
    case 'cart':
        include "week3-cart.php";
        break; 
    case 'delete':
            foreach($_SESSION['shopping_cart'] as $key => $values){
                if($values['itemId'] === $_GET["id"]){
                    unset($_SESSION['shopping_cart'][$key]);
                }
            }
        include "week3-cart.php";
        break;
    case 'checkout':
        include "week3-checkout.php";
        break;
    case 'confirmation':
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $_SESSION['email'] = test_input($_POST['email']); 
        $_SESSION['address'] = test_input($_POST['address']);

        include "week3-confirmation.php";
        break;
    case 'clearSession':
        unset($_SESSION['email']); 
        unset($_SESSION['address']); 
        unset($_SESSION['shopping_cart']);
        include "week3-items.php";
        break;
    default:
    include "week3-items.php";
 }

?>