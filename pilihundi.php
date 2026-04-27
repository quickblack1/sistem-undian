<?php
//include("menupengundi.php");
require('confiq.php');
//session_start();

$nokp = $_SESSION["nokp"]; 

// set timezone Malaysia
date_default_timezone_set("Asia/Kuala_Lumpur");

// generate tarikh & masa automatik
$tarikh = date("Y-m-d");
$masa = date("H:i:s");
?>

<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <style>
      .div01{
        width: 1000px;
        margin-top: 0px;
        margin-bottom: 20px;
        margin-right: auto;
        margin-left: auto;
        border: 1px solid black;
        padding-top: 0px;
        padding-right: 30px;
        padding-bottom: 10px;
        padding-left: 80px;
      }
      .a01{
        width: 300px;
        background-color:red;
        color:white;
        padding:10px 30px;
        border-radius: 8px;
        text-decoration-line: none;
      }
      .a01:hover{
        text-decoration-line: underline;
      }
      tr{

      }
      td{
        border: 0px solid black;
      }
    </style>
  </head>
  <body>
    <?php include('header.php'); ?>

    <center>
    <h2>UNDIAN</h2>
    <table>
        <tr>
          <td align="right">Nombor Kad Pengenalan:</td>
          <td><?php echo $nokp; ?></td>
        </tr>
        <tr>
          <td align="right">Tarikh:</td>
          <td>
            <input type="date" name="tarikh" value="<?php echo $tarikh; ?>" readonly>
          </td>
        </tr>
        <tr>
          <td align="right">Masa:</td>
          <td>
            <input type="time" name="masa" value="<?php echo $masa; ?>" readonly>
          </td>
        </tr>
    </table>
    </center>

    <link rel="stylesheet" type="text/css" href="style.css">

    <center>
    <?php 
    $sql1 = "SELECT jawatan
            FROM calon
            GROUP BY jawatan";
    $result1 = mysqli_query($con, $sql1);
    while($row1 = mysqli_fetch_array($result1)){
      $jawatan = $row1['jawatan'];
      ?>
      <div class="div01">
        <h3>Jawatan: <?php echo $jawatan; ?></h3>
        <form action="masukundi.php" method="GET" enctype="multipart/form-data">
          <input type="hidden" name="nokp" value="<?php echo $nokp; ?>">
          <input type="hidden" name="jawatan" value="<?php echo $jawatan; ?>">
          <input type="hidden" name="tarikh" value="<?php echo $tarikh; ?>">
          <input type="hidden" name="masa" value="<?php echo $masa; ?>">
          <table width="" align="center">
              <tr>
                <td align="right"><b>CALON-CALON</b></td>
                <td>
                  <?php
                  $query = "SELECT DISTINCT idcalon, namacalon, gambar FROM calon WHERE jawatan = '$jawatan'";
                  $result = mysqli_query($con, $query);

                  while($data = mysqli_fetch_array($result)){
                    echo "<label style='display:inline-block; text-align:center; margin:10px; border: 1px solid black; padding: 5px;'>
                        <input type='radio' name='idcalon' value='".$data['idcalon']."' required><br>
                        <img src='".$data['gambar']."' width='80' height='100' 
                            style='display:block; margin:5px auto; border:3px solid #000;'><br>
                        ".$data['namacalon']."
                      </label>";
                  ?>
                  <?php
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td></td>
                <td align="center">
                  <?php
                  $query = "SELECT * FROM undian WHERE nokp = '$nokp' AND jawatan = '$jawatan'";
                  $result = mysqli_query($con, $query);
                  $rowcount = mysqli_num_rows($result);
                  if ($rowcount == 0){
                    ?>
                    <input type="submit" value="UNDI" name="submit" 
                    style="background-color:red; color:white; padding:10px 30px; border-radius:8px; cursor:pointer;">
                    <?php
                  } else {
                    ?>
                    <div><a class="a01" href="result.php">Undian telah dibuat. Papar keputusan.</a></div>
                    <?php
                  }
                  ?>
                </td>
              </tr>
          </table>
        </form>
        
      </div>
      <?php
    }
    ?>
    </center>
  </body>
</html>