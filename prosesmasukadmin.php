<?php 

//connection
require('confiq.php');
session_start();

$idadmin = $_POST['idadmin'];

$katalaluanadmin = $_POST['katalaluanadmin'];


$rekod=mysqli_query($con, "Select * from admin where idadmin='$idadmin' and katalaluanadmin='$katalaluanadmin'");
$hasil=mysqli_num_rows($rekod);
if ($hasil==1){
	$_SESSION['idadmin'] = $idadmin;
	while($row = mysqli_fetch_array($rekod)){
		$_SESSION['namaadmin'] = $row['namaadmin'];
	}
	
	// Redirect user to index.php
 	$message = "Katalaluan anda sah";
	echo "<script type='text/javascript'>alert('$message');</script>";
	
	
	header('Location: index.php');
} else {
	$message1 = "Katalaluan anda tidak sah";
	echo "<script type='text/javascript'>alert('$message1');</script>";
	
	
	header('refresh:1;URL=./logmasukadmin.php');
}
?>