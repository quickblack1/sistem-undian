<?php
//connection
require('confiq.php');
include("header.php");
?>

<center>
<h3>KEMASKINI CALON</h3>
========================<br><br>



<?php 
$idcalon = $_GET['idcalon'];

 //get the idpelajar which will updated

$query="SELECT calon.*, pengundi.namapengundi, pengundi.kelas
        FROM calon
        LEFT JOIN pengundi
        ON calon.nokp = pengundi.nokp
        WHERE idcalon='".$idcalon."'";

//buat jujukan bersekutu
$result = mysqli_query($con, $query);
$rekod  = mysqli_fetch_array($result);

$idcalon=$rekod['idcalon'];
$nokp = $rekod['nokp'];
$namacalon=$rekod['namapengundi'];
$gambar=$rekod['gambar'];
$idadmin=$rekod['idadmin'];
$kelas = $rekod['kelas'];

//$result=mysqli_query($conn, $query);
//WHILE($rekod=mysqli_fetch_array($result))


        $sql2 = "SELECT kelas FROM pengundi GROUP BY kelas ORDER BY kelas";
        $result2 = mysqli_query($con, $sql2);
        $numRow = mysqli_num_rows($result2);
        
      

?>
<form method="GET" action="proseseditadmin.php">
  <input type="hidden" name="idcalon" value='<?php echo $idcalon; ?>' >
  <table class="table5">
    <tr>
      <th>Gambar</th>
      <td class="td2">
        <img src = '<?php echo $gambar; ?>' width='200px'><br>
        <a href='confirm.php? idcalon=<?php echo $idcalon; ?>'> Kemaskini gambar </a> </i>
      </td>
    </tr>
    <tr>
      <th> Id Calon </th>
      <td> <input type="text" name="idcalon" disabled value= '<?php echo $idcalon; ?>'> </td>
    </tr>
    <tr>
      <th> No. KP Calon </th>
      <td> <input type="text" name="nokp" disabled value= '<?php echo $nokp; ?>'> </td>
    </tr>
    <tr>
      <th> Nama Calon </th>
      <td> <input type="text" name="namacalon" value= '<?php echo $namacalon; ?>' size="50"> </td>
    </tr>
    <tr>
      <th>Kelas</th>
      <td>
        <select name="kelas" id="kelas">
          <option value="Pilih Kelas" <?php if ($kelas == ''){echo "selected";} ?>>PILIH KELAS</option>
          <?php
          while ($row2 =  mysqli_fetch_array($result2)){
            $kelas2 = $row2['kelas'];
            ?>
            <option value="<?php echo $kelas2; ?>" <?php if ($kelas == $kelas2){echo "selected";} ?> ><?php echo $kelas2; ?></option>
            <?php
          }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Dicalonkan Oleh</th>
      <td> <input type="text" name="idadmin" disabled value= '<?php echo $idadmin; ?>'> </td>
    </tr>
    <tr>
      
      <td class="td2" colspan='2'>
        <button type="submit" name="submit" value="KEMASKINI">KEMASKINI</button>
      </td>
    </tr>
  </table>
</form>
<a href="paparsemuacalon.php">Kembali</a>
</center>
 
<?php
include("footer.php");
?>