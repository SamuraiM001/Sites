<?php
session_start();
if(isset($_SESSION['username'])){
    if($_SESSION['usertype'] != 1){
        header("location:../main/home.php");
    }
}
else{
    header("location:../../index.php");
}
?>