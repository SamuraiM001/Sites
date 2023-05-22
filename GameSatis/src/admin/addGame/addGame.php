<?php
session_start();
if(isset($_SESSION['username'])){
    if($_SESSION['usertype'] != 1){
        header("location:../../main/home.php");
    }
}
else{
    header("location:../../../index.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oyun Əlavə Et</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
fieldset{
    padding: 20px;
    background-color: #FFFFFF;
    margin-bottom: 20px;
    border: 2px solid #333;
    box-shadow: 2px 4px 10px red;
    margin-left: 35%;
    margin-right: 35%;
    border-radius: 10px;
    font-size: large;
    
}

legend{
    background-color:#333 ;
    color: #333;
    padding: 5px;
    border-radius: 10px;
}

.signUpTitle {
    margin: -5px -5px -25px;
    padding: 15px 25px;
    line-height: 35px;
    font-size: 26px;
    font-weight: 300;
    color: #333;
    text-align: center;
    text-shadow: 0 1px red;
 }
 
 
body{

    font: 13px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color: #333;
    margin-top: 1.25%;
    background-color: #333;
    /*background: linear-gradient(75deg, #FFFFFF, #16a085);*/
}

input{
    width: 100%;
    height: 50px;
    margin-bottom: 20px;
    padding: 0px;
    font-size: 17px;
    background: white;
    border: 2px solid #EBEBEB;
    border-radius: 7px;
    -webkit-box-shadow: inset 0 -2px #EBEBEB;
    box-shadow: inset 0 -2px #d2d1d1;
}
input[type='submit']:hover{
    background: yellow;
    box-shadow: inset 0 0px red;

}

input[type='submit']{
    margin-left: 35%;
    vertical-align: top;
    width: 15%;
    height: 54px;
    padding: 0;
    font-size: 22px;
    color: white;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
    background: red;
    border: 0;
    border-bottom: 2px solid #333;
    border-radius: 5px;
    cursor: pointer;
    -webkit-box-shadow: inset 0 -2px #15aa53;
    box-shadow: inset 0 -4px red;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }

  li a{
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  
  li a:hover{
    background-color: red;
  }
  #navbar {
    overflow: hidden;
    background-color: #333;
  }
  
  


    </style>
</head>
<div class="topnav">
    <ul>       
    <li><a href=""><?php echo $_SESSION["username"]?></a></li>
      <li><a href="../../main/home.php">Ana Səhifə</a></li>
      <li><a href="../coop/coop.php">Əməkdaşlıq İstəkləri</a></li>
      <li><a href="../addGame/addGame.php">Oyun Əlavə Etmək</a></li>
      <li><a href="../contact.php">Əlaqə İstəkləri</a></li>
      <li><a class="cixis" href="../../../exit.php">Çıxış</a></li>
    </ul>
</div>


<body>
    <form method="post" action="add.php"> 
               
        <fieldset>
            <label for="name">
                Oyunun adı:<br/>
                <input type="text" name="name" autofocus required>
            </label><br/>
            <label for="qsinfo">
                Qısa Məlumat:<br/>
                <textarea type="text" name="qsinfo" required></textarea>
            </label><br/>
            <label for="uzuninfo">
                Uzun Məlumat:<br/>
                <textarea type="text" style="height: 60px;" name="uzuninfo" required></textarea>
            </label><br/>
            <label for="date">
                Mini Icon:<br/>
                <input type="text" name="minii" required>
            </label><br/>
            <label for="icon">
                Full Icon:<br/>
                <input type="text" name="fulli"  required>
            </label><br/>
            <label for="name">
                Oyunun Qiyməti:<br/>
                <input type="number" name="price"  required>
            </label><br/>
        </fieldset>

      
        <input type="submit" value="Yerləşdir">
    </form>

</body>
</html>

</body>
</html>