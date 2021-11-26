<!DOCTYPE html>
<html lang="id" >
  <head>
    <meta charset="utf-8">
    <title>variable</title>
    <style media="screen">
      #tulisan{font-size:23px;}
      h1{color:blue;}
    </style>
      <?php  include('tampilanatas.php' ) ?>
  </head>

  <body>
    <h1>aritmatika</h1>

    <table id="tulisan">
      <li>sama seperti matematika</li>
      <li>terdapat - ,+,*,/,</li>
      <li>gak perlu ane jelasin ke agan dah</li>
      <li>harusnya agan dah tau sendiri</li>
      <li>gunanya???????? </li>
      <li>ya buat menghitung dong :)</li>
      <li><a href="index.php">kembali</a></li>
    </table>

    <?php
    echo "------------contoh aritmatika:--------";
    $bil1=12;
    $bil2=12;
    echo "<li>bilangan yang ke 1=$bil1</li>";
    echo "<li>bilangan yang ke 2=$bil2</li>";
    //Operator
    $kurang =    $bil1 - $bil2;
    $tambah =    $bil1 + $bil2;
    $kali   =    $bil1 * $bil2;
    $bagi   =    $bil1 / $bil2;
    echo "<li>ohayou minnasan selamat belajar pemrograman ya :)</li>";
    echo "<li>hasil operator aritmatika </li>";
    echo "<li>hasil dari $bil1-$bil2=$kurang</li>";
    echo "<li>hasil $bil1+$bil2=$tambah</li>";
    echo "<li>hasil $bil1*$bil2=$kali</li>";
    echo "<li>hasil $bil1/$bil2=$bagi</li>";
    echo "<li>-$bil1</li>";
    echo "<li>+$bil1</li>";

    ?>
  </body>

</html>
