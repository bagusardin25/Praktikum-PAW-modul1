<?php
session_start();
$id = $_GET['id'];
$data = $_SESSION['mahasiswa'][$id];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['mahasiswa'][$id] = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'email' => $_POST['email'],
        'prodi' => $_POST['prodi'],
        'semester' => $_POST['semester'],
        'alamat' => $_POST['alamat'],
    ];
    header("Location: data_mahasiswa.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form method="POST">
        <label>NIM:</label><br>
        <input type="text" name="nim" value="<?= $data['nim'] ?>"><br><br>
        
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $data['nama'] ?>"><br><br>
        
        <label>Email:</label><br>
        <input type="email" name="email" value="<?= $data['email'] ?>"><br><br>
        
        <label>Prodi:</label><br>
        <input type="text" name="prodi" value="<?= $data['prodi'] ?>"><br><br>
        
        <label>Semester:</label><br>
        <input type="number" name="semester" value="<?= $data['semester'] ?>"><br><br>
        
        <label>Alamat:</label><br>
        <textarea name="alamat"><?= $data['alamat'] ?></textarea><br><br>
        
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
