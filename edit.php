<?php

include("menuadmin.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KEMASKINI PRODUK</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

  <body style="background-color:powderblue;"> 
  <center>
  <font color=black  size=12pt>
KEMASKINI PRODUK<br>
========================<br><br>
</font>


<?php 


//connection
require('confiq.php');

$idaktiviti = $_GET['idaktiviti'];

 //get the idpelajar which will updated


$query="SELECT * FROM aktiviti WHERE idaktiviti='".$idaktiviti."'";


//buat jujukan bersekutu
$result = mysqli_query($con, $query);
$rekod  = mysqli_fetch_array($result);
$idaktiviti=$rekod['idaktiviti'];

$namaaktiviti=$rekod['namaaktiviti'];
$tempat=$rekod['tempat'];
$idadmin=$rekod['idadmin'];


//$result=mysqli_query($conn, $query);
//WHILE($rekod=mysqli_fetch_array($result))

?>
<form method="GET" action="prosesedit.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
  <td height="21" colspan="3">
     <strong> Kemaskini aktiviti</strong>
    </td>



  <tr>
    <td width="23%"> ID AKTIVITI </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="idaktiviti" disabled='disable' value= '<?php echo $idaktiviti; ?>'> </td>
  </tr>
 
 <tr>
    <td width="23%"> Nama Aktiviti </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="namaaktiviti" value= '<?php echo $namaaktiviti; ?>'> </td>
  </tr>
  <tr>

<tr>
    <td width="23%"> Tempat </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="tempat" value= '<?php echo $tempat; ?>'> </td>
  </tr>

    
  <tr>
    <td width="23%"> idadmin </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="idadmin" disabled='disable' value= '<?php echo $idadmin; ?>'> </td>
  </tr>
  <tr>

<td> <input type="hidden" name="idaktiviti" value='<?php echo $idaktiviti; ?>'>


 
    <br><br>


    <input type="SUBMIT" name="submit" value="KEMASKINI"></td>
<br>
    <a href="paparaktiviti.php">Kembali</a>
 </td>
 </tr>
 </tr>
 </tr>
 </tr>
 </tr>
 </table>
 </form>
 </center>
 </body>
 </html>
