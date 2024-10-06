<!DOCTYPE html>
<html lang="id">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
      /* di sini saya menggunakan css untuk merapikan tugas ini */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .kalkulator {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        input, select {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
  <!-- di sini saya menggunakan option dan select untuk membuat pilihan untuk user -->
    <div class="kalkulator">
        <h2>Kalkulator Sederhana</h2>
        <form method="post">
            Angka 1: <input type="number" name="angka1" required><br> <!-- untuk menginput angka atau nilai --> 
            Angka 2: <input type="number" name="angka2" required><br>
            <select name="operasi" required> <!-- digunakan untuk memilih option atau metode penjumlahan yang di inginkan -->
                <option value="tambah">+</option> <!-- tag yang di gunakan untuk membuat pilihan -->
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select><br>
            <input type="submit" value="Hitung">
        </form>

        <?php
        /* saya menggunakan if if ($_SERVER["REQUEST_METHOD"] == "POST") 
        menyimpan informasi tentang server, jalur, dan lokasi skrip: Header, Jalur, Lokasi skrip */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka1 = $_POST['angka1']; /* variable nilai yang di masukan */
            $angka2 = $_POST['angka2'];
            $operasi = $_POST['operasi'];
            
            /* saya juga menggunakan switch untuk pemilihan atau perintah yang di gunakan nanti nya */ 
            switch ($operasi) { 
                case 'tambah':
                    $hasil = $angka1 + $angka2;
                    break;
                case 'kurang':
                    $hasil = $angka1 - $angka2;
                    break;
                case 'kali':
                    $hasil = $angka1 * $angka2;
                    break;
                case 'bagi':
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2;
                    } else {
                        $hasil = "Error: Pembagian dengan nol";
                    }
                    break;
                default:
                    $hasil = "Operasi tidak valid";
            }
            echo "<h3>Hasil: $hasil</h3>"; /* output yang akan menampilkan hasil dari penjumlahan */
        }
        /* saya juga menambah kan else untuk pembaian jikan noll tidak bisa di bagi */
        ?>
    </div>
</body>
</html>
