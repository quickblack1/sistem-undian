<?php
include("header.php");
require('confiq.php');


// Check if image file is a actual image or fake image
if(isset($_POST['submit'])) {
  
  $filepath = 'gambarcalon/' . $_FILES['gambar']['name'];
  if(move_uploaded_file($_FILES['gambar']['tmp_name'], $filepath)){
    echo "";
  } else {
    echo "<center>Minta maaf, gambar tidak dapat diupload !!</center>";
  }
  //$gambar = $_FILES['gambar']['name'];
  //$ext=substr(strrchr($_FILES['gambar']['name'],"."),1);
  //$newnamepic=md5(rand()*time()).".$ext";
  //$uploadPath="gambar/".$newnamepic;
  //$isUploaded=move_uploaded_file($_FILES["gambar"]["tmp_name"],$uploadPath);

  $idcalon = $_POST['idcalon'];
  $namacalon = $_POST['namapengundi'];
  $nokp = $_POST['nokp'];
  $idadmin= $_POST['idadmin'];
  $jawatan = $_POST['jawatan'];
  
  //masukkan data dalam pangkalan data
  $sql="INSERT INTO calon VALUES ('$idcalon', '$nokp', '$idadmin','$filepath', '$jawatan')";
  $result = mysqli_query($con, $sql);


  
  ?>
  <h2>STATUS TAMBAH CALON</h2>
  <table class="table5">
    <tr><td align='right'bgcolor='#F8C471'> ID Calon: </td><td align='center'bgcolor='#E6B0AA '><?php echo $idcalon; ?></td></tr>
    <tr><td align='right'bgcolor='#F8C471'>Nama Calon: </td><td align='center'bgcolor='#E6B0AA '><?php echo $namacalon ?></td></tr>
    <tr><td align='right'bgcolor='#F8C471'>Gambar: </td><td align='center'bgcolor='#E6B0AA '><img src="<?php echo $filepath; ?>" height=100 width=100></td></tr>

    <tr><td align='right'bgcolor='#F8C471'>ID Admin: </td><td align='center'bgcolor='#E6B0AA '><?php echo $idadmin; ?></td></tr>
    <tr><td align='right'bgcolor='#F8C471'>Status: </td><td align='center'bgcolor='#F39C12'>CALON BERJAYA DI TAMBAH</td></tr>
  </table>
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