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

// Delete a specific review
function deleteProduct($pr_id){
    $db = herokuConnection();
    $sql = $sql = 'DELETE FROM public.products WHERE pr_id = :pr_id';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':pr_id', $pr_id, PDO::PARAM_INT); 
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

// Add a product 
function addProduct($pr_name, $pr_price, $pr_comment){
    $db = herokuConnection();
    $sql = 'INSERT INTO public.products (pr_name, pr_price, pr_comment)
        VALUES (:pr_name, :pr_price, :pr_comment)';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    //  Binding values
    $stmt->bindValue(':pr_name', $pr_name, PDO::PARAM_STR);
    $stmt->bindValue(':pr_price', $pr_price, PDO::PARAM_INT);
    $stmt->bindValue(':pr_comment', $pr_comment, PDO::PARAM_STR);
    
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}

?>