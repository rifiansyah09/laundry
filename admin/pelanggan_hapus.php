<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	mysqli_query($koneksi,"delete from pelangggan where pelanggan_id='$id'");
	echo "<script>alert('Data akan Dihapus?'); window.location.href='pelanggan.php'</script>";
?>
