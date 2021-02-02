<?php

              /*****************    ******* */
              /*********  FUNCTIONS ******* */
              /*********    *************** */
// Function that connects to database
function connection(){
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
// function that search by Book name;
function getBookname($book){
    $db =  connection(); 
    $sql = 'SELECT id, book, chapter, verse, content FROM public.scriptures WHERE book = :book';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':book', $book, PDO::PARAM_STR);
    $stmt->execute();
    $info = $stmt->fetchAll(PDO::FETCH_NUM);
    // Close the database interaction
    $stmt->closeCursor();
    return $info;
}
// function that build the links.
function linkBuilder($search_array){
  
  foreach($search_array as $array){
  
    echo "<li><a href='/phpmotors/vehicles/?action=vehicle-detail&invId=".urlencode($array['id'])."'>".$array['book']." ".$array['chapter'].":".$array['verse']."</a>";
  }
}
$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

// Check if the firstname cookie exists, get its value

switch ($action){
    case 'search':
        $book = filter_input(INPUT_POST,'book', FILTER_SANITIZE_STRING);
        $search_array = getBookname($book);
        if(count($search_array)<1){
          $message ='<p class"text-danger">Sorry, no information could be found.</p>' ;
          include "team-week5-scriptures.php";
          }
        include "team-week5-details-scriptures.php";
        break;
    default:
    include "team-week5-scriptures.php";
    break;
 }

?>