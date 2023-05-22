<?php
include("../../connect/connect.php");
if(!isset($_SESSION['username'])){
    header("location:../../../index.php");
}
$send = $dbh->prepare("INSERT INTO cooperators (ReqOwner,Description,About) VALUES(?,?,?) ");
$send->execute([$_SESSION['username'],$_POST["info"],$_POST['comments']]);
header("location:../../../exit.php");

?>