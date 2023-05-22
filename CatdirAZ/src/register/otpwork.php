<?php
include('../connect/connect.php'); 

if($_POST["otp"] == $_SESSION["last-otp"]){
    $stmty = $dbh->prepare("SELECT * FROM users WHERE Email = ?");
    $stmty->execute([$_SESSION["email"]]);
    if($stmty->rowCount() > 0){
        $_SESSION['err-msg'] = 'Belə istifadəçi artıq mövcuddur';
        header("location:../register.php");
        exit();
    }
    else{
        $username = $_SESSION['name'] + " " + $_SESSION['surname'];
        $sql = "INSERT INTO users  (Username,Email,Password) VALUES (?,?,?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$username,$_SESSION["email"], $_SESSION["password"]]);
        $_SESSION["username"] = $_SESSION["email"];        
    }
}
else{
    $_SESSION["otp-err-msg"] = "Kodu Səhv Daxil Etdiniz. Emailinizə yenidən kod göndəriləcək";
    header("location:./otp.php");
}
?>