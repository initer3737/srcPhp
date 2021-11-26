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
    <h1>array</h1>

    <table id="tulisan">
      <li>buat apa sih array????</li>
      <li>buat nyimpen data dong</li>
      <li>untuk menyimpan string lebih dari satu itu mirip kayak di perpustakaan</li>
      <li>kan di perpus ada yang namanya indek tuh nah di pemrograman juga ada yang namanya index gan</li>
      <li>untuk mengambil nilai dari array kita gunakan [] terus masukkan nilai indexnya</li>
      <li>gunanya buat  mengambil data arraynya untuk aray dimulai dari indek yang ke 0 </li>
      <li><a href="index.php">kembali</a></li>
    </table>

    <?php
    echo "------------contoh type data arrai:--------<br>";
    $nama=['joko','ajik','yonas','naruto','buwung','maman'];
    var_dump($nama);
    echo "-------cara ngeprintnya--------------<br>";
    echo "$nama[0]<br>";
    echo "$nama[1]<br>";
    echo "$nama[2]<br>";
    echo "$nama[3]<br>";
    echo "$nama[4]<br>";
    echo "$nama[5]<br>";

    ?>
  </body>

</html>
