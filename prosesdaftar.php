<?php
//connection
require('confiq.php');

//sql buat query
$nokp=$_POST['nokp'];
$namapengundi=$_POST['namapengundi'];
$katalaluanpengundi=$_POST['katalaluanpengundi'];
$kelas = $_POST['kelas'];

// semak kalau nokp telah didaftarkan atau belum
$query2 = "SELECT * FROM pengundi
            WHERE nokp = '$nokp'";
$result2 = mysqli_query($con, $query2);
$numRow = mysqli_num_rows($result2);
if ($numRow > 0){
    ?>
    <script>
        alert("Ralat, No Kad Pengenalan telah didaftarkan.");
        window.location.href='daftar.php';
    </script>
    <?php
}
// semak bilangan aksara kata laluan
elseif (strlen($katalaluanpengundi) < 8) {
    ?>
    <!-- paparkan popup jika kata lalaun kurang 8 -->
    <script>
        alert("Kata laluan mesti sekurang-kurangnya 8 karakter!");
        window.location.href='daftar.php';
    </script>
    <?php
    $alert =  "Password mesti sekurang-kurangnya 8 karakter!";
} else {
    $query="INSERT INTO pengundi (nokp, namapengundi, katalaluanpengundi, kelas) VALUES ('$nokp', '$namapengundi', '$katalaluanpengundi', '$kelas');";
    //run query
    if(mysqli_query($con,$query)){
        echo"<script>alert('Pendaftaran Anda Berjaya'); window.location.href='logmasuk.php'; </script>";
    } else {
        //echo"<script>alert('Nombor Kad Pengenalan telah wujud'); window.location.href='daftar.php'; </script>";
    }

    //tutup connection
    mysqli_close($con);
}




?>


 <br><br>

 <a href="login.php">Sila Login</a>
 </font>
 </center>
