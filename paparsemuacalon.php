<?php
require('confiq.php');
include('header.php'); 
?>


<div class="div0">

  <h2>MAKLUMAT CALON</h2>
    
    <?php
    $sql1 = "SELECT jawatan
            FROM calon
            GROUP BY jawatan";
    $result1 = mysqli_query($con, $sql1);
    $bilRekodSql1 = mysqli_num_rows($result1);
    if ($bilRekodSql1 == 0){
      echo "Calon belum didaftarkan.";
    }
    while($row1 = mysqli_fetch_array($result1)){
      $jawatan = $row1['jawatan'];
      ?>
      <h3>Jawatan: <?php echo substr($jawatan, 2); ?></h3>
      <table class='table5'>
        <tr>
          <th> <b> ID Calon</b> </td>
          <th> <b> Nama Calon</b> </td>
          <th><b>Gambar </b></td>
        </tr>
      <?php
      //$query="SELECT * FROM calon WHERE jawatan = '$jawatan'";
      $query = "SELECT calon.*, pengundi.namapengundi, pengundi.kelas
      FROM calon
      INNER JOIN pengundi ON calon.nokp = pengundi.nokp
      WHERE jawatan = '$jawatan'";
      $result=mysqli_query($con, $query);
      $bilRekod = mysqli_num_rows($result);
      ?>
      
        <?php
      while($rekod=mysqli_fetch_array($result)){
        ?>
        <tr align='center'>
          <td><?php echo $rekod["idcalon"]; ?></td>
          <td>
            <?php echo $rekod["namapengundi"]; ?><br>
          </td>
          <td><img src='<?php echo $rekod["gambar"]; ?>' width="100px"></td>
          <?php
          if (isset($_SESSION['idadmin'])){
            $idcalon = $rekod['idcalon'];
          ?>
            <td>
              <a href="cariadmin1.php?idcalon=<?php echo $idcalon; ?>"><button>KEMASKINI</button></a><br>
              <a href="padamcalon.php?idcalon=<?php echo $idcalon; ?>"><button>PADAM</button></a>
            </td>
          <?php
          }
          ?>
          <!-- <td><a href='pilihundi.php'><button>UNDI</button></a></td> -->
           
        </tr>
        <?php
      }
      ?>
    </table>
    <?php
    }
    ?>
</div>
<?php
include("footer.php");
?>