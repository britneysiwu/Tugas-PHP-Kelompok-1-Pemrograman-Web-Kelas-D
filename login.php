<?php
session_start();
//ketika sudah login, user tetap berada di halaman
if( isset($_SESSION["login"]) ) {
    header("Location: upload.php");
    exit;
}

//mengecek apa tombol submit sudah ditekan atau tidak
if( isset($_POST["submit"]) ) {
    //mengecek username & password
    if( $_POST["username"] == "britney" && $_POST["password"] == "3112") {
    //jika benar, redirect ke halaman admin
    $_SESSION["login"] = true;
    header("Location: upload.php");
    exit;
    } else {
    //jika salah, tampilkan pesan kesalahan
    $error = true; 
    } 
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class = container>
    <h2>LOGIN</h2>
    
    <?php if( isset($error) ) : ?>
    <p>Username atau Password Salah!</p>
    <?php endif; ?>
    
    
    <form action="" method="post">
        <div class="inform">
        <div class="row">
            
            <label for="username">Username </label>            
            <input type="text" name="username" id="username">
            </div>
            </div>
        
            
            <label for="password">Password </label>
            <input type="password" name="password" id="password">
            </div>
        
            <div class="buttons">
            <button type="submit" name="submit">Login</button>
    </div>
        </div>
        
    </form>
    
    </div>


</body>
</html>
