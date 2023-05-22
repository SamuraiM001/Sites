<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple C++ Compiler</title>
</head>
<body>
    <h1>Simple C++ Compiler</h1>
    <form action="" method="post">
        <label for="code">Enter your C++ code:</label>
        <br>
        <textarea id="code" name="code" rows="10" cols="50"><?php if(isset($_POST['code'])) { echo htmlentities($_POST['code']); } ?></textarea>
        <br><br>
        <button type="submit" name="submit">Compile and Run</button>
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $code = $_POST['code'];
        $filename = "temp.cpp";
        $executable = "temp";
        $file = fopen($filename,"w+");
        fwrite($file,$code);
        fclose($file);
        exec("g++ $filename -o $executable");
        $output = shell_exec("./$executable");
        echo "<h3>Output:</h3><pre>$output</pre>";
        unlink($filename);
        unlink($executable);
    }
    ?>
</body>
</html>
