<?php
require_once("koneksi.php");
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM opportunity WHERE id_data = $id");
$data = mysqli_fetch_assoc($sql);


?>
<link rel="stylesheet" href="style.css">
<Div class="opportunity">
<form method="post" action="proses-edit-lowongan.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">

    <tr
        ><td colspan="2" align="center"><h1>Form Update</h1></td>
    </tr>

    <tr>
  	    <td width="23%"> ID Data </td>
        <td width="2%">:</td>
        <td width="75%"> <input name="id_data" value="<?php echo $data['id_data']; ?>"></td>
    </tr>

    <tr>
  	    <td>Front Name</td>
        <td>:</td>
        <td> <input type="text" name="fname" value="<?php echo $data['fname']; ?>"> </td>
    </tr>  
    
    <tr>
  	    <td>Last Name</td>
        <td>:</td>
        <td> <textarea name="lname"><?php echo $data['lname']; ?></textarea></td>
    </tr>

    <tr>
  	    <td>Email</td>
        <td>:</td>
        <td> <input type="text" name="email" value="<?php echo $data['email']; ?>"> </td>
    </tr>

    <tr>
  	    <td>Phone</td>
        <td>:</td>
        <td> <input type="text" name="phone" value="<?php echo $data['phone']; ?>"> </td>
    </tr>

     <tr>
  	    <td>Gender</td>
        <td>:</td>
        <td> <textarea name="gender"><?php echo $data['gender']; ?></textarea></td>
    </tr>

    <tr>
  	    <td>Vision</td>
        <td>:</td>
        <td> <textarea name="visi"><?php echo $data['visi']; ?></textarea></td>
    </tr>

    <tr>
  	    <td>ID User</td>
        <td>:</td>
        <td> <input type="text" name="id_user" value="<?php echo $data['id_user']; ?>"> </td>
    </tr>

  	    <td colspan="6"align="right"><input type="SUBMIT" name="SUBMIT" value="Save"></td><td><input type="button" value="Back" onclick="history.back(-1)" /></td>
  </tr>
</table>
</form>
</Div>