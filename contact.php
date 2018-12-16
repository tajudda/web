<!DOCTYPE html>
<html>
<head>
    <title>FT Project</title>
    <link rel="stylesheet" href="edit.css">
    <link rel="icon" type="image/png" href="logo.png">
</head>

<body id="noimg">
    <div class="header">
        <img src="back.png">
      </div>
     
      <div id="navbar">
        <a href="index.php">Home</a>
        <a href="blog.php">Blog</a>
        <a class="active" href="contact.php">Contact</a>
        <a href="about.php">About</a>
        <a href="history.php">History</a>
        <a href="logout.php"style="float: right"><li>Logout</li></a>
      </div>
      <div id="bagimg" style="display:flex;justify-content:center;">
      <p style="padding-top:10px">Contact Us</p>
        
</div>
<div class="kontak">
  <div class="kontak-isi">
        FT Project is a creative company engaged in the arts and other creative fields. 
        The company was originally built from vector venture, 
        video editing, and animation making.
  </div>
  <div class="kontak-isi">
    <div>
      <p>Twitter</p>
      <img src="twitter.png" style="width:10%">
      <a href="" style="font-size:17pt">@ft_project</a>
    </div>
    <div>
        <p>Facebook</p>
        <img src="facebook.png" style="width:10%">
        <a href="" style="font-size:17pt">Full Time Project</a>
    </div>
    <div>
        <p>Instagram</p>
        <img src="instagram-logo.png" style="width:10%">
        <a href="" style="font-size:17pt">@ft_project</a>
    </div>
    
  </div>
  <div class="kontak-isi">
        <div>
            <p>Location</p>    
            <img src="location.png" style="width:10%">
            <a href="">
                Jl. Dr. Soetomo, Mangkubumen, Banjarsari, Mangkubumen, Banjarsari, 
                Kota Surakarta, Jawa Tengah 57125 </a>
            </div>
  </div>
  <div class="kontak-isi">
        <div>
            <p>E-Mail</p>
            <img src="email.png" style="width:10%">
            <a href="" style="font-size:17pt">ftproject@gmail.com</a>
        </div>
        <div>
            <p>Phone</p>
            <img src="telephone.png" style="width:10%">
            <a href="" style="font-size:17pt">(0271) 7655123</a>
        </div>
  </div>
</div>

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

</html>