<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: blue; /* Font color set to blue */
        }
        .container {
            width: 25%; 
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        fieldset {
            border: 2px solid #007bff;
            padding: 20px;
            border-radius: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse; /* Menggabungkan batas menjadi satu */
            margin-bottom: 20px;
        }
        td, th {
            padding: 10px;
            
        }
        th {
            background-color: #f2f2f2;
        }
        td.label {
            width: 30%; /* Lebar untuk kolom label */
        }
        td.value {
            width: 70%; /* Lebar untuk kolom value */
        }
        .total {
            font-weight: bold;
        }
        .footer {
            text-align: center;
            font-size: 18px;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Struk Gaji</h2>
    <?php
    if (isset($_POST['proses'])) {
        $nomor = $_POST['no'];
        $nama = $_POST['nama'];
        $unit = $_POST['unit'];
        $gaj = $_POST['gaji'];
        $jabatan = $_POST['jabatan'];
        $lamker = $_POST['lama_kerja'];
        $st= $_POST['status_kerja'];
        $bpjs = $_POST['bpjs'];
        $pinjam = $_POST['pinjaman'];
        $tabungan = $_POST['tabungan'];
        $lainnya = $_POST['lainnya'];

        // Jabatan dan Gaji
        if ($jabatan == "Kepala Sekolah") {
            $gaji = 10000000;
        } elseif ($jabatan == "Wakasek") {
            $gaji = 7500000;
        } elseif ($jabatan == "Guru") {
            $gaji = 5000000;
        }elseif ($jabatan == "Ob") {
            $gaji = 2500000;
        } else {
            $gaji = 0;
        }

        // Tunjangan Lama Kerja
        if ($lamker >= 5) {
            $tunjangan = 1000000;
        } else {
            $tunjangan = 0;
        }

        // Status Kerja
        if ($st == "Tetap") {
            $bonus = 500000;
        } else {
            $bonus = 0;
        }

        // Perhitungan Gaji
        $gaji_kotor = $gaji + $tunjangan + $bonus;
        $total_potongan = $bpjs + $pinjam + $tabungan + $lainnya;
        $gaji_bersih = $gaji_kotor - $total_potongan;
    ?>

    <fieldset>
        <table>
            <tr>
                <th colspan="2" style="text-align: center" class="value"><?php echo $nama; ?></th>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center"><b>Primary card title</b></td>
            </tr>
            <tr>
                <td class="label">No</td>
                <td class="value"><?php echo $nomor; ?></td>
            </tr>
            <tr>
                <td class="label">Nama</td>
                <td class="value"><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td class="label">Unit Pendidikan</td>
                <td class="value"><?php echo $unit; ?></td>
            </tr>
            <tr>
                <td class="label">Tanggal Gaji</td>
                <td class="value"><?php echo $gaj; ?></td>
            </tr>
            <tr>
                <td colspan="2"><h2>Gaji</h2></td>
            </tr>
            <tr>
                <td class="label">Jabatan</td>
                <td class="value"><?php echo $jabatan; ?></td>
            </tr>
            <tr>
                <td class="label">Gaji</td>
                <td class="value"><?php echo number_format($gaji, 0, ',', '.');  ?></td>
            </tr>
            <tr>
                <td class="label">Lama Kerja</td>
                <td class="value"><?php echo $lamker . " Tahun"; ?></td>
            </tr>
            <tr>
                <td class="label">Status Kerja</td>
                <td class="value"><?php echo $st; ?></td>
            </tr>
            <tr>
                <td class="label">Tunjangan Lama Kerja</td>
                <td class="value"><?php echo number_format($tunjangan, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td class="label">Bonus</td>
                <td class="value"><?php echo number_format($bonus, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td class="total">Gaji Kotor</td>
                <td class="value total"><?php echo number_format($gaji_kotor, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td colspan="2"><h2>Potongan</h2></td>
            </tr>
            <tr>
                <td class="label">BPJS</td>
                <td class="value"><?php echo number_format($bpjs, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td class="label">Pinjaman</td>
                <td class="value"><?php echo number_format($pinjam, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td class="label">Tabungan</td>
                <td class="value"><?php echo number_format($tabungan, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td class="label">Lainnya</td>
                <td class="value"><?php echo number_format($lainnya, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td class="total">Total Potongan</td>
                <td class="value total"><?php echo number_format($total_potongan, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td colspan="2"><h2>Total</h2></td>
            </tr>
        </table>
        <div class="footer">
            Gaji Bersih: <?php echo number_format($gaji_bersih, 0, ',', '.'); ?>
        </div>
    </fieldset>

    <?php } ?>
</div>
</body>
</html>