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

	
	$idaktiviti=$_GET['idaktiviti'];
	$namaaktiviti=$_GET['namaaktiviti'];
	$tempat=$_GET['tempat'];
	
	
	
	
	
 $query = "UPDATE aktiviti SET idaktiviti = '$idaktiviti',namaaktiviti = '$namaaktiviti',tempat='$tempat' WHERE idaktiviti = '$idaktiviti'" ;
$rekod=mysqli_query($con,$query);

if ($rekod) {
	echo"<script>alert('kemaskini berjaya'); window.location.href='paparaktiviti.php'; </script>";
} 

else{
    	echo"<script>alert('Proses Kemaskini Tidak berjaya'); window.location.href='paparaktiviti.php'; </script>";
    }
 ?>

