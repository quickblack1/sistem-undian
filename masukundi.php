<center>
<font color=red size=12pt>
<?php
//include("menupengundi.php");
require('confiq.php');//connection



//sql buat query

$nokp = $_GET['nokp'];
$idcalon = $_GET['idcalon'];
$tarikh = $_GET['tarikh'];
$masa = $_GET['masa'];
$jawatan = $_GET['jawatan'];

// Semak jumlah undian sedia ada untuk nokp ini
$semak = "SELECT COUNT(*) AS jumlah FROM undian WHERE nokp='$nokp'";
$result = mysqli_query($con, $semak);
$row = mysqli_fetch_assoc($result);

$query = "INSERT INTO undian (nokp, idcalon, tarikh, masa, jawatan) 
          VALUES ('$nokp','$idcalon','$tarikh','$masa', '$jawatan')";
$result = mysqli_query($con, $query);

if ($result == 1) {
	echo "<script>alert('Calon telah berjaya diundi.'); window.location='pilihundi.php';</script>";
    exit();
    
}


/* if ($row['jumlah'] < 3) {
    // Jika kurang dari 3, benarkan undi
    $query = "INSERT INTO undian(nokp, idcalon, tarikh, masa, jawatan) 
              VALUES('$nokp','$idcalon','$tarikh','$masa', '$jawatan')";
    
    if (mysqli_query($con, $query)) {
        echo "<script>alert('UNDIAN TELAH DIREKODKAN'); 
              window.location.href='result.php'; </script>";
    } else {
        echo "<script>alert('MOHON MAAF, UNDIAN TIDAK BERJAYA DIREKODKAN'); 
              window.location.href='pilihundi.php'; </script>";
    }
} else {
    // Kalau sudah 3 kali undi
    echo "<script>alert('MAAF, ANDA TELAH MENCAPAI HAD 3 KALI UNDIAN'); 
          window.location.href='result.php'; </script>";
} */

// Tutup connection
mysqli_close($con);

 ?>

 </font>
 </center>
