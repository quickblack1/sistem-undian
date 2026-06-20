<?php
require('confiq.php');
?>
<?php
include("header.php");
?>
<h2>MAKLUMAT AHLI</h2>

<?php

$query="SELECT * FROM pengundi";


$result=mysqli_query($con, $query);
?>
<table class='table5'>
  <tr>
    <th>Bil.</th>
		<th>
      <b>No. KP</b>
    </th>
		<th>
      <b>Nama</b>
    </th>
    <th>Jantina</th>
    <th>Kelas</th>
    <th>
      <b>Gambar</b>
    </th>
  </tr>
  <?php
    $bil = 0;
     while($rekod=mysqli_fetch_array($result)){
      $bil++;
	    $nokp = $rekod["nokp"];
      $sql = "SELECT gambar FROM calon WHERE nokp = '$nokp'";
      $result2=mysqli_query($con, $sql);
      $gambar = "";
      while($row=mysqli_fetch_array($result2)){
        $gambar = $row["gambar"];
      }
  ?>
  <tr>
    <td style="text-align: right"><?php echo $bil; ?></td>
  	<td><?php echo $rekod["nokp"]; ?></td>
  	<td class="td1"><a href='paparahli.php?nokp=<?php echo $rekod["nokp"]; ?>'><?php echo $rekod["namapengundi"]; ?></a></td>
    <td style="text-align: center"><?php echo $rekod["jantina"]; ?></td>
    <td style="text-align: center"><?php echo $rekod["kelas"]; ?></td>
    <td>
      <?php
      if (isset($gambar)){
        echo "Tiada gambar.";
      } else {
      ?>
        <img src='$gambar' width='200px'>
      <?php
      }
      ?>
      
    </td>
    <td><a href='padamahli.php?nokp=<?php echo $rekod["nokp"]; ?>'><button>Padam </button></a></td>
              
  </tr>
<?php 
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

