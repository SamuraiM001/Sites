<?php
include("../connect/connect.php");
$quer = $dbh->prepare("SELECT * FROM users WHERE Email = ? AND Password = ?");
$quer->execute([$_POST['email'],$_POST['password']]);
?>