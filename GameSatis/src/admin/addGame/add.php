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


$sql = $dbh->prepare("INSERT INTO games (GameName,ShortDescription,LongDescription,CardPhoto,FullPhoto,Price)  VALUES(?,?,?,?,?,?)");
$sql->execute([$_POST["name"],$_POST["qsinfo"],$_POST["uzuninfo"],$_POST["minii"],$_POST["fulli"],$_POST["price"]]);
header("location:../admin.php");
?>