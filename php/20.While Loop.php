
<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <?php  include('tampilanatas.php' ) ?>
  </head>
  <body>
    <h1>belajar while loop</h1>
          <li>while loop adalah perulangan yang akan dieksekusi terus menerus</li>
          <li>jika kondisi bernilai true </li>
          <li>jika agan tidak berhati hati menggunakkan perulangan ini maka perangkat agan bakal nge crash alias rusak</li>
            <li>biasanya pada bahasa pemrograman python perulangan  while ini digunakkan oleh para hacker</li>
            <li>untuk membuat program bot yang akan mengakses website sehingga website menjadi down dan tidak lagi bisa di akses oleh orang lain</li>
            <li>untuk mengatasi serangan hacker agan butuh cloudflare untuk mengatasi serangan berjenis ini atau tambahkan recapta</li>

          <?php
              $nilai=0;
              while($nilai<=90){
                $nilai++;
                echo "aku lucu aku suka kamu yang ke=$nilai<br>";
              }

           ?>
  </body>
</html>
