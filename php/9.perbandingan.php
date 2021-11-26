<!DOCTYPE html>
<html lang="id" >
  <head>
    <meta charset="utf-8">
    <title>perbandingan php</title>
    <style media="screen">
      #tulisan{font-size:23px;}
      h1{color:blue;}
    </style>

    <rel="shortcut icon" href="buwung.jpg">
      <?php  include('tampilanatas.php' ) ?>
  </head>

  <body>
    <h1>perbandingan php</h1>

    <table id="tulisan">
      <li>perbandingan digunakan untuk membandingkan antara 2 data</li>
      <li>apakah data tersebut sama atau tidak</li>
      <li>digunakkan di percabangan if else</li>
      <li>perbandingan ini akan menghasilkan nilai berupa false jika kedua data tidak identik/sama</li>
      <li>dan akan menghasilkan nilai true jika data benar benar sama /identik</li>
      <li>untuk membandingkan gunakkan == untuk mengecek kesamaan dari kedua data</li>
      <li>untuk membandingkan data gunakkan != untuk mengecek apakah kedua data memang tidak identik/sama</li>
      <li>untuk operator && digunakkan untuk membandingkan apakah kedua data tersebut adalah sama dalam artian nilai booleannya</li>
      <li>kalau nilai booleannya dari kedua data tersebut adalah false maka akan menghasilkan false jika salah satunya true maka hasilnya juga false</li>
      <li>untuk && sendiri akan saya demokan biar agan tahu gambarannya contohnya adalah login user dan password</li>
      <li>kalo untuk || or sendiri dia akan menghasilkan nilai true jika keduanya true jika salah satunya saja yang bernilai true maka akan menghasilkan true</li>
      <li>jika keduanya false maka akan menghasilkan false</li>
      <li>kita akan ganti && dengan || kita akan melihat hasilnya</li>
      <li><a href="index.php">kembali</a></li>
    </table>

    <?php
  $buah1='apel';
  $buah2='apel';
  if ($buah1 != $buah2) {
    echo "buah 1 tidak sama dengan buah  2 ";
  }else {
    echo "buahnya sama ";
  }

    ?>
  </body>

</html>
