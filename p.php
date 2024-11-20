<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Ujian Nasional</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        fieldset {
            width: 400px;
            padding: 20px;
            margin: 40px auto;
            border-radius: 10px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        h3 {
            margin-top: 20px;
            color: #444;
        }

        table {
            width: 100%;
            margin-top: 10px;
        }

        td {
            padding: 10px;
        }

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .status {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }

        table th {
            text-align: left;
            font-size: 20px;
            color: #555;
        }

        table td {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <center>
        <fieldset>
            <form action="" method="post">
                <h2>Nilai Ujian Nasional</h2>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="namas" value="" required></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><input type="text" name="kls" id="kelas" value="" required></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><select name="jrsn" id="jurusan" required>
                                <option value="">-- Pilih Jurusan --</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                                <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Nilai Ujian</h3></td>
                    </tr>
                    <tr>
                        <td>Bahasa Indonesia</td>
                        <td>:</td>
                        <td><input type="number" name="indo" value="" required></td>
                    </tr>
                    <tr>
                        <td>Bahasa Inggris</td>
                        <td>:</td>
                        <td><input type="number" name="inggris" value="" required></td>
                    </tr>
                    <tr>
                        <td>Matematika</td>
                        <td>:</td>
                        <td><input type="number" name="mtk" value="" required></td>
                    </tr>
                    <tr>
                        <td>Produktif</td>
                        <td>:</td>
                        <td><input type="number" name="prdktf" value="" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="proses" value="Simpan" required></td>
                    </tr>
                </table>
            </form> 
        </fieldset>
    </center>

    <fieldset>
        <?php
        if (isset($_POST['proses'])) {
            $nama = $_POST['namas'];
            $kelas = $_POST['kls'];
            $jrsn = $_POST['jrsn'];
            $indo = $_POST['indo'];
            $inggris = $_POST['inggris'];
            $matematika = $_POST['mtk'];
            $produktif = $_POST['prdktf'];

            $rata = ($indo + $inggris + $matematika + $produktif) / 4;

            echo "<table>
                    <tr>
                        <th colspan='3'>Data Siswa</th>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>$nama</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td>$kelas</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>$jrsn</td>
                    </tr>
                    <tr>
                        <td>Bahasa Indonesia</td>
                        <td>:</td>
                        <td>$indo</td>
                    </tr>
                    <tr>
                        <td>Bahasa Inggris</td>
                        <td>:</td>
                        <td>$inggris</td>
                    </tr>
                    <tr>
                        <td>Matematika</td>
                        <td>:</td>
                        <td>$matematika</td>
                    </tr>
                    <tr>
                        <td>Produktif</td>
                        <td>:</td>
                        <td>$produktif</td>
                    </tr>
                    <tr>
                        <td>Rata-Rata</td>
                        <td>:</td>
                        <td>$rata</td>
                    </tr>
                  </table>";

            // Menentukan status kelulusan
            $status = ($rata > 75) ? "Tuntas" : "Belum Tuntas";

            // Output status
            echo "<div class='status'><b>Status:</b> $status</div>";
        }
        ?>
    </fieldset>

    <script>
        document.getElementById('kelas').addEventListener('input', function() {
            var kelas = this.value.toLowerCase();
            var jurusan = document.getElementById('jurusan');
            
            // Reset jurusan ke pilihan default
            jurusan.value = "";

            // Enable or disable jurusan options based on kelas
            if (kelas.includes("rekayasa perangkat lunak")) {
                jurusan.innerHTML = '<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>';
            } else if (kelas.includes("teknik kendaraan ringan otomotif")) {
                jurusan.innerHTML = '<option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>';
            } else if (kelas.includes("teknik bisnis sepeda motor")) {
                jurusan.innerHTML = '<option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>';
            } else {
                jurusan.innerHTML = '<option value="">-- Pilih Jurusan --</option>';
            }
        });
    </script>
</body>
</html>
