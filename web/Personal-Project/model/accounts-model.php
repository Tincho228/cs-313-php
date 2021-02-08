<?php
//this is the accounts model.


//This function will handle site registrations.

//function regClient($cl_firstname, $cl_lastname, $cl_email, $cl_password, $cl_phone){
    function regClient(){
    // Create a connection object using the phpmotors connection function
    herokuConnection();
    $rows = 1;
    return $rows;
    /*
    // The SQL statement
    $sql = "INSERT INTO public.clients (cl_firstname, cl_lastname, cl_email, cl_password, cl_phone)
        VALUES ('Martin', 'Quintero','martin_quintero521@hotmail.com', 'Martin.2020', '123321')";
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    
    $stmt->bindValue(':cl_firstname', $cl_firstname, PDO::PARAM_STR);
    $stmt->bindValue(':cl_lastname', $cl_lastname, PDO::PARAM_STR);
    $stmt->bindValue(':cl_email', $cl_email, PDO::PARAM_STR);
    $stmt->bindValue(':cl_password', $cl_password, PDO::PARAM_STR);
    $stmt->bindValue(':cl_phone', $cl_phone, PDO::PARAM_INT);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;*/
   }
