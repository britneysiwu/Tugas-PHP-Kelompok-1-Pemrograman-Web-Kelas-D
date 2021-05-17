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
    <link rel="stylesheet" type="text/css" href="upstyle.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
    
    <h1>Silahkan Unggah File</h1>

    <form action="upload2.php" method="post" enctype="multipart/form-data">
    
    
    <input type="file" name="berkas" id="berkas">
    

    <br>
    <br>
    
    <input type="submit" name="upload" id="upload" value="Upload" />


    <br>
    <a href="home.php">Kembali</a>
    </div>

</form>
    
</body>
</html>
