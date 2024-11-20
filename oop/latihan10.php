<?php
class karyawan {
    private $gaji;
    private $tpddk;
    private $tot;
    private $gajibersih;

    public function pokok($nama, $jabatan) {
        if ($jabatan == "Direktur") {
            $this->gaji = 10000000;
        } elseif ($jabatan == "Manager") {
            $this->gaji = 7500000;
        } elseif ($jabatan == "Karyawan") {
            $this->gaji = 5000000;
        } elseif ($jabatan == "Ob") {
            $this->gaji = 2500000;
        } else {
            $this->gaji = 0;
        }
        echo "Nama Karyawan : $nama <br>
        Jabatan : $jabatan <br>
        Gaji Pokok : " . number_format($this->gaji, 0, ',', '.') . " <hr>";
    }

    public function tunjangan($pddk) {
        if ($pddk == "S1") {
            $this->tpddk = 1000000;
        } elseif ($pddk == "Smk") {
            $this->tpddk = 750000;
        } elseif ($pddk == "Smp") {
            $this->tpddk = 500000;
        } elseif ($pddk == "Sd") {
            $this->tpddk = 250000;
        } else {
            $this->tpddk = 0;
        }
        echo "Pendidikan : $pddk <br>
        Tunjangan Pendidikan : " . number_format($this->tpddk, 0, ',', '.') . " <hr>";
    }

    public function potongan($tab, $pin) {
        echo "Tabungan : " . number_format($tab, 0, ',', '.') . " <br>";
        echo "Pinjaman : " . number_format($pin, 0, ',', '.') . " <br>";
        $this->tot = $tab + $pin;
        echo "Total Potongan : " . number_format($this->tot, 0, ',', '.') . " <hr>";
        $this->gajibersih = $this->gaji + $this->tpddk - $this->tot;
        echo "Total Gaji Bersih : " . number_format($this->gajibersih, 0, ',', '.') . "<br>";
    }
}

$cetak = new karyawan();
$cetak->pokok("Duda", "Direktur");
$cetak->tunjangan("S1");
$cetak->potongan(1000000, 1000000);
?>
