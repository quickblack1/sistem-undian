
<?php

session_start();
if(!isset($_SESSION["nokp"]))
{
 header("Location: logmasuk.php");
 exit(); 
}
?>
