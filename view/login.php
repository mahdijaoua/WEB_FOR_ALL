<?php 
include '../Controller/login.php';
session_start();
login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>LOGIN</h1>
        <label for="">Nom :</label>
        <input type="text" name="nom" id="">
        <button type="submit">Login</button>
    </form>
</body>
</html>