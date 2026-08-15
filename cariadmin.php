<?php
require('confiq.php');
include("header.php");
?>
<center>

<form action='cariadmin1.php' method='GET' enctype='multipart/form-data'>
<table width='' align='center'>
<tr>
<td align='right'bgcolor='' > Nama Calon </td>
<td>
    <select name='idcalon' required>
        <option disabled selected value>Sila Pilih nama calon</option>";
            <?php
            //statement SQL untuk memilih semua field yang terdapat didalam table bilik
            $query="SELECT calon.*, pengundi.namapengundi
                    FROM calon 
                    INNER JOIN pengundi ON calon.nokp = pengundi.nokp
                    ORDER BY calon.jawatan";
            $result=mysqli_query($con,$query);
            while($data=mysqli_fetch_array($result)){
                $idcalon = $data['idcalon'];
                $nokp = $data['nokp'];
                $namapengundi = $data['namapengundi'];
                $jawatan = $data['jawatan'];
                ?>
                <option value="<?php echo $idcalon; ?>">Calon <?php echo substr($jawatan, 2)." - ".$namapengundi; ?></option>
                <?php
            }
            ?>	
    </select>
    <input type="submit" Name="submit" Value="Cari"></p>
</tr>
</center>