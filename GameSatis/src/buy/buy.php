<?php
include("../connect/connect.php");
if(!isset($_SESSION['username'])){
    header("location:../../index.php");
}

$req = $dbh->prepare("SELECT * FROM Games WHERE GameName = ?");
$req->execute([$_GET['game']]);
$oyun = $req->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Sifariş - <?php echo $oyun["GameName"]?></title>
    <link rel="stylesheet" href="buy.css">
</head>
<body>
<div class="topnav">
    <ul class>       
    <li><a href=""><?php echo $_SESSION["username"]?></a></li>
      <li><a class="active">Ana Səhifə</a></li>
      <li><a class="" href="../main/coop/coop.php">Əməkdaşlıq</a></li>
      <li><a class="" href="../main/about.php">Haqqımızda</a></li>
      <li><a class="" href="../main/contact.php">Əlaqə</a></li>
      <?php
      if ($_SESSION['usertype'] == 1) {
          ?>
              <li><a class="" href="../admin/admin.php">Administrator Səhifəsi</a></li>
              
              <?php
      }?>
      <li><a class="cixis" href="../../../exit.php">Çıxış</a></li>
    </ul>
    </div>
    
</body>
</html>






