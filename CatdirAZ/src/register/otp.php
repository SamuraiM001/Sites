<?php
include("../connect/connect.php");
if(isset($_SESSION["username"])){
    header("location:../main/home.php");
    exit();
}
$quer = $dbh->prepare("SELECT * FROM users WHERE Email = ?");
$quer->execute([$_POST['email']]);
$user = $quer->fetch(PDO::FETCH_ASSOC);

if($quer->rowCount() > 0){
    header('./register.php');
    $_SESSION['regerror'] = "Belə istifadəçi artıq mövcuddur";
    exit();
}
$_SESSION['username'] = $_POST['name']+" "+ $_POST['surname'];
$_SESSION["email"] = $_POST['email'];
$_SESSION["password"] = $_POST['password'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'samuraim001@gmail.com';                     //SMTP username
    $mail->Password   = 'rerynjtppokznetn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@Çatdır.az', 'Çatdır.az');
    $mail->addAddress($_POST['email']);
    $OTP = rand(100000,999999) ;
    $_SESSION["last-otp"] = $OTP;
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'OTP Kod';
    $mail->Body    = 'Sizin OTP kodunuz : <b>'.$OTP.'</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
} catch (Exception $e) {
    $_SESSION['err-msg']  = "Email Göndərilmədi, Səbəb: {$mail->ErrorInfo}";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameSatış - OTP</title>
</head>
<body>
    <form method="post" action="./otpwork.php">
        <input type="number" class="" name="otp">
        <button type="submit" name="btn" class="btn btn-success">Qeydiyyatdan keç</button>
    </form>
    <h1><?php echo isset($_SESSION["otp-err-msg"]) ? $_SESSION["otp-err-msg"] :"" ?></h1>
</body>
</html>