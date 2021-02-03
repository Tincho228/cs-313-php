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
   $links = "<p>Search Resuts</p>";
   $links .= "<ul>";
  foreach($search_array as $array){
  $links.= "<li><a href='team-week5-index.php?action=detail&id=".urlencode($array[0])."'>".$array[1]." ".$array[2].":".$array[3]."</a></li>";
  
  }
  $links .= "</ul>";
  return $links;
}
function getScriptureContent($id){
  $db =  connection(); 
    $sql = 'SELECT id, book, chapter, verse, content FROM public.scriptures WHERE id = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $info = $stmt->fetch(PDO::FETCH_NUM);
    // Close the database interaction
    $stmt->closeCursor();
    return $info;
}
function buildContentPage($content){
  $det = "<h1>Scripture Details</h1>";
  $det.= "<h4>".$content[1]." ".$content[2].":".$content[3]."</h4>";
  $det.= "<p>\"$content[4]\"</p>";
  return $det;
}


$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

switch ($action){
    case 'search':
        $book = filter_input(INPUT_POST,'book', FILTER_SANITIZE_STRING);
        $search_array = getBookname($book);
        if(count($search_array)<1){
          $message ='<p class"text-danger">Sorry, no information could be found.</p>' ;
          include "team-week5-scriptures.php";
          exit;
          }
        $detail_list = linkBuilder($search_array);
        include "team-week5-scriptures.php";
        break;
    case 'detail':
        $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
        $content = getScriptureContent($id);
        $content_detail = buildContentPage($content);
        include "team-week5-details.php";
    break;
    default:
    include "team-week5-scriptures.php";
    break;
 }

?>