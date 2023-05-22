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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Page</title>
</head>
<div class="topnav">
    <ul>       
    <li><a href=""><?php echo $_SESSION["username"]?></a></li>
      <li><a href="../main/home.php">Ana Səhifə</a></li>
      <li><a href="./coop/coop.php">Əməkdaşlıq İstəkləri</a></li>
      <li><a href="./addGame/addGame.php">Oyun Əlavə Etmək</a></li>
      <li><a href="./contact.php">Əlaqə İstəkləri</a></li>
      <li><a class="cixis" href="../../../exit.php">Çıxış</a></li>
    </ul>
</div>
<body>
<div style="margin:30px;background-color:darkgrey;"  class="card">
  <div class="card-header">
    Yeni Oyunlar Əlavə Et
  </div>
  <div  class="card-body">
    <h5 class="card-title">İstədiyin Oyunu Əlavə Et</h5>
    <p class="card-text">Aşağdakı düyməni kliklə.</p>
    <a href="./addGame/addGame.php" class="btn btn-secondary">Oyun Əlavə Etmək</a>
  </div>
</div>
</body>
</html>