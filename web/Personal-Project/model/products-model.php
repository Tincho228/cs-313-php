<?php
// This is the products model 


// Get the list of available products

function getProductList(){
    // Create a connection object using the phpmotors connection function
    $db = herokuConnection();
    // The SQL statement
    $sql = 'SELECT * FROM public.products' ;
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // Insert the data
    $stmt->execute();
    // We expect a single record to be returned, thus the use of the fetch() method.
    $clientData = $stmt->fetchAll();
    // Close the database interaction
    $stmt->closeCursor();
    return $clientData;
   }   







?>