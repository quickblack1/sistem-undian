<?php
include("menuadmin.php");
require('confiq.php')

?>

<html>
<head>
<h2>MAKLUMAT AKTIVITI</h2>
<body>



<?php

$query="SELECT * FROM aktiviti";


$result=mysqli_query($con, $query);
	echo "<table border='2' cellpadding='2' cellspacing='2'>";
echo "<tr bgcolor='lavender' align='center'>
		   <td> <b> ID Aktiviti</b> </td>
		   <td> <b> Nama Aktiviti</b> </td>
           <td> <b> Tempat </b> </td>
           <td> <b> ID Admin</b> </td>
           

     </tr>";
     WHILE($rekod=mysqli_fetch_array($result))
{
	

  echo "<tr align='center'>
  			<td>{$rekod["idaktiviti"]}</td>
  			<td>{$rekod["namaaktiviti"]}</td>
            <td>{$rekod["tempat"]}</td>
            <td>{$rekod["idadmin"]}</td>
		    <td> <i> <a href='edit.php?idaktiviti={$rekod["idaktiviti"]}'> Kemaskini </a> </i></td>
            <td> <i> <a href='delete.php?idaktiviti={$rekod["idaktiviti"]}'> Padam </a> </i></td>      
            
            
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
  <a href="paparaktiviti.php"><button onClick="window.print();">Cetak</button>
  </a>
  </center> 
  <td> <i> <a href='menuadmin.php'> Menu admin </a> </i></td> <br><br>

  


</body>
</html>

