<center>
<font color=red size=12pt>
<?php

//connection
require('confiq.php');

//sql buat query
$nokp=$_POST['nokp'];
$namapengundi=$_POST['namapengundi'];
$katalaluanpengundi=$_POST['katalaluanpengundi'];
$kelas = $_POST['kelas'];

if (strlen($katalaluanpengundi) < 8) {
    ?>
    <script>
        alert("Kata laluan mesti sekurang-kurangnya 8 karakter!");
        window.location.href='daftar.php';
    </script>
    <?php
    $alert =  "Password mesti sekurang-kurangnya 8 karakter!";
} else {
    $query="INSERT INTO pengundi(nokp,namapengundi,katalaluanpengundi, kelas) VALUES('$nokp','$namapengundi','$katalaluanpengundi', '$kelas');";
    //run query
    if(mysqli_query($con,$query)){
        echo"<script>alert('Pendaftaran Anda Berjaya'); window.location.href='logmasuk.php'; </script>";
    } else {
        echo"<script>alert('Nombor Kad Pengenalan telah wujud'); window.location.href='daftar.php'; </script>";
    }


    //tutup connection
    mysqli_close($con);
}




?>


 <br><br>

 <a href="login.php">Sila Login</a>
 </font>
 </center>
