<?php include( 'tampilanatas.php' );?>
<?php include('style.php'); ?>

<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <?php  include('tampilanatas.php' ) ?>
  </head>
  <body>
    <h1>fungsi anonim pada php</h1>

  <li>fungsi anonimus adalah fungsi tanpa nama biasanya menempel di dalam variable di dalam parameter dan antek anteknya</li>
  <li>perlu diingat bahwa saat kita menulis anonim\ fungsi ke dalam variable</li>
  <li>kita harus menambahkan titik koma di akhir fungsi anonimus agar tidak eror </li>
  <li>yang ditampung di dalam fungsi tentu saja ada banyak type data biasanya berupa</li>
  <li>number,boolean string logika percabangan switch case array dan antek ateknya</li>
<?php

 $anonim=function($nama){

   echo "hai $nama aku lucu aku cinta kamu";
 };
 $anonim('dewi');
 echo "<br>satu aja dulu deh lainnya nyusul <br>";

function sapa($nama,$gedeinanunya):String
{
  return $gedeinanunya($nama);
}

echo sapa("jaka sembbung ",function($buatparameterbaru){
  return strtoupper($buatparameterbaru);
});

 ?>
  </body>
</html>
