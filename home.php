<?php
session_start();
    //menghalangi user pindah ke halaman upload apabila user belum berhasil login
    if( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="homestyle.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    
    <h1>Selamat Datang!</h1>
    
    <button type="button" onclick="location.href = 'upload.php';" name="mau upload">Upload Berkas</button>
    <br>
    <button type="button" onclick="location.href = 'MemorizeHelper/index.php';" name="ProjekUTS">Projek UTS</button>
    <br>
    <br>

    <a href="logout.php">Logout</a>
</div>
    
</body>
</html>