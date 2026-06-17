<center>
<font color='red'>
<?php
require('confiq.php');
//get the value from form delete
 $idundian = $_GET['idundian'];
  //get the no which will deleted
 
//query for delete
 $query = "DELETE from undian WHERE idundian = '$idundian'" ;
 $rekod=mysqli_query($con,$query);


if ($rekod) {
	$message = "Data telah dipadam";
echo "<script type='text/javascript'>alert('$message');</script>";
	
	
	header('refresh:1;URL=./cariundi.php');
    //include "delete.php";
	
}

 ?>
 <br><br>
 </font>
 </center>