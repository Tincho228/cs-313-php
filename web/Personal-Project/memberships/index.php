<?php

/*********************************
  
    THIS IS THE MEMBERSHIPS CONTROLLER

**********************************/

// Create or access a Session
session_start();

// Get the database connection file
require_once '../library/connections.php';
//require_once '../library/functions.php';
//require_once '../model/accounts-model.php';
//require_once '../model/products-model.php';
require_once '../model/memberships-model.php';

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

// Check if the firstname cookie exists, get its value
switch ($action){
case 'activate':
    
    break;
case 'deactivate':
   
    break;
case 'eliminate':
    
    break;
default:
    $dataMem = getMemData();
    $memList = buildMemList($dataMem);
    include "../views/memberships.php";
break;
}
?>