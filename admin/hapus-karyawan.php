<?php
require_once("koneksi.php");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM user WHERE id_user='$id'")or die(mysql_error());
 
header("location:daftar-user.php?pesan=hapus");
?>

