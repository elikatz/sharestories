<?php

  class Connector {
    
    private $con;
    
    function __construct(){

      $this->con = mysql_connect("url","dbname","password");
      if (!$this->con)
        {
        die('Could not connect: ' . mysql_error());
        }
      mysql_select_db("sorrystory", $this->con);
    }
    
    function __descruct() {
      mysql_close($this->con);
    }
    
    function getConnection() {
      return $this->con;
    }
    
    function insertStory($story){
      $query = "
      INSERT INTO Stories (story)
      VALUES (\"". $story ."\")
      "; 
      if (!mysql_query($query, $this->con)) {
        die('Error: ' . mysql_error());
        return "bad data";
      }
    }
    
  }
  
?>
