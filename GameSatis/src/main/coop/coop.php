<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:../../../index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Əməkdaşşlıq İstəki</title>
    <link rel="stylesheet" href="coop.css" />
    <script src="https://kit.fontawesome.com/83dad1f87d.js" crossorigin="anonymous"></script>
  </head>
  <body>
   <br>
   <br>
   <br>
   <br>
   <i class="fa ar fa-arrow-left" onclick="history.back()" aria-hidden="true"></i>
    <form action="send.php" method="post" id="survey-form">
      <label for="selectRole"
        >Özünüzü təqdim edin və bizə necə kömək edəcəyinizdən məlumat verin</label
      >
      <textarea
        style="height: 100px;"
        id="textComment"
        name="info"
        placeholder="Bura daxil edin...."
        ></textarea>        
        
        
        
        <label for="textComment">Kömək edəcəyiniz sahəni qısa adlandırın</label>
        <textarea
        style="height: 100px;"
        id="textComment"
        name="comments"
        placeholder="Bura daxil edin...."
      ></textarea>

      <button type="submit">Bitirmək</button>
    </form>
  </body>
</html>
