<!DOCTYPE html>
<html lang="id" >
  <head>
    <meta charset="utf-8">
    <title>type data boolean</title>
    <style media="screen">
      #tulisan{font-size:23px;}
      h1{color:blue;}
    </style>
      <?php  include('tampilanatas.php' ) ?>
  </head>

  <body>
    <h1>tipe data boolean</h1>

    <table id="tulisan">
      <li>type data boolean di php </li>
      <li>untuk apa to type data boolean ini</li>
      <li>itu untuk membantu kita membuat program biasanya digunakkan</li>
      <li>di percabangan gak akan aku bahas disini next time aja :)</li>
      <li>kalo logika yang kita buat bener dia akan memunculkan nilai 1</li>
      <li>kalo salah ya 0 alias kosong :)</li>
      <li>cara gampangnya sih pake logika sederhana aja misal:</li>
      <li>1+1=2 apakah satu tambah satu itu sama dengan dua??? jawabannya benar/true</li>
      <li>1+2=45 ya pasti salah dong ya kan</li>
      <li>tapi hubungannya ama membuat web apaan gak nyambung ah :)</li>
      <li>misal agan mau buat web login kan butuh tuh logika percabangan nah kalo user masukin</li>
      <li>passwordnya benar alias true dia bakal bisa login tuh ke akun user nah kalo salah user gak bakalan bisa login </li>
      <li><a href="index.php">kembali</a></li>
    </table>

    <?php
    $false=1==2;
    $true=1==1;
      echo "contoh boolean <br>";
      echo "salah=$false <br>";
      echo "salah=$true<br>";


    ?>
  </body>

</html>
