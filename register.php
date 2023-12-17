<?php 
require 'funct.php';
if( isset($_POST["register"]) ) {
	if( register($_POST) > 0 ) {
		echo "<script>
				alert('berhasil ditambahkan silahkan login');
				document.location.href = 'login.php';
			  </script>";
	} else {
		echo "<script>
				alert('gagal menambahkan user');
				document.location.href = 'login.php';
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
	<form action="" method="post">
        <label for="username">Username :</label>
		<input type="text" name="username" id="username" required>
		<br>
		<label for="password">Password :</label>
		<input type="password" name="password" id="password" required>
        <br>
		<button type="submit" name="register">Register</button>
	</form>
</body>
</html>