<?php
session_start();
require_once("koneksi.php");
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
}

?>
<!DOCTYPE html>
<html>
<title>Halaman Daftar User</title>
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/png" href="../img/logo.png">
<head>
    
    <?php
        function getkaryawa() {
            $sql = mysqli_query($GLOBALS['conn'], "SELECT * FROM `user`");
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
<a class="active" href="daftar-user.php">Edit User</a>
<a href="daftar-lowongan.php">Edit Lowongan</a>
<a href="logout.php"style="float: right"><li>Logout</li></a>
</div>
    </header>
<div Id="lembaran">
<center><table border="1">
<?php
    echo "<form name=\"FEdit\" method=\"post\" action=\"tambah-user.php\" onSubmit=\"return confirm('membuat data Baru?')\">";
    $datajson = getkaryawa();
    $deco = json_decode($datajson, true);
    if(sizeof($deco)!=0) {
        echo"<th>ID User</th>";
        echo"<th>Nama</th>";
        echo"<th>Username</th>";
        echo"<th>Password</th>";
        
    for($i = 0; $i < sizeof($deco); $i++){
        echo "<tr>";
        echo "<td><p style=\"margin: auto 10px;\">" . ($i +1 ) . "</p></td>";
        echo "<td><p style=\"margin: auto 10px;\">" . $deco[$i]["id_user"] . "</p></td>";
        echo "<td><p style=\"margin: auto 10px;\">" . $deco[$i]["nama"] ."</p></td>";
        echo "<td><p style=\"margin: auto 10px;\">" . $deco[$i]["username"] ."</p></td>";
        echo "<td><p style=\"margin: auto 10px;\">" . $deco[$i]["password"] . "</p></td>";
        echo "<td><a href=\"hapus-karyawan.php?id=". $deco[$i]["id_user"] . "\" onclick=\"return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')\" type=\"buttom\">Hapus</a>|<a href=\"edit-user.php?id=". $deco[$i]["id_user"] . "\"onclick=\"return confirm('Apakah Anda Yakin Ingin Mengedit Data ?')\" type=\"buttom\">Edit</a></td>";
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