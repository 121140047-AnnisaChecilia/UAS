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
                <li><a href="logout.php">Logout</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
	<main>
        <div class="sidebar">
			<h2>You can choose here</h2>
			<ul>
				<li><a href="index1.php">Input Data</a></li>
			</ul>
		</div>
        <div class="content"> 
        <h1>Hasil Data</h1>
        <table border = 1 cellpadding = 7 cellspacing = 0>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Jenis Kelamin</th>
                <th>Universitas</th>
                <th colspan = 2>Edit Data</th>
            </tr>
        <?php
        $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");
        $datamahasiswa = query("SELECT * FROM datamahasiswa");
        
        function query($data){
        global $koneksi;

        $hasil = mysqli_query($koneksi, $data);
        $rows = [];
        while ($row = mysqli_fetch_assoc($hasil)){
            $rows[] = $row;
        }return $rows;
    }
    ?>
    <?php $i = 1; ?>
	<?php foreach( $datamahasiswa as $row ) { ?>
	<tr>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["nim"]; ?></td>
		<td><?= $row["prodi"]; ?></td>
		<td><?= $row["jenis_kelamin"]; ?></td>
        <td><?= $row["universitas"]; ?></td>
        <td> <a href="update1.php?id=<?php echo $row["id"]; ?>">Update</a> </td>
        <td> <a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('hapus data?')">Delete</a></td>
	</tr>
	<?php ?>
	<?php 
} ?>
    </table>
  </body>
</html>