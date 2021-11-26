<!DOCTYPE html>
<html lang="id" >
  <head>
    <meta charset="utf-8">
    <title>ternary</title>
    <style media="screen">
      #tulisan{font-size:23px;}
      h1{color:blue;}
    </style>
  <?php  include('tampilanatas.php' ) ?>
    <rel="shortcut icon" href="buwung.jpg">
  </head>

  <body>
    <h1>ternary</h1>

    <table id="tulisan">

    <li>tujuannya untuk mempersingkat else if</li>
      <li><a href="index.php">kembali</a></li>
    </table>

    <?php
    $nama="astuti1";
    $cek=$nama == "astuti" ? "anda astuti":"penyusup";
    echo "$cek";

    ?>
  </body>

</html>
