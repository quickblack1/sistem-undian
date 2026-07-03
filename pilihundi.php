<?php include('header.php'); ?>
<?php
//include("menupengundi.php");
require('confiq.php');

$nokp = $_SESSION["nokp"];

// set timezone Malaysia
date_default_timezone_set("Asia/Kuala_Lumpur");

// generate tarikh & masa automatik
$tarikh = date("Y-m-d");
$masa = date("H:i:s");

if (isset($_POST["submit"])){
       

    //sql buat query
    $nokpCalon = $_POST['nokp'];
    $idcalon = $_POST['idcalon'];
    $tarikh = $_POST['tarikh'];
    $masa = $_POST['masa'];
    $jawatan = $_POST['jawatan'];

    

    // echo $nokp."<br>";
    // echo $idcalon."<br>";
    // echo $tarikh."<br>";
    // echo $masa."<br>";
    // echo $jawatan."<br>";

    // echo "di sini";
    // exit();

    // Semak jumlah undian sedia ada untuk nokp ini
    //$semak = "SELECT COUNT(*) AS jumlah FROM undian WHERE nokp='$nokp'";
    //$result = mysqli_query($con, $semak);
    //$row = mysqli_fetch_assoc($result);

    $query = "INSERT INTO undian (nokpPengundi, idcalon, tarikh, masa, jawatan) 
              VALUES ('$nokp','$idcalon','$tarikh','$masa', '$jawatan')";
    $result = mysqli_query($con, $query);
    if ($result == 1){
      ?>
      <script>
        alert("Anda telah membuat undian. Terima Kasih.");
      </script>
      <?php
    }
  }
?>




<div class="div0">
  <h2>UNDIAN</h2>
    <table class="table2">
        
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
</div>
    
    <?php 
    $sql1 = "SELECT jawatan
            FROM calon
            GROUP BY jawatan";
    $result1 = mysqli_query($con, $sql1);
    while($row1 = mysqli_fetch_array($result1)){
      $jawatan = $row1['jawatan'];
      ?>
      <div class="div2">
        <h3>Jawatan: <?php echo substr($jawatan, 2); ?></h3>
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="nokp" value="<?php echo $nokp; ?>">
          <input type="hidden" name="jawatan" value="<?php echo $jawatan; ?>">
          <input type="hidden" name="tarikh" value="<?php echo $tarikh; ?>">
          <input type="hidden" name="masa" value="<?php echo $masa; ?>">
          <table width="" align="center">
              <tr>
                <td align="right"><b>CALON-CALON</b></td>
                <td>
                  
                  <?php
                  // $query = "SELECT * FROM calon WHERE jawatan = '$jawatan'";
                  $query = "SELECT calon.*, pengundi.namapengundi, pengundi.kelas
                  FROM calon
                  INNER JOIN pengundi ON calon.nokp = pengundi.nokp
                  WHERE jawatan = '$jawatan'";
                  $result = mysqli_query($con, $query);
                  //echo $result;
                  //exit();
                  while($data = mysqli_fetch_array($result)){
                    
                    ?>
                    <label class="label0">
                            <input type='radio' name='idcalon' value="<?php echo $data['idcalon']; ?>" required><br>
                            <img class="img1" src="<?php echo $data['gambar']; ?>" width='80' height='100'><br>
                            <?php echo $data['namapengundi']; ?><br>
                            <?php echo $data['kelas']; ?>
                          </label>
                    <?php
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td></td>
                <td align="center">
                  <?php
                  $query = "SELECT * FROM undian WHERE nokpPengundi = '$nokp' AND jawatan = '$jawatan'";
                  $result = mysqli_query($con, $query);
                  $rowcount = mysqli_num_rows($result);
                  if ($rowcount == 0){
                    ?>
                    <button type="submit" name="submit">UNDI</button>
                    <?php
                  } else {
                    ?>
                    <div>Anda telah membuat undian. <a class="a01" href="laporan.php">Papar keputusan.</a></div>
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
    
<?php
include("footer.php");
?>