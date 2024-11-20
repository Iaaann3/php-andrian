<?php
class kendaraan{
    public $warna = "Biru";
    public function a(){
        echo "saya adalah kendaraan";
    }
}
class mobil extends kendaraan{
    public function b(){
        echo $this->a();
        echo "<br> Warna Saya Adalah $this->warna";
    }
}
$cetak = new mobil();
echo $cetak->b();
?>