<?php
function createMembership(){
    $db = herokuConnection(); 
    $cl_id = $_SESSION['clientData']['cl_id'];
    $sql = 'INSERT INTO public.memberships (cl_id) VALUES (:cl_id)';
        // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);    
        //  Binding values
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

function getMemData(){
    // Create a connection object using the phpmotors connection function
    $db = herokuConnection();
    // The SQL statement
    $sql = 'SELECT clients.cl_email, memberships.mem_status, memberships.mem_date FROM clients JOIN memberships ON clients.cl_id = memberships.cl_id';
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