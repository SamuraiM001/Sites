<?php
include("../connect/connect.php");
if(isset($_SESSION['username'])){
    if($_SESSION['usertype'] != 1){
        header("location:../main/home.php");
    }
}
else{
    header("location:../../index.php");
}

$oyunadi = $_GET['oyunadi'];

$sql = $dbh->prepare("DELETE FROM games WHERE GameName = ?");
$sql->execute([$oyunadi]);
header("location:./home.php");
?>
