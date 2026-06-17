<!DOCTYPE html>
<html>
<?php
//include auth.php file on all secure pages
include("auth.php");

?>
<head>

<center>
	<title>Laman Utama</title>
	<img src="banner.png" style="width:100%; height:200px;">
	<div id="google_translate_element"></div>


<!-- letak kod ni sebelum tutup </body> -->
<!-- 
perhatikan bahagian pageLanguage: 'ms', 
kalau bahasa utama laman web ialah 
Bahasa Malaysia gunakan 'ms', 
kalau English gunakan 'en' 
-->

<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'ms'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("Blue flower.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

.topnav {
  overflow: hidden;
  background-color: pink;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: blue;
  color: black;
}

.topnav a.active {
  background-color: yellow;
  color: black;
}

.welcome {

  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 100px;
  margin-top: 20px;
}
</style>
</head>


<div class="topnav">
  <a class="active" href="">LAMAN UTAMA</a>
  
    <a href="paparsemuacalon.php">PAPAR SEMUA CALON</a>
  <a href="pilihundi.php">UNDIAN</a>
  <a href="result.php">KEPUTUSAN UNDIAN</a>
  <a href="logout.php">LOGOUT</a>
 <br>
  <div align="center">    
<div class="row" style="color: black"><b><i>WELCOME <?php echo $_SESSION['namapengundi']; ?>!<br></i></b></div>
  <div id="display-date">
        <script language="javascript"> 
        today = new Date();
        var month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var day = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        var yr = today.getYear();


        if(yr < 1900) yr += 1900;
        document.write(today.getDate() + " " + month[today.getMonth()] + " " + yr);
        </script>
</div>
    
            </div>
      
	</center>
	</head>
	<link rel="stylesheet" type="text/css" href="style.css">


    <center>