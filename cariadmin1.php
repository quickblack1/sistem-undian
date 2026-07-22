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
<table border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
  <td height="21" colspan="3">
     <strong> Kemaskini Calon</strong>
    </td>

<tr>
    <td> gambar</td>
    <td>:</td>
    <td> <img src = '<?php echo $gambar; ?>' width='200px'> <br><td><a href='confirm.php? idcalon=<?php echo $idcalon; ?>'> Kemaskini gambar </a> </i></td>


  </tr>

  <tr>
    <td> Id Calon </td>
    <td>:</td>
    <td> <input type="text" name="idcalon" disabled value= '<?php echo $idcalon; ?>'> </td>
  </tr>
 <tr>
    <td> No. KP Calon </td>
    <td>:</td>
    <td> <input type="text" name="nokp" disabled value= '<?php echo $nokp; ?>'> </td>
  </tr>
  <tr>
    <td> Nama Calon </td>
    <td>:</td>
    <td> <input type="text" name="namacalon" value= '<?php echo $namacalon; ?>' size="50"> </td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>:</td>
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
    <td> IDadmin </td>
    <td>:</td>
    <td> <input type="text" name="idadmin" disabled value= '<?php echo $idadmin; ?>'> </td>
  </tr>
  <tr>

<td> <input type="hidden" name="idcalon" value='<?php echo $idcalon; ?>'>


 
    <br><br>


    <button type="SUBMIT" name="submit" value="KEMASKINI">KEMASKINI</button></td>
<br>
    <a href="paparsemuacalon.php">Kembali</a>
 </td>
 </tr>
 </tr>
 </tr>
 </tr>
 </tr>
 </table>
 </form>
 </center>
 <?php
 while ($row2 = mysqli_fetch_array($result2)){
          $kelas2 = $row2['kelas'];
          echo $kelas2;
        }
  
  echo $numRow;
  ?>