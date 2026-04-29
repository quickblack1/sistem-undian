<!DOCTYPE html>
<html>
  <head>
    <title>Sistem Undian</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  
  <body>
	  <img src="imej/banner.png" style="width:100%;">
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

    <div class="topnav">
      <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
      <a class="<?= ($current_page == 'index.php') ? 'active' : '' ?>" href="index.php">HOME</a>
      
      <?php
        session_start();
        if (isset($_SESSION["nokp"])){
        ?>
          <a href="paparsemuacalon.php" class="<?= ($current_page == 'paparsemuacalon.php') ? 'active' : '' ?>">PAPAR SEMUA CALON</a>
          <a href="pilihundi.php" class="<?= ($current_page == 'pilihundi.php') ? 'active' : '' ?>">UNDIAN</a>
          <a href="result.php" class="<?= ($current_page == 'result.php') ? 'active' : '' ?>">KEPUTUSAN UNDIAN</a>
          <a href="logout.php">LOGOUT</a>
          
          <div align="center">
            <div class="row" style="color: black"><b><i>SELAMAT DATANG<br> <?php echo $_SESSION['namapengundi']; ?></i></b></div>
          </div>
        <?php
        } elseif (isset($_SESSION["idadmin"])){
          ?>
            <a href="borangcalon.php" class="<?= ($current_page == 'borangcalon.php') ? 'active' : '' ?>">TAMBAH CALON</a>
            <a href="paparcalon.php" class="<?= ($current_page == 'paparcalon.php') ? 'active' : '' ?>">PAPAR CALON</a>
            <a href="cariadmin.php" class="<?= ($current_page == 'cariadmin.php') ? 'active' : '' ?>">CARIAN/KEMASKINI CALON</a>
            <a href="cariundi.php" class="<?= ($current_page == 'cariundi.php') ? 'active' : '' ?>">CARIAN/PADAM UNDIAN</a>
            <a href="laporan.php" class="<?= ($current_page == 'laporan.php') ? 'active' : '' ?>">LAPORAN</a>
            <a href="import.php" class="<?= ($current_page == 'import.php') ? 'active' : '' ?>">IMPORT CALON</a>
            <a href="logoutadmin.php">LOGOUT</a>
 
            <div align="center">    
              <div><b><i>SELAMAT DATANG<br>ADMIN:  <?php echo $_SESSION['namaadmin']; ?></i></b></div>
            </div>    
        <?php
      } else {
        ?>
        <a href="logmasuk.php" class="<?= ($current_page == 'logmasuk.php') ? 'active' : '' ?>">LOGIN PENGGUNA</a>
        <a href="logmasukadmin.php" class="<?= ($current_page == 'logmasukadmin.php') ? 'active' : '' ?>">LOGIN ADMIN</a>
        <a href="daftar.php" class="<?= ($current_page == 'daftar.php') ? 'active' : '' ?>">PENDAFTARAN PENGGUNA BARU</a>
      <?php  
      } 
      ?>
    
    
    </div>
