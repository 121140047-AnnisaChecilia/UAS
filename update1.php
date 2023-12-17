<?php 
require 'funct.php';

$id = $_GET["id"];
$datamhs = query("SELECT * FROM datamahasiswa WHERE id = $id")[0];


if( isset($_POST["update"]) ) {
	if( update($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'lihatdata.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'lihatdata.php';
			  </script>";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Form</title>
  <link rel="stylesheet" href="style.css"> <script src="index.js"></script>
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="side">
                <h1>UJIAN AKHIR SEMESTER</h1>
                <h2> Annisa Checilia Astuti</h2>
            </div>
        </header>
        <nav class="nav">
            <ul>
                <li><a href="https://www.instagram.com/cheeciliann/">instagram</a></li>
                <li><a href="https://itera.ac.id">Kampus</a></li>
            </ul>
        </nav>
	<main>
        <div class="sidebar">
			<h2>You can choose here</h2>
			<ul>
				<li><a href="lihatdata.php">Lihat Data</a></li>
			</ul>
		</div>
        <div class="content"> 
            <h1>Ubah data Mahasiswa</h1>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo isset($datamhs["id"]) ? $datamhs["id"] : ''; ?>">
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?php echo $datamhs["nama"]; ?>">
                <br>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" value="<?php echo $datamhs["nim"]; ?>">
                <br>
                <label for="prodi">Prodi : </label>
                <input type="text" name="prodi" id="prodi" value="<?php echo $datamhs["prodi"]; ?>">
                <br>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin">
                    <option value="Laki-laki" <?php echo ($datamhs["jenis_kelamin"] == "Laki-laki") ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php echo ($datamhs["jenis_kelamin"] == "Perempuan") ? 'selected' : ''; ?>>Perempuan</option>
                </select>
                <br>
                <label>Pilih Universitas:</label>
                <input type="radio" name="universitas" value="ITERA" <?php echo ($datamhs["universitas"] == "ITERA") ? 'checked' : ''; ?>>ITERA
                <input type="radio" name="universitas" value="Lainnya" <?php echo ($datamhs["universitas"] == "Lainnya") ? 'checked' : ''; ?>>Lainnya
                <br>
                <button type="submit" name="update">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>