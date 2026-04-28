<?php
//include auth.php file on all secure pages
//include("authadmin.php");

require('confiq.php');
$alert = "";
$namaCalon = "";
if (isset($_GET['nokp'])){
    $nokp = $_GET['nokp'];
    //echo $nokp;
    $sql = "SELECT * FROM pengundi WHERE nokp = '$nokp'";
    $result = mysqli_query($con, $sql);
    $rowCount = mysqli_num_rows($result);
    
    if ($rowCount != 0){
        while ($row = mysqli_fetch_array($result)){
            $namaCalon = $row['namapengundi'];
            //echo $namaCalon;
        }
    } else {
        $alert = "No KP belum ada didaftarkan.";
    }
}


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Undian</title>

	<div id="google_translate_element"></div>


<!-- letak kod ni sebelum tutup </body> -->
<!-- 
perhatikan bahagian pageLanguage: 'ms', 
kalau bahasa utama laman web ialah 
Bahasa Malaysia gunakan 'ms', 
kalau English gunakan 'en' 
-->


    <link rel="stylesheet" type="text/css" href="style.css">
	
    </head>
    <body>
        <?php
        include("header.php");
        ?>
        <?php
        //include("authadmin.php");
        ?>
        <table width='35%' align='center'>
            <tr>
                <td align='right' bgcolor='#85C1E9'>No. KP Calon: </td>
                <td>
                    <form action="" method="get">
                        <input type='text' name='nokp' placeholder='sila masukkan no. kp calon' required>
                        <button type="submit">Cari</button>
                        <?php echo $alert; ?>
                    </form>
                </td>
            </tr>
        </table>



<form action='simpancalon.php' method='POST' enctype='multipart/form-data'>
<table width='35%' align='center'>

<caption><h3>MASUKKAN CALON BARU<h3></caption>
    <tr>
        <td align='right' bgcolor='#85C1E9'>ID CALON </td>
        <td><input type='text' name='idcalon' placeholder='sila masukkan id calon' minlength="5" required></td></tr>
    <tr>
    <tr>
        <td align='right'bgcolor='#85C1E9'>No. KP Calon </td>
        <td><input type='text' name='nokp' placeholder='sila masukkan no. kp calon' required></td></tr>
    <tr>

<tr>
<td align='right'bgcolor='#85C1E9'>NAMA CALON </td>
<td><input type='text' name='namacalon' placeholder='nama calon' value='<?php echo $namaCalon; ?>' required></td></tr>

<tr>
    <td align='right'bgcolor='#85C1E9'>GAMBAR </td>
    <td><input type='file' name='gambar' placeholder='gambar' required></td>
</tr>

<tr>
    <td align='right'bgcolor='#85C1E9'>JAWATAN</td>
    <td>
        <select name="jawatan" id="" required>
            <option value="">PILIH JAWATAN</option>
            <option value="pengerusi">PENGERUSI</option>
            <option value="naib pengerusi 1">NAIB PENGERUSI 1</option>
            <option value="naib pengerusi 2">NAIB PENGERUSI 2</option>
            <option value="setiausaha">SETIAUSAHA</option>
        </select>
    </td>
</tr>

<tr>
<td align='right'bgcolor='#85C1E9'>idadmin </td>
<td>
    <select name='idadmin' required>
        <option disabled selected value>Pilih</option>";
            <?php
                        //statement SQL untuk memilih semua field yang terdapat didalam table bilik
                        $query="SELECT * FROM admin ";
                        $result=mysqli_query($con,$query);
                        WHILE($data=mysqli_fetch_array($result)){
                        //while($data=mysqli_fetch_array($sql)){
                            echo"<option value='".$data['idadmin']."'>".$data['idadmin']."</option>";

                        }
            ?>
    </select>

</tr>

<br><br>
<tr>
<td>
</td><td><input type='submit' value='Hantar' name='submit'> <input type='reset' value='Padam'> </td>

<br><br>
</td>

</tr>

</table>

</form>
<br><br>
</center>
</body></html>