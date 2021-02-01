<?php
function connection(){
  
  $db = parse_url(getenv("DATABASE_URL"));
  echo $db;

}
connection();
?>