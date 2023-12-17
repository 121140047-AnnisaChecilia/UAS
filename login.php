<?php 
session_start();
require 'funct.php';

if( isset($_POST['login']) ) {
	global $conn;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_username = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    
    if( mysqli_num_rows($cek_username) === 1 ) {
		$row = mysqli_fetch_assoc($cek_username);
		if( password_verify($password, $row['password']) ) {
			$_SESSION['username'] = $_POST['username'];

            $cookie_name = 'user_login';
            $cookie_value = $_SESSION['username'];
            $cookie_expiration = time() + (86400 * 7);
            setcookie($cookie_name, $cookie_value, $cookie_expiration, "/"); 

            header('Location: index1.php');
            exit;
        }
    }

    // Jika login gagal
    echo "Login gagal. Cek username dan password.";
}
?>
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
                <li><a href="logout.php">Logout</a></li>
                <li><a href="https://itera.ac.id">Kampus</a></li>
            </ul>
        </nav>
	<main>
        <div class="content"> 
        <h1>Silahkan Login</h1>
        <form action="" method="post">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" autofocus>
            <br>
            <label for="password">Password :</label>
			<input type="password" name="password" id="password">
            <br>
            <button type="submit" name="login">Login</button>
	    </form>
    </body>
</html>