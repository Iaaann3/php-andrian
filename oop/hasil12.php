<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran Siswa SMK Assalaam</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 10px;
        }
        table {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Ensure border-radius works */
        }
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Zebra stripes for rows */
        }
        tr:hover {
            background-color: #f1f1f1; /* Highlight row on hover */
        }
        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        .label {
            font-weight: bold;
            color: #007BFF; /* Primary color */
        }
        .value {
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <h2>Calon Siswa SMK Assalaam</h2>
    <?php
    if (isset($_POST['kirim'])) {
        $jurusan = $_POST['jrsn'];
        $naleng = $_POST['namalengkap'];
        $jeniskelamin = $_POST['jk'];
        $tempatlahir = $_POST['tpl'];
        $tanggallahir = $_POST['tgl'];
        $nomorsiswa = $_POST['nosis'];
        $email = $_POST['email'];
        $provinsi = $_POST['provinsi'];
        $kota = $_POST['kota'];
        $kecamatan = $_POST['kec'];
        $desa = $_POST['desa'];
        $alamat = $_POST['almat'];
        $kodepos = $_POST['pos'];
        $asalsekolah = $_POST['asalsekolah'];
        $almatsekolah = $_POST['almatsekolah'];
        $wali = $_POST['wali'];
        $pekerjaan = $_POST['pekerjaan'];
        $nomorhp = $_POST['nomorhp'];
        $almatwali = $_POST['almatwali'];
    ?>
    <table>
        <tr>
            <td class="label">Jurusan</td>
            <td class="value"><?php echo $jurusan; ?></td>
        </tr>
        <tr>
            <td class="label">Nama Lengkap</td>
            <td class="value"><?php echo $naleng; ?></td>
        </tr>
        <tr>
            <td class="label">Jenis Kelamin</td>
            <td class="value"><?php echo $jeniskelamin; ?></td>
        </tr>
        <tr>
            <td class="label">Tempat Lahir</td>
            <td class="value"><?php echo $tempatlahir; ?></td>
        </tr>
        <tr>
            <td class="label">Tanggal Lahir</td>
            <td class="value"><?php echo $tanggallahir; ?></td>
        </tr>
        <tr>
            <td class="label">Nomor Siswa</td>
            <td class="value"><?php echo $nomorsiswa; ?></td>
        </tr>
        <tr>
            <td class="label">Email</td>
            <td class="value"><?php echo $email; ?></td>
        </tr>
        <tr>
            <td class="label">Provinsi</td>
            <td class="value"><?php echo $provinsi; ?></td>
        </tr>
        <tr>
            <td class="label">Kab/Kota</td>
            <td class="value"><?php echo $kota; ?></td>
        </tr>
        <tr>
            <td class="label">Kecamatan</td>
            <td class="value"><?php echo $kecamatan; ?></td>
        </tr>
        <tr>
            <td class="label">Desa/Kelurahan</td>
            <td class="value"><?php echo $desa; ?></td>
        </tr>
        <tr>
            <td class="label">Alamat</td>
            <td class="value"><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td class="label">Kode Pos</td>
            <td class="value"><?php echo $kodepos; ?></td>
        </tr>
        <tr>
            <td class="label">Nama Asal Sekolah</td>
            <td class="value"><?php echo $asalsekolah; ?></td>
        </tr>
        <tr>
            <td class="label">Alamat Sekolah</td>
            <td class="value"><?php echo $almatsekolah; ?></td>
        </tr>
        <tr>
            <td class="label">Nama Wali</td>
            <td class="value"><?php echo $wali; ?></td>
        </tr>
        <tr>
            <td class="label">Pekerjaan Wali</td>
            <td class="value"><?php echo $pekerjaan; ?></td>
        </tr>
        <tr>
            <td class="label">Nomor HP Wali</td>
            <td class="value"><?php echo $nomorhp; ?></td>
        </tr>
        <tr>
            <td class="label">Alamat Wali</td>
            <td class="value"><?php echo $almatwali; ?></td>
        </tr>
    </table>
    <div class="footer">
        <p>Terima kasih atas pendaftaran Anda.</p>
    </div>
    <?php
    }
    ?>
</body>
</html>
