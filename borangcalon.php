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

        <?php
        include("header.php");
        ?>
        <?php
        //include("authadmin.php");
        ?>
        <div class="div0">
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


        <h2>MASUKKAN CALON BARU</h2>
        sdsd
        <form action='simpancalon.php' method='POST' enctype='multipart/form-data'>
        <table class="table0">
            <tr>
                <td>ID CALON </td>
                <td><input type='text' name='idcalon' placeholder='sila masukkan id calon' minlength="5" required></td>
            </tr>
            <tr>
                <td>No. KP Calon </td>
                <td><input type='text' name='nokp' placeholder='sila masukkan no. kp calon' required></td>
            </tr>

            <tr>
                <td>NAMA CALON </td>
                <td><input type='text' name='namacalon' placeholder='nama calon' value='<?php echo $namaCalon; ?>' required></td>

            </tr>
            <tr>
                <td>GAMBAR </td>
                <td><input type='file' name='gambar' placeholder='gambar' required></td>
            </tr>

            <tr>
                <td>JAWATAN</td>
                <td>
                    <select name="jawatan" id="" required>
                        <option value="">PILIH JAWATAN</option>
                        <option value="Pengerusi">PENGERUSI</option>
                        <option value="Naib Pengerusi 1">NAIB PENGERUSI 1</option>
                        <option value="Naib Pengerusi 2">NAIB PENGERUSI 2</option>
                        <option value="Setiausaha">SETIAUSAHA</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>idadmin </td>
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
                </td>

            </tr>
            <tr>
                <td></td>
                <td><input type='submit' value='Hantar' name='submit'> <input type='reset' value='Padam'></td>
            </tr>
        </table>
        </form>
        </div>
    </body>
</html>