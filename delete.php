<?php
require 'funct.php';
$id = $_GET["id"];

if( delete($id) > 0 ) {
	echo "<script>
			alert('data telah dihapus!');
			document.location.href = 'lihatdata.php';
		</script>";
} else {
	echo "<script>
			alert('data tidak dihapus!');
			document.location.href = 'lihatdata.php';
		</script>";
}
?>