<?php
require('confiq.php');

//include("menupengundi.php");
?>  
  </style>
</div>
<html>
  <head>
  </head>
  <body>
    <?php include('header.php'); ?>
    <h2>MAKLUMAT CALON</h2>
    
    <?php
    $sql1 = "SELECT jawatan
            FROM calon
            GROUP BY jawatan";
    $result1 = mysqli_query($con, $sql1);
    while($row1 = mysqli_fetch_array($result1)){
      $jawatan = $row1['jawatan'];
      ?>
      <h3>Jawatan: <?php echo $jawatan; ?></h3>
      <?php
      $query="SELECT * FROM calon WHERE jawatan = '$jawatan'";
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

          <td> <b> ID Calon</b> </td>
          <td> <b> Nama Calon</b> </td>
              <td><b>gambar </b></td>
              

        </tr>";
        WHILE($rekod=mysqli_fetch_array($result))
    {
      

      echo "<tr align='center'>
            <td>{$rekod["idcalon"]}</td>
            <td>{$rekod["namacalon"]}</td>
            <td><img src='{$rekod["gambar"]}' height=200 width=200></td>
          <td><a href='pilihundi.php'><button>UNDI</button></a></td>
                  
          </tr>";
          
    }
    echo "</table>";

    }
    

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