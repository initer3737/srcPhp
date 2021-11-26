<?php include('tampilanatas.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <?php  include('tampilanatas.php' ) ?>
  </head>
  <body>
    <h1>belajar for each</h1>
    <li>selain for loop kita juga bisa menampilkan data array menggunakkan for each</li>
    <li>cara nya kek mana bwang??? </li>

    <?php
 $nama=['jaka sembung','aji saka','buwung puyuh','golang','kotlin','python','laravel','mysql','mongodb'];

 foreach ($nama as $nilaiarai) {
   echo "$nilaiarai <br>";
 }


     ?>
  </body>
</html>
