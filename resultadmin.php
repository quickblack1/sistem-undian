<?php
include('confiq.php');
//include("menuadmin.php");
$query = "SELECT calon.namacalon,calon.idcalon, COUNT(undian.idcalon) AS jumlah_undi
          FROM undian
          inner JOIN calon ON undian.idcalon = calon.idcalon
          GROUP BY undian.idcalon
          ORDER BY jumlah_undi DESC";

$result = mysqli_query($con, $query);

echo "<h2>Keputusan Undian Terkini</h2>";
echo "<table border='1' cellpadding='5'>
        <tr>
            <th>Nama Calon</th>
            <th>ID Calon</th>
            <th>Jumlah Undi</th>
        </tr>";

while($row = mysqli_fetch_array($result)){
    echo "<tr>
            <td>".$row['namacalon']."</td>
            <td>".$row['idcalon']."</td>
            <td>".$row['jumlah_undi']."</td>
          </tr>";
}
echo "</table>";
?>


<br><br>
<center>
  <a href="laporan.php"><button onClick="window.print();">Cetak</button>
  </a>
  </html>
