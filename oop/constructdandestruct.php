<?php
class kucing{
    public function __construct() {
        echo "Halo Saya Kucing <br>";
    }
    public function __destruct(){
        echo "Miaaaaaaawwwwwwww";
    }
}
$cetak = new kucing();