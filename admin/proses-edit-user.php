<?php
require_once("koneksi.php");

$no = $_POST['id_user'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];


$hasil =  mysqli_query($conn, "UPDATE `user` SET `id_user` = '$no', `nama` = '$nama' , `username` = '$username',`password` = '$password' WHERE user.`id_user` = $no ") ;
 
if ($hasil) {
    echo "<div align='center'>Pendaftaran Sukses,<a href='daftar-user.php'>back</a></div>";
} else {
    echo "<div align='center'>Proses Gagal!,<a href='daftar-user.php'>back</a></div>";
    }
?>