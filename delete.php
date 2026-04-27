<center>
<font color='red'>
<?php
require('confiq.php');
//get the value from form paparaktiviti
 $idaktiviti = $_GET['idaktiviti'];
  //get the no which will deleted
 
//query for delete data in database
 $query = "DELETE from aktiviti WHERE idaktiviti = '$idaktiviti'" ;
 $rekod=mysqli_query($con,$query);


if ($rekod) {
	
    echo"<script>alert('padam data berjaya'); window.location.href='paparaktiviti.php'; </script>";
	
	
}

else{
    	echo"<script>alert('padam data tidak berjaya kerana data telah digunakan oleh peserta'); window.location.href='paparaktiviti.php'; </script>";
    }



 ?>
 <br><br>
 </font>
 </center>