<?php
//include auth.php file on all secure pages
if (isset($_SESSION['nokp'])){
    include("authahli.php");
    $idadmin = NULL;
}
if (isset($_SESSION['idadmin'])){
    include("authadmin.php");
    $idadmin = $_SESSION['idadmin'];
}

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
            $namapengundi = $row['namapengundi'];
            //echo $namaCalon;
        }
    } else {
        $alert = "No KP belum ada didaftarkan.";
    }
}

$sql = "SELECT idcalon FROM calon ORDER BY idcalon DESC LIMIT 1";
$result = mysqli_query($con, $sql);
$rowCount = mysqli_num_rows($result);

if ($rowCount == 0){
    $idcalon = "C001";
}
else {
    while ($row = mysqli_fetch_array($result)){
        $idcalon = $row['idcalon'];
        $idcalon = ++$idcalon;
    }
}
// while ($row = mysqli_fetch_array($result)){
//     $idcalon = $row['idcalon'];
//     $idcalon = ++$idcalon;
// }


?>

        <?php
        include("header.php");
        ?>
        <div class="">


        <h2>MAKLUMAT AHLI</h2>
        
        <form action='simpancalon.php' method='POST' enctype='multipart/form-data'>
            <input type="hidden" name="idcalon" value="<?php echo $idcalon; ?>">
            <input type="hidden" name="nokp" value="<?php echo $nokp; ?>">
            <input type="hidden" name="namapengundi" value="<?php echo $namapengundi; ?>">
            <input type="hidden" name="idadmin" value="<?php echo $idadmin; ?>">
            
        <table class="table6">
            <tr>
                <td>GAMBAR</td>
                <td>
                    <?php
                    $sql = "SELECT * FROM calon WHERE nokp = '$nokp'";
                    $result2 = mysqli_query($con, $sql);
                    $row2 = mysqli_fetch_array($result2);
                    if (isset($row2['gambar'])){
                        $gambar = $row2['gambar'];
                        ?>
                        <img src="<?php echo $gambar; ?>" alt="" width="100px">
                        <input type="hidden" name="gambar" value="<?php echo $gambar; ?>">
                        <?php
                    } 
                    else {
                        ?>
                        <input type='file' name='gambar' placeholder='gambar' required>
                        <?php
                    }
                    ?>
                    
                </td>
            </tr>
            <tr>
                <td>NO. KP AHLI </td>
                <td><?php echo $nokp; ?></td>
            </tr>

            <tr>
                <td>NAMA AHLI </td>
                <td><?php echo $namapengundi; ?></td>

            </tr>
            

            <tr>
                <td>JAWATAN</td>
                <td>
                    <select name="jawatan" id="" required>
                        <option value="">PILIH JAWATAN</option>
                        <option value="01Pengerusi">PENGERUSI</option>
                        <option value="02Naib Pengerusi 1">NAIB PENGERUSI 1</option>
                        <option value="03Naib Pengerusi 2">NAIB PENGERUSI 2</option>
                        <option value="04Setiausaha">SETIAUSAHA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type='submit' name='submit'>Daftar Sebagai Calon</button></td>
            </tr>
        </table>
        </form>
        </div>
<?php include("footer.php"); ?>