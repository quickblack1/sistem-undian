<?php
require('confiq.php');
include("header.php");

if(isset($_POST['Submit']))
{ 
    $filepath = "gambarcalon/" . $_FILES["file"]["name"];

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
    {
        echo "<center><img src=".$filepath." height=200 width=200></center>";
    } 
    else 
    {
        echo "<center>Error !!</center>";
    }
    
    $idcalon = $_POST['idcalon'];

    $query = "UPDATE calon SET gambar='$filepath' WHERE idcalon = '$idcalon'";
    $rekod=mysqli_query($con,$query);
    if ($rekod) {
        ?>
        <script>
            alert('Kemaskini berjaya'); 
            window.location.href='cariadmin1.php?idcalon=<?php echo $idcalon; ?>';
        </script>
        <?php
    }
}

?>