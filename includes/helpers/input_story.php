<?php
  require ("includes/init.php");

  if (isset($_POST['story'])){
    $story->sanitize($_POST['story'], Cleaner::WORD_CHARS);  
    if (!empty($story)){
      $query = "
      INSERT INTO Stories (story, datetime)
      VALUES ('". $story ."', ". date() .")
      "; 
      if (!mysql_query($query, $con)) {
        die('Error: ' . mysql_error());
      }
    }
    
  }
 header('Location: index.php');

?>