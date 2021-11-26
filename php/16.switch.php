<!DOCTYPE html>
<html lang="id" >
  <head>
    <meta charset="utf-8">
    <title>variable</title>
    <style media="screen">
      #tulisan{font-size:23px;}
      h1{color:blue;}
    </style>

    <rel="shortcut icon" href="buwung.jpg">
      <?php  include('tampilanatas.php' ) ?>
  </head>

  <body>
    <h1>switch case php</h1>

    <table id="tulisan">
      <li>sama seperti percabangan if else namun di switch hanya ada kondisi sama dengan</li>
      <li>dan untuk else itu digantikan dengan default</li>
      <li>jika agan menulis program yang simple</li>
      <li>saya sarankan menggunakkan switch case</li>
      <li>biar apa????</li>
      <li>biar mudah untuk agan baca jangan lupa titik koma entar malah eror :) kalo kelupaan </li>
      <li><a href="index.php">kembali</a></li>
    </table>

    <?php
      $buah ='jaka sembung bin golang nugroho';

      switch($buah){
        case 'jeruk':
          echo "buahnya adalah jeruk";
         break;
        case 'blewah':
          echo "buahnya adalah blewah";
         break;
       default:
       echo "buah tidak ada di dalam variable/tidak ada/kosong/data tidak palid";
       break;
      }





    ?>
  </body>

</html>
