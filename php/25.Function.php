<?php include('39.include &require.php');?>
<?php include('style.php'); ?>

<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <?php  include('tampilanatas.php' ) ?>
  </head>
  <body>
    <h1>fungsi pada php</h1>

  <li>fungsi gunanya untuk menampung data agar terlihat rapi dan menarik tentu saja</li>
  <li>dan tidak berantakkan saat dibaca</li>
  <li>yang ditampung di dalam fungsi tentu saja ada banyak type data biasanya berupa</li>
  <li>number,boolean string logika percabangan switch case array dan antek ateknya</li>
<?php
function data(){
  $data1=true;
  $data2="aji bin kubernetes";
  echo "$data2";
}

data();

 ?>
  </body>
</html>
