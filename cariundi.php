<?php
require('confiq.php');
include("header.php");
//require('db.php');
//include("menuadmin.php");

$sql = "SELECT * FROM undian";
$result = mysqli_query($con, $sql);

if (isset($_POST['submit'])){
    $idundian = $_POST['idundian'];
    echo $idundian;
    //exit();
    $sql2 = "DELETE FROM undian WHERE $idundian = $idundian";
    $result2 = mysqli_query($con, $sql2);
    if ($result2 == 1) {
	    echo "<script>alert('Undian telah berjaya dipadam.'); window.location='cariundi.php';</script>";
        exit();
    }
}


?>
<tr>
</tr>
<tr>
<center>
    <h2>Undian</h2>

    <table class="table5">
        <tr>
            <th>ID Undian</th>
            <th>No KP Pengundi</th>
            <th>ID calon</th>
            <th>Tarikh</th>
            <th>Masa</th>
            <th>Jawatan</th>
            
        </tr>
        
            <?php
            while ($row = mysqli_fetch_array($result)){
                $idundian = $row['idundian'];
                $nokppengundi = $row['nokpPengundi'];
                $idcalon = $row['idcalon'];
                $tarikh = $row['tarikh'];
                $masa = $row['masa'];
                $jawatan = $row['jawatan'];
                ?>
            <tr>
                <td><?php echo $idundian; ?></td>
                <td><?php echo $nokppengundi; ?></td>
                <td><?php echo $idcalon; ?></td>
                <td><?php echo $tarikh; ?></td>
                <td><?php echo $masa; ?></td>
                <td><?php echo substr($jawatan, 2); ?></td>
                <td>
                    <a href="padamundi.php?idundian=<?php echo $idundian; ?>"><button>Padam </button></a>
                    
                </td>
            </tr>
                <?php
            }
            ?>
        
    </table>

</center>
<?php include("footer.php"); ?>



