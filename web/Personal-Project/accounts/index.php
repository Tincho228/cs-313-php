<?php

/*********************************
  
    THIS IS THE ACCOUNTS CONTROLLER

**********************************/

// Create or access a Session
session_start();
//$_SESSION['loggedin'] = 0;

// Get the database connection file
require_once '../library/connections.php';/*
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
        echo "registered";
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