<?php
include("menuadmin.php");


?>

<!DOCTYPE html>
<html>
<head>
  <title>import </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <body style="background-color:lavender;"> 

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <center>
  <font color=green size=12pt>
IMPORT FAIL<br>
************************************<br>
</font>

<?PHP

//menyediakan form untuk upload
echo"
<form  name='form1' id='form1' method='POST' action='import.php' 
enctype='multipart/form-data'> <font color=maroon>
  <h2>Pilih Fail CSV untuk di import :</h2> <br> 
  <input type='file' name='file' required/>
  <button type='submit' name='btn-upload'style='background-color:black;color:white;width:80px;
height:20px;'>UPLOAD</button>
</form>";

 
//menyemak samada terdapat fail yang dihantar melalui post. ini bertujuan bagi mengelakkan
//ralat pada kali pertama fail import dibuka.
if (isset($_POST['btn-upload'])){
//membuat connection kepada pangkalan data kerana akan menggunakan statement SQL
//include('confiq.php');

//sambungan mysqli dengan $con
$con=mysqli_connect("localhost","root","","dbundi");
if(mysqli_connect_errno()){
  echo "gagal sambungan pangkalan data mysql:".mysqli_connect_error();
}
//lokasi sementara fail yang ingin diupload
$namafailsementara=$_FILES["file"]["tmp_name"];

//mengambil nama fail yang dihantar	
$namafail = $_FILES['file']['name'];
//mengambil format fail dari nama fail di atas
$jenisfail = pathinfo($namafail,PATHINFO_EXTENSION);

//menguji jika fail yang diupload tidak kosong dan berformat csv
if($_FILES["file"]["size"] > 0 AND $jenisfail=="csv")
     {
        //arahan untuk membaca fail yang diupload
        $failyangdataingindiupload = fopen($namafailsementara, "r");
        //membaca fail yang diupload cell demi cell.
        //setiap cell hanya dibenarkan 10000 aksara sahaja. jika lebih, ia akan
        //mengganggap itu cell yang berikutnya
        while (($getData = fgetcsv($failyangdataingindiupload, 10000, ",")) !== FALSE)
         {
            //memasukkan data ke dalam pangkalan data satu demi satu 
            $result = mysqli_query($con, "INSERT into calon
            (idcalon,namacalon, idadmin,gambar) 
            values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."')");
            //memaklumkan kepada pengguna yang data telah diupload 
            //dan kembali ke page import
           echo "<script>alert('Import fail data berjaya.');
                 window.location = 'paparcalon.php';</script>";
            } //tutup while
             
            fclose($failyangdataingindiupload);	
            
     }//tutup if fail tidak kosong dan berformat csv 

//jika fail bukan berformat csv, kembali ke fail import
else
echo"<script>alert('Hanya fail berformat CSV sahaja dibenarkan'); window.location.href='import.php'; </script>";
} // tutup if isset

?>
<br>

</center>
</body>
</html>

