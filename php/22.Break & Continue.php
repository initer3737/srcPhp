<?php include('tampilanatas.php');?>
<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>break dan continue</title>
  </head>
  <body>
    <h1>break dan continue</h1>
      <h3>break dipakai untuk menghentikan perulangan</h3>
          <h3>disusul dengan percabangan</h3>
            <h3>continue digunakkan untuk melewati perulangan</h3>
      <h3>
      <br>  <?php
        $bayar=0;
            while($bayar < 30_000 )
            {
              $bayar++;
              echo "total hutangmu $bayar <br>";
                  if ($bayar == 300) {
                    echo "perulangannya berhenti";
                    break;
                      echo "===============pembatas=========================";
                      echo "===============continue=========================";
                  }
            }
        ?>

      </h3>
                <h4>
               <?php
               $uang=200;
                    //isset digunakkan untuk mencari
                    //tahu apakah variable memiliki nilai Boolean
                while( isset($uang) )
                {
                  $uang++;
                  echo "uang =$uang <br>";
                      if ($uang ==300) {
                        echo "perulangan ke 300 dilewati";
                        continue;
                      }elseif ($uang == 500) {
                        break;
                      }
                }
               ?>
              </h4>
  </body>
</html>
