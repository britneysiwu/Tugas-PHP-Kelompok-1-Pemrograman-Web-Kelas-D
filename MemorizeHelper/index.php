<?php
session_start();
    //menghalangi user pindah ke halaman upload apabila user belum berhasil login
    if( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }
    
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", height=device-height, initial-scale=1">
    <title>repl.it</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    
  </head>
  <body onload="getRandomWord()"> <!--ketika buka page, fungsi getrandom sudah jalan-->

    <div class="container">
        <h1 class="title">MEMORIZE HELPER</h1>

        <div class="term">
            <h3>Term</h3>
        </div>

        <div class="definition">
            <h3>Definition</h3>
        </div>

        <div class="button">
            <button class="check">Lihat Jawaban</button>
            <button class="next">Selanjutnya</button>
            <button class="hide">Sembunyikan</button>
            <button class="col">Ganti Warna</button>
        </div>

        
      </div>
      
        <script src="script.js"></script>
        <script src="color.js"></script>
  </body>
</html>