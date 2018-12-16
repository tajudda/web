<?php
       session_start();
       require_once("koneksi.php");
       $username = $_SESSION['username'];
       $sql = mysqli_query($conn, "SELECT id_user from user where username = '$username'");
       $data = mysqli_fetch_assoc($sql);
       $data2 = $data["id_user"];
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
       $phone=(int)$_POST['phone'];
       $gender = $_POST['gender'];
       $visi = $_POST['visi'];
       $simpan = mysqli_query($conn, "INSERT INTO opportunity(id_user, fname, lname, email, phone, gender, visi) VALUES('$data2', '$fname', '$lname', '$email' , '$phone', 
       '$gender', '$visi')");
       if($simpan) {
        echo"<script>alert('berhasil');</script>";
        echo "<meta http-equiv='refresh' content='0;URL=opportunity.php'>";
      } else {
        echo"<script>alert('gagal');</script>";
        echo "<meta http-equiv='refresh' content='0;URL=opportunity.php'>";
      }
?>