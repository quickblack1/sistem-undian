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
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("bg.jpeg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

.topnav {
  overflow: hidden;
  background-color: lightblue;
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
  background-color: red;
  color: black;
}

.topnav a.active {
  background-color: lavender;
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
  <a class="active" href="index.php">HOME</a>
  <a href="logmasuk.php">LOGIN PENGGUNA</a>
  <a href="logmasukadmin.php">LOGIN ADMIN</a>
  <a href="daftar.php">PENDAFTARAN PENGGUNA BARU</a>
  
 

	
	</center>