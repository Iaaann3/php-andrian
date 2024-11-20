<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <img src="logo-custo.png" alt="" width="200px">
            <h2>Form Biodata Diri</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="namas" value="" required></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tl" value="" required></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tl2" value="" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><label><input type="radio" name="jenis_kelamin" value="Laki-laki" /> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan</label></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="almat" id="" cols="20" rows="7"></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                    <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                    <select name="pddk">
                        <option value="Dd">SD</option>
                        <option value="Smp">SMP</option>
                        <option value="Sma">SMA</option>
                        <option value="Smk">SMK</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><select name="status">
                        <option value="Sudah menikah">Sudah Menikah</option>
                        <option value="Belum menikah">Belum Menikah</option></td>
                        </select>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><label><input type="checkbox" name="hobi" value="Membaca" /> Membaca</label>
                    <label><input type="checkbox" name="hobi" value="Menulis" /> Menulis</label>
                    <label><input type="checkbox" name="hobi" value="Ngepush" /> Ngepush</label>
                </td>
                </tr>
                <tr>
                    <td>Cita-Cita</td>
                    <td>:</td>
                    <td>
                    <select name="cita">
                        <option value="Programmer">Programmer</option>
                        <option value="Koki">Koki</option>
                        <option value="Dokter">Dokter</option>
                        <option value="Polisi">Polisi</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td>Kata-Kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="ktbjk" id="" cols="20" rows="7"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Simpan" required></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html><br><br>
<center>
    <fieldset>
<?php
if (isset($_POST['proses'])){
    $nama = $_POST['namas'];
    $tempat_lahir = $_POST['tl'];
    $tanggal_lahir = $_POST['tl2'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['almat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pddk'];
    $st = $_POST['status'];
    $hb = $_POST['hobi'];
    $ct_ct = $_POST['cita'];
    $bijakkt = $_POST['ktbjk'];

    echo "Nama : $nama<br>
            Tempat Lahir: $tempat_lahir<br>
            Tanggal Lahir: $tanggal_lahir<br>
            Jenis Kelamin : $jk<br>
            Alamat : $alamat<br>
            Agama : $agama<br>
            Pendidikan Terakhir : $pendidikan<br>
            Status : $st<br>
            Hobi : $hb<br>
            Cita-Cita : $ct_ct<br>
            Kata-Kata Bijak : $bijakkt<br>";
}
?>
</fieldset>
</center>
