<!--
iki proses nyimpenya njih....
-->
<?php
include "koneksi.php";
$Merk = $_POST['Merk'];
$Tipe = $_POST['Tipe'];
$Stock = $_POST['Stock'];
$Satuan = $_POST['Satuan'];
$Harga = $_POST['Harga'];
mysqli_query($koneksi,"INSERT INTO barang (Merk,Tipe,Stock,Satuan,Harga) VALUES ('$Merk','$Tipe','$Stock','$Satuan','$Harga')");
header('location:index.php');
?>