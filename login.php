<?php
session_start();
//ketika sudah login, user tetap berada di halaman
if( isset($_SESSION["login"]) ) {
    header("Location: home.php");
    exit;
}

//mengecek apa tombol submit sudah ditekan atau tidak
if( isset($_POST["submit"]) ) {
    //mengecek username & password
    if( $_POST["username"] == "britney" && $_POST["password"] == "3112") {
    //jika benar, redirect ke halaman admin
    $_SESSION["login"] = true;
    header("Location: home.php");
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
<link rel="stylesheet" type="text/css" href="logstyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class = container>
    <h1>LOGIN</h1>
    
    
    
    
    <form action="" method="post">
        <div class="inform">
        <div class="row">
            
            <!-- <label for="username">Username </label> -->
            <p>Username</p>
            <input type="text" name="username" placeholder="Masukkan Username" id="username">
            </div>
            </div>
        
            
            <!-- <label for="password">Password </label> -->
            <p>Password</p>
            <input type="password" name="password" placeholder="Masukkan Password" id="password">

            <div class="buttons">
            <button type="submit" name="submit">Login</button>
            </form>
            <br>

            <?php if( isset($error) ) : ?>
            <p class="status">Username atau Password Salah!</p>
            <?php endif; ?>
            </div>
    </div>
        </div>
        

    
    </div>


</body>
</html>
