<?php
include("../connect/connect.php");
if(!isset($_SESSION['username'])){
    header("location:../../../index.php");
}
$fetchsoyun = $dbh->prepare("SELECT * FROM Games");
$fetchsoyun->execute();
$oyunlar = $fetchsoyun->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/83dad1f87d.js" crossorigin="anonymous"></script>
    <title>GameSatış - Alış</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>    
    <div class="topnav">
    <ul class>       
    <li><a href=""><?php echo $_SESSION["username"]?></a></li>
      <li><a class="active">Ana Səhifə</a></li>
      <li><a class="" href="./coop/coop.php">Əməkdaşlıq</a></li>
      <li><a class="" href="./about.php">Haqqımızda</a></li>
      <li><a class="" href="./contact.php">Əlaqə</a></li>
      <?php
      if ($_SESSION['usertype'] == 1) {
          ?>
              <li><a class="" href="../admin/admin.php">Administrator Səhifəsi</a></li>
              
              <?php
      }?>
      <li><a class="cixis" href="../../exit.php">Çıxış</a></li>
    </ul>
    </div>
    </form>
      
    </ul>
    <br>
    <br>
    <div class="container">
    <?php
    foreach($oyunlar as $oyun){?>
        
        <div class="card" style="width: 18rem;">
        <?php 
        if($_SESSION["usertype"] == 1){
        ?>
            <a class="btn btn-primary"  href='adminsil.php?oyunadi=<?php echo $oyun['GameName']?>'>Oyunu Sil</a>
        <?php } ?>
            <img src="<?php echo $oyun["CardPhoto"] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $oyun['GameName'] ?></h5>
            <p class="card-text"><?php echo $oyun['Price'] ?>₼</p>
        </div>
        <a href="../buy/buy.php?game=<?php echo $oyun['GameName'] ?>" class="btn btn-secondary">Sifariş Etmək</a>
        <?php 
        if($_SESSION["usertype"] == 1){
        ?>
        </form>  
        <?php } ?>

        
    </div>
    <?php
    }
    ?>

    </div>

</body>
</html>