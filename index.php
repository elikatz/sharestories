<?php

  ini_set('display_errors', 'On');
  require ("includes/init.php");

  include("includes/fragments/header.php");
  include("includes/fragments/input_story_form.php");
  
   
   if (isset($_POST['story'])){
     $story = htmlspecialchars($_POST['story'], ENT_QUOTES);
     $story = $mrClean->sanitize($story, Cleaner::WORD_CHARS);  
     if (!empty($story)){
       $conn->insertStory($story);
       echo "<p id=\"share\">Thanks for Sharing</p>";
     }
    else{
      echo "<p id=\"share\">Please only use letters, numbers and the following
      characters: - ( ) ! ? . ' , <br />
      Substitute \" with ' </p>";
    }
   }  
  echo "</div>";
    
  require("includes/helpers/display_stories.php");
  include("includes/fragments/footer.php");
?>