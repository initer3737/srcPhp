<?php include('tampilanatas.php');?>

<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>variable fungsi</title>
        <style media="screen">
          h2{
            font-style: italic;
            color:blue;
          }
        </style>
  </head>
  <body>
    <h1>variable fungsi</h1>
<h2>variable di dalam fungsi adalah variable yang memanggil fungsi</h2>
  <h2>diikuti tanda kutip .....contohnya saya mempunyai fungsi </h2>
    <h2>bernama jaka dan didalamnya terdapat</h2>
      <h2> perintah echo"halo jaka" masukkan ke dalam variable;</h2>
    <h2>contoh $nama='jaka'; untuk memanggilnya saya cukup </h2>
 <h2>ketikkan nama variablenya disusul ()</h2>
<h2>layaknya memanggil fungsi </h2>


    <h3><?php
    function uang()
    {
      echo'uang tuan krab adalah 500 dolar';
    }
$uang_mrkrabs='uang';
 $uang_mrkrabs();
    ?></h3>
  </body>
</html>
