<?php
require('confiq.php');

include("menuadmin.php");

$idcalon = $_GET['idcalon'];
?>

    
  </style>
   

</div>
<html>
<head>
  <center>
<h2>MAKLUMAT CALON</h2>
<body>



<?php


$query="SELECT * from undian where idcalon='".$idcalon."'";


$result=mysqli_query($con, $query);

	echo "<table border='1' cellpadding='1' cellspacing='1'>";
echo "<tr bgcolor='pink' align='center'>
 
		   <td> <b> ID Undian</b> </td>
		   <td> <b> Nokp</b> </td>
       <td><b>ID Calon </b></td>
       <td><b>Tarikh </b></td>
       <td><b>Masa </b></td>
       <td><b>Tindakan</b></td>

           

     </tr>";
     WHILE($rekod=mysqli_fetch_array($result))
{
	

  echo "<tr align='center'>
  			<td>{$rekod["idundian"]}</td>
  			<td>{$rekod["nokp"]}</td>
       <td>{$rekod["idcalon"]}</td>
       <td>{$rekod["tarikh"]}</td>
       <td>{$rekod["masa"]}</td>
       <td><a href='padamundi.php?idundian={$rekod["idundian"]}'> <button>Padam </button></a></td>      
              
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
  <a href="paparcalon.php"><button onClick="window.print();">Cetak</button>
  </a>
  </center> 
  

  


</body>
</html>

