<?php
include( "./src/connect/connect.php");
$malllar = $dbh->prepare("SELECT * FROM mallar");
$malllar->execute();
$mallar = $malllar->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/83dad1f87d.js" crossorigin="anonymous"></script>
    <title>UsbShop</title>
</head>
<body>
    <div class="grid">
            <!-- Navbar, login fln -->
            <?php
        foreach($mallar as $mal){ ?>
            <div class="card" style="width: 18rem;">
                <!--     
                    //<?php 
                //if($_SESSION["usertype"] == 1){
                    //?>
                <a class="btn btn-primary"  href='adminsil.php?oyunadi=<?php // echo $mal['GameName']?>'>Oyunu Sil</a>
                <?php //} ?>
                -->
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($mal["image"]);?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $mal['Name'] ?></h5>
                    <?php
                        if($mal["Discount"] != 0){
                    ?>
                        <a>Bu məhsula <?php echo (int)(($mal['Discount']/$mal["Price"])*100)?>% endirim var</a>
                    <?php } ?><br>
                    <h class="card-text"><?php echo $mal['Price']?>  ₼ yox cəmi</h>
                    <p class="card-text"><?php echo $mal['Price'] - $mal["Discount"]?>  ₼</p>
                </div>
                <!-- <a href="../buy/buy.php?game=<?php echo $mal['GameName'] ?>"class="btn btn-secondary">Sifariş Etmək</a> -->
                <a class="btn btn-secondary">Sifariş Etmək</a>
                
                <?php }?>
        </div>
    </body>
</html>