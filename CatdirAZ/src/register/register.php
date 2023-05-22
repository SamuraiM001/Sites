<?php
session_start();
if(isset($_SESSION['username'])){
    header("location:../main/home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-Daxil Ol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="vh-100 d-flex justify-content-center align-items-center ">
        <div class="col-md-5 p-5 shadow-sm border rounded-5 border-primary bg-white">
            <h2 class="text-center mb-4 text-primary">Qeydiyyatdan Keç</h2>
            <form method="post" action="otp.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Ünvanınız</label>
                    <input type="email" name="email" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Şifrəniz</label>
                    <input type="password"  name="password" class="form-control border border-primary" id="exampleInputPassword1" required>
                </div>
                <p class="small"><a class="text-primary" href="">Şifrənizi unutmusunuz?</a></p>
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Qeydiyyatdan Keç</button>
                </div>
            </form>
            <div class="mt-3">
                <p class="mb-0  text-center">Hesabınız var? <a href="../login/login.php"
                        class="text-primary fw-bold">Daxil Ol</a></p>
            </div>
        </div>
    </div>
</body>

</html>