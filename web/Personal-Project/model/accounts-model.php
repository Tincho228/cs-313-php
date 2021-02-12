<?php
//this is the accounts model.

//This function will handle site registrations.

function regClient($cl_firstname, $cl_lastname, $cl_email,  $cl_phone, $cl_password){
   
    $db = herokuConnection();
    $sql = 'INSERT INTO public.clients (cl_firstname, cl_lastname, cl_email, cl_phone, cl_password )
        VALUES (:cl_firstname, :cl_lastname, :cl_email, :cl_phone, :cl_password )';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    //  Binding values
    $stmt->bindValue(':cl_firstname', $cl_firstname, PDO::PARAM_STR);
    $stmt->bindValue(':cl_lastname', $cl_lastname, PDO::PARAM_STR);
    $stmt->bindValue(':cl_email', $cl_email, PDO::PARAM_STR);
    $stmt->bindValue(':cl_password', $cl_password, PDO::PARAM_STR);
    $stmt->bindValue(':cl_phone', $cl_phone, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
   }

function checkExistingEmail($cl_email) {
    // Create a connection object using the phpmotors connection function
    $db =  herokuConnection();
    // The SQL statement
    $sql = 'SELECT cl_email FROM public.clients WHERE cl_email = :cl_email';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':cl_email', $cl_email, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Only want to get a single row from the database if a match is found.
    $matchEmail = $stmt->fetch(PDO::FETCH_NUM);
    // Close the database interaction
    $stmt->closeCursor();
    // Check if the new variable is "true" (remember that "1" is the equivalent of TRUE and "0" is equivalent of FALSE).
    if(empty($matchEmail)){
         return 0;
       
    } else {
         return 1;
    }
   }   

// Get client data based on an email address
function getClient($cl_email){
    // Create a connection object using the phpmotors connection function
    $db = herokuConnection();
    // The SQL statement
    $sql = 'SELECT cl_id, cl_firstname, cl_lastname, cl_email, cl_level, cl_phone, cl_password  FROM public.clients WHERE cl_email = :cl_email';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':cl_email', $cl_email, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // We expect a single record to be returned, thus the use of the fetch() method.
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
    // Close the database interaction
    $stmt->closeCursor();
    return $clientData;
   }   

function updateAccount($cl_id, $cl_firstname, $cl_lastname, $cl_email, $cl_phone){ 
    // Create a connection object using the phpmotors connection function
    $db = herokuConnection();
    // The SQL statement
    $sql = 'UPDATE public.clients SET cl_firstname = :cl_firstname, cl_lastname = :cl_lastname, 
	cl_email = :cl_email, cl_phone = :cl_phone WHERE cl_id = :cl_id';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':cl_id', $cl_id, PDO::PARAM_INT);  
    $stmt->bindValue(':cl_firstname', $cl_firstname, PDO::PARAM_STR); 
    $stmt->bindValue(':cl_lastname', $cl_lastname, PDO::PARAM_STR); 
    $stmt->bindValue(':cl_email', $cl_email, PDO::PARAM_STR); 
    $stmt->bindValue(':cl_phone', $cl_phone, PDO::PARAM_STR); 
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
   }
// Get client data based on Client ID
function getClientModified($cl_id){
    // Create a connection object using the phpmotors connection function
    $db = herokuConnection();
    // The SQL statement
    $sql = 'SELECT cl_id, cl_firstname, cl_lastname, cl_email, cl_password, cl_level, cl_phone FROM public.clients WHERE cl_id = :cl_id';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':cl_id', $cl_id, PDO::PARAM_INT);
    // Insert the data
    $stmt->execute();
    // We expect a single record to be returned, thus the use of the fetch() method.
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
    // Close the database interaction
    $stmt->closeCursor();
    return $clientData;
   }
   function updatePassword($cl_password, $cl_id){ 
    // Create a connection object using the phpmotors connection function
    $db = herokuConnection();
    // The SQL statement
    $sql = 'UPDATE public.clients SET cl_password = :cl_password WHERE cl_id = :cl_id';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':cl_password', $cl_password, PDO::PARAM_STR); 
    $stmt->bindValue(':cl_id', $cl_id, PDO::PARAM_INT);  
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