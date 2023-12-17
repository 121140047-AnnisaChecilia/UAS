<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "mahasiswa";
$koneksi = new mysqli($host, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function query($sql) {
	global $koneksi;
	$result = mysqli_query($koneksi, $sql);
    if (!$result) {
        die("Error : " . mysqli_error($koneksi));
    }
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}
function delete($id) {
	global $koneksi;
	mysqli_query($koneksi, "delete from datamahasiswa where id = $id");
	return mysqli_affected_rows($koneksi);
}
function update($mhs) {
	global $koneksi;
	$id = $mhs["id"];
    $nama = htmlspecialchars($mhs["nama"]);
	$nim = htmlspecialchars($mhs["nim"]);
	$prodi = htmlspecialchars($mhs["prodi"]);
	$jenisk = htmlspecialchars($mhs["jenis_kelamin"]);
	$univ = htmlspecialchars($mhs["universitas"]);

	$sql = "UPDATE datamahasiswa SET nim = '$nim', nama = '$nama', prodi = '$prodi', jenis_kelamin = '$jenisk', universitas = '$univ' WHERE id = $id ";
	mysqli_query($koneksi, $sql);
	return mysqli_affected_rows($koneksi);
}
?>
<?php
function register($data) {
	global $koneksi;

	$username = htmlspecialchars($_POST["username"]);
	$password = htmlspecialchars($_POST["password"]);
	$cek_username = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

	if( mysqli_num_rows($cek_username) === 1 ) {
		echo "<script>
				alert('username sudah terpakai!');
				document.location.href = '';
			  </script>";
		return false;
	}
	$password = password_hash($password, PASSWORD_DEFAULT);
	$sql = "INSERT INTO user VALUES ('', '$username', '$password', CURRENT_TIMESTAMP)";
	mysqli_query($koneksi, $sql);

	return mysqli_affected_rows($koneksi);
}
?>