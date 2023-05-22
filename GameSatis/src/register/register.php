<?php
session_start();
if(isset($_SESSION["username"])){
    header("location:../main/home.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>GameSatış - Register</title>
    <style>
        * {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
			height: 600px;
			font-family: 'Roboto', sans-serif;
			background-color: rgb(229, 231, 235);
		}

		h2 {
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 1.5rem;
			font-weight: 900;
			color: rgb(55, 65, 81);
		}

		form {
			flex-direction: column;
			justify-content: flex-start;
			align-items: flex-start;
			padding: 48px;
			margin-top: 2rem;
			width: 370px;
			height: 400px;
			background-color: #fff;
			border-radius: 4px;
			box-shadow: 4px 4px 7px lightgray;
		}

		label {
			display: flex;
			text-transform: capitalize;
			margin-top: 1.2rem;
			margin-bottom: 0.3rem;
			font-size: 0.7rem;
			letter-spacing: 0.5px;
			font-weight:400;
			color: rgb(55, 65, 81);
		}

		input {
			
			width: 100%;
			line-height: 3rem;
			background-color: rgb(229, 231, 235);
			border: none;
			border-radius: 4px;
		}

		button {
			margin-top: 2.2rem;
			width: 100%;
			height: 3rem;
			text-transform: capitalize;
			font-size: 0.9rem;
			font-weight: 700;
			font-family: 'Roboto', sans-serif;
			color: rgb(220, 229, 247);
			background-color: rgb(37, 99, 235);
			border-radius: 4px;
			border: none;
			cursor: pointer;
		}

		div {
			display: flex;
			justify-content: center;
			width: 100%;
			margin-top: 1.4rem;
		}

		a {
			margin: 0 10px;
			font-size: 0.8rem;
			font-weight: 300;
			letter-spacing: 0.5px;
			text-decoration: none;
			color: rgb(37, 99, 235);
			text-transform: capitalize;
		}

		span {
			font-size: 0.7rem;
			color: rgb(37, 99, 235);
		}
		</style>
</head>
<body>
    <section>
        <h2 class="title">Qeydiyyat</h2>
        <form method="post" action="./regwork.php">
            <label for="email">Elektron poçt</label>
            <input name="email" type="text">
            <label for="password">Şifrə</label>
            <input type="text" name="password">
            <button name = "btn" type="submit" class="#">Qeydiyyatdan keç</button>
            <h5><?php echo isset($_SESSION['err-msg']) ? $_SESSION['err-msg'] : ""; ?></h5>
            <div>
                <a href="../forget/forgetpass.php"  rel="noopener">Şifrəni unutmusunuz?</a>
                <span>/</span>
                <a href="../login/login.php" rel="noopener">Daxil ol</a>
            </div>
        </form>
    </section>    
</div>
</body>
</html>