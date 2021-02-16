<?php

function regShoppingCart($shopping_cart){
    $db = herokuConnection();
    foreach ($shopping_cart as $row) {
        $pr_id = $row['pr_id'];
        $cl_id = $_SESSION['clientData']['cl_id'];
        $sql = 'INSERT INTO public.orders (cl_id, pr_id) VALUES (:cl_id, :pr_id)';
        // Create the prepared statement using the phpmotors connection
        $stmt = $db->prepare($sql);    
        //  Binding values
        $stmt->bindValue(':cl_id', $cl_id, PDO::PARAM_INT);
        $stmt->bindValue(':pr_id', $pr_id, PDO::PARAM_INT);
        // Insert the data
        $stmt->execute();
     }
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}

?>