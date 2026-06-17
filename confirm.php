<?php
include("menuadmin.php");
require('confiq.php');
$idcalon = $_GET['idcalon'];
?>

<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>edit gambar</title>
    <center>
<form action="confirmedit.php" enctype="multipart/form-data" method="post">
   <br><br>
    <input type="text" name="idcalon" value= '<?php echo $idcalon; ?>'>

<h3> Please upload your picture:</h3>

<input type="file" name="file">
<input type="submit" value="Upload" name="Submit"><br>
</center>



<br><br>
<center>   

</center>
</body>
</html>