<?php
class contoh {
    public $nama = "Iannnn";
    public function perkenalan(){
        echo "Assalammuaikum <br>";
    }
}
$cetak = new contoh();
$cetak->perkenalan();
echo $cetak->nama; 