<!DOCTYPE html>
<html lang="id" >
  <head>
    <meta charset="utf-8">
    <title>percabangan</title>
    <style media="screen">
      #tulisan{font-size:23px;}
      h1{color:blue;}
    </style>
      <?php  include('tampilanatas.php' ) ?>
  </head>

  <body>
    <h1>pecabangan if else</h1>

    <table id="tulisan">
      <li>buat apa sih percabangan????</li>
      <li>untuk membuat website yang menari tentunya</li>
      <li>memanfaatkan boolean true dan false jika true agan mau ngapain jika false agan mau ngapain nah menarik bukan</li>
      <li>dan juga kita bisa memanfaatkan Aritmatika juga lho</li>
      <li>misal agan punya pengen si usernamenya itu dia adalah admin passwordnya juga admin</li>
      <li>"ketika si user salah input password maka akan muncul pesan user eror nih gan "</li>
      <li>nah kita bisa juga buat program sederhana menggunakan javascript agar web agan tampak lebih interaktif </li>
      <li><a href="index.php">kembali</a></li>
    </table>
              japascript <br>
            <script>
                              //japa skrip :)
            //   function login(){
            //     //userlogin
            //     let username=prompt("masukkan username");
            //     let password=prompt("masukkan password");
            //       //database
            //     let userlogin='admin';
            //     let passlogin='admin';
            //
            //         //verivy
            //           let pass=password == passlogin;
            //           let user= username == userlogin;
            //           //simple
            //     if ( pass && user) {
            //       alert("selamat datang di website saya");
            //     }else {
            //       alert("password ama usernamenya salah gan cobalagi");
            //       login();
            //     }
            //   }
            //
            //   while(true){
            //     login();
            //         Break;
            //       }
            // </script>
    <?php
    //user input
    $userlogin='admin';
    $userpass='admin';
      //database
      $user='admin';
      $pass='admin';
    if ($userlogin == $user && $userpass== $pass) {
      echo "selamat datang di websiteku :)";
    }else {
      echo "salah password ama usernamenya gan";
    }



    ?>
  </body>

</html>
