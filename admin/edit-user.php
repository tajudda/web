<?php
require_once("koneksi.php");
$id = $_GET['id']; //get the no which will updated
$sql = mysqli_query($conn, "SELECT * FROM user WHERE id_user = $id");
$data = mysqli_fetch_assoc($sql);

?>
<link rel="stylesheet" href="style.css">
<Div class="login">
<form method="post" action="proses-edit-user.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">

    <tr
        ><td colspan="2" align="center"><h1>Form Update</h1></td>
    </tr>

    <tr>
  	    <td width="23%"> No </td>
        <td width="2%">:</td>
        <td width="75%"> <input type="text" name="id_user"  value="<?php echo $data['id_user']; ?>"> </td>
    </tr>
    <tr>
  	    <td>Name</td>
        <td>:</td>
        <td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
    </tr>

    <tr>
  	    <td>UserName</td>
        <td>:</td>
        <td> <input type="text" name="username" value="<?php echo $data['username']; ?>"> </td>
    </tr>  
    
    <tr>
  	    <td>Password</td>
        <td>:</td>
        <td> <input type="text" name="password" value="<?php echo $data['password']; ?>"> </td>
    </tr>
    
    <tr>
  	    <td colspan="6"align="right"><input type="SUBMIT" name="SUBMIT" value="Save"></td><td><input type="button" value="Back" onclick="history.back(-1)" /></td>
  </tr>
</table>
</form>
</Div>