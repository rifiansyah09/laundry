<?php
	include '../koneksi.php';

	$nama = $_POST['nama'];
	$hp = $_POST['hp'];
	$alamat = $_POST['alamat'];

	mysqli_query($koneksi,"insert into pelangggan value('','$nama','$hp','$alamat')");
	
	echo "<script>alert('Data Tersimpan'); window.location.href='pelanggan.php'</script>";

?>