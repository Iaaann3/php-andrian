<?php
class HitungLuas {
    public function persegipanjang($panjang, $lebar) {
        $this->luas = $panjang * $lebar;
        echo "<h2>Persegi Panjang</h2>";
        echo "Panjang: $panjang<br>";
        echo "Lebar: $lebar<br>";
    echo "Luas Persegi Panjang: $this->luas<br><hr>";
    }
    public function segitiga($alas, $tinggi) {
        $this->luas = $alas * $tinggi / 2;
        echo "<h2>Segitiga</h2>";
        echo "Alas: $alas<br>";
        echo "Tinggi: $tinggi<br>";
        echo "Luas Segitiga: $this->luas <hr>";
    }
    public function persegi($sisi) {
        $this->luas = $sisi * $sisi;
        echo "<h2>Persegi</h2>";
        echo "Panjang Sisi: $sisi<br>";  
        echo "Luas Persegi: $this->luas <hr>";
    }
    public function lingkaran($jariJari) {
        $this->luas = 3.14 * $jariJari * $jariJari;
        echo "<h2>Lingkaran</h2>";
        echo "Jari-jari: $jariJari<br>";
        echo "Luas Lingkaran: $this->luas <hr>";
    }
}

// Object
$cetak = new HitungLuas();
$cetak->persegipanjang(10, 5);
$cetak->segitiga(15, 20);
$cetak->persegi(5);
$cetak->lingkaran(7);
