<!DOCTYPE html>
<html>
  <?php
    //include auth.php file on all secure pages
    include("authadmin.php");
  ?>
  <head>
    <center>
    <title>Laman Utama</title>
    <img src="imej/banner.png" style="width:100%; height:200px;">
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
      padding: 10px 12px;
      text-decoration: none;
      font-size: 15px;
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
  <a class="active" href="index.php">LAMAN UTAMA</a>
  <a href="borangcalon.php">TAMBAH CALON</a>
  <a href="paparcalon.php">PAPAR CALON</a>
  <a href="cariadmin.php">CARIAN/KEMASKINI CALON</a>
  <a href="cariundi.php">CARIAN/PADAM UNDIAN</a>
  <a href="laporan.php">LAPORAN</a>
  <a href="import.php">IMPORT CALON</a>
  <a href="logoutadmin.php">LOGOUT</a>
 <br>
  <div align="center">    
<div class="row" style="color: black"><b><i>WELCOME ADMIN:  <?php echo $_SESSION['namaadmin']; ?><br></i></b>
</div>    
            </div>
        

	
	</center>
	</head>
	<link rel="stylesheet" type="text/css" href="style.css">


    <center>