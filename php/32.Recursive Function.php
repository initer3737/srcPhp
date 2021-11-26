<?php include('style.php');
include('tampilanatas.php');?>
<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>belajar tentang rekursive fungsi</h1>
<li>rekursive fungsi gunanya buat ngitung faktorial gan</li>

    <?php
      function hitung($bil1,$bil2=1):int
      {

          switch ($bil1) {
            case 1:
              return $bil2;
              break;

            default:
            return  hitung($bil1-1,$bil2*$bil1);
              break;
          }

      //   if($bil1 ==1 )
      //    {
      //      return 1;
      //    }else{
      //    return $bil1*hitung($bil1-1);
      // }

      };

        echo hitung(5);

     ?>
  </body>
</html>
