<?php
include("menuadmin.php");
require('confiq.php');


// Check if image file is a actual image or fake image
if(isset($_POST['submit'])) {
  echo $_FILES['gambar']['name'];
  //break;
 $filepath = 'gambarcalon/' . $_FILES['gambar']['name'];
 if(move_uploaded_file($_FILES['gambar']['tmp_name'], $filepath)) 
{
  echo "";
} 
else 
{
  echo "<center>Minta maaf, gambar tidak dapat diupload !!</center>";
}
//$gambar = $_FILES['gambar']['name'];
//$ext=substr(strrchr($_FILES['gambar']['name'],"."),1);
//$newnamepic=md5(rand()*time()).".$ext";
//$uploadPath="gambar/".$newnamepic;
//$isUploaded=move_uploaded_file($_FILES["gambar"]["tmp_name"],$uploadPath);

$idcalon = $_POST['idcalon'];
   
  if(strlen($idcalon)<5){
    echo"<script>alert('ID calon tidak cukup 5 aksara')</script>";
    exit();
  }
  else if(strlen($idcalon)>5){
    echo"<script>alert('idcalonn lebih daripada 5 aksara')</script>";
    exit();
  }

$nokp = $_POST['nokp'];
$namacalon = $_POST['namacalon'];
$idadmin= $_POST['idadmin'];
$jawatan = $_POST['jawatan'];

  //masukkan data dalam pangkalan data
  $sql="INSERT INTO calon
  VALUES ('$idcalon', '$nokp', '$namacalon','$idadmin','$filepath', '$jawatan')";

  $result = mysqli_query($con, $sql);
  
  
echo "STATUS TAMBAH CALON";
echo"<table width='30%' align='center'>
  <tr><td align='right'bgcolor='#F8C471'> ID Calon: </td><td align='center'bgcolor='#E6B0AA '>$idcalon</td></tr>
  <tr><td align='right'bgcolor='#F8C471'>nama calon: </td><td align='center'bgcolor='#E6B0AA '>$namacalon</td></tr>
  <tr><td align='right'bgcolor='#F8C471'>gambar: </td><td 

align='center'bgcolor='#E6B0AA '><img src=".$filepath." height=100 width=100></td></tr>

  <tr><td align='right'bgcolor='#F8C471'>id admin: </td><td align='center'bgcolor='#E6B0AA '>$idadmin</td></tr>
  <tr><td align='center'bgcolor='#F8C471'>Status: </td><td align='right'bgcolor='#F39C12'>CALON BERJAYA DI TAMBAH</td></tr>
   </table>";
}
else
{
 echo"<script>alert('Maaf,Rekod Anda Tidak Berjaya disimpan'); 
   </script>";
}
//}

mysqli_close($con);

?>