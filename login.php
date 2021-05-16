<?php
//mengecek apa tombol submit sudah ditekan atau tidak
if( isset($_POST["submit"]) ) {
    //mengecek username & password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123") {
    //jika benar, redirect ke halaman admin
    header("Location: upload.html");
    exit;
    } else {
    //jika salah, tampilkan pesan kesalahan
    $error = true;
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
    <h2>Login</h2>
    
    <?php if( isset($error) ) ?>
    <p>username atau password salah</p>
    <?php endif; ?>
    
    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    
</body>
</html>
