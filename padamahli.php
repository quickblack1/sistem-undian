<?php
require('confiq.php');
//get the value from form update
$nokp = $_GET['nokp'];

//query untuk padam data dalam database
$query = "DELETE FROM pengundi WHERE nokp = '$nokp'";
$rekod = mysqli_query($con, $query);

if ($rekod == 1) {
	echo "<script>alert('Calon telah berjaya dipadam.'); window.location='paparsemuaahli.php';</script>";
    //exit();
    //include "padam.php"; // jika berjaya padam
} else {
   
    $message1 = "MOHON MAAF!!! Rekod dengan ID $idcalon tidak berjaya dipadam kerana nama calon telah diundi oleh pengundi.";
	echo "<script type='text/javascript'>alert('$message1');</script>";
	//echo "<h4> Katalaluan tidak sah, sila cuba sekali lagi</h4>";
	//include "logmasuk.php";
	header('refresh:1;URL=./paparahli.php');
    
}
?>
<br><br>
</font>
</center>