<?php
include("../connect/connect.php");

$cooper = $dbh->prepare("SELECT * FROM cooperators WHERE ID = ?");
$cooper->execute([$_GET["id"]]);

$coop = $cooper->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ətraflı</title>
    <style>        
        body{
            background-color: rgb(41, 37, 37);
            
        }
        /* width */
        ::-webkit-scrollbar {
        width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        background: #f1f1f1; 
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: #888; 
        }
        .btn-secondary:hover{
        background-color: red;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: red;
        }
        .card{
        background-color: #c4b9b9;

        }
        header{
            display: flex;
            flex: 1;
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
        .active{
            background-color: red;
        }
        li a{
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .firstelem{
            margin-left: 50px;
        }
        
        li a:hover{
            background-color: red;
        }

 
    </style>
</head>
<div class="topnav">
    <ul>       
    <li><a href="#news"><?php echo $_SESSION["username"]?></a></li>
      <li><a href="../main/home.php">Ana Səhifə</a></li>
      <li><a href="./coop.php">Əməkdaşlıq İstəkləri</a></li>
      <li><a href="../addGame/addGame.php">Oyun Əlavə Etmək</a></li>
      <li><a href="./contact.php">Əlaqə İstəkləri</a></li>
      <li><a class="cixis" href="../../../exit.php">Çıxış</a></li>
    </ul>
</div>
<body>

    
</body>
</html>