<?php
if(isset($_SESSION["username"])){
    if ($_SESSION["usertype"] ==  1) {
        header("location:../admin/admin.php");//admin panele getmelidir
    }else{
        header("location:../main/home.php");        
    }
}
?>