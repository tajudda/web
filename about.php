<!DOCTYPE html>
<html>
<head>
    <title>FT Project</title>
    <link rel="stylesheet" href="edit.css">
    <link rel="icon" type="image/png" href="logo.png">
</head>
<body>
    <div class="header">
        <img src="back.png">
      </div>
      
      <div id="navbar">
        <a href="index.php">Home</a>
        <a href="blog.php">Blog</a>
        <a href="contact.php">Contact</a>
        <a class="active" href="about.php">About</a>
        <a href="history.php">History</a>
        <a href="logout.php"style="float: right"><li>Logout</li></a>
      </div>
      
      <div class="content">
        <h2 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">About Us</h2>
        <div style="margin-left: 80px"><img src="logo.png" width="100" height="100"></div>
        <blockquote>
                FT Project is a creative company engaged in the arts and other creative fields. The company was originally built from vector venture, 
                video editing, and animation making. Over the past two years, FT Project has become a big company in the creative industry sector in Indonesia. 
                Not only in those three areas, we are also trying to develop our industry sector into the field of technology and information. 
                Especially in the startup field. We accommodate any ideas that can develop Indonesia to be more advanced in the future. 
                We always invite young people to continue to move actively in the creative industry because creative industry is now a very rapidly growing industry.
        </blockquote>
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