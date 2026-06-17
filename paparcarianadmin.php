<?php
include("menuadmin.php");
//session_start();
//$idpengguna=$_GET['idpengguna'];

$nokp=$_GET['nokp'];

require('confiq.php')

?>

<html>
<head>
<h2>maklumat peserta yang dipilih</h2>
<body>



<?php

$query="SELECT * FROM peserta WHERE (nokp='".$nokp."')";



$result=mysqli_query($con, $query);
	echo "<table border='1' cellpadding='2' cellspacing='2'>";
echo "<tr bgcolor='pink' align='center'>
<td> <b> No KP</b> </td>
		   <td> <b> Nama Peserta</b> </td>
		   <td> <b> Katalaluan Peserta</b> </td>
           <td> <b> Tingkatan </b> </td>
           <td> <b> Kelas</b> </td>
           

          </tr>";
     WHILE($rekod=mysqli_fetch_array($result))
{
	

  echo "<tr align='center'>
      <td>{$rekod["nokp"]}</td>
  			<td>{$rekod["namapeserta"]}</td>
  			<td>{$rekod["katalaluanpeserta"]}</td>
            <td>{$rekod["tingkatan"]}</td>
            <td>{$rekod["kelas"]}</td>
            
       </tr>";

      
}
echo "</table>";


  
?>


<div id="divToPrint" style="display:none;">
  <div style="width:200px;height:300px;background-color:teal;">
           <?php echo $rekod; ?>      
  </div>
</div>
<br>
<br>
<div>
<center>
  <a href="cari.php"><button onClick="window.print();">Cetak</button>
  </a>
  </center> 
  <td> <i> <a href='index.php'> Laman Utama </a> </i></td> <br><br>

  


</body>
</html>

