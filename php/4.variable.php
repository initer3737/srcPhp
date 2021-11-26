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
    <h1>variable</h1>

    <table id="tulisan">
      <li>buat apa sih variable????</li>
      <li>buat nyimpen data dong</li>
      <li>ada 2 jenis type variable 1.pake tanda dolar contohnya $nama_variable_agan 2.const namavariable</li>
      <li>untuk variable yang menggunakan tanda dolar itu bisa agan ubah nilainya</li>
      <li>nah kalo agan pake yang const itu gak bisa diubah </li>
      <li>"kita menulis variable contoh kasusnya agan mau nulis kata yang berulang 12 kali maka akan terasa susah"</li>
      <li>juga merepotkan oleh karena itu diciptakanlah variable gunanya untuk menyimpan data </li>
      <li><a href="index.php">kembali</a></li>
    </table>

    <?php
$datavariable="arif java bin  aji wardaya golang nugroho kotlin";
      echo"$datavariable<br>";
      echo"$datavariable<br>";
      echo"$datavariable<br>";
      $datavariable="joko bin kotlin kubernetes";
      echo "-----setelah diubah menjadi:-------<br>";
      echo" $datavariable<br>";
      echo"$datavariable<br>";
      echo"$datavariable<br>";
echo "untuk variable yang tidak bisa diubah ada 2 pake define('namavariable','nilai variable')<br>";
echo "yang ke dua pake const nama variable <br>";


    ?>
  </body>

</html>
