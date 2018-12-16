<?php
require_once("koneksi.php");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM opportunity WHERE id_data='$id'")or die(mysql_error());
 
header("location:daftar-lowongan.php?pesan=hapus");
?>

