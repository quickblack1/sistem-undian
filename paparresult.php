<?php
include("menupeserta.php");
require('confiq.php')

?>

<html>
<head>
<h2>MAKLUMAT AKTIVITI YANG DIHADIRI</h2>
<body>



<?php
$nokp = $_GET['nokp'];

$idaktiviti = $_GET['idaktiviti'];

$query="SELECT * FROM kehadiran inner join aktiviti ON kehadiran.idaktiviti= aktiviti.idaktiviti where kehadiran.nokp='$nokp' and kehadiran.idaktiviti='$idaktiviti' ";


$result=mysqli_query($con, $query);
	echo "<table border='1' cellpadding='2' cellspacing='2'>";
echo "<tr bgcolor='pink' align='center'>
		   <td> <b> nokp</b> </td>
        <td> <b> namaaktiviti</b> </td>
		   
           <td> <b> tarikh </b> </td>
           <td> <b> STATUS </b> </td>
          
           

     </tr>";
     WHILE($rekod=mysqli_fetch_array($result))
{
	

  echo "<tr align='center'>
  			<td>{$rekod["nokp"]}</td>
  			<td>{$rekod["namaaktiviti"]}</td>
            <td>{$rekod["tarikh"]}</td>
            <td>HADIR</td>
            
            
		       
            
            
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
  

  


</body>
</html>

