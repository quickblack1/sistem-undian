<?php
require('confiq.php');

//include("menupengundi.php");
?>  
<?php include('header.php'); ?>
<div class="div0">
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
      ?>
      <table class='table0'>
        <tr>
          <th> <b> ID Calon</b> </td>
          <th> <b> Nama Calon</b> </td>
          <th><b>Gambar </b></td>
        </tr>
        <?php
      while($rekod=mysqli_fetch_array($result)){
        ?>
        <tr align='center'>
          <td><?php echo $rekod["idcalon"]; ?></td>
          <td>
            <?php echo $rekod["namacalon"]; ?><br>
            <?php
            $nokp = $rekod["nokp"];
            $sql = "SELECT kelas FROM pengundi WHERE nokp = '$nokp'";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)){
              echo $row["kelas"];
            }
            ?>
            <?php  ?>
          </td>
          <td><img src='<?php echo $rekod["gambar"]; ?>' width="100px"></td>
          <td><a href='pilihundi.php'><button>UNDI</button></a></td>
        </tr>
        <?php
      }
      ?>
    </table>
    <?php
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
    
      <a href="paparcalon.php"><button onClick="window.print();">Cetak</button>
      </a>
      

</div>

<?php
include("footer.php");
?>