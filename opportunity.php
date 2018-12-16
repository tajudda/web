<!DOCTYPE html>
<html>
<style>
.error {color:red;
}
</style>
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
        <a href="index.php">Home</a>
        <a href="blog.php">Blog</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
        <a href="history.php">History</a>
        <a href="logout.php"style="float: right"><li>Logout</li></a>
      </div>
      
      <div class="content">
        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Opportunity</h3>
        <div style="margin-left: 80px"><img src="logo.png" width="100" height="100"></div>
        <h3 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
            We don′t compromise on our people. We look for the best match, the best talent.
        </h3>
        <p>
            FT Project is always looking for talented employees who can commit to working responsibly and independently. 
            In return, we offer wide-ranging opportunities. A career at FT Project is truly a one–of–a–kind experience. 
        </p>
      </div>

<?php
$fnameErr = $lnameErr = $emailErr = $phoneErr = $genderErr = $visiErr = "";
$fname = $lname = $email = $phone = $gender = $visi = "";
$cekfname = $cekemail = $cekphone = $cekgender = false;
$benar = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "masuk";
  if (empty($_POST["fname"])) {
    $fnameErr = "Front name is required";
    $benar = false;
  } else {
    $fname = test_input($_POST["fname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed"; 
      $benar = false;
    }
    else{
      $cekfname = true;
    }
  }

  if (empty($_POST["fname"])) {
    $lname = test_input($_POST["lname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
      $benar = false; 
    }
  } 

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $benar = false;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $benar = false; 
    }
    else{
      $cekemail = true;
    }
  }

  if (empty($_POST["phone"])) {
        $phoneErr = "phone is required";
        $benar = false;
      } else {
        $phone = test_input($_POST["phone"]);
        if(!preg_match("/^[0]{1}[8]{1}[0-9]{10}$/", $phone)) {
            $phoneErr = "Phone is not required";
            $benar = false;
        }
        else{
          $cekphone = true;
        }
    }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $benar = false;
  } else {
    $gender = test_input($_POST["gender"]);
    $cekgender = true;
  }

  if (empty($_POST["visi"])) {
    $visi = "";
  } else {
    $comment = test_input($_POST["visi"]);
  }
  if ($benar == true){
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
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="container">
          <h4>Come and Join Us</h4>
          <p>Please fill in this form to complete registration.</p>
          <hr>
          <p style="font-size:12pt"><span class="error">*Required field</span></p>
          <label for="fname"><b>First Name</b></label>
          <br>
          <input type="text" placeholder="Enter Your First Name" name="fname" required><span class="error">*</span>
          <br>
          <label for="lname"><b>Last Name</b></label>
          <br>
          <input type="text" placeholder="Enter Your Last Name" name="lname">
          <br>
          <label for="email"><b>E-Mail</b></label>
          <br>
          <input type="text" placeholder="E-mail" name="email" required><?php echo $emailErr;?><span class="error">*</span>
          <br>
          <label for="phone"><b>Phone</b></label>
          <br>
          <input type="text" placeholder="08xxxxxxxxxx" name="phone" required><?php echo $phoneErr;?><span class="error">*</span>
          <br>
          <label for="gender"><b>Gender</b></label>
          <br>
          <font size = "4"><input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male</font><span class="error">*</span>
          <br><br>
          <label for="visi"><b>Vision</b></label>
          <br>
          <textarea name="visi" rows="5" cols="70"></textarea>
          <hr>
         <button type="submit" class="registerbtn">Register</button>
        </div>
      </form>
      <p style="font-size:16pt" >
      <?php
        if ($cekfname == true && $cekemail == true && $cekgender == true && $cekphone == true){
          echo "<br>";
          echo "*", $fname;
          echo " succesfully registered";  
        }
      ?>
      </p>

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