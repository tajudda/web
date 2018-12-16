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
        <a class="active" href="blog.php">Blog</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
        <a href="history.php">History</a>
        <a href="logout.php"style="float: right"><li>Logout</li></a>
      </div>
      
      <div class="content">
        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">There is some article about us</h3>
        <div style="margin-left: 80px"><img src="logo.png" width="100" height="100"></div>
        <div class="grupQuote">
          <div class="qcontent">
              <a href="" style="text-decoration:none; color:black; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">FT Project Has Developed Its Business</a>
              <div style="text-align:center"><img src="berita1.jpg" width="100%" height="150"></div>
              <p style="font-family:initial; font-size:12pt">
                By : Achmad Arief R.S
              </p>
              <p style="text-align:justify; font-size:17pt">Although said to be a company that has not been long established or still developed for two years. 
                FT Project has expanded its business to almost all parts of Indonesia. With full support and many supportive partners from the very beginning this company stood up, 
                in a relatively short period of time they have successfully expanded its business to almost penetrate the entire Indonesian market.</p>
          </div>
          <div class="qcontent">
              <a href="" style="text-decoration:none; color:black; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Establish Cooperation with Thai Parties</a>
              <div style="text-align:center"><img src="berita2.jpg" width="100%" height="150"></div>
              <p style="font-family:initial; font-size:12pt">
                By : Aditya Kharisma
              </p>
              <p style="text-align:justify; font-size:17pt">To continue to develop and continue to raise the creative industry in Indonesia. FT Project works with 
                several companies in Thailand. Besides aiming to develop creative industries in Indonesia, this company also learn how the existing market in Southeast Asia in order to compete also in the outside market. 
                In this meeting also signed a memorandum of understanding between the two sides for cooperation can continue.</p>
          </div>
          <div class="qcontent">
              <a href="" style="text-decoration:none; color:black; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Received Full Support from the Government</a>
              <div style="text-align:center"><img src="berita3.jpg" width="100%" height="150"></div>
              <p style="font-family:initial; font-size:12pt">
                Source : Berita Satu
              </p>
              <p style="text-align:justify; font-size:17pt">President Joko Widodo (Jokowi) will prioritize the development of national creative industries in order to be able to act as 
                one of the locomotives of national economic development. The Head of State's commitment is to visit CJ Creative Center for Convergence Culture, known as CJ Creative Center in Seoul, Republic of Korea on Tuesday (17/5). 
                "The most important thing is to start first, we have not given priority to the development of our creative industry," said President Jokowi.</p>
          </div>
          <div class="qcontent">
              <a href="" style="text-decoration:none; color:black; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Getting Full Trust from Indonesian Consumers</a>
              <div style="text-align:center"><img src="berita4.jpg" width="100%" height="150"></div>
              <p style="font-family:initial; font-size:12pt">
                By : Dimas Hanifan
              </p>
              <p style="text-align:justify; font-size:17pt">The creative industry is currently considered a good market for economic development in Indonesia. T
                his is because many people now use smartphones and social media. Therefore FT Project here entered as a provider of community needs for the development of the internet and social media. 
                In the last two years the company has begun to win the trust of Indonesian consumers.</p>
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