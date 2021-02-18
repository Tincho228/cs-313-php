<?php

function regContactUs($cus_name, $cus_phone, $cus_mail, $cus_body){
    $db = herokuConnection();
    $sql = 'INSERT INTO public.contactus (cus_name, cus_phone, cus_mail, cus_body)
        VALUES (:cus_name, :cus_phone, :cus_mail, :cus_body)';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    //  Binding values
    $stmt->bindValue(':cus_name', $cus_name, PDO::PARAM_STR);
    $stmt->bindValue(':cus_phone', $cus_phone, PDO::PARAM_STR);
    $stmt->bindValue(':cus_mail', $cus_mail, PDO::PARAM_STR);
    $stmt->bindValue(':cus_body', $cus_body, PDO::PARAM_STR);
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