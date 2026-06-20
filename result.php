<?php
include('confiq.php');
//include("menupengundi.php");
?>

    <?php include('header.php'); ?>
<div class="div0">
  <h2>Keputusan Undian Terkini</h2>
<?php
$sql = "SELECT jawatan
        FROM undian
        GROUP BY jawatan";
$result1 = mysqli_query($con, $sql);

while($row1 = mysqli_fetch_array($result1)){
  $jawatan = $row1['jawatan'];
  echo "<h3>".$jawatan."</h3>";
  echo "disini";
  exit();

  $query = "SELECT pengundi.namapengundi, calon.gambar, COUNT(undian.idcalon) AS jumlah_undi
          FROM undian
          INNER JOIN calon ON undian.idcalon = calon.idcalon
          INNER JOIN pengundi ON calon.nokp = pengundi.kp
          WHERE undian.jawatan = '$jawatan'
          GROUP BY undian.idcalon
          ORDER BY jumlah_undi DESC";

  $result = mysqli_query($con, $query);
  ?>

<table border='1' cellpadding='5' class="table0">
  <tr>
    <th>Nama Calon</th>
    <th>Jumlah Undi</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($result)){
  ?>
    <tr>
      <td align="center">
        <img src="<?php echo $row['gambar']; ?>" alt=""><br>
        <?php echo $row['namacalon']; ?>
      </td>
      <td align="center"><?php echo $row['jumlah_undi']; ?></td>
    </tr>
  <?php
  }

  ?>
  </table>
  <br>
<?php
}
?>
  <a href="result.php"><button onClick="window.print();">Cetak</button>
  </a>
</div>

  </body>
</html>
