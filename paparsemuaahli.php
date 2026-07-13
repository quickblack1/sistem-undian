<?php
require('confiq.php');
?>
<?php
include("header.php");
?>
<h2>MAKLUMAT AHLI</h2>

<?php

$query="SELECT *
FROM pengundi
ORDER BY namapengundi";


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
      $sql2 = "SELECT * FROM calon WHERE nokp = '$nokp' LIMIT 1";
      $result2 = mysqli_query($con, $sql2);
      
      
      //$gambar = $rekod['gambar'];
      ?>
      <tr>
        <td style="text-align: right"><?php echo $bil; ?></td>
        <td><?php echo $rekod["nokp"]; ?></td>
        <td class="td1"><a href='paparahli.php?nokp=<?php echo $rekod["nokp"]; ?>'><?php echo $rekod["namapengundi"]; ?></a></td>
        <td style="text-align: center"><?php echo $rekod["jantina"]; ?></td>
        <td style="text-align: center"><?php echo $rekod["kelas"]; ?></td>
        <td>
          
        <?php
        while ($row2 = mysqli_fetch_array($result2)){
          $gambar2 = $row2['gambar'];
        
          if (isset($gambar2)){
            ?>
            <img src='<?php echo $gambar2; ?>' width='100px'>
            <?php
          } else {
            echo "Tiada gambar.";
          }
        }
        ?>
      
        </td>
        <td><a href='padamahli.php?nokp=<?php echo $rekod["nokp"]; ?>'><button>Padam </button></a></td>
      </tr>
    <?php 
    }
  ?>
</table>

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

