<?php
session_start();
require_once("koneksi.php");
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
}

?>
<!DOCTYPE html>
<html>
<title>History</title>
<link rel="stylesheet" href="edit.css">
<head>
    
<?php
        function getkaryawa() {
            $sql = mysqli_query($GLOBALS['conn'], "SELECT * FROM `opportunity`");
            $data_array = array();
            while ($data = mysqli_fetch_assoc($sql)) {
                $data_array[] = $data;
            }
        return json_encode($data_array);
        }
        
?>

</head>
<body>
<header>
<div id="navbar">
<a href="index.php">Home</a>
        <a href="blog.html">Blog</a>
        <a href="contact.html">Contact</a>
        <a href="about.html">About</a>
        <a class="active" href="history.php">History</a>     
        <a href="logout.php"style="float: right"><li>Logout</li></a>
</div>
    </header>
<div Id="lembaran">
<center><table border="1">
<?php
    $datajson = getkaryawa();
    $deco = json_decode($datajson, true);
    if(sizeof($deco)!=0) {
        echo"<th>Front Name</th>";
        echo"<th>Last Name</th>";
        echo"<th>Email</th>";
        echo"<th>Phone</th>";
        echo"<th>Gender</th>";
        echo"<th>Vision</th>";
        
    for($i = 0; $i < sizeof($deco); $i++){
        echo "<tr>";
        echo "<td><p style=\"margin: auto 10px;\">" . $deco[$i]["fname"] ."</p></td>";
        echo "<td><p style=\"margin: auto 10px;\">" . $deco[$i]["lname"] . "</p></td>";
        echo "<td><p style=\"margin: auto 10px;\">" . $deco[$i]["email"] ."</p></td>";
        echo "<td><p style=\"margin: auto 10px;\">" . $deco[$i]["phone"] ."</p></td>";
        echo "<td><p style=\"margin: auto 10px;\">" . $deco[$i]["gender"] ."</p></td>";
        echo "<td><p style=\"margin: auto 10px;\">" . $deco[$i]["visi"] . "</p></td>";
        echo "</tr>";
    }
    
}
echo "<tr>";
echo '</form>';
echo "</tr>";
?>
<tr>
</tr>
</table></center>
</div>
</body>
</html>