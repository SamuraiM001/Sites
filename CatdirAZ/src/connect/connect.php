<?php
  session_start();
  try {
   $dbh = new PDO('mysql:host=localhost;dbname=catdiraz', "root", "");
  } catch ( PDOException $e) {
      echo $e->getMessage();
  }
?>