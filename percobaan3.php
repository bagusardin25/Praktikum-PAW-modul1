<!DOCTYPE html>
<html>
<head>
    <title>Percobaan 3 - Struktur Kontrol</title>
</head>
<body>
    <h3>Percobaan 3: IF-ELSE Statement</h3>
    <?php
    $nilai = 85;
    $kehadiran = 90;

    echo "<h3>Sistem Penilaian Mahasiswa</h3>";
    echo "Nilai: $nilai<br>";
    echo "kehadiran: $kehadiran%<br>";
    if ($nilai >= 85) {
        $grade = "A";
        $keterangan = "Sangat Baik";
    } elseif ($nilai >= 70) {
        $grade = "B";
        $keterangan = "Baik";
    } elseif ($nilai >= 60) {
        $grade = "C";
        $keterangan = "Cukup";
    } elseif($nilai >= 50){
        $grade = "D";
        $Keterangan = "Kurang";
    } else {
        $grade = "E";
        $keterangan = "Tidak lulus";
    }
    echo "Grade: <b>$grade</b><br>";
    echo "Keterangan: <b>$keterangan</b><br>";

    if ($nilai >= 60 && $kehadiran >= 75) {
        echo "<b style='color: green;'>STATUS: LULUS</b>";
    } else {
        echo "<b style='color: red;'>STATUS: TIDAK LULUS</b>";
    }
    ?>
    <hr>
    <?php
    $umur = 20;
    echo "<h3>Kategori Usia<h3>";
    echo "Umur: $umur tahun<br>";

    if ($umur < 13){
        echo "Kategori: Anak-Anak";
    } elseif ($umur >= 13 && $umur < 20) {
        echo "Katagori: Remaja";
    } elseif($umur >= 20 && $umur <60){
        echo "Katagori: Dewasa";
    } else {
        echo "Katagero: Lansia";
    }
    ?>
</body>
</html>