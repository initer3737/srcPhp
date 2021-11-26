<!DOCTYPE html>
<html lang="id" >
  <head>
    <meta charset="utf-8">
    <title>null coalescing operator php</title>
    <style media="screen">
      #tulisan{font-size:23px;}
      h1{color:blue;}
    </style>

    <rel="shortcut icon" href="buwung.jpg">
      <?php  include('tampilanatas.php' ) ?>
  </head>

  <body>
    <h1>null coalescing operator php</h1>

    <table id="tulisan">

    <li>tujuannya untuk mengecek apakah type data tersebut ada yang null atau tidak</li>
      <li><a href="index.php">kembali</a></li>
    </table>

    <?php
    $nama='aji wahyu golang';
    $cek=$nama ?? "datanya null";
    echo "$cek";

    ?>
  </body>

</html>
