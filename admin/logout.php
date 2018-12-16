<?php
   session_start();
   session_destroy();

   echo"<script>alert('anda sudah log out');</script>";
   echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
?>