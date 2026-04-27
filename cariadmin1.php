<?php

include("menuadmin.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KEMASKINI CALON</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

  <body style="background-color:powderblue;"> 
  <center>
  <font color=black  size=12pt>
KEMASKINI CALON<br>
========================<br><br>
</font>


<?php 


//connection
require('confiq.php');

$idcalon = $_GET['idcalon'];

 //get the idpelajar which will updated

$query="SELECT * from calon where idcalon='".$idcalon."'";

//buat jujukan bersekutu
$result = mysqli_query($con, $query);
$rekod  = mysqli_fetch_array($result);

$idcalon=$rekod['idcalon'];
$namacalon=$rekod['namacalon'];
$gambar=$rekod['gambar'];
$idadmin=$rekod['idadmin'];

//$result=mysqli_query($conn, $query);
//WHILE($rekod=mysqli_fetch_array($result))

?>
<form method="GET" action="proseseditadmin.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
  <td height="21" colspan="3">
     <strong> Kemaskini Calon</strong>
    </td>

<tr>
    <td width="23%"> gambar</td>
    <td width="2%">:</td>
    <td width="75%"> <img src = '<?php echo $gambar; ?>' height=200 width=300> <br><td><a href='confirm.php? idcalon=<?php echo $idcalon; ?>'> Kemaskini gambar </a> </i></td>


  </tr>

  <tr>
    <td width="23%"> Id Calon </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="idcalon" disabled='disable' value= '<?php echo $idcalon; ?>'> </td>
  </tr>
 
 <tr>
    <td width="23%"> Nama Calon </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="namacalon" value= '<?php echo $namacalon; ?>'> </td>
  </tr>
  <tr>



  <tr>
    <td width="23%"> IDadmin </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="idadmin" disabled='disable' value= '<?php echo $idadmin; ?>'> </td>
  </tr>
  <tr>

<td> <input type="hidden" name="idcalon" value='<?php echo $idcalon; ?>'>


 
    <br><br>


    <input type="SUBMIT" name="submit" value="KEMASKINI"></td>
<br>
    <a href="paparcalon.php">Kembali</a>
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