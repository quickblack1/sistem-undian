<?php
include('confiq.php');
//include auth.php file on all secure pages
// include("menuadmin.php");
include("header.php");
// include("resultadmin.php");
?>
<?php

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
     echo "<table border='1' cellpadding='2' cellspacing='2'>";
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