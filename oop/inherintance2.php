<?php
class bangundatar {
    public $luas;
}

class luas extends bangundatar {
    public function persegipanjang($panjang, $lebar) {
        $this->luas = $panjang * $lebar;
        echo "<center><h1>Mencari Luas</h1></center><h2>Persegi Panjang</h2>";
        echo "Panjang : $panjang<br>";
        echo "Lebar : $lebar<br>";
        echo "Luas Persegi Panjang : $this->luas<br><hr>";
    }
    
    public function segitiga($alas, $tinggi) {
        $this->luas = $alas * $tinggi / 2;
        echo "<h2>Segitiga</h2>";
        echo "Alas : $alas<br>";
        echo "Tinggi : $tinggi<br>";
        echo "Luas Segitiga : $this->luas<br><hr>";
    }
    
    public function persegi($sisi) {
        $this->luas = $sisi * $sisi;
        echo "<h2>Persegi</h2>";
        echo "Panjang Sisi : $sisi<br>";  
        echo "Luas Persegi : $this->luas<br><hr>";
    }
    
    public function lingkaran($jariJari) {
        $this->luas = 3.14 * $jariJari * $jariJari;
        echo "<h2>Lingkaran</h2>";
        echo "Jari-jari : $jariJari<br>";
        echo "Luas Lingkaran : $this->luas<br><hr>";
    }
}

class keliling extends bangundatar {
    public function persegipanjang($panjang, $lebar) {
        $keliling = 2 * ($panjang + $lebar);
        echo "<center><h1>Mencari Keliling</h1></center><h2>Keliling Persegi Panjang</h2>";
        echo "Panjang : $panjang<br>";
        echo "Lebar : $lebar<br>";
        echo "Keliling Persegi Panjang : $keliling<br><hr>";
    }

    public function segitiga($sisi1, $sisi2, $sisi3) {
        $keliling = $sisi1 + $sisi2 + $sisi3;
        echo "<h2>Keliling Segitiga</h2>";
        echo "Sisi 1 : $sisi1<br>";
        echo "Sisi 2 : $sisi2<br>";
        echo "Sisi 3 : $sisi3<br>";
        echo "Keliling Segitiga : $keliling<br><hr>";
    }

    public function persegi($sisi) {
        $keliling = 4 * $sisi;
        echo "<h2>Keliling Persegi</h2>";
        echo "Panjang Sisi : $sisi<br>";
        echo "Keliling Persegi : $keliling<br><hr>";
    }

    public function lingkaran($jariJari) {
        $keliling = 2 * 3.14 * $jariJari;
        echo "<h2>Keliling Lingkaran</h2>";
        echo "Jari-jari : $jariJari<br>";
        echo "Keliling Lingkaran : $keliling<br><hr>";
    }
}

// Object Luas
$cetakLuas = new luas();
$cetakLuas->persegipanjang(10, 5);
$cetakLuas->segitiga(5, 10);
$cetakLuas->persegi(5);
$cetakLuas->lingkaran(8);

// Object Keliling
$cetakkeliling = new keliling();
$cetakkeliling->persegipanjang(10, 5);
$cetakkeliling->segitiga(24, 124, 53); 
$cetakkeliling->persegi(5);
$cetakkeliling->lingkaran(7);
?>
