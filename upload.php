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
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <p>Halo! Silahkan mengupload berkas</p>
    
	<p><label for="gambar">Gambar :</label>
	<input type="file" name="gambar" id="Gambar"></p>
    
</body>
</html>
