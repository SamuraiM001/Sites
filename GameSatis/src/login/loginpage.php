<?php
session_start();
if(isset($_SESSION["username"])){
    header("location:../main//home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameSatış - Login</title>
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
	background-color: #333;
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
	background-color: #333;
	border-radius: 4px;
	box-shadow: 4px 4px 10px black;
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
	padding-left: 10px;
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
    <form action="./login.php" method="post">
        <h2 style="color: white;" class="title">Daxil Ol</h2>
        <label style="color: white;" for="email">Elektron poçt</label>
        <input class="input-email" type="email" name="email" required>
        <label style="color: white;" for="password">Şifrə</label>
        <input class="input-password" type="password" name="password" required><br>
        <h5  style="color: white;"><?php echo isset($_SESSION['log-err-msg']) ? $_SESSION['log-err-msg'] : "" ?></h5>
        <button class="btn btn-secondary" type="submit">Daxil Ol</button>
        <div>
            <a href="../forget/forgetpass.php"  rel="noopener">Şifrəni unutmusunuz?</a>
            <span>/</span>
            <a href="../register/register.php" rel="noopener">Qeydiyyatdan keç</a>
        </div>
        
      </form>
    </form>
            
            
</body>
</html>