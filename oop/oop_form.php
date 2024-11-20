<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Menghitung Luas Persegi Panjang</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Panjang</td>
                    <td>:</td>
                    <td><input type="number" name="panjang" id=""></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td><input type="number" name="lebar" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" value="Hitung" id=""></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
<?php
if(isset($_POST['hitung'])){
    $panjang = $_POST['panjang'];
    $luas = $_POST['lebar'];
    class HitungLuas {
        public $luas;
        public function persegipanjang($panjang2, $lebar2) {
            $this->luas = $panjang2 * $lebar2;
            echo "<h2>Persegi Panjang</h2>";
            echo "Panjang : $panjang2<br>";
            echo "Lebar : $lebar2<br>";
        echo "Luas Persegi Panjang : $this->luas<br><hr>";
        }
    } 
$cetak = new HitungLuas();
echo $cetak->persegipanjang($panjang, $luas);    
}
?>