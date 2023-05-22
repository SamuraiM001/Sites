<?php
session_start();
if(isset($_SESSION['username'])){
    header("location:./src/main/home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>GameSatış - Ana Səhifə</title>
</head>
<body>
    <ul>
      <li><a href="src/login/loginpage.php" >Hesaba Daxil Ol</a></li>
      <li><a href="src/register/register.php">Qeydiyyatdan Keç</a></li>
    </ul>
</body>
</html>