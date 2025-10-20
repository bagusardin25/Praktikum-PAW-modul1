 <!DOCTYPE html>
 <html>
 <head>
 <title>Hasil Pendaftaran</title>
	<style>
		body { font-family: Arial; max-width: 600px; margin: 50px auto;}
		.card { background: #f9f9f9; padding: 20px; border-radius: 8px; border: 1px solid #ddd; }
		.success { background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
		table { width: 100%; border-collapse: collapse; }
		td { padding: 8px; vertical-align: top; }
		.label { font-weight: bold; width: 150px; }
		.btn { display: inline-block; background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-top: 15px;}
	</style>
</head>
<body>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$prodi = $_POST['prodi'];
		$semester = $_POST['semester'];
		$alamat = $_POST['alamat'];
		$tanggal_daftar = date('d-m-Y H:i:s');
		?>

		<div class="success">
			✓ Pendaftaran berhasil! Data Anda telah tersimpan.
		</div>

		<div class="card">
			<h2>Detail Pendaftaran</h2>
			<table>
				<tr>
					<td class="label">NIM</td>
					<td>: <?php echo $nim; ?></td>
				</tr>
				<tr>
					<td class="label">Nama Lengkap</td>
					<td>: <?php echo $nama; ?></td>
				</tr>
				<tr>
					<td class="label">Email</td>
					<td>: <?php echo $email; ?></td>
				</tr>
				<tr>
					<td class="label">Program Studi</td>
					<td>: <?php echo $prodi; ?></td>
				</tr>
				<tr>
					<td class="label">Semester</td>
					<td>: <?php echo $semester; ?></td>
				</tr>
				<tr>
					<td class="label">Alamat</td>
					<td>: <?php echo $alamat; ?></td>
				</tr>
				<tr>
					<td class="label">Tanggal Daftar</td>
					<td>: <?php echo $tanggal_daftar; ?></td>
				</tr>
			</table>

			<a href="form.php" class="btn">Daftar Lagi</a>
		</div>

		<?php
	} else {
		echo "<p>Akses tidak valid. Silakan isi form terlebih dahulu.</p>";
		echo "<a href='form.php'>Kembali ke Form</a>";
	}
	?>
</body>
</html>