<?php
class kucing {
    var $warna;
    var $jenis;

    public function makan(){
        echo "Kucing Suka Makan whiskas";
    }
    public function minum(){
        echo "Kucing Suka Minum Air";
    }
}
$cetak = new kucing();
echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";

echo $cetak->warna = "Oyen";
echo "<br>";
echo $cetak->jenis = "Persia";
echo "<br>";

?> 