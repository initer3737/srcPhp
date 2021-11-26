<!DOCTYPE html>
<html lang="id" >
  <head>
    <meta charset="utf-8">
    <title>increment dan dekremen php</title>
    <style media="screen">
      #tulisan{font-size:23px;}
      h1{color:blue;}
    </style>

    <rel="shortcut icon" href="buwung.jpg">
      <?php  include('tampilanatas.php' ) ?>
  </head>

  <body>
    <h1>increment dan dekremen</h1>

    <table id="tulisan">

    <li>inkrement itu pertambahan nilai </li>
    <li>dekremen itu pengurangan nilai</li>
    <li>biar agan makin ngerti ntar ane bikinin program sederhana aje biar makin paham</li>
    <li>misal agan mau nulis kalimat aku lucu aku cinta kamu 120 kali </li>
    <li>saat itulah agan akan pake increment dan dekrement</li>
      <li><a href="index.php">kembali</a></li>
    </table>

    <?php
      $kalimat="aku lucu aku cinta kamu :)";
      $nilai=120;
      $kkm=0;

      while ($nilai >= $kkm) {
        echo "$kalimat $nilai <br>";
          $nilai--;
      }
    ?>
  </body>

</html>
