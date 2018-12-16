<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $cekuser = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$pass'  ");
   $hasil = mysqli_fetch_array($cekuser);
   if(mysqli_num_rows($cekuser) == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
        if(isset($_SESSION['username'])) {
          $sql = mysqli_query($conn, "SELECT nama from user where username = '$username'");
          $data = mysqli_fetch_assoc($sql);
          $data2 = $data["nama"];
          echo"<script>alert('selamat datang $data2');</script>";
          echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
        // header('location:index.php');
       }
     }
   }
?>