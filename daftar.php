<html>
 <head>
</head>
 <body>
  <?php
      include("header.php");
  ?>
  <body style="background-color:lightblue;"> 
  <br>
  <br> 
  <form action ="prosesdaftar.php" method="POST">
    <center>
  <table border ="0">
  <tr>
  <td style="background-color: pink;"align="center"> Welcome</td>
  <td style="background-color: red;"align="center"> Pendaftaran Pengundi Baru</td>
  </tr>
  <tr><td><center>
  <img src="imej/logo.png" width="300" height="125" title="logo" alt="logo" /></td>
  <td width="60%">
  <table>
  </tr>
  <tr>
  <td style="background-color: orange;"align="center"> No kad pengenalan </td>
  <td><input name="nokp" size="15" type="text" placeholder='nokp tanpa -' required></td>
  </tr>
  <tr>
    <td style="background-color: orange;"align="center"> Nama pengundi </td>
    <td><input name="namapengundi" size="15" type="text" placeholder='nama penuh' required></td>
  </tr>

            
    </select> 
</td></tr>

  
 
  <tr>
    <td style="background-color: orange;"align="center">Katalaluan</td>
    <td> <input name= "katalaluanpengundi" size="15" type="password" placeholder='katalaluan' required></td>
  </tr>
  <tr>
    <td style="background-color: orange;"align="center">Kelas</td>
    <td>
      <select name="kelas" id="kelas" required>
        <option value="">PILIH KELAS</option>
        <option value="5A">5 ALPHA</option>
        <option value="5B">5 BINARY</option>
        <option value="5C">5 CYBER</option>
        <option value="5D">5 DIGITAL</option>
        <option value="5E">5 EVOLUTION</option>
        <option value="5F">5 FUTURISTIC</option>
        <option value="5G">5 GIGABYTE</option>
        <option value="5H">5 HOLOGRAM</option>
      </select>
    </td>
  </tr>
  <tr>
 



 
  <td><input name="submit" value="daftar" type="submit" style="background-color:black;color:white;width:150px;
height:40px;">

</td>
<td> <input type='reset' value='Padam' style="background-color:black;color:white;width:150px;height:40px;"></td>


  </tr>
  </table>
  </td>
  </tr><tr>
  <td><button onclick="window.location.href='index.php'" style="background-color:black;color:white;width:150px;
height:40px;">Kembali</button></td>
 </table>
 <center>
 
 
</form>
</body>
</html>