
<?php
//include auth.php file on all secure pages
include("menuadmin.php");
include("resultadmin.php");
?>

<html>
<head>
<title> LAPORAN </title>
<link rel="stylesheet" href="style.css">
</head>

<body>
  <body style="background-color:powderblue;"> 
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
</body>
</html>