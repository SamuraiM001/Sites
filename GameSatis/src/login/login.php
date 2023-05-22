<?php
require("../../check.php");
include("../connect/connect.php");
if(isset($_POST['email']) && isset($_POST['password'])){
    $uname = $_POST['email'];
    $password = $_POST['password'];
    
    $fetchuser = $dbh->prepare("SELECT * FROM users WHERE Email = ? AND Password = ?");
    $fetchuser->execute([$uname, $password]);
    $user = $fetchuser->fetch(PDO::FETCH_ASSOC);
    if($fetchuser->rowCount() > 0){        
        if($user['usertype'] == 1){            
            $_SESSION['usertype'] = 1;
        }
        $_SESSION['username'] = $uname;
        header("Location: ../main/home.php");
        exit();
    }    
    else{
        $_SESSION['log-err-msg'] = "Login və ya parol səhv daxil edilib";
        header("Location: ./loginpage.php");
        exit();
    }
}
else{
    $_SESSION['log-err-msg'] = "Zəhmət olmasa hər iki xananı doldurun";
    header("Location: ./loginpage.php");
}
?>




