<center>
<font color=red size=12pt>
<?php
include("menupeserta.php");
require('confiq.php');
//connection
require('confiq.php');



//sql buat query

$nokp = $_GET['nokp'];
$idaktiviti = $_GET['idaktiviti'];

$query="INSERT INTO kehadiran(nokp,idaktiviti) VALUES('$nokp','$idaktiviti');";
//run query
if(mysqli_query($con,$query)){
echo"<script>alert('UNDIAN TELAH DIREKODKAN'); window.location.href='result.php'; </script>";
} 

else{
echo"<script>alert('MOHON MAAF, UNDIAN TIDAK BERJAYA DIREKODKAN'); window.location.href='cari.php'; </script>";
}


//tutup connection
mysqli_close($con);


 ?>


 <br><br>

 <a href="login.php">Sila Login</a>
 </font>
 </center>
