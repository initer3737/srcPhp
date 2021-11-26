<!DOCTYPE html>
<html lang="id" >
  <head>
    <meta charset="utf-8">
    <title>for loop</title>
    <style media="screen">
      #tulisan{font-size:23px;}
      h1{color:blue;}
    </style>
      <?php  include('tampilanatas.php' ) ?>
  </head>

  <body>
    <h1>array</h1>

    <table id="tulisan">
      <li> array bisa kita print pake perulangan</li>
      <li>caranya???</li>
      <li>gunakkan fungsi count() untuk mengetahui jumlah array</li>
      <li>caranya dengan cara mengambil jumlah dari aray lalu print $nama_variable_aray[$i]</li>
      <li><a href="index.php">kembali</a></li>
    </table>

    <?php
    echo "------------contoh type data arrai:--------<br>";
    $nama=['joko','ajik','yonas','naruto','buwung','maman'];
    var_dump($nama);
    echo "-------cara ngeprintnya--------------<br>";
      for($i=0 ; $i < count($nama) ; $i++){
        echo "$nama[$i] <br>";
      }

      $kalimat="ayu dewi binti lua iyanti";
      for($i=0;$i<=120;$i++){
        echo "$kalimat yang ke [$i]<br>";
      }

    ?>
  </body>

</html>
