<?php

include("menupeserta.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>rekod peserta</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

  <body style="background-color:powderblue;"> 
  <center>
  <font color=blue  size=12pt>
MAKLUMAT AKTIVITI<br>
************************<br>
</font>


<?php 


//connection
require('confiq.php');
$nokp= $_SESSION["nokp"];
$idaktiviti = $_GET['idaktiviti'];

 //get the idpelajar which will updated


$query="SELECT * FROM aktiviti WHERE idaktiviti='".$idaktiviti."'";


//buat jujukan bersekutu
$result = mysqli_query($con, $query);
$rekod  = mysqli_fetch_array($result);
$idaktiviti=$rekod['idaktiviti'];

$namaaktiviti=$rekod['namaaktiviti'];
$tempat=$rekod['tempat'];



//$result=mysqli_query($conn, $query);
//WHILE($rekod=mysqli_fetch_array($result))

?>
<form method="GET" action="prosesrekod.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
  <td height="21" colspan="3">
     <strong> KEHADIRAN</strong>
    </td>
  <tr>
    <td width="23%"> ID AKTIVITI </td>
    <td width="2%">:</td>
    <td width="75%"><?php echo $idaktiviti; ?>
    <td width="75%"> <input type="hidden" name="idaktiviti"  value= '<?php echo $idaktiviti; ?>'> </td>
  </tr>
 
 <tr>
    <td width="23%"> namaaktiviti </td>
    <td width="2%">:</td><td width="75%">
    <?php echo $namaaktiviti; ?>
    <td width="75%"> <input type="hidden" name="namaaktiviti" value= '<?php echo $namaaktiviti; ?>'> </td>
  </tr>
  <tr>

<tr>
    <td width="23%"> tempat </td>
    <td width="2%">:</td>
    <td width="75%"><?php echo $tempat; ?>
    <td width="75%"> <input type="hidden" name="tempat" value= '<?php echo $tempat; ?>'> </td>
  </tr>

    <tr>
    <td width="23%"> nokp</td>
    <td width="2%">:</td>
     <td width="75%"><?php echo $nokp; ?>
    <td width="75%"> <input type="hidden" name="nokp" value= '<?php echo $nokp; ?>'> </td>
  </tr>

  <tr>
    <td width="23%">tarikh</td>
    <td width="2%">:</td>
    
    <td width="75%"> <input type="date" name="tarikh" ?> </td>
  </tr>
<td width="23%"> <a href="index.php">Kembali</a> </td>
    <td width="2%">:</td>
  <td width="75%"><input type="SUBMIT" name="submit" value="HADIR"></td>
  
  <tr>

<br>
    
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
