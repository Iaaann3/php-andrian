<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penggajihan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 23%;
            margin: 20px auto;
        }
        fieldset {
            margin-bottom: 20px;
            padding: 25px;  /* Ukuran fieldset */
            border: 1px solid #ccc;
        }
        
        table {
            width: 100%;
            margin-top: 10px;
        }
        table td {
            padding: 10px;
            vertical-align: top;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="date"], input[type="number"], select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        button {
            padding: 12px 5px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 20%;
        }
        button:hover {
            background-color: #0056b3;
        }
        .column {
            width: 48%;
        }
    </style>
</head>
<body>
    <center>
<img src="th.jpg" alt="">
<h2>PENGGAJIHAN <br> GURU/KARYAWAN YAYASAN ASSALAAM</h2>
</center>
<div class="container">
    <form action="hasil5.php" method="POST">
        <fieldset>
<p>Data Penggajihan</p>
<hr>
            <!-- Data Penggajihan -->
            <label for="no">No</label>
            <input type="number" id="no" name="no" placeholder=" No" required>

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder=" Nama" required>

            <label for="unit">Unit Pendidikan</label>
            <select id="unit" name="unit" required>
                <option value="">Pilih Unit Pendidikan</option>
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMK">SMK</option>
            </select>

            <label for="tanggal_gaji">Tanggal Gaji</label>
            <input type="date" id="tanggal_gaji" name="gaji" required>

            <!-- Rincian Gaji dan Potongan dalam satu baris -->
            <table>
                <tr>
                    <!-- Kolom Gaji -->
                    <td class="column">
                        <legend><i><h2>Gaji</h2></i></legend>
                        <label for="jabatan">Jabatan</label>
                        <select id="jabatan" name="jabatan" required>
                            <option value="">Pilih Jabatan</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Wakasek">Wakasek</option>
                            <option value="Guru">Guru</option>
                            <option value="Ob">OB</option>
                        </select>

                        <label for="lama_kerja">Lama Kerja</label>
                        <input type="number" id="lama_kerja" name="lama_kerja" placeholder=" Lama Kerja" required>

                        <label for="status_kerja">Status Kerja</label>
                        <select id="status_kerja" name="status_kerja" required>
                            <option value="">Pilih Status Kerja</option>
                            <option value="Tetap">Tetap</option>
                            <option value="Kontrak">Kontrak</option>
                        </select>
                    </td>

                    <!-- Kolom Potongan -->
                    <td class="column">
                        <legend><i><h2>Potongan</h2></i></legend>
                        <label for="bpjs">BPJS</label>
                        <input type="number" id="bpjs" placeholder=" BPJS" name="bpjs">

                        <label for="pinjaman">Pinjaman</label>
                        <input type="number" id="pinjaman" placeholder=" Pinjaman" name="pinjaman">

                        <label for="tabungan">Tabungan</label>
                        <input type="number" id="tabungan" placeholder=" Tabungan" name="tabungan">

                        <label for="lainnya">Lainnya</label>
                        <input type="number" placeholder=" Lainnya" id="lainnya" name="lainnya">
                    </td>
                </tr>
            </table>

            <!-- Tombol Proses -->
            <center>
            <button type="submit" name="proses">Proses</button>
            </center>
        </fieldset>
    </form>
</div>

</body>
</html>