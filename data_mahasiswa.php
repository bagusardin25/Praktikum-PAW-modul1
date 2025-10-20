<?php
session_start();

if (!isset($_SESSION['mahasiswa'])) {
    $_SESSION['mahasiswa'] = [];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'email' => $_POST['email'],
        'prodi' => $_POST['prodi'],
        'semester' => $_POST['semester'],
        'alamat' => $_POST['alamat'],
    ];
    $_SESSION['mahasiswa'][] = $data;
}
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    unset($_SESSION['mahasiswa'][$id]);
    $_SESSION['mahasiswa'] = array_values($_SESSION['mahasiswa']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        a { text-decoration: none; color: #007BFF; }
        .btn { padding: 6px 12px; border-radius: 5px; background: #4CAF50; color: #fff; }
    </style>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="percobaan7.php" class="btn">Tambah Mahasiswa</a><br><br>

    <table>
        <tr>
            <th>No</th><th>NIM</th><th>Nama</th><th>Email</th><th>Prodi</th><th>Semester</th><th>Alamat</th><th>Aksi</th>
        </tr>
        <?php foreach ($_SESSION['mahasiswa'] as $index => $mhs): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['email'] ?></td>
            <td><?= $mhs['prodi'] ?></td>
            <td><?= $mhs['semester'] ?></td>
            <td><?= $mhs['alamat'] ?></td>
            <td>
                <a href="edit.php?id=<?= $index ?>">Edit</a> | 
                <a href="?hapus=<?= $index ?>" onclick="return confirm('Yakin ingin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
