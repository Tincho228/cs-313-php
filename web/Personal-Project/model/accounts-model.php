<?php
//this is the accounts model.

function herokuConnection(){
    try
    {
      $dbUrl = getenv('DATABASE_URL');
      $dbOpts = parse_url($dbUrl);
      $dbHost = $dbOpts["host"];
      $dbPort = $dbOpts["port"];
      $dbUser = $dbOpts["user"];
      $dbPassword = $dbOpts["pass"];
      $dbName = ltrim($dbOpts["path"],'/');
      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $db;
    }
    catch (PDOException $ex)
    {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }
  }
//This function will handle site registrations.

function regClient($cl_firstname, $cl_lastname, $cl_email, $cl_password, $cl_phone){
    
    // Create a connection object using the phpmotors connection function
    $db = herokuConnection();
    $rows = 1;
    return $rows;
    // The SQL statement
    /*$sql = 'INSERT INTO public.clients (cl_firstname, cl_lastname, cl_email, cl_password, cl_phone)
        VALUES (:cl_firstname, :cl_lastname, :cl_email, :cl_password, :cl_phone)';
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
