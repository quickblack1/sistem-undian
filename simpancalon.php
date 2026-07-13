<?php
require('confiq.php');
include("header.php");



// Check if image file is a actual image or fake image
if(isset($_POST['submit'])) {
  if (isset($_POST['gambar'])){
    $filepath = $_POST['gambar'];
  } else {
    $filepath = 'gambarcalon/' . $_FILES['gambar']['name'];
    if(move_uploaded_file($_FILES['gambar']['tmp_name'], $filepath)){
      echo "";
    } else {
      echo "<center>Minta maaf, gambar tidak dapat diupload !!</center>";
    }
  }
  
  //$gambar = $_FILES['gambar']['name'];
  //$ext=substr(strrchr($_FILES['gambar']['name'],"."),1);
  //$newnamepic=md5(rand()*time()).".$ext";
  //$uploadPath="gambar/".$newnamepic;
  //$isUploaded=move_uploaded_file($_FILES["gambar"]["tmp_name"],$uploadPath);

  $idcalon = $_POST['idcalon'];
  $namacalon = $_POST['namapengundi'];
  $nokpCalon = $_POST['nokp'];
  $idadmin= $_POST['idadmin'];
  $jawatan = $_POST['jawatan'];

  //semak sama ada ahli ini dah daftar sebagai calon bagi jawatan tersebut atau belum
  $semakJawatan = "SELECT * FROM calon WHERE nokp = '$nokpCalon' AND jawatan = '$jawatan'";
  $result = mysqli_query($con, $semakJawatan);
  $bilRekod = mysqli_num_rows($result);
  if ($bilRekod == 0){
    
    //masukkan data dalam pangkalan data
    if ($idadmin != ""){
      $sql="INSERT INTO calon VALUES ('$idcalon', '$nokpCalon', '$idadmin','$filepath', '$jawatan')";
    } else {
      $sql = "INSERT INTO calon (idcalon, nokp, gambar, jawatan) VALUES ('$idcalon', '$nokpCalon', '$filepath', '$jawatan')";
    }
    
    $result = mysqli_query($con, $sql);
    if ($result == 1){
      
    }
    ?>
    <h2>STATUS TAMBAH CALON</h2>
    <table class="table5">
      <tr><td align='right'bgcolor='#F8C471'> ID Calon: </td><td align='center'bgcolor='#E6B0AA '><?php echo $idcalon; ?></td></tr>
      <tr><td align='right'bgcolor='#F8C471'>Nama Calon: </td><td align='center'bgcolor='#E6B0AA '><?php echo $namacalon ?></td></tr>
      <tr><td align='right'bgcolor='#F8C471'>Gambar: </td><td align='center'bgcolor='#E6B0AA '><img src="<?php echo $filepath; ?>" width="100px"></td></tr>

      <tr><td align='right'bgcolor='#F8C471'>ID Admin: </td><td align='center'bgcolor='#E6B0AA '><?php echo $idadmin; ?></td></tr>
      <tr><td align='right'bgcolor='#F8C471'>Status: </td><td align='center'bgcolor='#F39C12'>CALON BERJAYA DI TAMBAH</td></tr>
    </table>
    <?php
  } else {
    ?>
    <script>
      alert("Ahli ini tidak dapat didaftarkan sebagai calon <?php echo substr($jawatan, 2); ?> kerana telah didaftarkan.");
      window.location.href = "paparahli.php?nokp=<?php echo $nokpCalon; ?>";
    </script>
    <?php
  }
  ?>
  
<?php
}
else
{
 echo"<script>alert('Maaf,Rekod Anda Tidak Berjaya disimpan'); 
   </script>";
}
//}

mysqli_close($con);

?>