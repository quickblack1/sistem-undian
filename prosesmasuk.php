<?php 

//connection
require('confiq.php');
session_start();
$nokp = $_POST['nokp'];

$katalaluanpengundi = $_POST['katalaluanpengundi'];


$rekod=mysqli_query($con, "Select * from pengundi where nokp='$nokp' and katalaluanpengundi='$katalaluanpengundi'");
$hasil=mysqli_num_rows($rekod);
if ($hasil>0)
{
	$_SESSION['nokp'] = $nokp;
	$row = mysqli_fetch_array($rekod);
	$_SESSION['namapengundi'] = $row['namapengundi'];
	$message = "Katalaluan anda sah";
echo "<script type='text/javascript'>alert('$message');</script>";
	
	
	header('refresh:1;URL=./menupengundi.php');
}
else
{
	$message1 = "Katalaluan anda tidak sah";
	echo "<script type='text/javascript'>alert('$message1');</script>";
	//echo "<h4> Katalaluan tidak sah, sila cuba sekali lagi</h4>";
	//include "logmasuk.php";
	header('refresh:1;URL=./logmasuk.php');
	

}
?>
