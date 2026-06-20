<?php
include('confiq.php');
//include auth.php file on all secure pages
// include("menuadmin.php");
include("header.php");
// include("resultadmin.php");
?>
<h2>Keputusan Undian Terkini</h2>
<?php
echo "disini";
                exit();
                ?>
$sql = "SELECT jawatan FROM undian GROUP BY jawatan";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result)){
    ?>
    <div>
        <?php
        $jawatan = $row['jawatan'];
        echo "<h3>".$jawatan."</h3>";
        
        
        //     $query = "SELECT pengundi.namapengundi, calon.gambar, COUNT(undian.idcalon) AS jumlah_undi
        //   FROM undian
        //   INNER JOIN calon ON undian.idcalon = calon.idcalon
        //   INNER JOIN pengundi ON calon.nokp = pengundi.kp
        //   WHERE undian.jawatan = '$jawatan'
        //   GROUP BY undian.idcalon
        //   ORDER BY jumlah_undi DESC";
        
        
        
        ?>
        sadasds
        <table class='table5'>
            <tr>
                <th>Nama Calon</th>
                <th>ID Calon</th>
                <th>Jumlah Undi</th>
            </tr>
            <?php
            $query2 = "SELECT * FROM undian";
            $result2 = mysqli_query($con, $query2);
            while($row2 = mysqli_fetch_array($result2)){
                
                $nokp = $row2['nokp'];
                echo $nokp;
                //exit();
                $sql3 = "SELECT * FROM pengundi WHERE nokp = '$nokp'";
                $result3 = mysqli_query($con, $sql3)
                while($row3 = mysqli_fetch_array($result3)){
                    $namaCalon = $row3["namapengundi"];
                }
                ?>
                <tr>
                    <td><?php echo $namaCalon; ?></td>
                    <td>".$row2['idcalon']."</td>
                    <td>".$row2['jumlah_undi']."</td>
                </tr>";
                <?php
            }
            ?>
        </table>
        
    </div>
    <?php
}  
?>


<br><br>
<center>
  <a href="laporan.php"><button onClick="window.print();">Cetak</button>
  </a>

<br>
<br><br>

<center>
<form name="form1" action="laporan.php" method="get">
<input name="list" type="hidden" value="0">
<input type="submit" value="Laporan Ringkas">
</form>

<br>
    
<form name="form2" action="laporan.php" method="get">
<input name="list" type="hidden" value="1">
<input type="submit" value="Laporan Detail">  
</form>

</center>

 
<?php
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbundi";
$tblname = "undian";
 
$chk = $_GET['list'];
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{  die("Connection failed: " . mysqli_connect_error());  }


if(isset($chk))
{
 if($chk == 1)
 {
    $sql = "SELECT * FROM undian ORDER BY idcalon ASC";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) 
    {
     echo "<table class='table5'>";
    echo "<tr bgcolor='yellow' align='center'>
      
        <td> <b> idundian </b> </td>
        <td> <b> nokp </b> </td>      
        <td> <b> idcalon</b> </td>
        <td> <b> tarikh </b> </td>
        <td> <b> masa </b> </td>
        
        
        
     </tr>";
     // output data of each row
     while($row = mysqli_fetch_assoc($result))
      {  
         

      
   

  echo "<tr align='center'>
  
        <td>{$row["idundian"]}</td>
            <td>{$row["nokp"]}</td>
            
             <td>{$row["idcalon"]}</td>
             <td>{$row["tarikh"]}</td>
             <td>{$row["masa"]}</td>
            
       </tr>";
      
}
echo "</table>";




      }
    
    
   else 
     { echo "0 results";  }
 }
    
elseif($chk == 0)
 {
    $sql = "SELECT * FROM undian";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) 
    {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) 
        { 
            echo "<center>";
            echo $row["idundian"]."----->".$row["nokp"]."----->".$row["idcalon"]."<br>";
            echo "<center>";            
        }
    } 
           
    else 
    {  echo "No results !"; }
 }
}

else
mysqli_close($conn);
?>

<br>
 <a href="laporan.php"><button onClick="window.print();">CETAK</button>
  </a>
<?php include("footer.php"); ?>