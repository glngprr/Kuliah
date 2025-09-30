<!DOCTYPE html>
<html>

<head>
    <title>Form Biodata Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            margin-top: 10px;
            background-color: #f5f5f5;
        }

        h2 {
            color: #333;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            align-items: start;
        }

        form {
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        select,
        textarea {
            width: 95%;
            padding: 8px;
            margin: 6px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 6px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 8px 16px;
            margin-top: 10px;
            margin-right: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: #fff;
        }

        input[type="submit"] {
            background-color: #007BFF;
        }

        input[type="reset"] {
            background-color: #dc3545;
        }

        table {
            border-collapse: collapse;
            margin-top: 15px;
            background: #fff;
            width: 100%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
        }

        .output {
            margin-top: 20px;
        }

        @media (max-width: 768px) {
        .grid-container {
            grid-template-columns: 1fr; 
        }

        form,
        .output {
            width: 95%;
        }
}

    </style>
</head>

<body>

    <div class="grid-container">
        
        <div>
            <h2>Biodata Mahasiswa</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                Nama Lengkap:
                <input type="text" name="nama">

                NIM:
                <input type="text" name="nim">

                Program Studi:
                <select name="prodi">
                    <option value="">-- Pilih Prodi --</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                </select>

                Jenis Kelamin: <br>
                <input type="radio" name="jeniskel" value="Laki-Laki"> Laki - Laki
                <input type="radio" name="jeniskel" value="Perempuan"> Perempuan <br><br>

                Hobi: <br>
                <input type="checkbox" name="hobi[]" value="Membaca"> Membaca <br>
                <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga <br>
                <input type="checkbox" name="hobi[]" value="Musik"> Musik <br>
                <input type="checkbox" name="hobi[]" value="Movie"> Movie <br><br>

                Alamat:
                <textarea name="alamat" rows="4"></textarea>

                <input type="submit" value="KIRIM">
                <input type="reset" value="BATAL">
            </form>

            <div class="output">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama   = $_POST['nama'] ?? '';
                $nim    = $_POST['nim'] ?? '';
                $prodi  = $_POST['prodi'] ?? '';
                $jk     = $_POST['jeniskel'] ?? '';
                $hobi   = $_POST['hobi'] ?? [];
                $alamat = $_POST['alamat'] ?? '';

                echo "<h3>Data Mahasiswa</h3>";
                echo "<table>";
                if (!empty($nama))   echo "<tr><th>Nama Lengkap</th><td>" . htmlspecialchars($nama) . "</td></tr>";
                if (!empty($nim))    echo "<tr><th>NIM</th><td>" . htmlspecialchars($nim) . "</td></tr>";
                if (!empty($prodi))  echo "<tr><th>Program Studi</th><td>" . htmlspecialchars($prodi) . "</td></tr>";
                if (!empty($jk))     echo "<tr><th>Jenis Kelamin</th><td>" . htmlspecialchars($jk) . "</td></tr>";
                if (!empty($hobi))   echo "<tr><th>Hobi</th><td>" . implode(", ", array_map('htmlspecialchars', $hobi)) . "</td></tr>";
                if (!empty($alamat)) echo "<tr><th>Alamat</th><td>" . nl2br(htmlspecialchars($alamat)) . "</td></tr>";
                echo "</table>";
            }
            ?>
            </div>
        </div>

        <div>
            <h2>Pencarian</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
                Kata kunci:
                <input type="text" name="keyword">
                <input type="submit" value="Cari">
            </form>

            <div class="output">
            <?php
            if (isset($_GET['keyword'])) {
                $keyword = trim($_GET['keyword']);
                if ($keyword !== '') {
                    echo "<h3>Hasil Pencarian</h3>";
                    echo "Anda mencari data dengan kata kunci: <b>" . htmlspecialchars($keyword) . "</b>";
                }
            }
            ?>
            </div>
        </div>
    </div>
</body>

</html>

