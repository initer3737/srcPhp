<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <?php  include('tampilanatas.php' ) ?>
  </head>
  <body>
    <h1>belajar do while loop</h1>
          <li>sama seperti while loop dia akan menjalankan programnya dulu baru mengecek apakah bernilai true atau tidak</li>
          <li>gambarannya ada dibawah ini: </li>
          <li><img src="do-while.png"></li>
          <li>jika agan tidak berhati hati menggunakkan perulangan ini maka perangkat agan bakal nge crash alias rusak</li>
          <li>dia akan menjalankan program dulu baru mengecek kondisi jika kondisinya false program akan dihentikan</li>
<?php
$cat=0;
do {
  echo "kucingnya akan berlari yang ke $cat <br>";
  $cat++;
} while ($cat <=90);

 ?>
  </body>
</html>
