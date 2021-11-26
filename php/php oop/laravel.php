<?php
class Route{
   static public function get($PassingData,$url){
       echo"Get Status : 200 With Parameter = $PassingData And url = $url";
   }

   static public function post($PassingData,$url){
    echo"Post Status : 200 With Parameter = $PassingData And url = $url";
}

}//end of class

class sql{
   static function queri($querys){
       strtolower($querys);
       if($querys === 'select * from todo'){
           echo'status : 200 ok data valid!';
       }else{
        echo "status : 404 table $querys not found!";
       }
        
   }
}//end of class

sql::queri('select * from todo');

$data='buy some milk';
Route::get('/{1}','/delete.php');
Route::post($data,'/Create.php');

?>