<?php
include("../../connect/connect.php");
if(isset($_SESSION['username'])){
    if($_SESSION['usertype'] != 1){
        header("location:../../main/home.php");
    }
}
else{
    header("location:../../../index.php");
}
$sil = $dbh->prepare("DELETE FROM cooperators WHERE ID = ? ");
$sil->execute([$_GET["id"]]);
header("location:./coop.php");

?>