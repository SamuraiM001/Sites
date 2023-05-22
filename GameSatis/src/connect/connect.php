<?php
  session_start();
  try {
   $dbh = new PDO('mysql:host=localhost;dbname=gamesatis', "root", "");
  } catch ( PDOException $e) {
      echo $e->getMessage();
  }
?>