<?php
if (isset($_POST['smt'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kls'];
    $jurusan = $_POST['jrsn'];
    $harianmtk = $_POST['harianmtk'];
    $tugasmtk = $_POST['tugasmtk'];
    $utsmtk = $_POST['utsmtk'];
    $uasmtk = $_POST['uasmtk'];
    $harianind = $_POST['harianind'];
    $tugasind = $_POST['tugasind'];
    $utsind = $_POST['utsind'];
    $uasind = $_POST['uasind'];
    $harianigg = $_POST['harianigg'];
    $tugasigg = $_POST['tugasigg'];
    $utsigg = $_POST['utsigg'];
    $uasigg = $_POST['uasigg'];
    $harianpd = $_POST['harianpd'];
    $tugaspd = $_POST['tugaspd'];
    $utspd = $_POST['utspd'];
    $uaspd = $_POST['uaspd'];

    class rata {
        public $ratarata;
        public $grade;

        public function ratarata1($harian1, $tugas1, $uts1, $uas1) {
            $this->ratarata = ($harian1 + $tugas1 + $uts1 + $uas1) / 4;

            if ($this->ratarata >= 75) {
                $this->grade = "Lulus";
            } else {
                $this->grade = "Tidak Lulus";
            }
        }
    }

    $mtk = new rata();
    $mtk->ratarata1($harianmtk, $tugasmtk, $utsmtk, $uasmtk);

    $ind = new rata();
    $ind->ratarata1($harianind, $tugasind, $utsind, $uasind);

    $igg = new rata();
    $igg->ratarata1($harianigg, $tugasigg, $utsigg, $uasigg);

    $pd = new rata();
    $pd->ratarata1($harianpd, $tugaspd, $utspd, $uaspd);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?php echo $kelas ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo $jurusan ?></td>
            </tr>
        </table>
        <table border="1" cellspacing="0" width="60%">
            <tr>
                <th>Mapel</th>
                <th>Harian</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Rata-Rata</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td>Matematika</td>
                <td><?php echo $harianmtk ?></td>
                <td><?php echo $tugasmtk ?></td>
                <td><?php echo $utsmtk ?></td>
                <td><?php echo $uasmtk ?></td>
                <td><?php echo $mtk->ratarata; ?></td>
                <td><?php echo $mtk->grade; ?></td>
            </tr>
            <tr>
                <td>Bahasa Indonesia</td>
                <td><?php echo $harianind ?></td>
                <td><?php echo $tugasind ?></td>
                <td><?php echo $utsind ?></td>
                <td><?php echo $uasind ?></td>
                <td><?php echo $ind->ratarata; ?></td>
                <td><?php echo $ind->grade; ?></td>
            </tr>
            <tr>
                <td>Bahasa Inggris</td>
                <td><?php echo $harianigg ?></td>
                <td><?php echo $tugasigg ?></td>
                <td><?php echo $utsigg ?></td>
                <td><?php echo $uasigg ?></td>
                <td><?php echo $igg->ratarata; ?></td>
                <td><?php echo $igg->grade; ?></td>
            </tr>
            <tr>
                <td>Produktif</td>
                <td><?php echo $harianpd ?></td>
                <td><?php echo $tugaspd ?></td>
                <td><?php echo $utspd ?></td>
                <td><?php echo $uaspd ?></td>
                <td><?php echo $pd->ratarata; ?></td>
                <td><?php echo $pd->grade; ?></td>
            </tr>
        </table>
    </center>
</body>
</html>
