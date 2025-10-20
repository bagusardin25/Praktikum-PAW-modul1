<!DOCTYPE html>
<html>
<head>
    <title>Percobaan 5 - Array</title>
    <style>
        .box {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h2>Percobaan 5: Array</h2>
    <div class="box">
    <h3>1. Array Indexed (Numerik)</h3>
    <?php
    $buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Stroberi"];
    echo "Buah pertama: " . $buah[0] . "<br>";
    echo "Buah kedua: " . $buah[2] . "<br>";
    echo "Jumlah buah: " . count($buah) . "<br>";   
    echo "<b>Semua butuh:</b><br>";
    foreach($buah as $item){
        echo "- $item<br>";
    }
    ?>
    </div>
    <div class="box">
    <h3>2. Array Associati (Key-Value)</h3>
    <?php
    $mahasiswa = [
        "nim" => "102062400064",
        "nama" => "Bagus Ardin Prayoga",
        "prodi" => "Sistem Informasi",
        "semester" => 3,
        "ipk" => 3.53
    ];

    echo "NIM: " . $mahasiswa['nim'] . "<br>";
    echo "Nama: " . $mahasiswa['nama'] . "<br>";
    echo "Prodi: " . $mahasiswa['prodi'] . "<br>";
    echo "Semeter: " . $mahasiswa['semester'] . "<br>";
    echo "IPK: " . $mahasiswa['ipk'] . "<br>";
    ?>
    </div>
    <div class="box">
        <h3>3. Array Multidimensi</h3>
        <?php
        echo "Array";
        $nilai = [
            ["nama" => "Bagus", "matematika" => 85, "fisika" => 78, "kimia" => 90],
            ["nama" => "Ellsia", "matematika" => 92, "fisika" => 88, "kimia" => 85],
            ["nama" => "Imel", "matematika" => 78, "fisika" => 82, "kimia" => 88]
        ];
        echo "<table border='1' cellpadding='8'>";
        echo 
        "<tr><th>Nama</th><th>Matematika</th><th>Fisika</th><th>Kimia</th><th>Rata-rata</></tr>";
        foreach($nilai as $mhs){
            $rata = ($mhs['matematika'] + $mhs['fisika'] + $mhs['kimia']) / 3;
            echo "<tr>";
            echo "<td>" . $mhs['nama'] . "</td>";
            echo "<td>" . $mhs['matematika'] . "</td>";
            echo "<td>" . $mhs['fisika'] . "</td>";
            echo "<td>" . $mhs['kimia'] . "</td>";
            echo "<td>" . number_format($rata, 2) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
    <div class="box">
        <h3>4. Operasi Array</h3>
        <?php
        $angka = [5, 2, 8, 1, 9];
        echo "Array awal: " . implode(", ", $angka) . "<br>";
        array_push($angka, 10);
        echo "Setelah push(10): " . implode(", ", $angka) ."<br>";
        sort($angka);
        echo "Setelah sort: " . implode(", ", $angka) . "<br>";
        rsort($angka);
        echo "Setelah rsort: " . implode(", ", $angka) . "<br>";
        echo "Nilai max: " . max($angka) . "<br>";
        echo "Nilai min: " . min($angka) . "<br>";
        echo "Jumlah total: " . array_sum($angka) . "<br>";
        ?>
    </div>
</body>
</html>