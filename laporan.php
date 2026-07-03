<?php
include('confiq.php');
session_start();
if (isset($_SESSION['nokp'])){
    include('authahli.php');
} else {
    include('authadmin.php');
}

include("header.php");
?>
<h2>Keputusan Undian Terkini</h2>
<?php
$sql1 = "SELECT jawatan FROM calon GROUP BY jawatan ORDER BY jawatan";
$result1 = mysqli_query($con, $sql1);
while($row1 = mysqli_fetch_array($result1)){
    $jawatan = $row1['jawatan'];
    ?>
    <div class="div7">
        <h3><?php echo substr($jawatan, 2); ?></h3>
        <table class='table5'>
            <tr>
                <th>ID Calon</th>
                <th>Nama Calon</th>
                <th>Kelas</th>
                <th>Jumlah Undi</th>
            </tr>
            <?php
            $sql2 = "SELECT calon.idcalon, pengundi.namapengundi, pengundi.kelas, COUNT(undian.idcalon) AS jumlah_undi
                    FROM calon
                    INNER JOIN pengundi
                        ON calon.nokp = pengundi.nokp
                    LEFT JOIN undian
                        ON calon.idcalon = undian.idcalon
                        AND undian.jawatan = calon.jawatan
                    WHERE calon.jawatan = '$jawatan'
                    GROUP BY calon.idcalon, pengundi.namapengundi
                    ORDER BY jumlah_undi DESC";

            $result2 = mysqli_query($con, $sql2);
            while($row2 = mysqli_fetch_array($result2)){
                $idcalon = $row2['idcalon'];
                $kelas = $row2['kelas'];
                $namaCalon = $row2['namapengundi'];
                $jumlahUndi = $row2['jumlah_undi'];
                ?>
                <tr>
                    <td><?php echo $idcalon; ?></td>
                    <td class="td1"><?php echo $namaCalon; ?></td>
                    <td><?php echo $kelas; ?></td>
                    <td><?php echo $jumlahUndi; ?></td>
                </tr>
                <?php
            }
            ?>
            
        </table>
    </div>
    <?php
}
?>
<div style="text-align: center;">
    <a href="laporan.php"><button onClick="window.print();">Cetak</button></a>
</div>

<?php include("footer.php"); ?>