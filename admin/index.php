<?php
session_start();
require_once("koneksi.php");
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else {
   $username = $_SESSION['username'];
}

?>
<!DOCTYPE html>
<html>
<title>Admin</title>
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/png" href="../img/logo.png">
<head>
</head>
<body>

<div class="header">
        <img src="../img/back.png">
      </div>
      
      <div id="navbar">
        <a class="active" href="index.php">Home</a>
        <a href="daftar-user.php">Edit User</a>
        <a href="daftar-lowongan.php">Edit Lowongan</a>
        <a href="logout.php"style="float: right"><li>Logout</li></a>
      </div>
      
      <div class="content">
        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">FT Project Portfolio</h3>
        <div style="margin-left: 80px"><img src="../img/logo.png" width="100" height="100"></div>
        
        </div>

</div>
<div id="flip">Click for more information</div>
<div id="panel">We deserve term of services in this website. Go look at
  <br></br>
  <a href="termofservices.html">Term of Services
</div></a>

</body>

<script>
    window.onscroll = function() {myFunction()};
    
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
</html>
