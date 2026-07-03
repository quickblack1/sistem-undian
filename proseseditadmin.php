<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<center>
<font color=red>
	<body style="background-color:powderblue;"> 
<?php 

//connection
require('confiq.php');

//sql buat query

	
	$idcalon=$_GET['idcalon'];
	$nokp = $_GET['nokp'];
	$namapengundi=$_GET['namacalon'];
	$kelas = $_GET['kelas'];

	//ambil data untuk update

$query = "UPDATE pengundi SET namapengundi = '$namapengundi', kelas = '$kelas' WHERE nokp = '$nokp'";
//$query = "UPDATE calon SET idcalon = '$idcalon',namacalon = '$namacalon' WHERE idcalon = '$idcalon'" ;
$rekod=mysqli_query($con,$query);

if ($rekod) {
	echo"<script>alert('kemaskini berjaya'); window.location.href='paparcalon.php'; </script>";
} //	else{
	//echo"<script>alert('tidak berjaya'); window.location.href='cari.php'; </script>";
   
	
//}
 ?>
