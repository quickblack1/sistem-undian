<?php
    include("header.php");
?>
<tr>
</tr>
<tr>
<center>
<?php 
require('confiq.php');

?>

<form action='cariadmin1.php' method='GET' enctype='multipart/form-data'>
<table width='35%' align='center'>
<tr>
<td align='right'bgcolor='' > Nama Calon </td>
<td>
    <select name='idcalon' required>
        <option disabled selected value>Sila Pilih nama calon</option>";
            <?php
            //statement SQL untuk memilih semua field yang terdapat didalam table bilik
            $query="SELECT calon.*, pengundi.namapengundi
                    FROM calon 
                    LEFT JOIN pengundi
                    ON calon.nokp = pengundi.nokp";
            $result=mysqli_query($con,$query);
            while($data=mysqli_fetch_array($result)){
                $idcalon = $data['idcalon'];
                $nokp = $data['nokp'];
                $namapengundi = $data['namapengundi'];
                ?>
                <option value="<?php echo $idcalon; ?>"><?php echo $namapengundi; ?></option>
                <?php
            }
            ?>	
    </select>
    <input type="submit" Name="submit" Value="Cari"></p>
</tr>
</center>