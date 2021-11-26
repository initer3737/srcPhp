<?php include('tampilanatas.php'); ?>
<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>konsumsi api</title>
  </head>
  <body>
    <?php
$url=file_get_contents("https://api.kawalcorona.com/indonesia/");
$datas=json_decode($url,true);
echo "NEGARA= ".$datas[0]['name']."<br>";
echo "MENINGGAL= ".$datas[0]['meninggal']." orang <br>";
echo "SEMBUH= ".$datas[0]['sembuh']." orang <br>";
echo "POSITIF= ".$datas[0]['positif']." orang <br>";
     ?>
  </body>
</html>
