<!DOCTYPE html>
<html>
<head>
    <title>FT Project</title>
    <link rel="stylesheet" href="edit.css">
    <link rel="icon" type="image/png" href="img/logo.png">
</head>
<body>
    <div class="header">
        <img src="img/back.png">
      </div>
      
      <div id="navbar">
        <a class="active" href="menuutama.php">Home</a>
        <a href="login.php">Blog</a>
        <a href="login.php">Contact</a>
        <a href="login.php">About</a>
        <a href="login.php">Login</a>
      </div>
      
      <div class="content">
        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">FT Project Portfolio</h3>
        <div style="margin-left: 80px"><img src="logo.png" width="100" height="100"></div>
        <blockquote>
          FT Project is a company engaged in the creative industry in Indonesia. 
          It has been two years since the company was established and some of our production is as follows:
          <ol>
            <li>
              Home Vectors, or can be called products that move in the field of editing vector.
              Our company is arguably the largest home vector in Indonesia because we are a combination of people who have long moved or expert in this field.
            </li>
            <li>
              Video editing, we accept all forms of order to edit video in various duration and according to request.  
              But that does not contain racist elements and other negative elements.
            </li>
            <li>
              Animation, in today's world especially in Indonesia the art of animation is very much sought or used because the content 
              is light and easily digested various circles. Therefore we also accept all forms of animation making orders. 
              But that does not contain racist elements and other negative elements.
            </li>
          </ol>
        </blockquote>
        <div class="row">
            <div class="column">
                <h2>Working at FT Project</h2>
                <p>Many people join FT Project as a career and discover that they have found a home.
                We do our best to nurture, support and guide our employees development.
                We do this within the disciplined structure of a long-standing organization, 
                one with clear benchmarks and values including a dedication to quality and a conscious commitment to the community.<a href="login.php">more</a></p>
                </div>
            <div class="column">
                <h2>Career Opportunities</h2>
                <p>Joining FT Project is an exciting opportunity to be part of one of Indonesia′s largest and most established companies,
                one with a competitive national and international presence and a reputation for high quality products.
                We are always on the lookout for talented personnel who would be a good fit with our values and needs <a href="login.php">more</a></p>
            </div>
            </div>
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