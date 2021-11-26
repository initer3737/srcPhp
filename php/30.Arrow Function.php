
<?php include('style.php'); ?>

<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <?php  include('tampilanatas.php' ) ?>
  </head>
  <body>
    <h1>belajar tentang arrow fungsi di php</h1>
        <li>arrow fungsi sama seperti di anonimus fungsi</li>
        <li>tetapi si arrow ini lebih ringkas gan </li>
        <li>dan tentu lebih episien :)</li>
        <li>digunakkan untuk hal yang sederhana </li>
        <li>si arrow fungsi digunakkan jika agan membuat program yang sederhana</li>
        <li>perbedaannya seperti berikut:</li>
        <li>untuk mengakses variable diluar fungsi si anonimus fungsi</li>
        <li>memerlukan tambahan yakni use(nama variable) </li>
        <li>berbeda dengan arrow nih kalo si arrow dia otomatis langsung bisa mengakses variable</li>
        <li>tanpa harus menggunakkan use</li>
        <li>menggunakkan fn()=> </li>
          <?php
              $nama="jaka";
              $anon=function() use($nama):String{
                 $nilai="halo $nama apa kabar";
                  echo "$nilai";
                 return $nilai;
              };

                  $arow=fn()=>"<br> halo $nama apa kabar ini adalah arrow fungsi<br>";
                  echo $arow();
        ?>
  </body>
</html>
