<!--
buat mroses ngedit ya brooo.......!
-->
<?php
	include "koneksi.php";
	$id_barang = $_POST['id_barang'];
	$Merk = $_POST['Merk'];
	$Tipe = $_POST['Tipe'];
	$Stock = $_POST['Stock'];
	$Satuan = $_POST['Satuan'];
	$Harga = $_POST['Harga'];
	$modal=mysqli_query($koneksi,"UPDATE barang SET Merk = '$Merk',Tipe = '$Tipe',Stock = '$Stock',Satuan = '$Satuan',Harga = '$Harga' WHERE id_barang = '$id_barang'");
	header('location:index.php');
?>