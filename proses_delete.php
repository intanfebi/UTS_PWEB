<!--
buat delete alias hapus ya brooo.......!
-->
<?php
	include "koneksi.php";
	$id_barang=$_GET['id_barang'];
	$modal=mysqli_query($koneksi,"Delete FROM barang WHERE id_barang='$id_barang'");
	header('location:index.php');
?>