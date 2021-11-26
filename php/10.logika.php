<!DOCTYPE html>
<html lang="id" >
  <head>
    <meta charset="utf-8">
    <title>operator logika php</title>
    <style media="screen">
      #tulisan{font-size:23px;}
      h1{color:blue;}
    </style>

    <rel="shortcut icon" href="buwung.jpg">
      <?php  include('tampilanatas.php' ) ?>
  </head>

  <body>
    <h1>logika php</h1>

    <table id="tulisan">

    <li>operator logika ada 3 and or dan not</li>
    <li>and/&&= jika kedua data tersebut true maka menghasilkan true kalo salah satu saja ada yang false maka hasilnya false</li>
    <li>or/||=jika keduanya true maka hasilnya akan true jika salah satu false maka akan tetap true jika keduanya false maka hasilnya akan false</li>
    <li>untuk not/! itu seperti antonim atau lawan kata ya kalo agan tahu maksud ane kalo gak tawu ya gugling aja :) mengokey!!</li>
    <li>true dilambangkan angka 1 jika false dilambangkan angka 0 atau akan kosong di browser</li>
      <li><a href="index.php">kembali</a></li>
    </table>

    <?php
        $data1=false;
        $data2=true;

        $cek=$data1 != $data2;

        if ($cek) {
          echo "datanya bernilai benar /identik";
        }else {
          echo "datanya salah";
        }
    ?>
  </body>

</html>
