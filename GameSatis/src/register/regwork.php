<?php
session_start();
if(isset($_POST["btn"]) && isset($_POST["email"]) && ($_POST["password"])){
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];
    header("loaction:../otp.php");
}
else{
    $_SESSION["err-msg"] = "Məlumatlar Tam Daxil edilməyib";
    header("location:register.php");
}
?>