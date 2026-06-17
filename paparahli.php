<?php
require('confiq.php');
?>
<?php
include("header.php");
?>
  <center>
<h2>MAKLUMAT AHLI</h2>

<?php

$query="SELECT * FROM pengundi";


$result=mysqli_query($con, $query);

	echo "<table border='1' cellpadding='2' cellspacing='2'>";
echo "<tr bgcolor='pink' align='center'>
 <style>
      table {
        border-collapse: collapse;
        table-layout: fixed;
        width: 400px;
      }
      table td {
        border: solid 1px #666;
        width: 200px;
        word-wrap: break-word;
      }
    </style>
		   <td> <b> NO. KP</b> </td>
		   <td> <b> Nama</b> </td>
           <td><b>gambar </b></td>
           

     </tr>";
     WHILE($rekod=mysqli_fetch_array($result)){
	    $nokp = $rekod["nokp"];
      $sql = "SELECT gambar FROM calon WHERE nokp = '$nokp'";
      $result2=mysqli_query($con, $sql);
      $row=mysqli_fetch_array($result2);
      $gambar = $row["gambar"];
      echo $gambar;
      //exit();

  echo "<tr align='center'>
  			<td>{$rekod["nokp"]}</td>
  			<td><a href='kemaskiniahli.php?nokp=$nokp'>{$rekod["namapengundi"]}</a></td>
        <td>
         
          <img src='{$rekod["gambar"]}' height=200 width=200>
        
        </td>
       <td><a href='padamahli.php?nokp={$rekod["nokp"]}'><button>Padam </button></a></td>
              
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

