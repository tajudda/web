<?php
require_once("koneksi.php");

$id_data = $_POST['id_data'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$visi = $_POST['visi'];
$id_user = $_POST['id_user'];

$hasil =  mysqli_query($conn, "UPDATE `opportunity` SET `id_data` = '$id_data',`fname` = '$fname',`lname` = '$lname',`email` = '$email, `phone` = '$phone' , `gender` = '$gender' , `visi` = '$visi',`id_user` = '$id_user' WHERE opportunity.`id_data` = $id_data") ;
 
if ($hasil) {
    echo "<div align='center'>Pendaftaran Sukses,<a href='daftar-lowongan.php'>back</a></div>";
} else {
    echo "<div align='center'>Proses Gagal!,<a href='daftar-lowongan.php'>back</a></div>";
    }
?>