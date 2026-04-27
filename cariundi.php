<?php
//require('db.php');
include("menuadmin.php");

?>
<tr>
</tr>
<tr>
<center>
<?php 
require('confiq.php');

echo"

<form action='cariundi1.php' method='GET' enctype='multipart/form-data'>
<table width='35%' align='center'>
<tr>
<td align='right'bgcolor='' > Nama Calon </td>
<td>
    <select name='idcalon' required>
    <option disabled selected value>Pilih</option>";

                        //statement SQL untuk memilih semua field yang terdapat didalam table bilik
                        $query="SELECT * FROM calon ";
                        $result=mysqli_query($con,$query);
                        WHILE($data=mysqli_fetch_array($result)){
                        //while($data=mysqli_fetch_array($sql)){
                        echo"<option value='".$data['idcalon']."'>".$data['namacalon']."</option>";

                        }
                    echo"</select>";		
	?>	
    <input type="submit" Name="submit" Value="Cari"></p>
</tr>
</center>




