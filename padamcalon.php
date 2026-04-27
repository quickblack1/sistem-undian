<center>
<font color='red'>
<?php
require('confiq.php');
//get the value from form update
$idcalon = $_GET['idcalon'];

//query untuk padam data dalam database
$query = "DELETE FROM calon WHERE idcalon = '$idcalon'";
$rekod = mysqli_query($con, $query);
echo $rekod;
//exit;

if ($rekod == 1) {
	echo "<script>alert('Calon telah berjaya dipadam.'); window.location='paparcalon.php';</script>";
    exit();
    //include "padam.php"; // jika berjaya padam
} else {
   
    $message1 = "MOHON MAAF!!! Rekod dengan ID $idcalon tidak berjaya dipadam kerana nama calon telah diundi oleh pengundi.";
	echo "<script type='text/javascript'>alert('$message1');</script>";
	//echo "<h4> Katalaluan tidak sah, sila cuba sekali lagi</h4>";
	//include "logmasuk.php";
	header('refresh:1;URL=./paparcalon.php');
    
}
?>
<br><br>
</font>
</center>