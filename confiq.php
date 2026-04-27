<?php
//sambungan mysqli dengan $con
$con=mysqli_connect("localhost","root","","dbundi");
if(mysqli_connect_errno()){
echo "gagal sambungan pangkalan data mysql:".mysqli_connect_error();
}
?>
