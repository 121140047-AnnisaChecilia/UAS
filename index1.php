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
                <li><a href="login.php">Login</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="register.php">Sig in</a></li>
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
        <h1>Formulir </h1>
        <form name="forminput" onsubmit="return validateForm()" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <br>
            <label for="nim">Nim:</label>
            <input type="nim" id="nim" name="nim">
            <br>
            <label for="prodi">Prodi:</label>
            <input type="prodi" id="prodi" name="prodi">
            <br>
            <label for="jenisk">Jenis Kelamin:</label>
            <select id="jenisk" name="jenisk">
            <option value="Laki-laki">Laki-laki </option>
            <option value="Perempuan">Perempuan </option>
            </select>
            <label>Pilih Universitas:</label>
            <input type="radio" name="univ" value="ITERA">ITERA
            <input type="radio" name="univ" value="Lainnya">Lainnya 
            <br>
            <button type="submit">Submit</button>
        </form>

        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "mahasiswa";
        $koneksi = new mysqli($host, $username, $password, $database);
        
        if ($koneksi->connect_error) {
            die("koneksi database gagal: " . $koneksi->connect_error);
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
            $nim = isset($_POST["nim"]) ? $_POST["nim"] : "";
            $prodi = isset($_POST["prodi"]) ? $_POST["prodi"] : "";
            $jenisk = isset($_POST["jenisk"]) ? $_POST["jenisk"] : "";
            $univ = isset($_POST["univ"]) ? $_POST["univ"] : "";

            $browser = $_SERVER['HTTP_USER_AGENT'];
            $ip_address = $_SERVER['REMOTE_ADDR'];
            
    // menyimpan ke database
    $sql = "INSERT INTO datamahasiswa (nama, nim, prodi, jenis_kelamin, universitas) 
    VALUES ('$nama', '$nim', '$prodi', '$jenisk', '$univ')";
    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil tersimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $sql = "INSERT INTO infouser (browser, ip_addres)
    VALUES ('$browser', '$ip_address')";

    if ($koneksi->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
    $koneksi->close();
}
?>
</main>
        <footer>
            &copy; 2023 Checil`s, All rights reserved.
        </footer>
</body>
</html>