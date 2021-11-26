<?php

class Main{
    public function Run(string $status,int $Kilometer)
    {
        echo'Saya Berlari Dengan Perasaan '.$status.' Menempuh Jarak '.$Kilometer;
    }
}

$jaka=new Main;
$jaka->Run('lelah',12);

?>